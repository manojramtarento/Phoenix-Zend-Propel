<?php

class My_View_Helper_Html
{

    /**
     *
     * @param type $aAttr attributs de la balise input
     * @param $aOptions:<br>
     *             text_after:ajoute de texte après le champs
     *             show_error_msg:boolean , affichage du message d'erreur ou non
     *             alias
     * @return string
     */
    public static function input($aAttr, $aOptions = array())
    {

        // Default id
        $aAttr['id'] = (! isset($aAttr['id']) ? 'id_' . $aAttr['name'] : $aAttr['id']);

        // Retrieve default value in global settings
        if (! isset($aAttr['value'])) {
            $aAttr['value'] = Zend_Controller_Front::getInstance()->getRequest()->getParam($aAttr['name']);
        }

        if (isset($aOptions['date_format'])) {
            $aAttr['value'] = Phoenix_Data_Convert::formatDate($aAttr['value'], $aOptions['date_format']);
        }

        $aAttr['value'] = htmlentities($aAttr['value'], ENT_COMPAT, 'UTF-8');

        $aAttr['default_value'] = $aAttr['value'];

        if (isset($aOptions['alias'])) {
            $aErrors = My_Propel_Failures::getInstance()->getRegisteredFieldErrors(strtolower($aOptions['alias']));
        } else {
            $aErrors = My_Propel_Failures::getInstance()->getRegisteredFieldErrors(strtolower($aAttr['name']));
        }

        $sHtml = "<input";

        if (isset($aAttr['disabled']) && $aAttr['disabled'] == true) {
            $sHtml.=' disabled="disabled" ';
        } elseif (isset($aAttr['disabled']) && $aAttr['disabled'] == false) {
            // Delete this attribute, so that it is not supported by the treatment of foreach
            unset($aAttr['disabled']);
        }
        foreach ($aAttr as $sAttribute => $sValue) {
            if ($sAttribute == 'class' && count($aErrors) > 0) {
                $sHtml.=' ' . $sAttribute . '="' . self::escapeHtmlAttribute($sValue) . ' form-error"';
            } else {
                $sHtml.=' ' . $sAttribute . '="' . self::escapeHtmlAttribute($sValue) . '"';
            }
        }

        $sHtml.='>';
        if (isset($aOptions['show_error_msg']) && ! $aOptions['show_error_msg']) {
            $sHtml .= '';
        } else {
            $sHtml .= self::errorMsg($aErrors, $aAttr['id']);
        }

        if (isset($aOptions['text_after'])) {
            $sHtml.=$aOptions['text_after'];
        }


        return $sHtml;
    }

    /**
     * @param array $aAttr : attributes of the radio tag
     * @return string
     */
    public static function radio($aAttr, $aOptions = array())
    {

        // Default id
        $aAttr['id'] = (! isset($aAttr['id']) ? 'id_' . $aAttr['name'] . '_' . $aAttr['value'] : $aAttr['id']);

        $aAttr['type'] = 'radio';
        // Retrieve default value in global settings
        if (! isset($aAttr['default_value'])) {
            $sValue = Zend_Controller_Front::getInstance()->getRequest()->getParam($aAttr['name'], null);
        } else {
            $sValue = (! isset($aAttr['default_value']) ? null : $aAttr['default_value']);
        }

        $sHtmlMarkup = "<input";
        foreach ($aAttr as $sAttribute => $sAttributeValue) {
            $sHtmlMarkup.=' ' . $sAttribute . '="' . self::escapeHtmlAttribute($sAttributeValue) . '"';
        }

        if ($aAttr['value'] == $sValue || (isset($aOptions['checked']) && $aOptions['checked'] == true)) {
            $sHtmlMarkup.=' checked';
        }

        $sHtmlMarkup.='>';

        $aErrors = My_Propel_Failures::getInstance()->getRegisteredFieldErrors($aAttr['name']);
        $sHtmlMarkup .= self::errorMsg($aErrors, $aAttr['id']);

        return $sHtmlMarkup;
    }

