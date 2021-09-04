<?php

/**
 * This class has been made as a service to be used by the controller description
 * located in the operation module
 *
 * @author Amine JAAOUANI
 */
class Phoenix_Operation_Description_Service_DescriptionService
{

    /**
     *
     * @var \Operations
     */
    protected $operation;

    /**
     *
     * @param \Operations $oOperation
     */
    public function __construct(\Operations $oOperation = null)
    {
        if ($oOperation) {
            $this->setOperation($oOperation);
        }
    }

    /**
     * Checks if International pack option is selected
     *
     * @param  boolean $bIsOptionSelected
     * @param  integer $iOperationOptionId
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isInternationalOpPackSelected($bIsOptionSelected, $iOperationOptionId)
    {

        if (!is_bool($bIsOptionSelected)) {
            throw new \InvalidArgumentException('Argument "$bIsOptionSelected" expects a boolean, "' . (is_object($bIsOptionSelected) ? get_class($bIsOptionSelected) : gettype($bIsOptionSelected)) . '" given');
        }


        if (!is_integer($iOperationOptionId)) {
            throw new \InvalidArgumentException('Argument "$iOperationOptionId" expects an integer , "' . (is_object($iOperationOptionId) ? get_class($iOperationOptionId) : gettype($iOperationOptionId)) . '" given');
        }

        return $bIsOptionSelected && $iOperationOptionId === ROperationOptions::OPT_PACK_OP_INTERNATIONAL;
    }

    /**
     * Check if the required number of countries associated to the operation is valid for the option international pack
     *
     * @return boolean
     */
    public function areCountriesMissingForTheSelectedInternationalPack()
    {

        $aCountriesId = RCountriesQuery::create()->getOperationRelatedCountries($this->getOperation()->getOpId());
        $iNumberOfRelatedCountries = count($aCountriesId);

        return (($iNumberOfRelatedCountries === 1 && in_array(RCountriesQuery::create()->getFranceCountryId(), $aCountriesId)) || $iNumberOfRelatedCountries === 0);
    }

    /**
     * Checks if the given options has some related services
     *
     * @param  integer $iROpOptionId
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function hasROpOptionLinkedServices($iROpOptionId)
    {

        if (!is_integer($iROpOptionId)) {
            throw new \InvalidArgumentException('Argument "$iROpOptionId" expects an integer , "' . (is_object($iROpOptionId) ? get_class($iROpOptionId) : gettype($iROpOptionId)) . '" given');
        }

        return ROperationOptionsQuery::create()->isOptionLinkedWithPrestation($iROpOptionId);
    }

    /**
     * Checks if the operation has a specific status and that the operation has been pushed to Gedelog
     *
     * @return boolean
     */
    public function hasTheOperationASpecificStatusAndIsPushedToGedelog()
    {
        $oOperation = $this->getOperation();
        return in_array($oOperation->getOpStatusId(), array(Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE, Operations::STATUS_CLOTURE, Operations::STATUS_REFUS)) && $oOperation->isPushedToGedelog();
    }

    /**
     * Retrieves data about the given option related services and its wrapping rubric
     *
     * @param  integer $iROpOptionId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getROpOptionRelatedRubricsAndActifServices($iROpOptionId)
    {
        if (!is_integer($iROpOptionId)) {
            throw new \InvalidArgumentException('Argument "$iROpOptionId" expects an integer , "' . (is_object($iROpOptionId) ? get_class($iROpOptionId) : gettype($iROpOptionId)) . '" given');
        }

        return ROperationOptionsTplQuery::create()->getROpOptionRelatedRubricsAndActifServices($iROpOptionId);
    }

    /**
     * Adds mandatory and optional services to the quotation
     *
     * @param array $aSelectedOptionalOptions
     * @param array $aAllRelatedServices
     */
    public function addROpOperationOptionRelatedServicesToTheQuote(array $aSelectedOptionalOptions, array $aAllRelatedServices)
    {

        $oOperation = $this->getOperation();

        foreach ($aAllRelatedServices as $iRubricId => $aRubricData) {
            foreach ($aRubricData['services'] as $iServiceId => $aServices) {
                if (($aServices['r_op_option_tpl_is_mandatory'] == 1) || (isset($aSelectedOptionalOptions[$iRubricId]) && $aServices['r_op_option_tpl_is_mandatory'] == 0 && in_array($iServiceId, array_values($aSelectedOptionalOptions[$iRubricId])))) {
                    $iOperationRubricId = isset($iOperationRubricId) ? $iOperationRubricId : $oOperation->addRubriqueFromReferentiel($iRubricId);
                    $oPrestation = $oOperation->replacePrestationFromReferentiel($iServiceId, $iOperationRubricId, false);
                    if ($oPrestation instanceof OperationPrestations) {
                        $oPrestation->setOpPrestIsMandatory($aServices['r_op_option_tpl_is_mandatory'])->save();
                    }
                }
            }
            unset($iOperationRubricId);
        }
    }

    /**
     * Adds or moves an option in/from the quotation
     *
     * @param  integer $iROpOptionId
     * @param  boolean $bIOptionLinked
     * @throws \InvalidArgumentException
     */
    public function updateOperationOption($iROpOptionId, $bIOptionLinked)
    {

        if (!is_integer($iROpOptionId)) {
            throw new \InvalidArgumentException('Argument "$iROpOptionId" expects an integer , "' . (is_object($iROpOptionId) ? get_class($iROpOptionId) : gettype($iROpOptionId)) . '" given');
        }

        if (!is_integer($bIOptionLinked)) {
            throw new \InvalidArgumentException('Argument "$bIOptionLinked" expects an integer , "' . (is_object($bIOptionLinked) ? get_class($bIOptionLinked) : gettype($bIOptionLinked)) . '" given');
        }

        $this->getOperation()->replaceOption($iROpOptionId, $bIOptionLinked);
    }

    /**
     * Gets the property operation value
     *
     * @return \Operations
     * @throws \LogicException
     */
    public function getOperation()
    {
        if ($this->operation instanceof \Operations) {
            return $this->operation;
        }
        throw new \LogicException('Property "operation" expects an instance of "\Operations"' . (is_object($this->operation) ? get_class($this->operation) : gettype($this->operation)) . '" defined');
    }

    /**
     * Sets the property operation value
     *
     * @param  \Operations $oOperation
     * @return \Phoenix_Operation_Service_OperationOptionsExporter
     */
    public function setOperation(\Operations $oOperation)
    {
        $this->operation = $oOperation;
        return $this;
    }
}
