<?php

class Phoenix_View_Helper_Html extends My_View_Helper_Html
{

    /**
     * @param string $sStatus
     * @param string $sAddClass
     * @return string
     */
    public static function getTaskStatusIcon($sStatus, $sAddClass = '')
    {
        // -- switch sur le statut pour les icons
        $sIconTpl = '<span class="' . $sAddClass . ' icon-statut icon-{__ICON__}" title="{__TITLE__}">{__TITLE__}</span>';
        switch ($sStatus) {
            case OperationTasks::STATUS_PROGRESS:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('encours', 'Tâche en cours'), $sIconTpl);
                break;
            case OperationTasks::STATUS_WARNING:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('warning', 'Tâche en alerte'), $sIconTpl);
                break;
            case OperationTasks::STATUS_LATE:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('warning', 'Tâche en retard'), $sIconTpl);
                break;
            case OperationTasks::STATUS_FINISHED:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('cloture', 'Tâche clôturée'), $sIconTpl);
                break;
        }

        return $sStatut;
    }

    /**
     * @param bool $bBlocking
     * @param string $sAddClass
     * @return string
     */
    public static function getCoutStatusIcon($bBlocking, $sAddClass = '')
    {
        // Icon status switch for icons
        $sIconTpl = '<span class="' . $sAddClass . ' icon-statut icon-{__ICON__}" title="{__TITLE__}">{__TITLE__}</span>';
        switch ($bBlocking) {
            case false:
                $sStatut = '';
                break;
            case true:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('warning', 'Coût bloquant une facture'), $sIconTpl);
                break;
        }

        return $sStatut;
    }

    /**
     * @param int $iActive
     * @param string $sAddClass
     * @return string
     */
    public static function getContactStatusIcon($iActive, $sAddClass = '')
    {
        $sIconTpl = '<span class="' . $sAddClass . ' icon-statut icon-{__ICON__}" title="{__TITLE__}">{__TITLE__}</span>';
        switch ($iActive) {
            case 0:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('warning', 'Contact inactif'), $sIconTpl);
                break;
            default:
                $sStatut = '';
                break;
        }

        return $sStatut;
    }

    /**
     * Returns the HTML render of the operation icon the represent the operation status
     *
     * @param int $iOperationStatus
     * @param string $sClassToAdd
     * @throws \InvalidArgumentException
     * @return string
     */
    public static function getOperationStatusIcon($iOperationStatus, $sClassToAdd = '')
    {

        // Control Argument expected type
        if (! is_int($iOperationStatus)) {
            throw new \InvalidArgumentException('Argument "$iOperationStatus" expects an int, "' . gettype($iOperationStatus) . '" given');
        }

        if (! is_string($sClassToAdd)) {
            throw new \InvalidArgumentException('Argument "$sClassToAdd" expects a string, "' . gettype($sClassToAdd) . '" given');
        }

        $sIconTpl = '<span class="' . $sClassToAdd . ' icon-statut icon-{__ICON__}" title="{__TITLE__}">{__TITLE__}</span>';
        switch ($iOperationStatus) {
            case 1:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('encours', 'Devis en cours'), $sIconTpl);
                break;
            case 2:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('accepte', 'Opération acceptée'), $sIconTpl);
                break;
            case 3:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('refuse', 'Devis refusé'), $sIconTpl);
                break;
            case 4:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('cloture', 'Opération clôturée'), $sIconTpl);
                break;
            case 6:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('check', 'Opération Soldé'), $sIconTpl);
                break;
            default:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('warning', 'Devis en validation'), $sIconTpl);
                break;
        }

        return $sStatut;
    }

    /**
     * @param bool $bContrat
     * @param string $sAddClass
     */
    public static function getContratStatusIcon($bContrat, $sAddClass = '')
    {
        if ($bContrat) {
            $sIconTpl = '<span class="' . $sAddClass . ' icon-statut icon-{__ICON__}" title="{__TITLE__}">{__TITLE__}</span>';
            $sIconTpl = str_replace(array('{__ICON__}', '{__TITLE__}'), array('check', 'Opération sous contrat'), $sIconTpl);
        } else {
            $sIconTpl = '';
        }
        return $sIconTpl;
    }

    /**
     * @param string $sStatus
     * @param string $sAddClass
     */
    public static function getDecouvertStatusIcon($sStatus, $sAddClass = '')
    {
        // Icon status switch for icons
        $sIconTpl = '<span class="' . $sAddClass . ' icon-statut icon-{__ICON__}" title="{__TITLE__}">{__TITLE__}</span>';
        switch ($sStatus) {
            case 1:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('encours', 'En cours de validation'), $sIconTpl);
                break;
            case 2:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('accepte', 'Demande validée'), $sIconTpl);
                break;
            case 3:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('refuse', 'Demande refusée'), $sIconTpl);
                break;
            default:
                $sStatut = str_replace(array('{__ICON__}', '{__TITLE__}'), array('warning', 'Devis en validation'), $sIconTpl);
                break;
        }

        return $sStatut;
    }

    /**
     * Displays options grouped by activity kpi or in detached options goupe if detached
     *
     * @param  \RActivityKpi $oActivityKpi
     * @param  integer $iOperationId
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function retrieveOptionsListByActivityKpi(\RActivityKpi $oActivityKpi = null, $iOperationId = null)
    {

        if (! is_null($iOperationId) && ! is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer or null value, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }

        $oZendControllerRequestHttp = new Zend_Controller_Request_Http();
        $aAvailableOptions = $iOperationId ? ROperationOptionsQuery::create()->getAvailableOptionsIdByOpId($iOperationId) : $oZendControllerRequestHttp->getParam('operation_option', array());

        if ($oActivityKpi === null) {
            $aFirstLevelOptions = ROperationOptionsQuery::create()->retrieveDetachedOperationOptions();
        } else {
            $aFirstLevelOptions = $oActivityKpi->getRelatedOperationOptionsPackages();
        }

        $sOutPut = '<ul class="options col">';
        foreach ($aFirstLevelOptions as $oParentOption) {
            if ($oParentOption->getActif()) {
                $sOutPut .= self::displayOptionsPackageQuote($oParentOption, $aAvailableOptions);
            }
        }
        $sOutPut.= '</ul>';

        return $sOutPut;
    }

    /**
     * Displays parent option
     *
     * @param  \ROperationOptions $oParentOption
     * @param  array $aAvailableOptions
     * @return string
     */
    public static function displayOptionsPackageQuote(\ROperationOptions $oParentOption, array $aAvailableOptions)
    {
        // Retrieve childrens OperationOptions
        $aChildrenOptions = $oParentOption->getOrderedChildrenOptions();
        // Display parent option
        $sOutPut = '<li class="opt-item1">';
        $sOutPut .= '<h3 class="opt-title1">' . $oParentOption->getTranslatedOptionLibelle(self::getUserLanguage()) . '</h3>';
        $sOutPut .= '<ul class="options2">';
        // Display childrens options
        foreach ($aChildrenOptions as $oChildOption) {
            // Display operation option if it is actif
            $sOutPut .= $oChildOption->getActif() ? self::getChildrenCode($aAvailableOptions, $oParentOption->getROpOptionType(), $oChildOption) : '';
        }
        $sOutPut .= '</ul></li>';
        return $sOutPut;
    }

    /**
     * This function returns the language of the logged-in user
     *
     * @return string
     */
    public static function getUserLanguage()
    {
        return Phoenix_Auth_User::getInstance()->getLanguage();
    }

    /**
     * Retrieves the render of a collection of options having a common parent option
     *
     * @param  array $aAvailableOptions
     * @param  int $iOptionType
     * @param  \ROperationOptions $oChildOption
     * @return string
     * @throws \InvalidArgumentException
     */
    protected static function getChildrenCode(array $aAvailableOptions, $iOptionType, \ROperationOptions $oChildOption)
    {
        if (! is_int($iOptionType)) {
            throw new \InvalidArgumentException('Argument "$iOptionType" expects an integer , "' . (is_object($iOptionType) ? get_class($iOptionType) : gettype($iOptionType)) . '" given');
        }

        $aChildrenOptions = $oChildOption->getOrderedChildrenOptions();
        $sOutPut = '';

        // If the option has childrens display as group of options
        if ($aChildrenOptions->count()) {
            $sOutPut.= '<li class="opt-item2">';
            $sOutPut.= '<h4 class="opt-title2">' . $oChildOption->getTranslatedOptionLibelle(self::getUserLanguage()) . '</h4>';
            $sOutPut.= '<ul class="opt-group">';
            foreach ($aChildrenOptions as $oChildOpt) {
                // Display operation option if it is actif
                $sOutPut .= $oChildOpt->getActif() ? self::getChildrenCode($aAvailableOptions, $oChildOption->getROpOptionType(), $oChildOpt) : '';
            }
            $sOutPut.= '</ul></li>';
            return $sOutPut;
        }

        // Is option selected
        $bIsActive = in_array($oChildOption->getROpOptionId(), $aAvailableOptions) ? true : null;

        // Option field attributes
        $aFieldAttributes = array(
            'value' => $oChildOption->getROpOptionId(),
            'default_value' => $bIsActive,
            'option_id' => $oChildOption->getROpOptionId(),
        );
        
        // Disable checkboxes if updating option is not allowed to user
        if (! Phoenix_Auth_User::mvcActionIsAllowed('operation', 'description', 'updateoption')) {
            $aFieldAttributes['disabled'] = 'disabled';
        }

        // Display option according to his parent option type
        switch ($iOptionType) {
            case ROperationOptionsType::TYPE_CHECKBOX_CAT:
                $aFieldAttributes['name'] = "operation_option[" . $oChildOption->getROpOptionId() . "]";
                $aFieldAttributes['id'] = $sFieldId = 'id_' . $aFieldAttributes['name'];
                $aFieldAttributes['class'] = 'class_operation_option';
                $sField = Phoenix_View_Helper_Html::checkbox($aFieldAttributes);
                break;
            case ROperationOptionsType::TYPE_RADIO_CAT:
                $aFieldAttributes['name'] = 'operation_option[' . $oChildOption->getROpOptionParent() . ']';
                $sFieldId = 'id_' . $aFieldAttributes['name'];
                $aFieldAttributes['class'] = 'class_operation_option operation-option-radio-type';
                $sField = Phoenix_View_Helper_Html::radio($aFieldAttributes);
                break;
            default:
                print_r('>>>' . $iOptionType);
                $sField = '';
                $sFieldId = 0;
        }

        return '<li class="option">'
                . $sField
                . '<label for="' . $sFieldId . '" class="opt-label"> '
                . $oChildOption->getTranslatedOptionLibelle(self::getUserLanguage())
                . '</label>
				</li>';
    }

    /**
     * Display Parent option in options listing
     *
     * @param  \ROperationOptions $oParentOption
     * @param  array $aNumberOfLinkedServices
     * @return string
     */
    public static function displayOptionsPackage(\ROperationOptions $oParentOption, array $aNumberOfLinkedServices = array())
    {
        $iOptionId = $oParentOption->getROpOptionId();
        $sStatusClass = ($oParentOption->getActif()) ? '' : 'text-inactif';

        $aChildrenOptions = $oParentOption->getOrderedChildrenOptions();

        $sOutPut = '
            <div class="section" r_op_option_id="' . $iOptionId . '">
                <div class="section-hd">
                    <h2 class="option ' . $sStatusClass . ' section-title" r_op_option_id="' . $iOptionId . '">' . $oParentOption->getTranslatedOptionLibelle(self::getUserLanguage()) . '</h2>
                </div>
                <div class="section-bd">
                    <ul class="list-options">
        ';

        foreach ($aChildrenOptions as $oChildOption) {
            $sOutPut.= self::displayChildOption($oChildOption, $aNumberOfLinkedServices);
        }

        return $sOutPut.'</ul></div></div>';
    }

    /**
     * Display child option in options listing
     *
     * @param  \ROperationOptions $oChildOption
     * @return string
     */
    public static function displayChildOption(\ROperationOptions $oChildOption, array $aNumberOfLinkedServices = array())
    {
        $iOptionId = $oChildOption->getROpOptionId();
        $sStatusClass = ($oChildOption->getActif()) ? '' : 'text-inactif';
        $aChildrenOptions = $oChildOption->getOrderedChildrenOptions();
        $bIsCategory = ! $aChildrenOptions->isEmpty();
        $sTitleClass = $bIsCategory ? 'section-title' : '';
        $sOutPut = '<li r_op_option_id="' . $iOptionId . '">';
        $sOutPut.= '<' . ($bIsCategory ? 'h3' : 'span') . ' class="option ' . $sStatusClass . ' ' . $sTitleClass . '" r_op_option_id="' . $iOptionId . '">';
        $sOutPut.= $oChildOption->getTranslatedOptionLibelle(self::getUserLanguage()) . (isset($aNumberOfLinkedServices[$iOptionId]) ? ' (' . $aNumberOfLinkedServices[$iOptionId] . ') ' : ($bIsCategory ? '' : ' (0) '));
        $sOutPut.= ' </' . ($bIsCategory ? 'h3' : 'span') . '>';
        if ($bIsCategory) {
            $sOutPut.= '<ul class="list-options" >';
            foreach ($aChildrenOptions as $oChildOpt) {
                $sOutPut.= self::displayChildOption($oChildOpt, $aNumberOfLinkedServices);
            }
            $sOutPut.= '</ul>';
        }
        $sOutPut.= '</li>';

        return $sOutPut;
    }

    /**
     * Récupération du logo pour un ID CLient donné
     */
    public static function getClientLogo($iIdClient = null, $aAttr = array())
    {
        if ($iIdClient == null) {
            $iIdClient = 0;
        }

        $aAttr['width'] = (isset($aAttr['width']) ? $aAttr['width'] : 40);

        $sImg = (is_file(Zend_Registry::get('config')->path->img->logo->client . '/' . $iIdClient . '.gif') ? '/img/logo/client/' . $iIdClient . '.gif' : '/img/logo/client/logo_client.jpg');

        return '<img width="' . $aAttr['width'] . '" height="100%"  src="' . $sImg . '"  />';
    }
}
