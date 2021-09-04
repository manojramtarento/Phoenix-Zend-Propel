<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotifySearch
 *
 * @author info20
 */
class Phoenix_View_Helper_NotifySearch extends Zend_View_Helper_Abstract {

    public $view;

    public function setView(Zend_View_Interface $view) {
        $this->view = $view;
    }

    /**
     * Indique un bloc permettant d'effacer les filtres d'une recherche
     * @param $args array : liste d'arguments à rajouter à l'url (optionnel)
	 * @param $url string : url de destination à forcer (optionnel)
     */
    public function NotifySearch() {
        return $this;
    }
    
    public function link($args=array()) {
        /*
         * On regarde si la recherche est activée
         * > Pour cela on regarde si le parametre "findword" ou "findbyfields" est défini
         */
        $searchIsActive = $this->isActive();
        
        if($searchIsActive) {
			// construction de l'url
			if(!array_key_exists('module', $args)) {
				$args['module'] = Zend_Controller_Front::getInstance()->getRequest()->getModuleName();
			}
			if(!array_key_exists('controller', $args)) {
				$args['controller'] = Zend_Controller_Front::getInstance()->getRequest()->getControllerName();
			}
			if(!array_key_exists('action', $args)) {
				$args['action'] = Zend_Controller_Front::getInstance()->getRequest()->getActionName();
			}
			
			$href_url = $this->view->url($args, null, true);
			
            $html = '<a class="btn-filtres filtres-actif" href="' . $href_url . '" title="Supprimer les filtres">Filtres actifs</a>';
        }else{
			$html = '<span class="btn-filtres">Pas de filtres actifs</span>';
		}
		
        return $html;
    }

    public function isActive(){
        return (($this->view->getParam('findword', null) != null) || ($this->view->getParam('findbyfields', null) != null));
    }
    
}

?>
