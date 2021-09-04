<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Operation
 *
 * @author info20
 */
class Data_Compta_Calcul_Operation
{

    /**
     * calcul le montant estimé sur un ensemble de prestations
     * @param PropelObjectCollection | OperationPrestations[] $aPrestations
     */
    public static function montantTotalEstim($aPrestations)
    {

        $total = 0;
        foreach ($aPrestations as $prestation) {
            if ($prestation->getOpPrestOff() == false && $prestation->getOpPrestNpa() == false) {
                $total+=$prestation->getOpPrestMestim();
            }
        }

        return $total;
    }

    /**
     * calcul du montant réalisé sur un ensemble de prestations
     * les prestations offertes ne sont pas prises en comptes
     * @return float
     */
    public static function montantTotalReel($aPrestations)
    {

        $total = 0;
        foreach ($aPrestations as $prestation) {
            if (!$prestation->getOpPrestOff()) {
                $total+=$prestation->getOpPrestMreel();
            }
        }
        return $total;
    }

    /**
     * calcul marge estimée sur un ensemble de prestations
     * @param PropelObjectCollection | OperationPrestations[] $aPrestations
     * @return float
     */
    public static function margeEstim($aPrestations)
    {
        $total = 0;
        foreach ($aPrestations as $prestation) {
            /* @var $prestation OperationPrestations */
            if ($prestation->getOpPrestOff() == false && $prestation->getOpPrestNpa() == false) {
				/* feature/#85740 */
				if($prestation->getOpRPrestId() != 174){
					$total+=$prestation->getOpPrestMargeEstim();
				}
            }
        }
        return $total;
    }

    /**
     * calcul marge réalisée sur un ensemble de prestations
     * @param PropelObjectCollection | OperationPrestations[] $aPrestations
     * @return float
     */
    public static function margeReel($aPrestations)
    {
        $total = 0;
        foreach ($aPrestations as $prestation) {
            /* @var $prestation OperationPrestations */
            if ($prestation->getOpPrestOff() == false && $prestation->getOpPrestNpa() == false) {
				/* feature/#85740 */
				if($prestation->getOpRPrestId() != 174){
					$total+=$prestation->getOpPrestMargeReelle();
				}
            }
        }
        return $total;
    }

    /**
     * Computes the estimated total CA type services amount
     * @param PropelObjectCollection | OperationPrestations[] $aPrestations
     * @return float
     */
    public static function computeMontantTotalEstimCa(PropelObjectCollection $oServices)
    {
        $fTotalCaEstimated = 0;
        foreach ($oServices as $oService) {
            /* @var $prestation OperationPrestations */
            if ($oService->getOpPrestOff() == false && $oService->getOpPrestNpa() == false && $oService->isCaTypeService()) {
                $fTotalCaEstimated+=$oService->getOpPrestMestim();
            }
        }
        return $fTotalCaEstimated;
    }
}
