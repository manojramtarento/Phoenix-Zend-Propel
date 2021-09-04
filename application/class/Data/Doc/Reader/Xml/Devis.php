<?php

class Data_Doc_Reader_Xml_Devis extends Data_Doc_Reader_Xml
{

    /**
     * Populate the structure from xml data
     */
    function _fillStructByXML()
    {
        // Read XML and build default structure
        $this->structure = array(
            'data' => array(
                'first_page' => array(),
                'last_page' => array()
            ),
            'scenario' => array(
                'prestations' => array(),
            ),
            'budget_estime' => array(
                'prestations' => array(),
                'budget_total_ht' => '',
                'budget_total_tva' => array(),
                'budget_total_ttc' => '',
                'facture_estimee' => array(),
                'facturation_prev' => array()
            ),
            'rubriques' => array(
                'total_ht' => '',
                'rubrique' => array()
            ),
            'remboursements' => array(
                'total_ttc' => '',
                'prestations' => array()
            ),
            'affranchissements' => array(
                'total' => '',
                'prestations' => array()
            )
        );
        $aLookForFirstPage = array('nom_contact', 'email_contact', 'tel_contact', 'fax_contact', 'mobile_contact', 'descriptif_operation',
            'nom_offre', 'num_devis', 'date_devis', 'num_version_devis', 'contact_client', 'nom_client', 'adresse_1', 'adresse_2',
            'adresse_3', 'code_postal', 'ville', 'pays', 'date_start_op', 'date_end_op', 'date_fin_postale', 'date_fin_gestion', 'validite_devis');

        $aLookForLastPage = array('adresse_facturation', 'contact_facturation', 'num_tva');

        $aLookForScenarioServices = array('libelle', 'quantite', 'taux_estime', 'total_estime');
        $aLookForServicesBudget = array('libelle', 'ht', 'ttc');
        $aLookForBudgetInvoicing = array('libelle', 'date_facture');
        $aLookForSectionsServices = array('r_prest_id', 'libelle', 'descriptif', 'pu', 'quantite', 'total_ht');
        $aLookForServicesRefunds = array('r_prest_id', 'libelle', 'descriptif', 'pu', 'quantite', 'total_ttc');
        $aLookForPostageService = array('r_prest_id', 'libelle', 'descriptif', 'pu', 'quantite', 'total');

        // On récupère les données pour la première page
        $oFirstPageElement = $this->_dom->getElementsByTagName('first_page')->item(0);
        $aFirstPageData = $this->retrieveXMLDataArray($aLookForFirstPage, $oFirstPageElement);
        $this->structure['data']['first_page'] = array_merge($this->structure['data']['first_page'], $aFirstPageData);

        // On récupère les données pour la dernière page
        $oLastPageElement = $this->_dom->getElementsByTagName('last_page')->item(0);
        $aLastPageData = $this->retrieveXMLDataArray($aLookForLastPage, $oLastPageElement);
        $this->structure['data']['last_page'] = array_merge($this->structure['data']['last_page'], $aLastPageData);

        // On récupère les données pour la partie scénario
        $aScenarioServices = $this->_dom->getElementsByTagName('scenario_prestation');
        foreach ($aScenarioServices as $scenario_prestation) {
            $presta_data = $this->retrieveXMLDataArray($aLookForScenarioServices, $scenario_prestation);
            $this->structure['scenario']['prestations'][] = $presta_data;
        }

        // On récupère les données pour la partie budget
        // -- prestation
        $budget_prestations = $this->_dom->getElementsByTagName('budget_prestation');
        foreach ($budget_prestations as $budget_prestation) {
            $presta_data = $this->retrieveXMLDataArray($aLookForServicesBudget, $budget_prestation);
            $this->structure['budget_estime']['prestations'][] = $presta_data;
        }
        // -- budget_total
        $budget_estimeTag = $this->_dom->getElementsByTagName('budget_estime')->item(0);
        $this->structure['budget_estime']['budget_total_ht'] = $budget_estimeTag->getElementsByTagName('budget_total_ht')->item(0)->nodeValue;
        $this->structure['budget_estime']['budget_total_ttc'] = $budget_estimeTag->getElementsByTagName('budget_total_ttc')->item(0)->nodeValue;
        $this->structure['budget_estime']['budget_total_estime_hors_tva'] = $budget_estimeTag->getElementsByTagName('budget_total_estime_hors_tva')->item(0)->nodeValue;
        // -- traitement spécifique des taux de tva
        $tva_elts = $this->_dom->getElementsByTagName('budget_total_tva');
        foreach ($tva_elts as $elt) {
            $taux = $elt->getAttribute('taux');
            $value = $elt->nodeValue;

            $this->structure['budget_estime']['budget_total_tva'][] = array(
                'taux' => $taux,
                'value' => $value
            );
        }
        // -- facturation_prev
        $factures = $this->_dom->getElementsByTagName('facture');
        foreach ($factures as $facture) {
            $facture_data = $this->retrieveXMLDataArray($aLookForBudgetInvoicing, $facture);
            $this->structure['budget_estime']['facturation_prev'][] = $facture_data;
        }

        // On récupère le bloc 'rubriques'
        $rubriquesTag = $this->_dom->getElementsByTagName('rubriques')->item(0);
        $this->structure["rubriques"]['total_ht'] = $rubriquesTag->getElementsByTagName('total_ht')->item(0)->nodeValue;

        // -- On récupère les rubriques
        $rubriques = $rubriquesTag->getElementsByTagName('rubrique');
        foreach ($rubriques as $rubrique) {
            // On récupère les prestations
            $prestations = array();
            $prestationsTag = $rubrique->getElementsByTagName('prestation');

            foreach ($prestationsTag as $prestation) {
                $presta_data = $this->retrieveXMLDataArray($aLookForSectionsServices, $prestation);
                $prestations[] = $presta_data;
            }

            $this->structure['rubriques']['rubrique'][] = array(
                'title' => $rubrique->getElementsByTagName('title')->item(0)->nodeValue,
                'total_ht' => $rubrique->getElementsByTagName('total_ht')->item(0)->nodeValue,
                'has_tva' => $rubrique->getElementsByTagName('has_tva')->item(0)->nodeValue,
                'prestations' => $prestations
            );
        }


        // On récupère le bloc 'remboursements'
        $rembTag = $this->_dom->getElementsByTagName('remboursements')->item(0);
        if ($rembTag) {
            $this->structure['remboursements']['total_ttc'] = $rembTag->getElementsByTagName('total_ttc')->item(0)->nodeValue;

            // -- On récupère les remboursement
            $remboursements = $rembTag->getElementsByTagName('remboursement');
            foreach ($remboursements as $remboursement) {
                $remb_data = $this->retrieveXMLDataArray($aLookForServicesRefunds, $remboursement);
                $this->structure['remboursements']['prestations'][] = $remb_data;
            }
        }


        // On récupère le bloc 'affranchissements'
        $affTag = $this->_dom->getElementsByTagName('affranchissements')->item(0);
        if ($affTag) {
            $this->structure['affranchissements']['total'] = $affTag->getElementsByTagName('total')->item(0)->nodeValue;

            // -- On récupère les affranchissement
            $affranchissements = $affTag->getElementsByTagName('affranchissement');
            foreach ($affranchissements as $affranchissement) {
                $aff_data = $this->retrieveXMLDataArray($aLookForPostageService, $affranchissement);
                $this->structure['affranchissements']['prestations'][] = $aff_data;
            }
        }
    }
}
