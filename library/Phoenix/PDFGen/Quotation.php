<?php

class Phoenix_PDFGen_Quotation extends Phoenix_PDFGen_AbstractPdfGenerator
{

    const HEIGHT_TOTAL = 6;
    const ENTETE_COL1_WIDTH = 100;
    const ENTETE_COL2_WIDTH = 75;

    /**
     * Generate document
     */
    public function generate()
    {
        $this->AddPage();
        $this->drawOfferHeader();
        $this->drawClientHeader();
        $this->Ln(5);
        $this->drawContactHeader();
        $this->Ln(5);

        $this->drawOperationHeader();
        $this->Ln(10);

        if (! empty($this->structure['scenario']['prestations'])) {
            $this->drawScenario();
            $this->Ln(10);
        }
        $this->drawEstimatedOverallBudget();
        $this->Ln(10);
        $this->drawServices();
        $this->Ln(10);
        $this->drawGoodForAgreement();
        $this->drawBillingDetails();
        $this->drawTermsOfSale();
    }

    /**
     * Customize header
     */
    public function header()
    {
        if ($this->getPage() == 1) {
            parent::header();
        } else {
            // Contents
            $sOfferName = $this->structure['data']['first_page']['nom_offre'];
            $sQuotationNumber = $this->structure['data']['first_page']['num_devis'];
            $sQuotationDate = $this->structure['data']['first_page']['date_devis'];
            $sQuotationVersionNumber = $this->structure['data']['first_page']['num_version_devis'];
            $sOfferHeader = sprintf($this->translations['header_offre'], $sOfferName);
            $sQuotationHeader = sprintf($this->translations['header_devis'], $sQuotationNumber, $sQuotationDate, $sQuotationVersionNumber);

            // Draw
            $this->setBold(true);
            $this->Cell(0, 0, $sOfferHeader, 0, 1);
            $this->setBold(false);
            $this->Cell(0, 0, $sQuotationHeader);
        }
    }

    /**
     * Draw offer header
     */
    protected function drawOfferHeader()
    {
        // Init
        $iWidth = self::WIDTH_ENTETE_BLOC_DROITE;
        $iHeight = 20;
        $iMarginTop = 4;
        $iPosX = $this->getPageWidth() - ($this->getMargin("right") + $iWidth);
        $this->resetFontColor();

        // Contents
        $sOfferName = $this->structure['data']['first_page']['nom_offre'];
        $sQuotationValidity = $this->structure['data']['first_page']['validite_devis'];
        $sQuotationNumber = $this->structure['data']['first_page']['num_devis'];
        $sQuotationDate = $this->structure['data']['first_page']['date_devis'];
        $sQuotationVersionNumber = $this->structure['data']['first_page']['num_version_devis'];
        $sQuotationValidityHeader = sprintf($this->translations['header_validite_devis'], $sQuotationValidity);
        $sOfferHeader = sprintf($this->translations['header_offre'], $sOfferName);
        $sQuotationHeader = sprintf($this->translations['header_devis'], $sQuotationNumber, $sQuotationDate, $sQuotationVersionNumber);

        // Draw - quotation validity if defined
        if (! empty($sQuotationValidity)) {
            $this->setXY($this->getMargin("left"), self::POSY_ENTETE - 7);
            $this->SetFontSize(self::FONT_SIZE_MINI);
            $this->Cell(0, 0, $sQuotationValidityHeader, 0, 1, 'C');
            $this->resetFont();
        }

        // Draw - frame
        $this->RoundedRect($iPosX, self::POSY_ENTETE, $iWidth, $iHeight, self::R, '1111', 'F', array(), $this->fontColors["FOND_TABLEAU"]);

        // Draw - offer
        $this->SetXY($iPosX, self::POSY_ENTETE + $iMarginTop);
        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->MultiCell($iWidth, 0, $sOfferHeader, 0, $sAlign = 'C');
        $this->resetFont();
        $this->SetX($iPosX);
        $this->MultiCell($iWidth, 0, $sQuotationHeader, 0, $sAlign = 'C');
    }

