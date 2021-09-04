<?php

class Data_Doc_Writer_Excel_Facture extends Data_Doc_Writer_Excel
{
    public function __construct(\Data_Doc_Reader $oPhoenixDocReader)
    {
        parent::__construct($oPhoenixDocReader);
        $this->_addInfo();
        $this->_addPrestations();
        $this->_addInfosPaiement();
    }

    protected function _formatMotant($iAmount)
    {
        return number_format((double) $iAmount, 2, ',', ' ');
    }

    protected function _addInfo()
    {

        $iColumn = 0;
        $iRow = 1;
        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('Info OP');

        $aInvoiceHeader = sprintf($this->_translations['header_facture'], $this->structure['data']['first_page']['type_fact'], $this->structure['data']['first_page']['num_facture'], $this->structure['data']['first_page']['date_facture']);
        $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $aInvoiceHeader);

        $iRow++;

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_OPERATION_DATA)) {
            $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, sprintf($this->_translations['header_offre'], $this->structure['data']['first_page']['titre_operation']));
            $iRow++;
        }

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_CLIENT_CONTACT_DATA)) {
            $iColumn = 0;
            $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->_translations['a_lattention_de'] . ' :');
            $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->structure['data']['first_page']['contact_client']);
        } else {
            $iColumn = 1;
        }

        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['nom_client']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['adresse_1']);
        if (! empty($this->structure['data']['first_page']['adresse_2'])) {
            $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['adresse_2']);
        }
        if (! empty($this->structure['data']['first_page']['adresse_3'])) {
            $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['adresse_3']);
        }
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['code_postal'] . ' ' . $this->structure['data']['first_page']['ville']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['pays']);

        $iRow++;

        $oSheet->setCellValueByColumnAndRow($iColumn = 0, ++$iRow, $this->_translations['contact']['title'] . ' :');
        $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->structure['data']['first_page']['nom_responsable_suivi']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['contact_telephonique_responsable']);

        $iRow++;

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES)) {
            $sDateStartOp = $this->structure['data']['first_page']['date_start_op'];
            $sDateEndOp = $this->structure['data']['first_page']['date_end_op'];
            $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['duree_op']);
            $oSheet->setCellValueByColumnAndRow(1, $iRow, $this->_translations['du'] . ' ' . $sDateStartOp . ' ' . $this->_translations['au'] . ' ' . $sDateEndOp);
        }

        $sDateFinPostale = $this->structure['data']['first_page']['date_fin_postale'];
        if ($sDateFinPostale && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE)) {
            $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['fin_postale']);
            $oSheet->setCellValueByColumnAndRow(1, $iRow, $sDateFinPostale);
        }

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE)) {
            $sDateFinGestion = $this->structure['data']['first_page']['date_fin_gestion'];
            if ($sDateFinGestion) {
                $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['fin_gestion']);
                $oSheet->setCellValueByColumnAndRow(1, $iRow, $sDateFinGestion);
            }
        }
    }

    protected function _addPrestations()
    {

        $iColumn = 0;
        $iRow = 1;
        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('Opération');

        $aHeadings = $this->structure['rubriques'];

        // The postage charges are added as a heading
        if (count($this->structure['affranchissements']['prestations']) > 0) {
            $aPostage = $this->structure['affranchissements'];
            $aPostage['title'] = $this->_translations['header_aff_fp'];
            $aPostage['total_ht'] = $this->structure['affranchissements']['total'];
            $aPostage['tva'] = $this->structure['affranchissements']['tva'];
            $aHeadings[] = $aPostage;
        }


        // Fetch sections
        foreach ($aHeadings as $aHeading) {
            ++$iRow;
            $iColumn = 0;
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $aHeading['title'] . '   (' . $aHeading['tva'] . ' %)');
            $iColumn = 0;
            $oSheet->setCellValueByColumnAndRow($iColumn++, ++$iRow, 'id');
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, 'prestation');
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_tarif_unitaire"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_cumul_total"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_deja_facture"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_solde_a_facturer"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_montant"]);

            // Fetch services
            foreach ($aHeading['prestations'] as $aRow) {
                ++$iRow;
                $iColumn = 0;

                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $aRow['r_prest_id']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $aRow['libelle']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($aRow['tarif_unitaire'], false, false));
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $aRow['cumul_total']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $aRow['deja_facture']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $aRow['solde_a_facturer']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($aRow['montant'], false, false));
            }
            ++$iRow;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, sprintf($this->_translations['header_total_s'], $aHeading['title']));
            $oSheet->setCellValueByColumnAndRow(6, $iRow, $this->_formatMotant($aHeading['total_ht'], false, false));
            ++$iRow;
        }
        ++$iRow;
        ++$iRow;
        $iColumn = 0;

        // No VAT to display for administrative and financial director
        if (isset($this->structure['data']['last_page']['total_ht_soumis_a_tva'])) {
            $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $this->_translations['header_total_ht']);
            $oSheet->setCellValueByColumnAndRow($iColumn + 1, $iRow, $this->_formatMotant($this->structure['data']['last_page']['total_ht_soumis_a_tva']));

            foreach ($this->structure['data']['last_page']['total_tva'] as $aLine) {
                $iRow++;
                $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $aLine['taux']);
                $oSheet->setCellValueByColumnAndRow($iColumn + 1, $iRow, $this->_formatMotant($aLine['value'], false, false));
            }
        }

        $iRow++;
        $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $this->_translations['header_total_a_payer_ttc']);
        $oSheet->setCellValueByColumnAndRow($iColumn + 1, $iRow, $this->_formatMotant($this->structure['data']['last_page']['total_a_payer'], false, false));
    }

    protected function _addInfosPaiement()
    {
        $iColumn = 0;
        $iRow = 1;
        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('Infos Paiement');

        $aTranslations = $this->_translations['synthese'];
        $sInvoiceDelay = sprintf($aTranslations['facture_delai_2'], $this->structure['data']['last_page']['reglement_delai'], $this->structure['data']['last_page']['reglement_date']);
        $oSheet->setCellValueByColumnAndRow($iColumn, 1, $aTranslations['facture_delai']);
        $oSheet->setCellValueByColumnAndRow($iColumn + 1, 1, $sInvoiceDelay);

        $iRow++;
        $iRow++;

        $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $aTranslations['code_banque']);
        $oSheet->setCellValueByColumnAndRow($iColumn + 1, $iRow, $aTranslations['code_agence']);
        $oSheet->setCellValueByColumnAndRow($iColumn + 2, $iRow, $aTranslations['numero_compte']);
        $oSheet->setCellValueByColumnAndRow($iColumn + 3, $iRow, $aTranslations['cle_rib']);
        $oSheet->setCellValueByColumnAndRow($iColumn + 4, $iRow, $aTranslations['domicialiation']);

        $iRow++;
        $iColumn = 0;
        $aData = array(
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_BANK_CODE),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_SORT_CODE),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_ACCOUNT_NUMBER),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_KEY),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_BANK_NAME),
        );
        foreach ($aData as $sValue) {
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $sValue);
        }

        $iRow++;
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_INVOICE_MISSED_DEADLINE));
    }

}
