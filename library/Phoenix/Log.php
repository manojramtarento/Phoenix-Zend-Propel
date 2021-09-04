<?php

class Phoenix_Log
{
    const OUTPUT_NULL = 0;
    const OUTPUT_FILE = 1;
    const OUTPUT_SCREEN = 2;
    const OUTPUT_FIREBUG = 4;

    /**
     * Logs
     * @var array
     */
    protected $traces = array();

    /**
     * @var Zend_Log
     */
    protected $zendLog = null;
    protected $name = null;
    protected $actionName;
    
    /**
     * Create a Log instance
     * @param string $sName pour l'écriture dans un fichier suit l'arborescence définie ex: cron/facturation
     * @param int $iOutput masque binaire pour sélectionner les rédacteurs à ajouter
     */
    public function __construct($sName, $iOutput = self::OUTPUT_NULL)
    {
        $this->name = $sName;
        $this->zendLog = new Zend_Log();
        $this->zendLog->setTimestampFormat('Y-m-d H:i:s');
        $this->addWritters($iOutput);
    }
    
    /**
     * Write format message
     * @return string
     */
    protected function getWritterFormat()
    {
        return '%timestamp%: %message%' . PHP_EOL;
    }

    /**
     * Log a message at a priority
     *
     * @param  string   $sMessage   Message to log
     * @param  integer  $iPriority  Priority of message
     * @return Phoenix_Log
     * @throws Zend_Log_Exception
     */
    public function log($sMessage, $iPriority = Zend_Log::INFO)
    {
        $this->zendLog->setEventItem('actionName', $this->getActionName());
        $this->zendLog->setEventItem('processStatus', '');
        $this->zendLog->log($sMessage, $iPriority);

        $this->traces[] = $sMessage;

        return $this;
    }

    /**
     * Return all logs
     * @return array
     */
    public function getTrace()
    {
        return $this->traces;
    }

    /**
     * Add log writers
     * @param int $iOutput : masque binaire pour sélectionner les rédacteurs à ajouter
     * @return Phoenix_Log Description
     */
    public function addWritters($iOutput = self::OUTPUT_FILE)
    {
        if ($iOutput == 0) {
            $this->addWritterNull();
        }
        if ($iOutput & self::OUTPUT_FILE) {
            $this->addWritterFile();
        }
        if ($iOutput & self::OUTPUT_SCREEN) {
            $this->addWritterScreen();
        }
        if ($iOutput & self::OUTPUT_FIREBUG) {
            $this->addWritterFirebug();
        }
        return $this;
    }

    /**
     * @return \Phoenix_Log
     */
    public function addWritterNull()
    {
        $oWritter = new Zend_Log_Writer_Null();
        $this->zendLog->addWriter($oWritter);
        return $this;
    }

    /**
     * @param string $sActionName
     * @return Phoenix_Log
     * @throws \InvalidArgumentException
     */
    public function setActionName($sActionName)
    {
        if (is_string($sActionName)) {
            $this->actionName = $sActionName;
            return $this;
        }
        throw new \InvalidArgumentException('ActionName doit être un string "' . gettype($sActionName) . '" given');
    }

    /**
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * Cette fonction permet de logger le debut d'un processus
     * @param string $sMessage
     * @return \Phoenix_Log
     * @throws \InvalidArgumentException
     */
    public function logStartCron($sMessage = '')
    {
        if (is_string($sMessage)) {
            $this->zendLog->setEventItem('actionName', $this->getActionName());
            $this->zendLog->setEventItem('processStatus', '[START]');
            $this->zendLog->log($sMessage, Zend_Log::INFO);
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sMessage" expects a string, "' . gettype($sMessage) . '" given');
    }

    /**
     * Cette fonction permet de logger la fin d'un processus
     * @param string $sMessage
     * @return \Phoenix_Log
     * @throws \InvalidArgumentException
     */
    public function logEndCron($sMessage = '')
    {
        if (is_string($sMessage)) {
            $this->zendLog->setEventItem('actionName', $this->getActionName());
            $this->zendLog->setEventItem('processStatus', '[END]');
            $this->zendLog->log($sMessage, Zend_Log::INFO);
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sMessage" expects a string, "' . gettype($sMessage) . '" given');
    }

    /**
     * @return \Phoenix_Log
     */
    public function addWritterFile()
    {
        $sLogDir = Zend_Registry::get('config')->path->log;

        if (! is_dir($sLogDir)) {
            throw new \LogicException('Log directory "'. $sLogDir.'" does not exist');
        }

        $oWritter = new Zend_Log_Writer_Stream(array('stream' => Zend_Registry::get('config')->path->log . '/' . $this->name . '.log',));
        $oWritter->setFormatter(new Zend_Log_Formatter_Simple('%timestamp% [Phoenix][' . getenv('APPLICATION_ENV') . '][%actionName%]%processStatus% %message%' . PHP_EOL));
        $this->zendLog->addWriter($oWritter);
        return $this;
    }

    /**
     * @return \Phoenix_Log
     */
    public function addWritterScreen()
    {
        $oWritter = new Zend_Log_Writer_Stream(array(
            'format' => '%timestamp%: %message% <br />',
            'stream' => 'php://output',
        ));
        $this->zendLog->addWriter($oWritter);
        return $this;
    }

    /**
     *
     * @return \Phoenix_Log
     */
    public function addWritterFirebug()
    {
        $oWritter = new Zend_Log_Writer_Firebug();
        $oWritter->setFormatter(Zend_Log_Formatter_Simple::factory(array('format' => $this->getWritterFormat())));

        $this->zendLog->addWriter($oWritter);

        return $this;
    }
}
