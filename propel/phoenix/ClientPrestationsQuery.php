<?php

class ClientPrestationsQuery extends BaseClientPrestationsQuery
{

    /**
     * @param int $iClientId
     * @param bool $bWithNegoce completes the results with the negotiated price
     * @param array $aSearchedFields [r_prestation_id, r_p_libelle]
     * @return array
     */
    public function getReferenceServicesWithNegoceData(int $iClientId, bool $bWithNegoce, array $aSearchedFields) : array
    {
        if (! empty($aSearchedFields['op_id'])) {
            // If we have an operation number, we filter by the same services as the operation
            $aOperationPrestations = OperationPrestationsQuery::create()->findByOpId($aSearchedFields['op_id']);

            $aRPrestationsQuery = RPrestationsQuery::create()
                    ->joinOperationPrestations()
                    ->filterByOperationPrestations($aOperationPrestations);
        } else {
            $aRPrestationsQuery = RPrestationsQuery::create();
        }

        // Retrieve enabled services
        $aRPrestationsQuery = $aRPrestationsQuery->filterByActif(true);

        // Filter the services to be returned
        if (isset($aSearchedFields['or']) && $aSearchedFields['or']) {
            if (! empty($aSearchedFields['r_prestation_id'])) {
                $aRPrestationsQuery = $aRPrestationsQuery->filterByRPrestationId('%' . $aSearchedFields['r_prestation_id'] . '%', Criteria::LIKE);
            }
            $aRPrestationsQuery->_or();
        } else {
            if (! empty($aSearchedFields['r_prestation_id'])) {
                $aRPrestationsQuery = $aRPrestationsQuery->filterByRPrestationId($aSearchedFields['r_prestation_id']);
            }
        }
        if (! empty($aSearchedFields['r_p_libelle'])) {
            if (empty($aSearchedFields['r_p_libelle_lang']) || $aSearchedFields['r_p_libelle_lang'] == 'fr') {
                $aRPrestationsQuery->filterByRPLibelle('%' . $aSearchedFields['r_p_libelle'] . '%', Criteria::LIKE);
            } elseif ($aSearchedFields['r_p_libelle_lang'] == 'gb') {
                $aRPrestationsQuery->filterByRPLibelleEn('%' . $aSearchedFields['r_p_libelle'] . '%', Criteria::LIKE);
            }
        }
        if (! empty($aSearchedFields['r_p_axe1_id'])) {
            $aRPrestationsQuery->filterByRPAxe1($aSearchedFields['r_p_axe1_id'], Criteria::EQUAL);
        }
        if (! empty($aSearchedFields['r_p_axe3_id'])) {
            $aRPrestationsQuery->filterByRPAxe3($aSearchedFields['r_p_axe3_id'], Criteria::EQUAL);
        }
        if (! empty($aSearchedFields['r_p_axe4_id'])) {
            $aRPrestationsQuery->filterByRPAxe4($aSearchedFields['r_p_axe4_id'], Criteria::EQUAL);
        }
        if (! empty($aSearchedFields['r_p_groupe_validation_id'])) {
            $aRPrestationsQuery->filterByRPGroupeValidationId($aSearchedFields['r_p_groupe_validation_id'], Criteria::EQUAL);
        }
        if (! empty($aSearchedFields['r_p_prix_vente']) && ! empty($aSearchedFields['r_p_prix_vente_comp'])) {
            // Look for the comparator
            $sCriteria = Criteria::EQUAL;
            if ($aSearchedFields['r_p_prix_vente_comp'] == 'inf') {
                $sCriteria = Criteria::LESS_EQUAL;
            } elseif ($aSearchedFields['r_p_prix_vente_comp'] == 'sup') {
                $sCriteria = Criteria::GREATER_EQUAL;
            }

            $aRPrestationsQuery->filterByRPPrixVente($aSearchedFields['r_p_prix_vente'], $sCriteria);
        }
        if (! empty($aSearchedFields['r_p_cout_total']) && ! empty($aSearchedFields['r_p_cout_total_comp'])) {
            // Look for the comparator
            $sCriteria = Criteria::EQUAL;
            if ($aSearchedFields['r_p_cout_total_comp'] == 'inf') {
                $sCriteria = Criteria::LESS_EQUAL;
            } elseif ($aSearchedFields['r_p_cout_total_comp'] == 'sup') {
                $sCriteria = Criteria::GREATER_EQUAL;
            }

            $aRPrestationsQuery->filterByRPCoutTotal($aSearchedFields['r_p_cout_total'], $sCriteria);
        }

        // If the name corresponds to services negotiated for the client, then they are added to the result.
        if (! empty($aSearchedFields['r_p_libelle']) && $bWithNegoce) {
            // Searching for the service name in the name of the personalised service for the client
            $aClientPrestations = ClientPrestationsQuery::create()
                ->select('RPrestId')
                ->filterByClId($iClientId)->filterByRPClientLibelle('%' . $aSearchedFields['r_p_libelle'] . '%', Criteria::LIKE)
                ->find()->toArray();
            if ($aClientPrestations) {
                $aRPrestationsQuery->_or();
                $aRPrestationsQuery->filterByRPrestationId($aClientPrestations, Criteria::IN);
            }
        }

        $aRPrestationsQuery->orderByRPrestationId();
        return $aRPrestationsQuery->find()->toArray('RPrestationId', false, Basepeer::TYPE_FIELDNAME);
    }
}
