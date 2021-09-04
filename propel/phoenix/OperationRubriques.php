<?php

class OperationRubriques extends BaseOperationRubriques
{

    protected static $vatData = null;

    /**
     * @var RRubriques
     */
    protected $associatedSection;

    /**
     * Change status check function carried out automatically when released
     *
     * @return boolean
     */
    protected function _validateIsModifiable()
    {

        if (in_array($this->getOperations()->getOpStatusId(), array(Operations::STATUS_EN_COURS, Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))) {
            return true;
        } else {
            $this->addValidationFailed('L\'opération doit avoir le statut en cours, acceptée ou soldée');
            return false;
        }
    }

    /**
     * Function for checking the possibility of deletion of a section
     *
     * @return boolean
     */
    protected function _checkIfDeletable()
    {
        // Added control over associating the wage type with services to avoid violations of foreign key constraints
        $iAttachedServices = OperationPrestationsQuery::create()->filterByOpPrestRubriId($this->getOpRubriqueId())->count();

        if ($iAttachedServices > 0) {
            $this->addValidationFailed('La rubrique ne peut pas être supprimée, car elle est associée à ' . $iAttachedServices . ' préstation(s).');
            return false;
        }

        return true;
    }

    /**
     * Get the associated section (RRubriques object)
     *
     * @param  PropelPDO $oConnection Optional Connection object.
     * @return RRubriques The associated RRubriques object.
     * @throws PropelException
     */
    public function getAssociatedSection(PropelPDO $oConnection = null)
    {
        $iOpRRubriqueId = $this->getOpRRubriqueId();
        if ($this->associatedSection === null && $iOpRRubriqueId !== null) {
            $this->associatedSection = RRubriquesQuery::create()->findPk($iOpRRubriqueId, $oConnection);
            /* The following can be used additionally to
              guarantee the related object contains a reference
              to this object.  This level of coupling may, however, be
              undesirable since it could result in an only partially populated collection
              in the referenced object.
              $this->aRRubriques->addOperationRubriquess($this);
             */
        }
        return $this->associatedSection;
    }

    /**
     * Retrieves the label in the language defined for the operation
     *
     * @param string $sLangId
     * @return string
     */
    public function getOpRubriqueLibelleTranslated($sLangId = null) : string
    {
        $sText = '';

        if (! isset($sLangId)) {
            $sLangId = $this->getOperations()->getOpDevisLang();
        }

        switch ($sLangId) {
            case RLanguages::LANG_ENG:
                $oAssociatedSection = $this->getAssociatedSection();
                if ($oAssociatedSection) {
                    if ($this->getOpRubriqueLibelle() != $oAssociatedSection->getRRubLibelle()) {
                        $sText = $this->getOpRubriqueLibelle();
                    } else {
                        $sText = $oAssociatedSection->getRRubLibelleEn();
                    }
                }
                break;
        }

        if (trim($sText)) {
            return $sText;
        } else {
            return $this->getOpRubriqueLibelle();
        }
    }

    /**
     * Deletion of a field, causes the sections to be unstacked
     *
     * @param PropelPDO $oConnection
     * @return boolean
     */
    public function delete(PropelPDO $oConnection = null) : bool
    {
        if ($this->_validateIsModifiable() && $this->_checkIfDeletable()) {
            parent::delete($oConnection);

            // Removal of benefits related to the heading
            OperationPrestationsQuery::create()->filterByOpPrestRubriId($this->getOpRubriqueId())->delete();

            // Unstack sections
            $oConnection = $this->getConnection();
            $oConnection->exec('
                UPDATE operation_rubriques
				SET op_rubrique_order = op_rubrique_order-1
				WHERE op_rubrique_order > \'' . $this->getOpRubriqueOrder() . '\'
                AND op_id = \'' . $this->getOpId() . '\'
            ');
            return true;
        }
        return false;
    }

    public function save(PropelPDO $oConnection = null)
    {

        if ($this->isNew()) {
            // Incrementing the operation-specific section order
            $this->setOpRubriqueOrder(OperationRubriquesQuery::create()->filterByOpId($this->getOpId())->count()+1);
        }

        parent::save($oConnection);
    }

    /**
     * Update the rank of the section
     *
     * @param int $iNewOrder
     */
    public function updatePosition(int $iNewOrder) : bool
    {

        if ($this->_validateIsModifiable()) {
            $iOldOrder = $this->getOpRubriqueOrder();
            $this->setOpRubriqueOrder(0);
            $this->save();

            $oConnection = $this->getConnection();

            if ($iOldOrder > $iNewOrder) {
                $oConnection->exec("update operation_rubriques
				set op_rubrique_order=op_rubrique_order+1
				where op_rubrique_order between '" . $iNewOrder . "' and '" . $iOldOrder . "'
					and op_id='" . $this->getOpId() . "'");
            }
            if ($iOldOrder < $iNewOrder) {
                $oConnection->exec("update operation_rubriques
				set op_rubrique_order=op_rubrique_order-1
				where op_rubrique_order between '" . $iOldOrder . "' and '" . $iNewOrder . "'
					and op_id='" . $this->getOpId() . "'");
            }

            $this->setOpRubriqueOrder($iNewOrder);
            $this->save();
            return true;
        }
        return false;
    }

    /**
     * Calculation of the estimated amount for the wage type, the benefits offered or npa are not taken into account
     *
     * @return float
     */
    public function getMontantTotalEstim()
    {
        return Data_Compta_Calcul_Operation::montantTotalEstim($this->getOperationPrestationss());
    }

    /**
     * Calculation of the amount realized for the wage type, the benefits offered are not taken into account
     *
     * @return float
     */
    public function getMontantTotalReel()
    {
        return Data_Compta_Calcul_Operation::montantTotalReel($this->getOperationPrestationss());
    }

    /**
     * Calculation of the estimated total amount including all taxes, the benefits offered are not taken into account
     *
     * @return float
     */
    public function getMontantTotalEstimTtc()
    {
        if (self::$vatData == null) {
            self::$vatData = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);
        }
        return $this->getMontantTotalEstim() * self::$vatData[$this->getRTvaTypeId()]['r_tva_coeff'];
    }

    /**
     * Computes the estimated total ca type service amount of the rubric
     * Gifted service and hidden service are excluded
     *
     * @return float
     */
    public function getMontantTotalEstimCa()
    {
        return Data_Compta_Calcul_Operation::computeMontantTotalEstimCa($this->getOperationPrestationss());
    }

}
