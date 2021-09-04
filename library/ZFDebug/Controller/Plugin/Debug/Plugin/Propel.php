<?php

/**
 * ZFDebug Zend Additions
 *
 * @category   ZFDebug
 * @package    ZFDebug_Controller
 * @subpackage Plugins
 * @copyright  Copyright (c) 2008-2009 ZF Debug Bar Team (http://code.google.com/p/zfdebug)
 * @license    http://code.google.com/p/zfdebug/wiki/License     New BSD License
 * @version    $Id: Database.php 74 2009-05-19 12:30:36Z gugakfugl $
 */
/**
 * @see Zend_Db_Table_Abstract
 */
require_once 'Zend/Db/Table/Abstract.php';

/**
 * @category   ZFDebug
 * @package    ZFDebug_Controller
 * @subpackage Plugins
 * @copyright  Copyright (c) 2008-2009 ZF Debug Bar Team (http://code.google.com/p/zfdebug)
 * @license    http://code.google.com/p/zfdebug/wiki/License     New BSD License
 */
class ZFDebug_Controller_Plugin_Debug_Plugin_Propel extends ZFDebug_Controller_Plugin_Debug_Plugin implements ZFDebug_Controller_Plugin_Debug_Plugin_Interface {

	/**
	 * Contains plugin identifier name
	 *
	 * @var string
	 */
	protected $_identifier = 'propel';

	/**
	 * Create ZFDebug_Controller_Plugin_Debug_Plugin_Variables
	 *
	 * @param Zend_Db_Adapter_Abstract|array $adapters
	 * @return void
	 */
	public function __construct(array $options = array()) {
		/* 	if (!isset($options['adapter']) || !count($options['adapter'])) {
		  if (Zend_Db_Table_Abstract::getDefaultAdapter()) {
		  $this->_db[0] = Zend_Db_Table_Abstract::getDefaultAdapter();
		  $this->_db[0]->getProfiler()->setEnabled(true);
		  }
		  } else if ($options['adapter'] instanceof Zend_Db_Adapter_Abstract) {
		  $this->_db[0] = $options['adapter'];
		  $this->_db[0]->getProfiler()->setEnabled(true);
		  } else {
		  foreach ($options['adapter'] as $name => $adapter) {
		  if ($adapter instanceof Zend_Db_Adapter_Abstract) {
		  $adapter->getProfiler()->setEnabled(true);
		  $this->_db[$name] = $adapter;
		  }
		  }
		  } */

	}

	/**
	 * Gets identifier for this plugin
	 *
	 * @return string
	 */
	public function getIdentifier() {
		return $this->_identifier;
	}

	/**
	 * Gets menu tab for the Debugbar
	 *
	 * @return string
	 */
	public function getTab() {
		/* 	if (!$this->_db)
		  return 'No adapter';

		  foreach ($this->_db as $adapter) {
		  $profiler = $adapter->getProfiler();
		  $adapterInfo[] = $profiler->getTotalNumQueries() . ' in ' . round($profiler->getTotalElapsedSecs() * 1000, 2) . ' ms';
		  }
		  $html = implode(' / ', $adapterInfo);
		 */
		$html = count(My_Propel_Logger::getInstance()->getTrace()).' propel';

		return $html;
	}

	/**
	 * Gets content panel for the Debugbar
	 *
	 * @return string
	 */
	public function getPanel() {


		$html = 'Propel';
		//propel
		$html .= '<ol>';
		foreach (My_Propel_Logger::getInstance()->getTrace() as $query) {
			$html .= '<li><strong></strong> '
					. $query . '</li>';
		}
		$html .= '</ol>';


		//Phoenix_Logger::getInstance('monitoring',Phoenix_Log::OUTPUT_FIREBUG)->log($html);

		return $html;
	}

	public function preDispatch(Zend_Controller_Request_Abstract $request) {
		
	}

}