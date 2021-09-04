<?php

class Data_Doc_Writer_Excel_Devis extends Data_Doc_Writer_Excel
{

    protected function _formatMotant($montant)
    {
        return number_format((double) $montant, 2, ',', ' ');
    }

    public function __construct(\Data_Doc_Reader $oPhoenix_Doc_Reader)
    {
        parent::__construct($oPhoenix_Doc_Reader);

        $this->_addInfo();
        $this->_addScenario();
        $this->_addPrestation();
        $this->_addBonPourAccord();
    }

    protected function _addInfo()
    {
        $iColumn = 0;
        $iRow = 1;
        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('info');

        $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, sprintf($this->_translations['header_offre'], $this->structure['data']['first_page']['nom_offre']));


        $iColumn = 0;
        $iRow = 3;


        $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $this->_translations['a_lattention_de'] . ' :');
        $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->structure['data']['first_page']['contact_client']);
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
        $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->structure['data']['first_page']['nom_contact']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['email_contact']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['tel_contact']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['mobile_contact']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->structure['data']['first_page']['fax_contact']);
    }

    protected function _addScenario()
    {

        $iColumn = 0;
        $iRow = 1;
        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('Scenario');

        $aPrestations = $this->structure['scenario']['prestations'];
        if ($aPrestations) {
            $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $this->_translations['header_scenario']);
            $oSheet->setCellValueByColumnAndRow(++$iColumn, ++$iRow, $this->_translations["header_quantite"]);
            $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->_translations["header_taux_estime"]);
            $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->_translations["header_total_estime"]);

            foreach ($aPrestations as $i => $row) {
                $iColumn = 0;
                $iRow++;
                $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $row['libelle']);
                $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, number_format((double) $row['quantite'], 0, ',', ' '));
                $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, number_format((double) $row['taux_estime'], 0, ',', ' '));
                $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, number_format((double) $row['total_estime'], 0, ',', ' '));
            }
            $iRow+=2;
            $iColumn = 0;
        }

        $aPrestations = $this->structure['budget_estime']['prestations'];
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->_translations['header_budget_global']);
        $oSheet->setCellValueByColumnAndRow(++$iColumn, ++$iRow, $this->_translations['header_ht']);
        $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->_translations['header_ttc']);

        foreach ($aPrestations as $i => $row) {
            $iColumn = 0;
            $iRow++;

            $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $row['libelle']);
            $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->_formatMotant($row['ht']));
            $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $this->_formatMotant($row['ttc']));
        }

        $iRow++;
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['header_budget_total_estime_ht']);
        $oSheet->setCellValueByColumnAndRow(1, $iRow, $this->_formatMotant($this->structure['budget_estime']['budget_total_ht']));

        $budgetTVA_list = $this->structure['budget_estime']['budget_total_tva'];
        foreach ($budgetTVA_list as $line) {
            $iColumn = 0;
            $iRow++;
            $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $line['taux']);
            $oSheet->setCellValueByColumnAndRow(++$iColumn, $iRow, $line['value']);
        }
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['header_budget_total_estime_ttc']);
        $oSheet->setCellValueByColumnAndRow(1, $iRow, $this->_formatMotant($this->structure['budget_estime']['budget_total_ttc']));

        $factures_prev = $this->structure['budget_estime']['facturation_prev'];
        $iRow++;
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['budget_estime']['title2']);
        $oSheet->setCellValueByColumnAndRow(1, $iRow, $this->_translations['header_date_facture']);
        foreach ($factures_prev as $facture_data) {
            $iColumn = 0;
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, $facture_data['libelle']);
            $oSheet->setCellValueByColumnAndRow(1, $iRow, $facture_data['date_facture']);
        }
    }

    public function _addPrestation()
    {
        $iColumn = 0;
        $iRow = 1;

        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('Prestations');

        $rubriques = $this->structure['rubriques'];

        $oSheet->setCellValueByColumnAndRow(0, $iRow, sprintf($this->_translations['header_prestation'], Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME)));
        $iRow++;

        foreach ($rubriques['rubrique'] as $rubrique) {
            $iColumn = 0;
            $iRow++;

            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, 'ID');
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $rubrique['title']);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_pu"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_quantite"]);
            $header_total = $rubrique['has_tva'] == '1' ? $this->_translations["header_total_ht"] : $this->_translations["header_total_ttc"];
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $header_total);

            foreach ($rubrique['prestations'] as $i => $row) {
                $iColumn = 0;
                $iRow++;
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['r_prest_id']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['libelle']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($row['pu']));
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['quantite']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($row['total_ht']));
            }
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, sprintf($this->_translations['header_total_s'], $rubrique['title']));
            $oSheet->setCellValueByColumnAndRow(4, $iRow, $this->_formatMotant($rubrique['total_ht']));

            $iRow++;
        }
        if (count($this->structure['remboursements']['prestations']) > 0) {
            $iRow++;
            $iRow++;

            $iColumn = 0;
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, 'ID');
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations['header_remboursements']);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_pu"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_quantite"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_total_ttc"]);
            foreach ($this->structure['remboursements']['prestations'] as $i => $row) {
                $iColumn = 0;
                $iRow++;
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['r_prest_id']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['libelle']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($row['pu']));
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['quantite']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($row['total_ttc']));
            }
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, sprintf($this->_translations['header_total_s'], $this->_translations['header_remboursements']));
            $oSheet->setCellValueByColumnAndRow(4, $iRow, $this->_formatMotant($this->structure['remboursements']['total_ttc']));
        }

        if (count($this->structure['affranchissements']['prestations'])>0) {
            $iRow++;
            $iRow++;

            $iColumn = 0;
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, 'ID');
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations['header_aff_fp']);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_pu"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_quantite"]);
            $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_translations["header_total_ttc"]);
            foreach ($this->structure['affranchissements']['prestations'] as $i => $row) {
                $iColumn = 0;
                $iRow++;
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['r_prest_id']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['libelle']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($row['pu']));
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $row['quantite']);
                $oSheet->setCellValueByColumnAndRow($iColumn++, $iRow, $this->_formatMotant($row['total']));
            }
            $iRow++;
            $oSheet->setCellValueByColumnAndRow(0, $iRow, sprintf($this->_translations['header_total_s'], $this->_translations['header_aff_fp']));
            $oSheet->setCellValueByColumnAndRow(4, $iRow, $this->_formatMotant($this->structure['affranchissements']['total']));
            $iRow++;
        }
    }

    public function _addBonPourAccord()
    {
        $iColumn = 0;
        $iRow = 1;

        $oSheet = $this->_oPHPExcel->createSheet();
        $oSheet->setTitle('Bon pour accord');

        $oSheet->setCellValueByColumnAndRow($iColumn, $iRow, $this->_translations['bon_pour_accord']['title']);


        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->_translations['date']);

        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->_translations['signature']);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $this->_translations['num_commande_po']);


        $sTermsOfSaleUrl = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_TERMS_OF_SALE_URL, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);
        $sTermsOfSaleLastUpdate = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_TERMS_OF_SALE_LAST_UPDATE, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);

        $nomContact = $this->structure['data']['first_page']['nom_contact'];
        $emailContact = $this->structure['data']['first_page']['email_contact'];
        $faxContact = $this->structure['data']['first_page']['fax_contact'];
        $conditions = sprintf($this->_translations['bon_pour_accord']['conditions'], $faxContact, $nomContact, $emailContact, $sTermsOfSaleLastUpdate, $sTermsOfSaleUrl);
        $oSheet->setCellValueByColumnAndRow($iColumn, ++$iRow, $conditions);

        $iRow++;
        $iRow++;

        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['coordonnees_facturation']['title']);
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['adresse_de_facturation']);
        $oSheet->setCellValueByColumnAndRow(1, $iRow, $this->structure['data']['last_page']['adresse_facturation']);
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['personne_a_contacter']);
        $oSheet->setCellValueByColumnAndRow(1, $iRow, $this->structure['data']['last_page']['contact_facturation']);
        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $this->_translations['telephone']);

        $iRow++;

        $oSheet->setCellValueByColumnAndRow(0, ++$iRow, $sTermsOfSaleUrl);
    }
}
