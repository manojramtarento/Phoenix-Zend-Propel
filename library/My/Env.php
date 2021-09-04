<?php

class My_Env
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \My_Env
     */
    protected static $instance = null;

    /**
     * @throws \LogicException
     */
    private function __construct()
    {
        if (isset(Zend_Registry::get('config')->env_name)) {
            $this->name = Zend_Registry::get('config')->env_name;
        } else {
            $this->name = APPLICATION_ENV;
        }
    }

    /**
     * @return \My_Env
     */
    public static function getInstance()
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Return application configuration matching with environment variable APPLICATION_ENV
     * @return \Zend_Config_Ini
     */
    public function getConfig()
    {
        return Zend_Registry::get('config');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