    /**
     * Draw client header
     */
    protected function drawClientHeader()
    {
        // Init
        $iWidth = 70;
        $this->resetFontColor();

        // Contents
        $sContactClient = $this->structure['data']['first_page']['contact_client'];
        $sClientName = $this->structure['data']['first_page']['nom_client'];
        $sAddress1 = $this->structure['data']['first_page']['adresse_1'];
        $sAddress2 = $this->structure['data']['first_page']['adresse_2'];
        $sAddress3 = $this->structure['data']['first_page']['adresse_3'];
        $sZipcode = $this->structure['data']['first_page']['code_postal'];
        $sCity = $this->structure['data']['first_page']['ville'];
        $sCountry = $this->structure['data']['first_page']['pays'];

        // Draw
        $this->setY(self::POSY_ENTETE);

        $this->MultiCell($iWidth, 0, $this->translations['a_lattention_de'] . ' :', 0, 'L');
        $this->setBold(true);
        $this->MultiCell($iWidth, 0, $sContactClient . ' ', 0, 'L');
        $this->Cell($iWidth, 0, $sClientName . ' ', 0, 2);
        $this->setBold(false);
        if (! empty($sAddress1)) {
            $this->Cell($iWidth, 0, $sAddress1, 0, 2);
        }
        if (! empty($sAddress2)) {
            $this->Cell($iWidth, 0, $sAddress2, 0, 2);
        }
        if (! empty($sAddress3)) {
            $this->Cell($iWidth, 0, $sAddress3, 0, 2);
        }
        $this->Cell($iWidth, 0, $sZipcode . ' ' . $sCity, 0, 2);
        $this->Cell($iWidth, 0, $sCountry, 0, 2);
    }

    /**
     * Draw contact header
     */
    protected function drawContactHeader()
    {
        // Init
        $iCol1PosX = $this->getMargin("left") + self::TEXT_MARGIN;
        $iCcol2PosX = $this->getPageWidth() - ($this->getMargin("right") + self::ENTETE_COL2_WIDTH);
        $this->resetFontColor();

        // Contents
        $sContactName = $this->structure['data']['first_page']['nom_contact'];
        $sContactEmail = $this->structure['data']['first_page']['email_contact'];
        $sContactTel = $this->structure['data']['first_page']['tel_contact'];
        $sContactMobile = $this->structure['data']['first_page']['mobile_contact'];
        $sContactFax = $this->structure['data']['first_page']['fax_contact'];
        $aTranslations = $this->translations['contact'];

        // Draw - title block
        $this->drawGreyCartouche($aTranslations['title']);

        $iPosY = $this->GetY();

        // Draw - first column (left)
        $this->SetX($iCol1PosX);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        $this->Cell(self::ENTETE_COL1_WIDTH, 5, $sContactName, 0, 2);
        $this->resetFont();

        $this->Cell(self::ENTETE_COL1_WIDTH, 0, $this->translations['directeur_de_clientele'], 0, 0);

        // Draw - second column (right)
        $this->setXY($iCcol2PosX, $iPosY);

        $iMandatoryNbLines = 4;
        $aContactInfos = array(
            $sContactEmail => null,
            $sContactTel => $this->translations['tel'],
            $sContactMobile => $this->translations['mobile'],
            $sContactFax => $this->translations['fax'],
        );

        foreach ($aContactInfos as $sContactInfo => $sLabel) {
            if (! $sContactInfo) {
                continue;
            }
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, ($sLabel ? $sLabel.' ':'').$sContactInfo, 0, 2);
            $iMandatoryNbLines--;
        }