    /**
     * @param array $aAttr (default_value: valeur par défaut)
     * @param array $aOptions [ checked =>(true|false) ]
     * @return string
     */
    public static function checkbox($aAttr, $aOptions = array())
    {

        $aAttr['id'] = (! isset($aAttr['id']) ? 'id_' . $aAttr['name'] : $aAttr['id']);

        // Retrieve default value in global settings
        if (! isset($aAttr['default_value'])) {
            $sValue = Zend_Controller_Front::getInstance()->getRequest()->getParam(str_replace('[]', '', $aAttr['name']), null);
        } else {
            $sValue = (empty($aAttr['default_value']) ? null : $aAttr['default_value']);
        }

        $sHtml = '<input type="checkbox"';

        if (isset($aAttr['disabled']) && $aAttr['disabled'] == true) {
            $sHtml.=' disabled="disabled" ';
        } elseif (isset($aAttr['disabled']) && $aAttr['disabled'] == false) {
            unset($aAttr['disabled']);
        }

        foreach ($aAttr as $sAttribute => $sAttributeValue) {
            $sHtml.=' ' . $sAttribute . '="' .self::escapeHtmlAttribute($sAttributeValue) . '"';
        }

        if ((isset($aAttr['value']) && ($aAttr['value'] == $sValue || (is_array($sValue) && in_array($aAttr['value'], $sValue)) ) && $sValue != null) || (isset($aOptions['checked']) && $aOptions['checked'] == true)) {
            $sHtml.=' checked';
        }

        $sHtml.='/>';
        return $sHtml;
    }

    /**
     * @param array $aAttr
     * @param array $aOptions ( text_option =>[value=>$sValue, label=>$sLabel, attr1=>val_attr1, attr1=>val_attr2,...] )
     * @param array $aParams ['default_label'=>value,... ]
     * @return string
     */
    public static function select($aAttr, $aOptions, $aParams = array())
    {

        // Default value: either recovered by post, or defined via attribute value. If it is a multiselect, retrieve the list of selected elements.
        if (! isset($aAttr['value'])) {
            $sValue = (strpos($aAttr['name'], '[]') && isset($aAttr['multiple'])) ?
                    Zend_Controller_Front::getInstance()->getRequest()->getParam(str_replace(array('[', ']'), '', $aAttr['name'])) : Zend_Controller_Front::getInstance()->getRequest()->getParam($aAttr['name']);
        } else {
            $sValue = $aAttr['value'];
            if (is_scalar($aAttr['value']) || $aAttr['value'] === null) {
                $aAttr['default_value'] = $aAttr['value'];
            }
        }

        $sHtml = '<select';

        $aAttr['id'] = (! isset($aAttr['id']) ? 'id_' . $aAttr['name'] : $aAttr['id']);

        $aErrors = My_Propel_Failures::getInstance()->getRegisteredFieldErrors($aAttr['name']);


        if (isset($aAttr['disabled']) && $aAttr['disabled'] == true) {
            $sHtml.=' disabled="disabled" ';
        } elseif (isset($aAttr['disabled']) && $aAttr['disabled'] == false) {
            // Delete this attribute, so that it is not supported by foreach processing.
            unset($aAttr['disabled']);
        }

        foreach ($aAttr as $sAttribute => $sAttributeValue) {
            if ($sAttribute === 'value') {
                continue;
            }
            if (! is_scalar($sAttributeValue) && $sAttributeValue !== null) {
                throw new \InvalidArgumentException('Value of attribute "'.$sAttribute.'" expects a scalar or a null value, "'.(is_object($sAttributeValue)?get_class($sAttributeValue):gettype($sAttributeValue)).'" given');
            }

            if ($sAttribute == 'class' && count($aErrors) > 0) {
                $sHtml.=' ' . $sAttribute . '="' . self::escapeHtmlAttribute($sAttributeValue) . ' form-error"';
            } else {
                $sHtml.=' ' . $sAttribute . '="' . self::escapeHtmlAttribute($sAttributeValue) . '"';
            }
        }

        $sHtml.='>';

        // Default option
        if (isset($aParams['default_label'])) {
            $sHtml.='<option value="">' . $aParams['default_label'] . '</option>';
        }


        foreach ($aOptions as $sText => $aOptions) {
            $sHtml.='<option ';
            foreach ($aOptions as $sAttr => $sVal) {
                if ($sAttr != 'label') {
                    $sHtml.=$sAttr . '="' . $sVal . '" ';

                    $sVal = (string) $sVal;
                    $sValue = (! is_array($sValue)) ? (string) $sValue : $sValue;
                    if ($sAttr == 'value' && ( (! is_array($sValue) && $sVal == $sValue) || (is_array($sValue) && in_array($sVal, $sValue) ) )) {
                        $sHtml.=' selected="selected" ';
                    }
                }
            }
            $sLabel = (isset($aOptions['label']) ? $aOptions['label'] : $sText);
            $sHtml.='>';
            $sHtml.=$sLabel . '</option>';
        }
        $sHtml.='</select>';

        $sHtml.=self::errorMsg($aErrors, $aAttr['id']);
        return html_entity_decode($sHtml);
    }

