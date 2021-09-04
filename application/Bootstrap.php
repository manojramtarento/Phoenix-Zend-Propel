<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * @var boolean
     */
    protected $cliEnabled = true;

    /**
     * Autoload classes in library
     */
    protected function _initAutoload()
    {
        $oAutoloader = Zend_Loader_Autoloader::getInstance();
        $oAutoloader->registerNamespace('My_');
        $oAutoloader->registerNamespace('Phoenix_');

        $oResourceLoader = new Zend_Loader_Autoloader_Resource(array(
            'basePath' => APPLICATION_PATH . '/class',
            'namespace' => '',
        ));
        $oResourceLoader->addResourceType('data', 'Data', 'Data');
    }

    /**
     * Initialize sessions
     */
    protected function _initSession()
    {
        $oConfig = new Zend_Config_Ini(APPLICATION_PATH . '/configs/session.ini', APPLICATION_ENV);

        Zend_Session::setOptions($oConfig->toArray());

        $oSession = new Zend_Session_Namespace('Zend_Auth');
        $oSession->setExpirationSeconds(7200);
    }

    protected function _initAuth()
    {
        Zend_Auth::getInstance();
    }

    /**
     * Store configuration
     */
    protected function _initConfig()
    {
        setlocale(LC_MONETARY, 'fr_FR');

        $oApplicationConfig = new \Zend_Config($this->getOptions(), true);

        // Load instance dedicated config
        if (empty($oApplicationConfig->path->instance_dedicated_config)) {
            throw new \LogicException('Configuration ["path"]["instance_dedicated_config"] is undefined');
        }
        $sInstanceDedicatedConfigPath = $oApplicationConfig->path->instance_dedicated_config;

        if (! file_exists($sInstanceDedicatedConfigPath)) {
            throw new \LogicException('Instance dedicated config file "'.$sInstanceDedicatedConfigPath.'" does not exist');
        }
        $oApplicationConfig->merge(new Zend_Config_Ini($sInstanceDedicatedConfigPath, APPLICATION_ENV));
        Zend_Registry::set('config', $oApplicationConfig);
        Zend_Controller_Front::getInstance()->setDefaultControllerName('accueil');
        Zend_Db_Table::setDefaultAdapter(Zend_db::factory($oApplicationConfig->resources->db));
    }

    /**
     * Manage errors
     */
    protected function _initErrorHandling()
    {
        if (PHP_SAPI !== 'cli') {
            $oCallback = function ($iErrno, $sErrstr, $sErrfile, $iErrline) {
                if (error_reporting()) {
                    throw new ErrorException($sErrstr, 0, $iErrno, $sErrfile, $iErrline);
                }
            };
            if (My_Env::getInstance()->getName() !== 'dev') {
                set_error_handler($oCallback, E_ERROR | E_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING);
            } else {
                set_error_handler($oCallback);
            }
        }
    }

    protected function _initLogger()
    {
        Zend_Registry::set('logger', new Zend_Log(new Zend_Log_Writer_Firebug()));
    }

    /**
     * Initialize propel
     */
    protected function _initPropel()
    {
        Propel::init(APPLICATION_PATH . '/configs/propel-bdd-conf.php');
        // Mandatory log for debug bar
        My_Propel_Logger::enable(Phoenix_Log::OUTPUT_NULL);
    }

    /**
     * Initialize php CLI environement
     */
    protected function _initRouter()
    {
        if (PHP_SAPI == 'cli' && $this->getCliEnabled()) {
            $oControllerFront = Zend_Controller_Front::getInstance();
            $oControllerFront->setParam('disableOutputBuffering', true);
            $oControllerFront->setParam('noViewRenderer', true);
            $oControllerFront->setRouter(new Phoenix_Router_Cli());
            $oControllerFront->setRequest(new Zend_Controller_Request_Simple());

            Phoenix_Auth_User::loadUserCli();
        }
    }

    protected function _initViewPartials()
    {
        $this->bootstrap('view');
        $oView = $this->getResource('view');
        $oView->addScriptPath(APPLICATION_PATH . '/views/scripts/');
        $oView->addScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
    }

    protected function _initPaginationDefault()
    {
        Zend_Paginator::setDefaultScrollingStyle('Sliding');
        Zend_View_Helper_PaginationControl::setDefaultViewPartial("/partials/pagination.phtml");
    }

    protected function _initI18n()
    {
        Phoenix_Translate::initTranslate();

        // Set default locale data cache
        Zend_Locale_Data::setCache(Zend_Cache::factory(
            'Core',
            'File',
            array('automatic_serialization' => true),
            array('cache_file_perm' => 0774)
        ));
    }


    /**
     * Initialize debug bar
     */
    protected function _initZfDebug()
    {
        if (My_Env::getInstance()->getConfig()->zfdebug->enable && PHP_SAPI != 'cli') {
            Zend_Loader_Autoloader::getInstance()->registerNamespace('ZFDebug');
            $aOptions = array(
                'jquery_path' => '',
                'plugins' => array('Variables',
                    'File' => array('base_path' => '/path/to/project'),
                    'Memory',
                    'Time',
                    'Registry',
                    'Propel'
                )
            );

            // Instantiate the database adapter and setup the plugin., Alternatively just add the plugin like above and rely on the autodiscovery feature.
            if ($this->hasPluginResource('db')) {
                $aOptions['plugins']['Database']['adapter'][] = $this->bootstrap('db');
            }

            $aOptions['plugins']['Database']['adapter'][] = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter();

            // Setup the cache plugin
            if ($this->hasPluginResource('cache')) {
                $this->bootstrap('cache');
                $aOptions['plugins']['Cache']['backend'] = $this->getPluginResource('cache')->getDbAdapter()->getBackend();
            }
            $this->bootstrap('frontController');
            $this->getResource('frontController')->registerPlugin(new ZFDebug_Controller_Plugin_Debug($aOptions));
        }
    }

    /**
     * Compile files less in files css
     *
     * @throws \RuntimeException
     */
    protected function _initCss()
    {
        // Do not compile css if configuration is disabled
        if (! Zend_Registry::get('config')->less->compile) {
            return $this;
        }

        // Compile css styles LESS and save the output CSS into style.css
        $oLessParser = new Less_Parser();
        $oLessParser->parseFile(APPLICATION_PATH . '/../public/css/base.less');
        if (file_put_contents(APPLICATION_PATH . '/../public/css/styles.css', $oLessParser->getCss()) === false) {
            throw new \RuntimeException('An error occurred while creation of file style.css');
        }

        // Compile the statistics LESS and save the output CSS into statistics.css
        $oLessParser->reset();
        $oLessParser->parseFile(APPLICATION_PATH . '/../public/css/statistics/statistics.less');
        if (file_put_contents(APPLICATION_PATH . '/../public/css/statistics.css', $oLessParser->getCss()) === false) {
            throw new \RuntimeException('An error occurred while creation of file statistics.css');
        }
    }

    /**
     * Initialize mail sender
     */
    protected function _initMailSender()
    {
        if (! ($sMailTransportName = Zend_Registry::get('config')->email->transport->name)) {
            throw new \LogicException('Configuration [email][transport] is undefined');
        }
        $aMailTransportOptions = Zend_Registry::get('config')->email->transport->options ?? array();
        Phoenix_Mail::setDefaultTransport(new $sMailTransportName($aMailTransportOptions));
    }

    /**
     * @param boolean $bCliEnabled
     * @return \Bootstrap
     * @throws \InvalidArgumentException
     */
    public function setCliEnabled($bCliEnabled)
    {
        if (is_bool($bCliEnabled)) {
            $this->cliEnabled = $bCliEnabled;
            return $this;
        }
        throw new \InvalidArgumentException('Cli enabled expects a boolean, "' . gettype($bCliEnabled) . '" given');
    }

    /**
     * @return boolean
     * @throws \LogicException
     */
    public function getCliEnabled()
    {
        if (is_bool($this->cliEnabled)) {
            return $this->cliEnabled;
        }
        throw new \LogicException('Cli enabled expects a boolean, "' . gettype($this->cliEnabled) . '" defined');
    }
}
