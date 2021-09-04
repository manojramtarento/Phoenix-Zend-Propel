<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_options' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationOptions extends BaseROperationOptions
{

    const CAT_ENTREPOT = 79;
    const CAT_WMS = 241;
    const OPT_ENTREPOT_PEYNIER = 80;
    const OPT_ENTREPOT_ROUSSET = 81;
    const OPT_ENTREPOT_ERAGNY = 82;
    const OPT_WMS_GEDELOG = 242;
    const OPT_WMS_REFLEX = 243;
    const OPT_WMS_HORS_CS = 244;
    const OPT_PACK_OP_INTERNATIONAL = 56;
    const OPT_PRODUIT = 253;

    private $_parentOption = null;
    private $_childrenOptions = null;
    private $_childrenCategories = null;

    /**
     * Retrieve all entrepots
     *
     * @return array
     */
    public static function getOptEntrepot()
    {
        return array(self::OPT_ENTREPOT_PEYNIER, self::OPT_ENTREPOT_ROUSSET, self::OPT_ENTREPOT_ERAGNY);
    }

    /**
     * Get Entrepot Categories
     *
     * @return array entrepot list list
     * @author ahmed el attar aelattar@neo-data.ma
     */
    public static function getEntrepotCategories()
    {
        // Get Entrepot categories
        $aEntrepotList = ROperationOptionsQuery::create()->findByROpOptionParent(79);
        foreach ($aEntrepotList as $aEntrepot) {
            $aEntrepotSelect[] = array('label' => $aEntrepot->getROpOptionLibelle(), 'value' => $aEntrepot->getROpOptionId());
        }

        return $aEntrepotSelect;
    }

    public static function getOptWms()
    {
        return array(self::OPT_WMS_GEDELOG, self::OPT_WMS_REFLEX, self::OPT_WMS_HORS_CS);
    }

    public function updateActifRecursively($bIsActif)
    {
        $aCategoriesList = array(ROperationOptionsType::TYPE_CHECKBOX_CAT, ROperationOptionsType::TYPE_RADIO_CAT);
        if (in_array($this->getROpOptionType(), $aCategoriesList)) {
            // C'est une catégorie
            // -- on met à jour ses enfants
            foreach ($this->getChildrenOptions() as $oChild) {
                $oChild->setActif($bIsActif);
                $oChild->save();
            }
            // -- on met à jour ses catégories récursivement
            foreach ($this->getChildrenCats() as $oCategory) {
                $oCategory->updateActifRecursively($bIsActif);
            }
        }

        // C'est un enfant ou une catégorie vide, on met à jour
        $this->setActif($bIsActif);
        $this->save();
    }

    public function transformToChildren()
    {
        $aCategoriesList = array(ROperationOptionsType::TYPE_CHECKBOX_CAT, ROperationOptionsType::TYPE_RADIO_CAT);

        if (! $this->getROpOptionParent() || ! in_array($this->getROpOptionType(), $aCategoriesList)) {
            return false;
        }
        // Il s'agit bien d'une catégorie enfant
        // -- On réattribue ses enfants à son parent
        foreach ($this->getChildrenOptions() as $oChild) {
            $oChild->setROpOptionParent($this->getROpOptionParent());
            $oChild->save();
        }
        // -- On change la catégorie en enfant
        $this->setROpOptionType(ROperationOptionsType::TYPE_CHILDREN);
        $this->save();
    }

    /**
     *
     * @param string $sChildName
     * @param integer $iROperationOptionRActivityKpiId
     * @param string $sEnglishOptionChildName
     */
    public function addChild($sChildName, $iROperationOptionRActivityKpiId, $sEnglishOptionChildName = '')
    {

        if (! is_string($sChildName)) {
            throw new \InvalidArgumentException('Argument "$sChildName" expects a string, "' . (is_object($sChildName) ? get_class($sChildName) : gettype($sChildName)) . '" given');
        }

        if (! is_null($iROperationOptionRActivityKpiId) && ! is_integer($iROperationOptionRActivityKpiId)) {
            throw new \InvalidArgumentException('Argument "$iROperationOptionRActivityKpiId" expects an integer, "' . (is_object($iROperationOptionRActivityKpiId) ? get_class($iROperationOptionRActivityKpiId) : gettype($iROperationOptionRActivityKpiId)) . '" given');
        }


        if (! is_string($sEnglishOptionChildName)) {
            throw new \InvalidArgumentException('Argument "$sEnglishOptionChildName" expects a string, "' . (is_object($sEnglishOptionChildName) ? get_class($sEnglishOptionChildName) : gettype($sEnglishOptionChildName)) . '" given');
        }

        if (in_array($this->getROpOptionType(), array(ROperationOptionsType::TYPE_CHECKBOX_CAT, ROperationOptionsType::TYPE_RADIO_CAT))) {
            $oChild = new ROperationOptions;
            $oChild->setROpOptionLibelle($sChildName);
            $oChild->setROpOptionType(ROperationOptionsType::TYPE_CHILDREN);
            $oChild->setROpOptionParent($this->getROpOptionId());
            $oChild->setROperationOptionRActivityKpiId($iROperationOptionRActivityKpiId);
            $oChild->setROpOptionOrder(count($this->getChildrenOptions()) + 1);
            if ($oChild->validate()) {
                $oChild->save();
                // If the child option english name is given, we add it to the i18n table
                if ($sEnglishOptionChildName) {
                    // 29225 Saving english translation of the child option
                    I18nQuery::create()->saveDataTranslations('r_operation_options', 'r_op_option_libelle', (int) $oChild->getROpOptionId(), $sEnglishOptionChildName, RLanguages::LOCALE_EN);
                }
            }
        }
    }

    public function linkPrestations($iRubriqueId, $aPrestaIdList)
    {
        $oRRubrique = RRubriquesQuery::create()->findOneByRRubId($iRubriqueId);
        if ($oRRubrique instanceof RRubriques) {
            foreach ($aPrestaIdList as $iPrestaId) {
                $oRPresta = RPrestationsQuery::create()->findOneByRPrestationId($iPrestaId);
                if ($oRPresta instanceof RPrestations) {
                    $oTpl = new ROperationOptionsTpl();
                    $oTpl->setROptId($this->getROpOptionId());
                    $oTpl->setRRubId($iRubriqueId);
                    $oTpl->setRPrestId($iPrestaId);
                    $oTpl->save();
                }
            }
        }
    }

    public function getParent()
    {
        if (! isset($this->_parentOption)) {
            $this->_parentOption = ROperationOptionsQuery::create()->findOneByROpOptionId($this->getROpOptionParent());
        }
        return $this->_parentOption;
    }

    public function getChildrenOptions($bForce = false, $bActiveOptionsOnly = false)
    {
        if (empty($this->_childrenOptions) || $bForce) {
            $oQuery = ROperationOptionsQuery::create()->filterByROpOptionParent($this->getROpOptionId())
                            ->filterByROpOptionType(ROperationOptionsType::TYPE_CHILDREN);
                            
            $oQuery = ($bActiveOptionsOnly) ? $oQuery->filterByActif(true) : $oQuery;
            $this->_childrenOptions = $oQuery->find();
        }
        return $this->_childrenOptions;
    }

    /**
     * Retrieves a collection of children options
     *
     * @param  boolean $bActiveOptionsOnly
     * @return \PropelObjectCollection
     */
    public function getOrderedChildrenOptions($bActiveOptionsOnly = false)
    {
        $oQuery = ROperationOptionsQuery::create()->filterByROpOptionParent($this->getROpOptionId())->orderByROpOptionOrder();
        $oQuery = ($bActiveOptionsOnly) ? $oQuery->filterByActif(true) : $oQuery;
        return $oQuery->find();
    }

    public function getChildrenCats($bForce = false)
    {
        if (empty($this->_childrenCategories) || $bForce) {
            $this->_childrenCategories = ROperationOptionsQuery::create()->filterByROpOptionParent($this->getROpOptionId())
                            ->filterByROpOptionType(array(ROperationOptionsType::TYPE_CHECKBOX_CAT, ROperationOptionsType::TYPE_RADIO_CAT))->find();
        }
        return $this->_childrenCategories;
    }

    /**
     * Return the current referenial of the option
     *      * @return array
     */
    public function getLinkedRubriques()
    {
        $oTemplateList = ROperationOptionsTplQuery::create()->findByROptId($this->getROpOptionId());

        $aData = array();
        $aRetrievedRubricsAndServices = array();
        foreach ($oTemplateList as $oTemplate) {
            if ($oTemplate instanceof ROperationOptionsTpl) {
                $iRubricId = $oTemplate->getRRubId();

                if (! array_key_exists($iRubricId, $aData)) {
                    // On récupère les infos de la rubrique et on initialise le tableau des prestations
                    $oRRubrique = RRubriquesQuery::create()->findOneByRRubId($iRubricId);
                    $aData[$iRubricId] = array(
                        'id' => $oRRubrique->getRRubId(),
                        'libelle' => $oRRubrique->getRRubLibelle(),
                        'prestations' => array()
                    );
                }

                // 40729 Retrieving only enabled services
                // In case a rubric does not contain any services, the rubric is hided
                $oRPrestation = RPrestationsQuery::create()->filterByActif(1)->findOneByRPrestationId($oTemplate->getRPrestId());
                if ($oRPrestation instanceof RPrestations) {
                    $aRetrievedRubricsAndServices[$iRubricId]['prestations'][] = array(
                        'tpl_id' => $oTemplate->getROpOptionTplId(),
                        'id' => $oRPrestation->getRPrestationId(),
                        'libelle' => $oRPrestation->getRPLibelle(),
                        'is_mandatory' => $oTemplate->getROpOptionTplIsMandatory()
                    );


                    if (! isset($aRetrievedRubricsAndServices[$iRubricId]['id']) || ! isset($aRetrievedRubricsAndServices[$iRubricId]['libelle'])) {
                        $aRetrievedRubricsAndServices[$iRubricId]['id'] = $aData[$iRubricId]['id'];
                        $aRetrievedRubricsAndServices[$iRubricId]['libelle'] = $aData[$iRubricId]['libelle'];
                    }
                }
            }
        }

        return $aRetrievedRubricsAndServices;
    }

    /**
     * Cette fonction récupére la traduction du libllé de l'option si la langue de
     * l'utilisateur est différente du Français. Si la langue est Français elle
     * retourne le libellé de l'option par défaut.
     *
     * @param  string $sLocal
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getTranslatedOptionLibelle($sLocal)
    {
        if (! is_string($sLocal)) {
            throw new \InvalidArgumentException('getTranslatedOptionLibelle Error, sLocal expects a string, "' . gettype($sLocal) . '" given');
        }

        if ($sLocal == RLanguages::LOCALE_FR) {
            return $this->getROpOptionLibelle();
        } else {
            $sEnglishTranslatedLibelle = I18nQuery::create()->findDataTranslations('r_operation_options', 'r_op_option_libelle', $this->getROpOptionId(), $sLocal);
            return (! $sEnglishTranslatedLibelle) ? $this->getROpOptionLibelle() : $sEnglishTranslatedLibelle;
        }
    }

    /**
     * Builds an array of leaf operation options and the full path to the root option
     *
     * @param  \PropelObjectCollection $oRootOperationOptions
     * @return array
     */
    public static function getOperationOptionsAncestorsByOptionsCollection(\PropelObjectCollection $oRootOperationOptions)
    {
        $aPathsData = array();
        foreach ($oRootOperationOptions as $oRootOperationOption) {
            self::getLeafOperationOptionsPathToRoot($oRootOperationOption, $aPathsData);
        }

        $aIndexedPathsData = array();
        foreach ($aPathsData as $iRopOptionId => $sROpOptionPath) {
            $aIndexedPathsData[$sROpOptionPath] = array('value' => $iRopOptionId);
        }
        return $aIndexedPathsData;
    }

    /**
     * Computes the path from the current option to the leaf options
     *
     * @param \ROperationOptions $oOperationOption
     * @param array $aPathData
     * @param string $sBuildedPath
     */
    public static function getLeafOperationOptionsPathToRoot(\ROperationOptions $oOperationOption, array &$aPathData, $sBuildedPath = '')
    {
        if (in_array($oOperationOption->getROpOptionType(), array(\ROperationOptionsType::TYPE_CHILDREN))) {
            $aPathData[(int) $oOperationOption->getROpOptionId()] = $sBuildedPath . ' / ' . $oOperationOption->getROpOptionLibelle();
        } else {
            $sBuildedPath = ($sBuildedPath) ? $sBuildedPath . ' / ' . $oOperationOption->getROpOptionLibelle() : $oOperationOption->getROpOptionLibelle();
            foreach ($oOperationOption->getOrderedChildrenOptions(true) as $oOperationOption) {
                self::getLeafOperationOptionsPathToRoot($oOperationOption, $aPathData, $sBuildedPath);
            }
        }
    }
}

// ROperationOptions