    /**
     *
     * @staticvar string $aInputSelect
     * @param string $sDbTableName
     * @param array $aAttr
     * @param array $aOptionsMapper
     * @param array $aParam
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function selectFromTable($sDbTableName, $aAttr, $aOptionsMapper, $aParam = array())
    {

        static $aInputSelect;

        $sDefaultValue = isset($aAttr['value']) ? $aAttr['value'] : null;
        $bIncludeElementValue = isset($aParam['include_element_value']) ? $aParam['include_element_value'] : true;
        if (! isset($aInputSelect[$sDbTableName][serialize($aOptionsMapper)][serialize($aParam)][$sDefaultValue])) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aResults = array();
            $sWhere = isset($aParam['clause_where']) ? $aParam['clause_where'] : '1=1';
            $oSelect = $oZendDbSelect->from($sDbTableName, $aOptionsMapper)->where($sWhere);

            if ($bIncludeElementValue && isset($aOptionsMapper['value']) && isset($sDefaultValue)) {
                $oSelect->orWhere($aOptionsMapper['value'] . '=?', $sDefaultValue);
            }

            if (isset($aParam['clause_order'])) {
                $oSelect->order($aParam['clause_order']);
            } else {
                $oSelect->order('name asc');
            }
            $aResults = $oSelect->query()->fetchAll();

            $aOptions = array();
            foreach ($aResults as $aResult) {
                $aOptions[$aResult['value']] = array(
                    'label' => $aResult['name'],
                    'value' => $aResult['value'],
                    'class' => (isset($aResult['class']) ? $aResult['class'] : '')
                );
            }

            $aInputSelect[$sDbTableName][serialize($aOptionsMapper)][serialize($aParam)][$sDefaultValue] = $aOptions;
        } else {
            $aOptions = $aInputSelect[$sDbTableName][serialize($aOptionsMapper)][serialize($aParam)][$sDefaultValue];
        }
        return self::select($aAttr, $aOptions, $aParam);
    }

    public static function UrlOrderBy($sFieldname, $sLabel)
    {
        $sSense = Zend_Controller_Front::getInstance()->getRequest()->getParam('sense');
        $sOrder = Zend_Controller_Front::getInstance()->getRequest()->getParam('order');
        if (! in_array($sSense, array('asc', 'desc'))) {
            $sSense = 'asc';
        }
        $sSenseTo = ($sSense == 'asc' ? 'desc' : 'asc');

        $sHeaderHoverTitle = ($sSense == 'asc') ? 'Trier cette colonne par ordre décroissant' : 'Trier cette colonne par ordre croissant';

        $oZendViewHelperUrl = new Zend_View_Helper_Url();
        if ($sOrder == $sFieldname) {
            $sLink = '<a class="sorted ' . $sSense . '" title="' . $sHeaderHoverTitle . '" href="';
        } else {
            $sLink = '<a class="sortable" title="Trier cette colonne par ordre décroissant" href="';
        }

        $sLink.=$oZendViewHelperUrl->url(array('order' => $sFieldname, 'sense' => $sSenseTo)) . '?' . $_SERVER['QUERY_STRING'].
        '"><span>' . $sLabel . '</span><span class="sort-indicator"></span></a>';

        return $sLink;
    }

    /**
     *
     * @param array $aAttr
     * @return string
     */
    public static function textarea(array $aAttr)
    {

        // Default id
        $aAttr['id'] = (! isset($aAttr['id']) ? 'id_' . $aAttr['name'] : $aAttr['id']);

        $sHtml = '<textarea';

        // Retrieving expected defaut parameters from request
        if (! isset($aAttr['value'])) {
            $aAttr['value'] = Zend_Controller_Front::getInstance()->getRequest()->getParam($aAttr['name'], '');
        }
        $aAttr['default_value'] = $aAttr['value'];

        if (isset($aAttr['disabled']) && $aAttr['disabled'] == true) {
            $sHtml.=' disabled="disabled" ';
        } elseif (isset($aAttr['disabled']) && $aAttr['disabled'] == false) {
            // Deleting this attributed to avoid to be considered by the further process
            unset($aAttr['disabled']);
        }

        foreach ($aAttr as $sAttribute => $sValue) {
            if ($sAttribute != 'value') {
                $sHtml.=' ' . $sAttribute . '="' . self::escapeHtmlAttribute($sValue) . '"';
            }
        }

        $sHtml .= '>';

        $sHtml.=$aAttr['value'] . '</textarea>';

        $aErrors = My_Propel_Failures::getInstance()->getRegisteredFieldErrors($aAttr['name']);

        if (isset($aOptions['show_error_msg']) && ! $aOptions['show_error_msg']) {
            $sHtml .= '';
        } else {
            $sHtml .= self::errorMsg($aErrors, $aAttr['id']);
        }

        if (isset($aOptions['text_after'])) {
            $sHtml.=$aOptions['text_after'];
        }
        return $sHtml;
    }

