<?php

class FacturesPrestations extends BaseFacturesPrestations
{

    /**
     * Reimbursement or non-reimbursement benefit
     *
     * @return bool
     */
    public function isRemboursement() : bool
    {
        return preg_match('/^467/', $this->getRPCodeComptable()) === 1;
    }

    /**
     * @param float $fRecoverableVatRatio
     * @return array
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function computeServiceRecoverableVatAndExludingTaxesAmounts($fRecoverableVatRatio) : array
    {

        if (! is_float($fRecoverableVatRatio)) {
            throw new \InvalidArgumentException('Argument "$fRecoverableVatRatio" for the service "' . $this->getFactPrestId() . '" expects a float, "' . gettype($fRecoverableVatRatio) . '" given');
        }
        if (0 == $fRecoverableVatRatio) {
            throw new \LogicException('Recoverable Vat ratio canno\'t be equivalent to 0');
        }

        $fServiceAllInclusiveTaxesAmont = (float) $this->getFactPrestMontantFactureFinal();
        $fServiceRecoverableVatAmount = round(($fServiceAllInclusiveTaxesAmont - ($fServiceAllInclusiveTaxesAmont / $fRecoverableVatRatio)), 2);
        return array('service_recoverable_vat_amont' => $fServiceRecoverableVatAmount, 'service_exluding_taxes_amount' => $fServiceAllInclusiveTaxesAmont - $fServiceRecoverableVatAmount);
    }

    /**
     * Indicates weither a given service is already charged in an invoice
     *
     * @param int $iServiceId
     * @return bool
     */
    public static function checkIfServiceIsCharged(int $iServiceId) : bool
    {

        return (bool) FacturesPrestationsQuery::create()
                        ->filterByOpPrestId($iServiceId)
                        ->filterByFactPrestQuantiteFacture(0, Criteria::GREATER_THAN)
                        ->find()
                        ->count();
    }
}
