<?php

/**
 * Skeleton subclass for performing query and update operations on the 'r_operation_options_tpl' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationOptionsTplQuery extends BaseROperationOptionsTplQuery
{

    /**
     * Return an array of option's tpl data, with the number of active services
     * returned data are in the format data[option_id] = number_of_linked_active_prestations
     *
     * @return array
     */
    public function getNbLinkedPrestationsPerOption()
    {
        $sSqlQuery = 'SELECT ropt.r_opt_id, count(*)as nb
                    FROM r_operation_options_tpl as ropt
                    LEFT JOIN r_prestations as rp
                    ON rp.r_prestation_id = ropt.r_prest_id
                    where rp.actif = 1
                    GROUP BY ropt.r_opt_id';
        return Zend_Db_Table::getDefaultAdapter()->fetchPairs($sSqlQuery);
    }

    /**
     * Returns an array of actives services and their wrapping rubrics, related to the given option id
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

        $sSelectServicesQuery = 'SELECT rub.r_rub_id, rub.r_rub_libelle, prest.r_prestation_id, prest.r_p_libelle, tpl.r_op_option_tpl_is_mandatory
                                FROM r_operation_options_tpl as tpl
                                    INNER JOIN r_rubriques rub ON rub.r_rub_id = tpl.r_rub_id
                                    INNER JOIN r_prestations prest ON prest.r_prestation_id = tpl.r_prest_id and prest.actif = :bActivity
                                    WHERE tpl.r_opt_id = :iROpOptionId
                                ORDER BY rub.r_rub_id, tpl.r_op_option_tpl_is_mandatory desc, prest.r_prestation_id';

        $oStatement = Propel::getConnection()->prepare($sSelectServicesQuery);
        $oStatement->bindValue(':bActivity', 1, PDO::PARAM_INT);
        $oStatement->bindValue(':iROpOptionId', $iROpOptionId, PDO::PARAM_INT);
        $oStatement->execute();
        $aServices = $oStatement->fetchAll(PDO::FETCH_ASSOC);
        $aRelatedServices = array();

        return array_reduce($aServices, function ($aBuildedResult, $aCurrentItem) {
            if (!isset($aBuildedResult[$aCurrentItem['r_rub_id']])) {
                $aBuildedResult[$aCurrentItem['r_rub_id']]['r_rub_libelle'] = $aCurrentItem['r_rub_libelle'];
            }
            $aBuildedResult[$aCurrentItem['r_rub_id']]['services'][$aCurrentItem['r_prestation_id']] = array(
                'r_p_libelle' => $aCurrentItem['r_p_libelle'],
                'r_op_option_tpl_is_mandatory' => $aCurrentItem['r_op_option_tpl_is_mandatory']);
            return $aBuildedResult;
        }, $aRelatedServices);
    }
}

// ROperationOptionsTplQuery