    /**
     *
     * @param string $sMsg
     * @param string $sFieldId
     * @return string
     */
    public static function errorMsg($aErrors, $sFieldId = '')
    {
        $oZendViewHelperHtmlList = new Zend_View_Helper_HtmlList();
        $sClass = 'error-msg';
        if (is_array($aErrors) && count($aErrors) > 1) {
            $sHtmlMarkup = '<div class="' . $sClass . '" id="' . $sFieldId . '_error-msg">' . $oZendViewHelperHtmlList->htmlList($aErrors, false, false, false) . '</div>';
        } elseif (is_array($aErrors) && count($aErrors) > 0) {
            $sHtmlMarkup = '<div class="' . $sClass . '" id="' . $sFieldId . '_error-msg">' . implode('', $aErrors) . '</div>';
        } else {
            $sHtmlMarkup = '';
        }

        return $sHtmlMarkup;
    }

    /**
     * @param string $sKey
     * @param boolean $bStyleLight
     * @return string
     */
    public static function getPropelFailures($sKey = 'error', $bStyleLight = false)
    {
        if ($sKey == null) {
            $aErrors = My_Propel_Failures::getInstance()->getRegisterdErrors();
        } else {
            $aErrors = My_Propel_Failures::getInstance()->getRegisteredFieldErrors($sKey);
        }


        $oZendViewHelperHtmlList = new Zend_View_Helper_HtmlList();
        if ($bStyleLight) {
            $sClass = 'error-msg';
        } else {
            $sClass = 'errors-msg';
        }


        if (is_array($aErrors) && count($aErrors) > 1) {
            $sHtmlMarkup = '<div class="' . $sClass . '">' . $oZendViewHelperHtmlList->htmlList($aErrors, false, false, false) . '</div>';
        } elseif (is_array($aErrors) && count($aErrors) > 0) {
            $sHtmlMarkup = '<div class="' . $sClass . '">' . implode('', $aErrors) . '</div>';
        } else {
            $sHtmlMarkup = '';
        }

        return $sHtmlMarkup;
    }

    public static function escapeHtmlAttribute($sAttributeValue)
    {
        return str_replace('"', '&quot;', $sAttributeValue);
    }
}
