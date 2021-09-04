<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropelLog
 *
 * @author info20
 */
class My_Propel_Logger implements BasicLogger {

	/**
	 *
	 * @var Phoenix_Log 
	 */
	private static $_logger = null;

	
	/**
	 * 
	 * @param type $output filtre binaire pour flux de sortie
	 */
	private function __construct($output = Phoenix_Log::OUTPUT_FILE) {
		self::$_logger = new Phoenix_Log('propel', $output);
	}

	public function getTrace() {
		return self::$_logger->getTrace();
	}

	public function alert($message) {
		self::$_logger->log($message, Zend_Log::ALERT);
	}

	public function crit($message) {
		self::$_logger->log($message, Zend_Log::CRIT);
	}

	public function debug($message) {
		self::$_logger->log($message, Zend_Log::DEBUG);
	}

	public function err($message) {
		self::$_logger->log($message, Zend_Log::ERR);
	}

	public function info($message) {
		self::$_logger->log($message, Zend_Log::INFO);
	}

	public function log($message, $severity = null) {
		self::$_logger->log($message, Zend_Log::EMERG);
	}

	public function notice($message) {
		self::$_logger->log($message, Zend_Log::NOTICE);
	}

	public function warning($message) {
		self::$_logger->log($message, Zend_Log::WARN);
	}

	/**
	 * activation du log propel
	 * @param string $type [file | screen]
	 * @return Phoenix_Log
	 */
	public static function enable($output = Phoenix_Log::OUTPUT_FILE) {
		if (!isset(self::$_logger)) {

			$config = Propel::getConfiguration(PropelConfiguration::TYPE_OBJECT);
			$config->setParameter('debugpdo.logging.details.time.enabled', true);

			Propel::getConnection()->useDebug();
			
			Propel::setLogger(new self($output));
		}

		return self::$_logger;
	}

	/**
	 * 
	 * @return boolean
	 */
	public static function isEnabled() {
		return isset(self::$_logger);
	}

	/**
	 * 
	 * @return Phoenix_Log
	 */
	public static function getInstance() {
		return self::$_logger;
	}

}

?>
