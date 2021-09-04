<?php

class Phoenix_PDFGen_Reminder extends Phoenix_PDFGen_AbstractPdfGenerator
{

    const WIDTH_SIGNATURE = 80;
    const WIDTH_CARTOUCHE_LARGE = 100;

    /**
     * Completes the data structure via xml
     * @param string $sXml
     * @param array $aConfig
     */
    public function initializeFromXml(string $sXml, array $aConfig = array())
    {
        // Read XML and build $struct
        $oDomDocument = new DomDocument();

        if (strpos($sXml, '.xml') !== false) {
            // A file path is available
            $oDomDocument->load($sXml);
        } else {
            // The xml is available as a variable
            $oDomDocument->loadXML($sXml);
        }

        // Expected data
        $aStructure = array('relances' => array());

        $aLookForFirstPage = array(
            'contact_client', 'nom_client', 'adresse_1', 'adresse_2',
            'adresse_3', 'code_postal', 'ville', 'pays', 'lieu_relance', 'date_relance', 'num_relance',
            'ref_relance', 'title', 'lettre_recommandee',
        );

        $aLookForLastPage = array('num_tva');

        $aLookForInvoices = array('num_facture', 'date_facture', 'echeance_facture', 'num_ope', 'libelle_ope', 'montant_facture_total', 'montant_facture_restant');

        $aReminderNodes = $oDomDocument->getElementsByTagName('relance');

        foreach ($aReminderNodes as $iKey => $oRelanceNode) {
            //  For each reminder node
            $aStructure['relances'][$iKey] = array(
                'data' => array(
                    'first_page' => array(),
                    'last_page' => array(),
                ),
                'factures' => array(),
            );

            // Retrieves the language of the reminder
            $aStructure['relances'][$iKey]['lang'] = $oRelanceNode->getElementsByTagName('lang')->item(0)->nodeValue;

            // Retrieves data for the first page
            $oFirstPageElement = $oRelanceNode->getElementsByTagName('first_page')->item(0);
            $aFirstPageData = $this->retrieveXmlDataArray($aLookForFirstPage, $oFirstPageElement);

            $aStructure['relances'][$iKey]['data']['first_page'] = array_merge($aStructure['relances'][$iKey]['data']['first_page'], $aFirstPageData);

            // Retrieves data for the last page
            $oLastPageElement = $oRelanceNode->getElementsByTagName('last_page')->item(0);
            $aLastPageData = $this->retrieveXmlDataArray($aLookForLastPage, $oLastPageElement);
            $aStructure['relances'][$iKey]['data']['last_page'] = array_merge($aStructure['relances'][$iKey]['data']['last_page'], $aLastPageData);

            // Retrieves the data for the invoice part
            $oInvoiceNodes = $oRelanceNode->getElementsByTagName('facture');
            foreach ($oInvoiceNodes as $oInvoiceNode) {
                $aStructure['relances'][$iKey]['factures'][] =  $this->retrieveXmlDataArray($aLookForInvoices, $oInvoiceNode);
            }
        }
        $this->initialize($aStructure, $aConfig);
    }

    /**
     * Generate document
     */
    public function generate()
    {
        foreach ($this->structure['relances'] as $iKey => $aRelance) {
            // Init the language
            $this->setLanguage($this->structure['relances'][$iKey]['lang']);
            // Using group pages to have page numbers displayed by reminder
            $this->startPageGroup();
            $this->AddPage();
            // Adding the header in each first page
            parent::Header();
            $this->drawAccountingDepartmentHeader($iKey);
            $this->drawClientHeader($iKey);
            $this->Ln(10);
            $this->drawReminderHeader($iKey);
            $this->Ln(5);
            $this->drawInvoices($iKey);
            $this->Ln(10);
            $this->drawFinalReminder($iKey);
        }
    }

    /**
     * Header customization
     */
    public function header()
    {
        if ($this->getPage() == 1) {
            parent::header();
        } else {
            // Draw
            $this->setBold(true);
            $this->setBold(false);
        }
    }

