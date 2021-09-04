<?php

class Phoenix_Form_ConfigurableFormFactory
{

    /**
     * @var Phoenix_Form_ConfigurableFormFactory
     */
    protected static $instance;

    /**
     * @var Zend_Translate
     */
    protected $translate;

    final private function __construct()
    {
    }
    final private function __clone()
    {
    }
    final private function __wakeup()
    {
    }

    /**
     * @return Phoenix_Form_ConfigurableFormFactory
     */
    final public static function getInstance() : Phoenix_Form_ConfigurableFormFactory
    {
        return self::$instance = self::$instance ?? new self();
    }

    /**
     * Initialize a Form with a configuration loaded from the given configuration name
     * @param string $sConfigurationName
     * @return Zend_Form
     */
    public function getConfigurableForm(string $sConfigurationName) : Zend_Form
    {
        $aConfiguration = $this->getFormConfiguration($sConfigurationName);
        $oForm = new Zend_Form($aConfiguration);
        return $oForm;
    }

    /**
     * Load a configuration from the given configuration name
     * @param string $sConfigurationName
     */
    public function hasConfigurableForm($sConfigurationName)
    {
        try {
            $this->getFormConfigurationFilePath($sConfigurationName);
            return true;
        } catch (\InvalidArgumentException $oException) {
            return false;
        }
    }

    /**
     * Build the configuration file path from the given configuration name
     * @param string $sConfigurationName
     * @return string
     * @throws \InvalidArgumentException
     */
    protected function getFormConfigurationFilePath(string $sConfigurationName) : string
    {
        if (! preg_match('/$(?<module>[a-z]+)\/(?<form>[a-z]+)^/', $sConfigurationName, $aMatches)) {
            throw new \InvalidArgumentException('Argument "$sConfigurationName" : "'.$sConfigurationName.'" does not respect "module/" format');
        }
        $sConfigurationPath = APPLICATION_PATH .DIRECTORY_SEPARTOR.$aMatches['module'];
        if (! is_dir($sConfigurationPath)) {
            throw new \InvalidArgumentException('Argument "$sConfigurationName" : "'.$sConfigurationName.'" refers to an unexisting module "'.$sConfigurationPath.'"');
        }
        $sConfigurationPath .= 'forms'.DIRECTORY_SEPARTOR.$aMatches['form'];
        if (! is_file($sConfigurationPath)) {
            throw new \InvalidArgumentException('Argument "$sConfigurationName" : "'.$sConfigurationName.'" refers to an unexisting form configuration file "'.$sConfigurationPath.'"');
        }
        return $sConfigurationPath;
    }

    /**
     * Load a configuration from the given configuration name
     * @param string $sConfigurationName
     * @return array
     * @throws \LogicException
     */
    public function getFormConfiguration(string $sConfigurationName) : array
    {
        $sConfigurationPath = $this->getFormConfigurationFilePath($sConfigurationName);
        $aConfiguration = include $sConfigurationPath;
        if (! is_array($aConfiguration)) {
            throw new \LogicException('Form configuration file "'.$sConfigurationPath.'" does not return an array');
        }
        return $aConfiguration;
    }

}
