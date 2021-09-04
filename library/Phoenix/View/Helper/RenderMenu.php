<?php

class Phoenix_View_Helper_RenderMenu extends Zend_View_Helper_Abstract
{

    /**
     * @var \Zend_View_Interface
     */
    public $view;
    
    /**
     * @return \Zend_View_Interface
     */
    public function getView()
    {
        return $this->view;
    }
    
    /**
     * @param \Zend_View_Interface $oView
     * @return \Phoenix_View_Helper_RenderMenu
     */
    public function setView(Zend_View_Interface $oView)
    {
        $this->view = $oView;
        return $this;
    }


    /**
     * @param array $aMenuItem : the menu item data to render
     * @param string $sActiveOn : define on which mvc granularity link is set as active
     * @param bool $bIsSubMenuItem : tel if menu item should be render as a sub nav element
     * @return string
     */
    public function renderMenu(array $aMenuItem, $sActiveOn = 'module', $iMenuItemLevel = 0)
    {
        
        $oView = $this->getView();
        
        if (isset($aMenuItem['url'])) {
            $bIsAllowed = true;
            $sUrl = $aMenuItem['url'];
        } elseif (isset($aMenuItem['module'], $aMenuItem['controller'],$aMenuItem['action'])) {
            $bIsAllowed = Phoenix_Auth_User::mvcActionIsAllowed($aMenuItem['module'], $aMenuItem['controller'], $aMenuItem['action']);
            $aParams = array('module' => $aMenuItem['module'], 'controller' => $aMenuItem['controller'],'action' => $aMenuItem['action']);
            if (isset($aMenuItem['params'])) {
                $aParams = array_merge($aParams, $aMenuItem['params']);
            }
            $sUrl = $oView->url($aParams, null, true);
        } else {
            $bIsAllowed = true;
            $sUrl = '';
        }
        
        $sMarkup = '';
        $bHasSubMenuItems = ! empty($aMenuItem['subitems']);
        if (! $bIsAllowed && ! $bHasSubMenuItems) {
            return $sMarkup;
        }

        
        switch ($iMenuItemLevel) {
            case 0:
                $sLiClass = 'nav-elem';
                break;
            default:
                $sLiClass = 'subnav-elem';
                if ($bHasSubMenuItems) {
                    $sLiClass .= ' elem-whsubsubnav';
                }
                break;
        }
        
        // Define active class regarding current mvc context
        if ($oView->getParam('module') === $aMenuItem['module']) {
            if ($sActiveOn === 'module') {
                $sLiClass .= ' elem-actif';
            } elseif (isset($aMenuItem['controller']) &&  $oView->getParam('controller') === $aMenuItem['controller']) {
                if ($sActiveOn === 'controller') {
                    $sLiClass .= ' elem-actif';
                } elseif (isset($aMenuItem['action']) &&  $oView->getParam('action') === $aMenuItem['action']) {
                    if ($sActiveOn === 'action') {
                        $sLiClass .= ' elem-actif';
                    }
                }
            }
        }
        
        $sMarkup = '<li class="'.$sLiClass.'"><a href="'.($bIsAllowed?$sUrl:'#').'">'.$oView->translate($aMenuItem['label']).'</a>';
        
        if ($bHasSubMenuItems) {
            $sMarkup .= '<ul class="'.($iMenuItemLevel?'subsubnav':'subnav').'">';
            
            $iMenuItemLevel++;
            $sSubMenuMarkup = '';
            foreach ($aMenuItem['subitems'] as $aSubItems) {
                 $sSubMenuMarkup.= $this->renderMenu($aSubItems, $sActiveOn, $iMenuItemLevel);
            }
            
            if ($sSubMenuMarkup) {
                $sMarkup .= $sSubMenuMarkup.'</ul>';
            } // If no submenu is allowed, don't display the whole menu
            else {
                return '';
            }
        }
        return $sMarkup . '</li>';
    }
}