    /**
     * Draws the accounting department header
     */
    protected function drawAccountingDepartmentHeader($iKey)
    {
        // Init
        $iWidth = self::WIDTH_CARTOUCHE_MEDIUM;
        $iPositionX = $this->getMargin("left");
        $this->resetFontColor();

        // Draw frame
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->RoundedRect($iPositionX, self::POSY_ENTETE, $iWidth, 30, self::R);
        $this->resetColor();

        // Draw accounting department text
        $this->SetXY($iPositionX + self::TEXT_MARGIN, self::POSY_ENTETE + self::TEXT_MARGIN);

        $this->MultiCell($iWidth, 0, sprintf(
            $this->translations['operation']['service_compta'],
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_ACCOUNTS_DEPARTMENT_PHONE_NUMBER),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_ACCOUNTS_DEPARTMENT_FAX_NUMBER)
        ), 0, 2);
    }

    /**
     * Draws the client header
     */
    protected function drawClientHeader($iKey)
    {
        // Init
        $iWidth = self::WIDTH_ENTETE_BLOC_DROITE;
        $iPositionX = $this->getPageWidth() - ($this->getMargin("right") + $iWidth);
        $this->resetFontColor();

        // Contents
        $aReminderDataFirstPage = $this->structure['relances'][$iKey]['data']['first_page'];
        $sClientContact = $aReminderDataFirstPage['contact_client'];
        $sClientName = $aReminderDataFirstPage['nom_client'];
        $sClientAddress1 = $aReminderDataFirstPage['adresse_1'];
        $sClientAddress2 = $aReminderDataFirstPage['adresse_2'];
        $sClientAddress3 = $aReminderDataFirstPage['adresse_3'];
        $sClientZipcode = $aReminderDataFirstPage['code_postal'];
        $sClientCity = $aReminderDataFirstPage['ville'];
        $sClientCountry = $aReminderDataFirstPage['pays'];

        // Draw - cadre
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->RoundedRect($iPositionX, self::POSY_ENTETE, $iWidth, 30, self::R);
        $this->resetColor();

        // Draw - client
        $this->SetXY($iPositionX + self::TEXT_MARGIN, self::POSY_ENTETE + self::TEXT_MARGIN);
        $this->Cell($iWidth, 0, $sClientName, 0, 2);
        $this->Cell($iWidth, 0, $this->translations['attn'] . ' ' . $sClientContact, 0, 2);
        $this->Cell($iWidth, 0, $sClientAddress1, 0, 2);
        $this->Cell($iWidth, 0, $sClientAddress2, 0, 2);
        if (! empty($sClientAddress3)) {
            $this->Cell($iWidth, 0, $sClientAddress3, 0, 2);
        }
        $this->Cell($iWidth, 0, $sClientZipcode . ' ' . $sClientCity, 0, 2);
        $this->Cell($iWidth, 0, $sClientCountry, 0, 2);
    }

    protected function drawReminderHeader($iKey)
    {
        // Init
        $iWidth = self::WIDTH_ENTETE_BLOC_DROITE;
        $iPositionX = $this->getPageWidth() - ($this->getMargin("right") + $iWidth);
        $this->resetFontColor();

        // Contents
        $aReminderDataFirstPage = $this->structure['relances'][$iKey]['data']['first_page'];

        $sReminderNumber = $aReminderDataFirstPage['num_relance'];
        $sLetterTitle = $aReminderDataFirstPage['title'];
        $bIsRegisteredLetter = ($aReminderDataFirstPage['lettre_recommandee'] == 1);
        $sLetterHeaderPlaceAndDate = sprintf($this->translations['header_lieu_date'], $aReminderDataFirstPage['lieu_relance'], $aReminderDataFirstPage['date_relance']);
        $sLetterReference = sprintf($this->translations['header_ref'], $aReminderDataFirstPage['ref_relance']);
        $sLetterWithReturnReceipt = $this->translations['relance']['lettre_ar'];
        $sLetterHeader = $this->translations['relance']['entetes'][$sReminderNumber];

        // Draw - place & date
        $this->SetX($iPositionX + 3);
        $this->Cell($iWidth, 10, $sLetterHeaderPlaceAndDate, 0, 1);

        // Draw - reference
        $this->Cell(0, 10, $sLetterReference, 0, 2);

        // Draw - title & subtitle
        $this->setFont('', 'BU');
        $this->Cell(0, 5, $this->getUpperText($sLetterTitle), 0, 1, 'C');
        $this->resetFont();

        if ($bIsRegisteredLetter) {
            $this->setBold(true);
            $this->Cell(0, 5, $sLetterWithReturnReceipt, 0, 1);
            $this->setBold(false);
        }

        // Draw - header
        $this->ln(5);
        $this->MultiCell(0, 10, $sLetterHeader, 0, 'L');
    }

    protected function drawInvoices($iKey)
    {
        // Init
        $aColumnsWidths = array(20, 20, 20, 15, 55, 25, 25);
        $aColumnsAligns = array('L', 'C', 'J', 'C', 'L', 'R', 'R');


        // Draw - table - header
        $aColumnHeader = array(
            $this->translations['header_num_facture'],
            $this->translations['header_date'],
            $this->translations['header_echeance'],
            $this->translations['header_num'],
            $this->translations['header_operation'],
            $this->translations['header_ttc'],
            $this->translations['header_a_payer']
        );

        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        foreach ($aColumnHeader as $iColumnKey => $sValue) {
            $this->MultiCell($aColumnsWidths[$iColumnKey], 0, $sValue, 'B', $aColumnsAligns[$iColumnKey], false, 0, '', '', true, 0, false, false, 10, 'B', false);
        }
        $this->resetFont();
        $this->Ln();

        // Draw - table - rows
        $iTotal = 0;
        $aInvoices = $this->structure['relances'][$iKey]['factures'];
        foreach ($aInvoices as $iInvoiceKey => $aRow) {
            $sBorder = 'T';

            if ($this->y > 260) {
                $this->AddPage();
            }

            if ($iInvoiceKey == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }

            $this->MultiCell($aColumnsWidths[0], 0, $aRow['num_facture'], $sBorder, $aColumnsAligns[0], false, 0, '', '', true, 0, false, false, 10, 'B', false);
            $this->MultiCell($aColumnsWidths[1], 0, $aRow['date_facture'], $sBorder, $aColumnsAligns[1], false, 0, '', '', true, 0, false, false, 10, 'B', false);
            $this->MultiCell($aColumnsWidths[2], 0, $aRow['echeance_facture'], $sBorder, $aColumnsAligns[2], false, 0, '', '', true, 0, false, false, 10, 'B', false);
            $this->MultiCell($aColumnsWidths[3], 0, $aRow['num_ope'], $sBorder, $aColumnsAligns[3], false, 0, '', '', true, 0, false, false, 10, 'B', false);
            $this->MultiCell($aColumnsWidths[4], 0, $aRow['libelle_ope'], $sBorder, $aColumnsAligns[4], false, 0, '', '', true, 0, false, false, 10, 'B', false);
            $this->MultiCell($aColumnsWidths[5], 0, $this->getFormattedPrice($aRow['montant_facture_total']), $sBorder, $aColumnsAligns[5], false, 0, '', '', true, 0, false, false, 10, 'B', false);
            $this->MultiCell($aColumnsWidths[6], 0, $this->getFormattedPrice($aRow['montant_facture_restant']), $sBorder, $aColumnsAligns[6], false, 0, '', '', true, 0, false, false, 10, 'B', false);

            $iTotal += $aRow['montant_facture_restant'];

            $this->Ln();
        }

        // Draw - table - total
        $this->Ln();
        $this->setBold();
        $this->MultiCell($aColumnsWidths[0] + $aColumnsWidths[1] + $aColumnsWidths[2] + $aColumnsWidths[3] + $aColumnsWidths[4] + $aColumnsWidths[5], 0, $this->translations['relance']['solde_total'], 0, 'R', 0, 0);
        $this->setFont('', 'BU');
        $this->MultiCell($aColumnsWidths[6], 0, $this->getFormattedPrice($iTotal), 0, $aColumnsAligns[6], 0, 0);
        $this->MultiCell(0, 5,' ', 0, 1);
        $this->resetFont();
    }

    protected function drawFinalReminder()
    {
        // Init
        $iWidth = self::WIDTH_SIGNATURE;
        $iSignaturePositionX = $this->getPageWidth() - ($this->getMargin("right") + $iWidth);
        $this->resetFontColor();

        // Contents
        $aTranslations = $this->translations['relance'];

        // Draw - text
        $this->setBold(true);
        $this->MultiCell(0, 10, $aTranslations['final_1'], 0, 1);
        $this->setBold(false);

        $this->MultiCell(0, 5, $aTranslations['final_2'], 0, 1);
        $this->MultiCell(0, 5, $aTranslations['final_3'], 0, 1);

        // Draw - sign
        $this->Ln(10);
        $this->SetX($iSignaturePositionX);
        $this->SetX($iSignaturePositionX + 40);
        $sSettingsLanguage = $this->getLanguage() === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR;
        $sFinancialAdministrativeDivisionSignature = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_FINANCIAL_ADMINISTRATIVE_DIVISION_SIGNATURE, $sSettingsLanguage);
        $this->MultiCell(0, 0, $sFinancialAdministrativeDivisionSignature, 0, 2);
    }

    /**
     * Return an array of wanted data
     *
     * @param array $aDataToRetrieve : table of keys to retrieve
     * @param DomElement $oXmlElement : DOM element where data is to be retrieved
     * @return array
     * @throws LogicException
     */
    protected function retrieveXmlDataArray(array $aDataToRetrieve, \DomElement $oXmlElement) : array
    {
        $aData = array();
        foreach ($aDataToRetrieve as $sDataKey) {
            if (! isset($oXmlElement)) {
                continue;
            }
            try {
                $oNode = $oXmlElement->getElementsByTagName($sDataKey)->item(0);
                if ($oNode != null) {
                    $aData[$sDataKey] = $oNode->nodeValue;
                }
            } catch (Exception $oException) {
                throw new \LogicException('Error when reading XML: The '.$sDataKey.' tag is missing in the '.$oXmlElement->nodeName.' branch', (int) $oException->getCode(), $oException);
            }
        }

        return $aData;
    }
}
