<?php

class Data_Doc_Reader_Xml_Facture extends Data_Doc_Reader_Xml
{

    /**
     *
     * @param string $xml
     */
    public function __construct($xml)
    {
        parent::__construct($xml);
    }

    /**
     * Fills the data structue from XML flow
     */
    function _fillStructByXML()
    {

        // Expected Data
        $this->structure = array(
            'data' => array(
                'page_garde' => array(),
                'first_page' => array(),
                'last_page' => array(
                    'total_tva' => array()
                )
            ),
            'rubriques' => array(),
            'affranchissements' => array(
                'total' => 0.0,
                'prestations' => array()
            )
        );

        $aFirstPageDataEntries = array('mention_fact', 'type_fact', 'num_bdc', 'num_facture', 'date_facture', 'nom_client', 'contact_client', 'adresse_1', 'adresse_2',
            'adresse_3', 'code_postal', 'ville', 'pays', 'num_operation', 'titre_operation', 'num_dossier', 'nom_responsable_suivi',
            'contact_telephonique_responsable', 'date_start_op', 'date_end_op', 'date_fin_postale', 'date_fin_gestion', 'display_header_reverse_charge', 'customer_vat_registration_number', 'mentions_specifiques',);

        $aCoverPageDataEntries = array('pg_nom_client', 'pg_contact_client', 'pg_adresse_1', 'pg_adresse_2', 'pg_adresse_3', 'pg_code_postal', 'pg_ville', 'pg_pays',);

        $aLastPageDataEnteries = array('total_ht_soumis_a_tva', 'total_a_payer', 'reglement_delai', 'reglement_date', 'display_instruction_remboursement', 'num_tva');

        $aServicesDataEnteries = array('r_prest_id', 'libelle', 'descriptif', 'tarif_unitaire', 'cumul_total', 'deja_facture', 'solde_a_facturer', 'montant');

        // Retrieving flyleaf data
        $oCoverPageElement = $this->_dom->getElementsByTagName('page_garde')->item(0);
        $aCoverPageData = $this->retrieveXMLDataArray($aCoverPageDataEntries, $oCoverPageElement);
        $this->structure['data']['page_garde'] = array_merge($this->structure['data']['page_garde'], $aCoverPageData);

        // Retrieving first page data
        $oFirstPageElement = $this->_dom->getElementsByTagName('first_page')->item(0);
        $oFirstPageData = $this->retrieveXMLDataArray($aFirstPageDataEntries, $oFirstPageElement);
        $this->structure['data']['first_page'] = array_merge($this->structure['data']['first_page'], $oFirstPageData);

        // Retrieving last page data
        $oLastPageElement = $this->_dom->getElementsByTagName('last_page')->item(0);
        $oLastPageData = $this->retrieveXMLDataArray($aLastPageDataEnteries, $oLastPageElement);
        $this->structure['data']['last_page'] = array_merge($this->structure['data']['last_page'], $oLastPageData);

        // Specific processes for VAT ratios
        $oVatElements = $oLastPageElement->getElementsByTagName('total_tva');
        foreach ($oVatElements as $oElement) {
            $fTaux = $oElement->getAttribute('taux');
            $sValue = $oElement->nodeValue;

            $this->structure['data']['last_page']['total_tva'][] = array(
                'taux' => $fTaux,
                'value' => $sValue,
            );
        }

        // Retrieving rubrics
        $oRubrics = $this->_dom->getElementsByTagName('rubrique');
        foreach ($oRubrics as $oRubric) {
            // Retrieving services
            $aServices = array();
            $oServiceTag = $oRubric->getElementsByTagName('prestation');

            foreach ($oServiceTag as $oService) {
                $aServicesData = $this->retrieveXMLDataArray($aServicesDataEnteries, $oService);
                $aServices[] = $aServicesData;
            }

            $bDisplayRecoverableVat = $oRubric->getElementsByTagName('display_recoverable_vat')->item(0)->nodeValue;
            $aRubricData = array(
                'tva' => $oRubric->getElementsByTagName('tva')->item(0)->nodeValue,
                'title' => $oRubric->getElementsByTagName('title')->item(0)->nodeValue,
                'total_ht' => $oRubric->getElementsByTagName('total_ht')->item(0)->nodeValue,
                'display_recoverable_vat' => $bDisplayRecoverableVat,
                'prestations' => $aServices,
            );
            if ($bDisplayRecoverableVat) {
                $aRubricData = array_merge($aRubricData, array(
                    'rubric_recoverable_vat_amont' => $oRubric->getElementsByTagName('rubric_recoverable_vat_amont')->item(0)->nodeValue,
                    'rubric_exluding_taxes_amount' => $oRubric->getElementsByTagName('rubric_exluding_taxes_amount')->item(0)->nodeValue,
                ));
            }

            $this->structure['rubriques'][] = $aRubricData;
        }

        $oAffranchissementsTag = $this->_dom->getElementsByTagName('affranchissements')->item(0);

        if ($oAffranchissementsTag && $oAffranchissementsTag->getElementsByTagName('total')->item(0)) {
            $this->structure['affranchissements']['tva'] = $oAffranchissementsTag->getElementsByTagName('tva')->item(0)->nodeValue;
            $this->structure['affranchissements']['total'] = $oAffranchissementsTag->getElementsByTagName('total')->item(0)->nodeValue;

            $oAffranchissements = $oAffranchissementsTag->getElementsByTagName('prestation');
            foreach ($oAffranchissements as $oService) {
                $aServices = $this->retrieveXMLDataArray($aServicesDataEnteries, $oService);
                $this->structure['affranchissements']['prestations'][] = $aServices;
            }
        }
    }
}