        if ($iMandatoryNbLines) {
            while ($iMandatoryNbLines) {
                $this->Cell(self::ENTETE_COL2_WIDTH, 0, '', 0, 2);
                $iMandatoryNbLines--;
            }
        }
    }

    /**
     * Draw operation header
     */
    protected function drawOperationHeader()
    {
        // Init
        $iMarginBottom = 2;
        $iCol1PosX = $this->getMargin("left") + self::TEXT_MARGIN;
        $iCcol2PosX = $this->getPageWidth() - ($this->getMargin("right") + self::ENTETE_COL2_WIDTH);
        $this->resetFontColor();

        // Contents
        $sOperationDescription = $this->structure['data']['first_page']['descriptif_operation'];
        $sDateStartOp = $this->structure['data']['first_page']['date_start_op'];
        $sDateEndOp = $this->structure['data']['first_page']['date_end_op'];
        $sPostalEndDate = $this->structure['data']['first_page']['date_fin_postale'];
        $sFinishDate = $this->structure['data']['first_page']['date_fin_gestion'];

        // Draw - title block
        $this->drawGreyCartouche($this->translations['operation']['descriptif']);

        $iPosY = $this->GetY();
        $iCurrentPage = $this->getPage();

        // Draw - first column (left)
        $this->SetX($iCol1PosX);
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->MultiCell(self::ENTETE_COL1_WIDTH, 25, $sOperationDescription, 'R', 2);
        $iFirstColumnY =  $this->GetY();

        // Check if page has changed
        $iNewPage = $this->getPage();
        if ($iNewPage !== $iCurrentPage) {
            $this->setPage($iCurrentPage);
        }

        // Draw - second column (right)
        $this->SetX($iCcol2PosX);
        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES)) {
            $this->setY($iPosY, false);
            $this->setBold(true);
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['duree_op'], 0, 2);
            $this->setBold(false);
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['du'] . ' ' . $sDateStartOp . ' ' . $this->translations['au'] . ' ' . $sDateEndOp, 0, 2);
            $iPosY = $this->getY() + $iMarginBottom;
        }

        if ($sPostalEndDate && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE)) {
            $this->setY($iPosY, false);
            $this->setBold(true);
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['fin_postale'], 0, 2);
            $this->setBold(false);
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, $sPostalEndDate, 0, 2);
            $iPosY = $this->getY() + $iMarginBottom;
        }

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE) && $sFinishDate) {
            $this->setY($iPosY, false);
            $this->setBold(true);
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['fin_gestion'], 0, 2);
            $this->setBold(false);
            $this->Cell(self::ENTETE_COL2_WIDTH, 0, $sFinishDate, 0, 2);
        }

        // Go to last page
        if ($iNewPage !== $iCurrentPage) {
            $this->setPage($iNewPage);
            $this->setY($iFirstColumnY);
        } else {
            $this->setY(max($iFirstColumnY, $this->getY()));
        }
    }

    /**
     * Draw scenario block
     */
    private function drawScenario()
    {
        // Init
        $aColumnsWidth = array(100, 25, 25, 0);
        $iPosX = $this->getMargin("left");

        // Contents
        $aServices = $this->structure['scenario']['prestations'];

        // Draw title block
        $this->drawRedCartouche($this->translations['header_scenario']);

        // Draw table header
        $aHeaderColumns = array(
            '',
            $this->translations["header_quantite"],
            $this->translations["header_taux_estime"],
            $this->translations["header_total_estime"]
        );

        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        foreach ($aHeaderColumns as $iKey => $sValue) {
            $this->MultiCell($aColumnsWidth[$iKey], 0, $sValue, 0, 'R', 0, 0);
        }
        $this->resetFont();

        $this->Ln();

        // Draw table data
        foreach ($aServices as $iKey => $aService) {
            // Calculate the height of the line
            $iColumnHeight = $this->getServiceLineHeight($aColumnsWidth[0], $aService);
            // Vars
            $sBorder = 'T';

            if ($iKey == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }
            $this->checkPageBreak($this->getStringHeight($aColumnsWidth[0], $aService['libelle']) + 5);
            $this->MultiCell($aColumnsWidth[0], 0, $aService['libelle'], $sBorder, 'L', 0, 0);
            $this->MultiCell($aColumnsWidth[1], 0, $this->getFormattedQuantity($aService['quantite']), $sBorder, 'R', 0, 0);
            $this->MultiCell($aColumnsWidth[2], 0, $this->getFormattedPourcent($aService['taux_estime'], false), $sBorder, 'R', 0, 0);
            $this->MultiCell($aColumnsWidth[3], 0, $this->getFormattedQuantity($aService['total_estime']), $sBorder, 'R', 0, 0);
            $this->Ln($iColumnHeight+1);
        }

        // Draw table termination line
        $this->PolyLine(array(
            $iPosX, $this->getY(),
            $this->getPageWidth() - $this->getMargin('right'), $this->getY(),
        ));
    }

    /**
     * Draw the estimated overall budget block
     */
    protected function drawEstimatedOverallBudget()
    {

        $this->checkPageBreak(10);

        // Init
        $aColumnsWidth = array(125, 25, 0);
        $iInvoiceColumn1Width = 100;
        $iHeaderLines = 5;
        $iPosX = $this->getMargin("left");

        // Contents
        $aServices = $this->structure['budget_estime']['prestations'];
        $iBudgetExcludingVat = $this->structure['budget_estime']['budget_total_ht'];
        $aVatBudgetList = $this->structure['budget_estime']['budget_total_tva'];
        $iBudgetIncludingVat = $this->structure['budget_estime']['budget_total_ttc'];
        $fFinalEstimatedQuotesExcludingVats = $this->structure['budget_estime']['budget_total_estime_hors_tva'];
        $aForecastInvoice = $this->structure['budget_estime']['facturation_prev'];
        $aTranslationsBudget = $this->translations['budget_estime'];

        // Draw - title block
        $this->drawRedCartouche($this->translations['header_budget_global'], Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_GLOBAL_BUDGET_TERMS_OF_SALE, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR));

        // Draw - table - header
        $aHeaderColumns = array(
            '',
            $this->translations["header_ht"],
            $this->translations["header_ttc"]
        );

        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        foreach ($aHeaderColumns as $iKey => $sValue) {
            $this->MultiCell($aColumnsWidth[$iKey], 0, $sValue, 'B', 'R', 0, 0);
        }
        $this->resetFont();

        $this->Ln();

        // Draw - table - data
        foreach ($aServices as $iKey => $aService) {
            // Vars
            $sBorder = 'T';

            $this->checkPageBreak($this->getStringHeight($aColumnsWidth[0], $aService['libelle']));
            if ($iKey == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }

            $this->setBold(true);
            $this->MultiCell($aColumnsWidth[0], 0, $aService['libelle'], $sBorder, 'L', 0, 0);
            $this->setBold(false);
            $this->MultiCell($aColumnsWidth[1], 0, $this->getFormattedPrice($aService['ht']), $sBorder, 'R', 0, 0);
            $this->MultiCell($aColumnsWidth[2], 0, $this->getFormattedPrice($aService['ttc']), $sBorder, 'R', 0, 0);

            $this->Ln();
        }

        // Draw - table - terminaison line
        $this->PolyLine(array(
            $iPosX, $this->getY(),
            $this->getPageWidth() - $this->getMargin('right'), $this->getY()
        ));

        // Draw - totals
        $iFirstColumnWidth = $aColumnsWidth[0] + $aColumnsWidth[1];

        $this->Ln();
        $this->setColor('fill', $this->fontColors["FOND_SOUS_TOTAL"][0], $this->fontColors["FOND_SOUS_TOTAL"][1], $this->fontColors["FOND_SOUS_TOTAL"][2]);
        $this->Cell($iFirstColumnWidth, $iHeaderLines, $this->translations['header_budget_total_estime_ht'], 0, 0, 'L', 1);
        $this->Cell(0, $iHeaderLines, $this->getFormattedPrice($iBudgetExcludingVat), 0, 1, 'R', 1);


        foreach ($aVatBudgetList as $aLineData) {
            if ($aLineData['taux'] == $this->getZendTranslate()->translate('BUDGET TOTAL ESTIME HORS TVA')) {
                $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
            }
            $this->Cell($iFirstColumnWidth, $iHeaderLines, $aLineData['taux'], 0, 0, 'L', 1);
            $this->Cell(0, $iHeaderLines, $this->getFormattedPrice($aLineData['value']), 0, 1, 'R', 1);
            if ($aLineData['taux'] == $this->getZendTranslate()->translate('BUDGET TOTAL ESTIME HORS TVA')) {
                $this->resetFont();
            }
        }
        $this->resetColor();

        // Adding total estimated budget exluding taxes
        $this->setColor('fill', $this->fontColors["FOND_TOTAL_PRINCIPAL"][0], $this->fontColors["FOND_TOTAL_PRINCIPAL"][1], $this->fontColors["FOND_TOTAL_PRINCIPAL"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        $this->Cell($iFirstColumnWidth, self::HEIGHT_TOTAL, $this->translations['header_budget_total_estime_hors_taxes'], 0, 0, 'L', 1);
        $this->Cell(0, self::HEIGHT_TOTAL, $this->getFormattedPrice($fFinalEstimatedQuotesExcludingVats), 0, 1, 'R', 1);
        $this->resetFontColor();

        $this->setColor('fill', $this->fontColors["FOND_TOTAL_PRINCIPAL"][0], $this->fontColors["FOND_TOTAL_PRINCIPAL"][1], $this->fontColors["FOND_TOTAL_PRINCIPAL"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetFont('', '', self::FONT_SIZE_FOOTER_1);
        $this->Cell($iFirstColumnWidth, self::HEIGHT_TOTAL, $this->translations['header_budget_total_estime_ttc'], 0, 0, 'L', 1);
        $this->Cell(0, self::HEIGHT_TOTAL, $this->getFormattedPrice($iBudgetIncludingVat), 0, 1, 'R', 1);
        $this->resetFontColor();

        // Draw - projected invoicing plan
        $this->Ln();
        // Header
        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
        $this->setColor('fill', $this->fontColors["FOND_SOUS_TOTAL"][0], $this->fontColors["FOND_SOUS_TOTAL"][1], $this->fontColors["FOND_SOUS_TOTAL"][2]);
        $this->setColor('draw', $this->fontColors["LINE_SOUS_TOTAL"][0], $this->fontColors["LINE_SOUS_TOTAL"][1], $this->fontColors["LINE_SOUS_TOTAL"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        $this->Cell($iInvoiceColumn1Width, self::HEIGHT_TOTAL, $this->translations['budget_estime']['title2'], 'BR', 0, $sAlign = 'L', $sFill = true);
        $this->Cell(0, self::HEIGHT_TOTAL, $this->translations['header_date_facture'], 'BL', 1, $sAlign = 'L', $sFill = true);
        $this->resetFont();
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);
        // Data
        $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
        foreach ($aForecastInvoice as $aInvoiceData) {
            $this->Cell($iInvoiceColumn1Width, $iHeaderLines, $aInvoiceData['libelle'], 'B', 0, $sAlign = 'L');
            $this->Cell(0, $iHeaderLines, $aInvoiceData['date_facture'], 'B', 1, $sAlign = 'L');
        }
    }

    /**
     * Displays customised services, refunds and postage charges
     */
    protected function drawServices()
    {
        // Init
        $aColumnsWidth = array(125, 20, 15, 0);

        // Contents
        $aSections = $this->structure['rubriques'];
        $aRefunds = $this->structure['remboursements'];
        $aPostage = $this->structure['affranchissements'];
        $sSectionBlocName = sprintf($this->translations['header_prestation'], Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME));
        $sRefundBlocName = $this->translations['header_remboursements'];
        $sPostageBlocName = $this->translations['header_aff_fp'];

        // Draw services
        if (isset($aSections['rubrique'][0])) {
            $bUniqueService = (count($aSections['rubrique'][0]['prestations']) == 1);
            $sFirstRow = $aSections['rubrique'][0]['prestations'][0];
            $this->checkCartouchePageBreak($aColumnsWidth[0], $sFirstRow, $bUniqueService);
        }

        // Draw title block
        $this->drawRedCartouche($sSectionBlocName);

        // Draw tables
        foreach ($aSections['rubrique'] as $aSection) {
            $sHeaderTotal = $aSection['has_tva'] == '1' ? $this->translations["header_total_ht"] : $this->translations["header_total_ttc"];
            $this->drawServiceTable($aSection, $sHeaderTotal, 'total_ht', $aColumnsWidth);
        }

        // Draw sections totals
        $this->drawServiceTableTotal($sSectionBlocName, $aSections['total_ht']);

        // Draw refunds
        if (count($aRefunds['prestations']) > 0) {
            // Check page break
            $bUniqueService = (count($aRefunds['prestations']) == 1);
            $sFirstRow = $aRefunds['prestations'][0];
            $this->checkCartouchePageBreak($aColumnsWidth[0], $sFirstRow, $bUniqueService);

            // Draw title block
            $this->drawRedCartouche($sRefundBlocName);

            // Draw table
            $this->drawServiceTable($aRefunds, $this->translations["header_total_ttc"], 'total_ttc', $aColumnsWidth);

            // Draw section total
            $this->drawServiceTableTotal($sRefundBlocName, $aRefunds['total_ttc']);
        }

        // Draw postage
        if (count($aPostage['prestations']) > 0) {
            // Check page break
            $bUniqueService = (count($aPostage['prestations']) == 1);
            $sFirstRow = $aPostage['prestations'][0];
            $this->checkCartouchePageBreak($aColumnsWidth[0], $sFirstRow, $bUniqueService);

            // Draw title block
            $this->drawRedCartouche($sPostageBlocName);

            // Draw table
            $this->drawServiceTable($aPostage, $this->translations["header_total"], 'total', $aColumnsWidth);

            // Draw section total
            $this->drawServiceTableTotal($sPostageBlocName, $aPostage['total']);
        }
    }

    /**
     * Displays service data table
     * @param array $aData
     * @param string $sTotalColumnName
     * @param string $sTotalColumnKey
     * @param array $aColumnsWidth
     */
    protected function drawServiceTable(array $aData, string $sTotalColumnName, string $sTotalColumnKey, array $aColumnsWidth)
    {
        $iPosX = $this->getMargin("left");
        $sTableTitle = ! empty($aData['title']) ? $aData['title'] : '';
        // Check for existing services
        if (count($aData['prestations']) == 0) {
            return;
        }

        // We see if we have enough space to display header and first service (+ total block if single service)
        $bUniqueService = (count($aData['prestations']) == 1);
        $iRequiredHeight = self::HEIGHT_ENTETE_TABLE;
        $iRequiredHeight += $this->getServiceLineHeight($aColumnsWidth[0], $aData['prestations'][0]);
        if ($bUniqueService) {
            $iRequiredHeight += self::MARGIN_TOP_ENTETE_TABLE + self::HEIGHT_TOTAL;
        }

        $this->checkPageBreak($iRequiredHeight);

        // Draw table header
        $this->drawSectionHeader($aColumnsWidth, $sTotalColumnName, $sTableTitle);

        // Draw table data
        foreach ($aData['prestations'] as $iKey => $aService) {
            // We calculate the height of the line
            $iColumnHeight = $this->getServiceLineHeight($aColumnsWidth[0], $aService);

            // We see if we have enough space to display the next service (+ the total block if last service)
            $iRequiredHeight = $iColumnHeight;
            $bLastService = ($iKey == (count($aData['prestations']) - 1));
            if ($bLastService) {
                $iRequiredHeight += self::MARGIN_TOP_ENTETE_TABLE + self::HEIGHT_TOTAL;
            }

            if ($this->checkPageBreak($iRequiredHeight)) {
                // Display the header again.
                $this->drawSectionHeader($aColumnsWidth, $sTotalColumnName, $sTableTitle);
            }


            if ($iKey == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }

            // First cell
            $iRemindY = $this->getY();
            $sFill = false;
            $sBorder = 'T';

            $this->setBold(true);
            $this->MultiCell($aColumnsWidth[0], 0, $aService['libelle'], $sBorder, 'L', $sFill, 1);
            $this->setBold(false);

            $this->setX($iPosX);
            $this->setColor('text', $this->fontColors["DESCRIPTIF_PRESTA"][0], $this->fontColors["DESCRIPTIF_PRESTA"][1], $this->fontColors["DESCRIPTIF_PRESTA"][2]);
            $this->MultiCell($aColumnsWidth[0], 0, $aService['descriptif'], 0, 'L', $sFill, 0);
            $this->setColor('text', $this->fontColors["DEFAULT"][0], $this->fontColors["DEFAULT"][1], $this->fontColors["DEFAULT"][2]);

            // Following cells, we go back to the beginning of the line.
            $this->setY($iRemindY, false);

            $this->MultiCell($aColumnsWidth[1], $iColumnHeight, $this->getFormattedPrice($aService['pu']), $sBorder, 'R', $sFill, 0);
            $this->MultiCell($aColumnsWidth[2], $iColumnHeight, $this->getFormattedQuantity($aService['quantite']), $sBorder, 'R', $sFill, 0);
            $this->MultiCell($aColumnsWidth[3], $iColumnHeight, $this->getFormattedPrice($aService[$sTotalColumnKey]), $sBorder, 'R', $sFill, 0);
            $this->Ln($iColumnHeight+1);
        }

        // Draw table termination line
        $this->PolyLine(array(
            $iPosX, $this->getY(),
            $this->getPageWidth() - $this->getMargin('right'), $this->getY()
        ));
        $this->Ln(self::MARGIN_TOP_ENTETE_TABLE);

        // Draw table total
        if (! empty($aData['total_ht'])) {
            $this->setColor('fill', $this->fontColors["FOND_SOUS_TOTAL"][0], $this->fontColors["FOND_SOUS_TOTAL"][1], $this->fontColors["FOND_SOUS_TOTAL"][2]);
            $this->setColor('draw', $this->fontColors["LINE_SOUS_TOTAL"][0], $this->fontColors["LINE_SOUS_TOTAL"][1], $this->fontColors["LINE_SOUS_TOTAL"][2]);
            $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);

            $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
            $sText = $this->getUpperText(sprintf($this->translations['header_total_s'], $aData['title']));
            $this->Cell($aColumnsWidth[0], self::HEIGHT_TOTAL, $sText, 'BR', 0, $sAlign = 'L', $sFill = true);
            $this->Cell(0, self::HEIGHT_TOTAL, $this->getFormattedPrice($aData['total_ht']), 'BL', 1, $sAlign = 'R', $sFill = true);
            $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

            $this->Ln(5);
        }
    }

    protected function drawServiceTableTotal($sTitle, $iTotal)
    {
        $this->setColor('fill', $this->fontColors["FOND_TOTAL_PRINCIPAL"][0], $this->fontColors["FOND_TOTAL_PRINCIPAL"][1], $this->fontColors["FOND_TOTAL_PRINCIPAL"][2]);
        $this->setColor('draw', $this->fontColors["LINE_TOTAL_PRINCIPAL"][0], $this->fontColors["LINE_TOTAL_PRINCIPAL"][1], $this->fontColors["LINE_TOTAL_PRINCIPAL"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);

        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
        $sText = $this->getUpperText(sprintf($this->translations['header_total_s'], $sTitle));
        $this->Cell(125, self::HEIGHT_TOTAL, $sText, 'B', 0, $sAlign = 'L', $sFill = true);
        $this->Cell(0, self::HEIGHT_TOTAL, $this->getFormattedPrice($iTotal), 'B', 1, $sAlign = 'R', $sFill = true);
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

        $this->Ln(20);
    }

    protected function checkCartouchePageBreak($iWidth, $aService, $bIsUnique)
    {
        // Check if there is enough space to display the cartridge, the next line break, the header of the table and the first performance.
        $iRequiredHeight = self::HEIGHT_CARTOUCHE + self::HEIGHT_CARTOUCHE_MARGIN_BOTTOM + self::HEIGHT_ENTETE_TABLE;
        $iRequiredHeight += $this->getServiceLineHeight($iWidth, $aService);

        // Add the total block if single benefit
        if ($bIsUnique) {
            $iRequiredHeight += self::MARGIN_TOP_ENTETE_TABLE + self::HEIGHT_TOTAL;
        }

        $this->checkPageBreak($iRequiredHeight);
    }

    public function drawGoodForAgreement()
    {
        // pre-init
        $iHeight = 70;

        // Check page break
        $this->checkPageBreak($iHeight);

        // Init
        $iWidth = $this->getDrawablePageWidth();
        $iPosX = $this->getMargin("left");
        $iPosY = $this->getY();
        $iMarginIn = 5;
        $iColumn1With = 120;
        $iBufferPositionX = $iPosX + $iColumn1With + 10;
        $iBufferWith = $this->getPageWidth() - $iBufferPositionX - $iMarginIn - $this->getMargin("right");
        $iBufferHeight = $iHeight - (2 * $iMarginIn);
        $this->resetFontColor();

        // Contents
        $sContactClient = $this->structure['data']['first_page']['contact_client'];
        $sContactName = $this->structure['data']['first_page']['nom_contact'];
        $sContactEmail = $this->structure['data']['first_page']['email_contact'];
        $sContactFax = $this->structure['data']['first_page']['fax_contact'];
        $aTranslations = $this->translations['bon_pour_accord'];

        $sTermsOfSaleUrl = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_TERMS_OF_SALE_URL, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);
        $sTermsOfSaleLastUpdate = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_TERMS_OF_SALE_LAST_UPDATE, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);

        $sTerms = sprintf($aTranslations['conditions'], $sContactFax, $sContactName, $sContactEmail, $sTermsOfSaleLastUpdate, $sTermsOfSaleUrl);

        // Draw - frame & cartouche
        $this->drawRedCartoucheBloc($iHeight, $aTranslations['title']);

        // Draw - bloc gauche
        $this->SetXY($iPosX + $iMarginIn, $iPosY + $iMarginIn);
        $this->setBold(true);
        $this->Cell($iWidth, 6, $this->translations['date'], 0, 2);
        $this->setBold(false);

        $this->setBold(true);
        $this->Cell(-1, 6, $this->translations['nom'] . ' ', 0, 0);
        $this->setBold(false);
        $this->Cell(0, 6, $sContactClient, 0, 1);

        $this->SetX($iPosX + $iMarginIn);
        $this->setBold(true);
        $this->Cell($iWidth, 6, $this->translations['signature'], 0, 2);
        $this->setBold(false);

        $this->Ln(10);
        $this->SetX($iPosX + $iMarginIn);
        $this->setColor('fill', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->Cell($iColumn1With, 6, $this->translations['num_commande_po'], 1, 1, '', true);
        $this->resetColor();

        $this->Ln(4);
        $this->SetX($iPosX + $iMarginIn);
        $this->MultiCell($iColumn1With, 6, $sTerms . "\n", 0);

        // Draw - bloc droit
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->RoundedRect($iBufferPositionX, $iPosY + $iMarginIn, $iBufferWith, $iBufferHeight, self::R, '1111', '', array(), $this->fontColors["WHITE"]);
        $this->RoundedRect($iBufferPositionX, $iPosY + $iMarginIn, $iBufferWith, $iBufferHeight, self::R, '1111', 'F', array(), $this->fontColors["WHITE"]);
        $this->SetXY($iBufferPositionX + 1, $iPosY + $iMarginIn + 1);
        $this->setColor('fill', $this->fontColors["FOND_TABLEAU"][0], $this->fontColors["FOND_TABLEAU"][1], $this->fontColors["FOND_TABLEAU"][2]);
        $this->Cell($iBufferWith - 2, 0, $aTranslations['tampon'], 0, 2, 'C', true);
        $this->SetFontSize(self::FONT_SIZE_MINI);
        $this->Cell($iBufferWith - 2, 0, $aTranslations['obligatoire'], 0, 2, 'C');

        // On se replace à la fin du bloc
        $this->SetY($iPosY + $iHeight);
        $this->Ln(5);
    }

    public function drawBillingDetails()
    {
        // Check page break
        $iHeight = 45;
        $this->checkPageBreak($iHeight);

        // Init
        $iWidth = $this->getDrawablePageWidth();
        $iPosX = $this->getMargin("left");
        $iPosY = $this->getY();
        $iMarginIn = 5;

        $this->resetFontColor();

        // Contents
        $sBillingAddress = $this->structure['data']['last_page']['adresse_facturation'];
        $sBillingContact = $this->structure['data']['last_page']['contact_facturation'];
        $aTranslations = $this->translations['coordonnees_facturation'];

        // Draw - frame & cartouche
        $this->drawRedCartoucheBloc($iHeight, $aTranslations['title']);

        // Draw - left block
        $this->SetXY($iPosX + $iMarginIn, $iPosY + $iMarginIn);
        $this->setBold(true);
        $this->Cell($iWidth, 0, $this->translations['adresse_de_facturation'], 0, 2);
        $this->setBold(false);
        $this->Cell(0, 6, $sBillingAddress, 0, 2);

        $this->Ln();
        $this->SetX($iPosX + $iMarginIn);
        $this->setBold(true);
        $this->Cell(-1, 6, $this->translations['personne_a_contacter'] . ' ', 0, 0);
        $this->setBold(false);
        $this->Cell(0, 6, $sBillingContact, 0, 2);

        $this->Ln();
        $this->SetX($iPosX + $iMarginIn);
        $this->setBold(true);
        $this->Cell($iWidth, 6, $this->translations['telephone'], 0, 2);
        $this->setBold(false);

        // On se replace à la fin du bloc
        $this->SetY($iPosY + $iHeight);
        $this->Ln(5);
    }

    public function drawTermsOfSale()
    {
        $aTranslations = $this->translations['cgv'];
        $sCgv = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_TERMS_OF_SALE, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);
        $this->SetFontSize(self::FONT_SIZE_FOOTER_1);
        $this->Write(self::FONT_SIZE_FOOTER_1, $aTranslations['cgv_text1']);

        $sTermsOfSaleUrl = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_TERMS_OF_SALE_URL, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);
        $this->Write(self::FONT_SIZE_FOOTER_1, $sTermsOfSaleUrl, $sTermsOfSaleUrl, false, '', true);
        $this->resetFont();

        $this->Ln(10);
        $this->setColor('text', $this->fontColors["FOOTER"][0], $this->fontColors["FOOTER"][1], $this->fontColors["FOOTER"][2]);
        $this->SetFontSize(self::FONT_SIZE_MINI);
        $this->MultiCell(0, 0, nl2br($sCgv), 0, 'J', false, 0, '', '', true, 0, true, true, 0, 'T', false);
        $this->resetFont();
    }

    /**
     * Draws the header of a heading table
     *
     * @param array $aColumnsWidth : widths of the individual columns
     * @param string $iTotal : name of the column total
     * @param string $sTitle : table title (optionnal)
     */
    protected function drawSectionHeader($aColumnsWidth, $iTotal, $sTitle = '')
    {
        // Init
        $aHeaderColumns = array(
            $sTitle,
            $this->translations["header_pu"],
            $this->translations["header_quantite"],
            $iTotal,
        );

        // Draw
        $this->resetFontColor();
        $this->setColor('fill', $this->fontColors["FOND_ORANGE"][0], $this->fontColors["FOND_ORANGE"][1], $this->fontColors["FOND_ORANGE"][2]);
        $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
        $this->setBold(true);
        $this->SetFontSize(self::FONT_SIZE_FOOTER_1);
        foreach ($aHeaderColumns as $iKey => $sValue) {
            $sAlign = ($iKey == 0) ? 'L' : 'R';
            $sFill = ($iKey == 0 && ! empty($sTitle)) ? true : false;
            $this->MultiCell(
                $aColumnsWidth[$iKey],
                self::HEIGHT_ENTETE_TABLE,
                $sValue,
                'B',
                $sAlign,
                $sFill,
                0,
                '',
                '',
                true,
                0,
                false,
                true,
                self::HEIGHT_ENTETE_TABLE,
                'M'
            );
        }
        $this->Ln();

        $this->setBold(false);
        // Don't reset colors because same colors will be used for the table data
    }

    /**
     * Get Zend Translate
     *
     * @return \Zend_Translate
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicExcpetion('undefinded Zend Translate object');
    }
}
