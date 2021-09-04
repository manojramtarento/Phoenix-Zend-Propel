<?php

class Phoenix_PDFGen_Invoice extends Phoenix_PDFGen_AbstractPdfGenerator
{

    const HEIGHT_TOTAL = 6;

    /**
     * Personnalize header
     */
    public function header()
    {
        if ($this->getPageGroup() == 1) {
            parent::header();
        } else {
            // Draw contents
            $this->Cell(0, 0, sprintf(
                $this->translations['header_document'],
                $this->structure['data']['first_page']['num_operation'],
                $this->structure['data']['first_page']['num_facture'],
                $this->structure['data']['first_page']['date_facture']
            ));
        }
    }

    /**
     * Build document
     *
     * @param array $aOptions [append_entete]
     * @param bool $bFrontCover : display or not a front cover sheet
     */
    public function generate($aOptions = array(), $bFrontCover = false)
    {

        // If the billing address (op_ct_fact_addr_id) is entered in the operations table, display a front cover sheet.
        if (! empty($this->structure['data']['page_garde']) && $bFrontCover) {
            $this->startPageGroup();
            $this->AddPage();
            $this->drawCoverPage();
        }

        $this->startPageGroup();
        $this->AddPage();

        $this->drawAppendInfos($aOptions);
        $this->drawDocumentHeader();
        $this->Ln(15);
        $this->drawOperationHeader();
        $this->Ln(20);
        $this->drawSections();
        // Check if block synthese will be displayed on two page then add new page
        $this->startTransaction();
        $iStartPage = $this->getPage();
        $this->drawSynthesis();
        $iEndPage = $this->getPage();
        if ($iEndPage != $iStartPage) {
            $this->rollbackTransaction(true); // Don't forget the true
            $this->AddPage();
            $this->drawSynthesis();
        } else {
            $this->commitTransaction();
        }
    }

    /**
     * @param array $aOptions [append_entete]
     */
    private function drawAppendInfos($aOptions = array())
    {
        // Draw
        if (isset($aOptions['append_entete'])) {
            $this->SetY(self::POSY_ENTETE - 10);
            $this->setBold(true);
            $this->SetFontSize(self::FONT_SIZE_VERY_IMPORTANT);
            $this->Cell(70, 0, $aOptions['append_entete'], 0, 1);
        }
    }

    /**
     * Draw the invoice cover page if the billing address is entered
     */
    protected function drawCoverPage()
    {
        // Init
        $this->resetFontColor();
        $iWidth = self::WIDTH_ENTETE_BLOC_DROITE;
        $iHeight = 30;
        $iPositionX = $this->getPageWidth() - ($this->getMargin("right") + $iWidth);
        $this->resetFontColor();

        // Draw - frame
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->RoundedRect($iPositionX, self::POSY_ENTETE, $iWidth, $iHeight, self::R);
        $this->resetColor();

        $iLeftY = $this->GetY();

        // Draw - client
        $this->SetXY($iPositionX + self::TEXT_MARGIN, self::POSY_ENTETE + self::TEXT_MARGIN);
        $this->Cell($iWidth, 0, $this->structure['data']['page_garde']['pg_nom_client'], 0, 2);
        $this->Cell($iWidth, 0, $this->translations['attn'] . ' ' . $this->structure['data']['page_garde']['pg_contact_client'], 0, 2);
        $this->Cell($iWidth, 0, $this->structure['data']['page_garde']['pg_adresse_1'], 0, 2);
        if (! empty($this->structure['data']['page_garde']['pg_adresse_2'])) {
            $this->Cell($iWidth, 0, $this->structure['data']['page_garde']['pg_adresse_2'], 0, 2);
        }
        if (! empty($this->structure['data']['page_garde']['pg_adresse_3'])) {
            $this->Cell($iWidth, 0, $this->structure['data']['page_garde']['pg_adresse_3'], 0, 2);
        }
        $this->Cell($iWidth, 0, $this->structure['data']['page_garde']['pg_code_postal'] . ' ' . $this->structure['data']['page_garde']['pg_ville'], 0, 2);
        $this->Cell($iWidth, 0, $this->structure['data']['page_garde']['pg_pays'], 0, 2);

        $this->SetY(max(array($iLeftY, $this->GetY())));
    }

    /**
     * Draw the invoice header
     */
    protected function drawDocumentHeader()
    {
        // Init
        $iWidth = 70;
        $this->resetFontColor();

        // Contents
        $sOrderNumber = $this->structure['data']['first_page']['num_bdc'];
        $sInvoiceDate = $this->structure['data']['first_page']['date_facture'];
        $sCustomerVatRegistrationNumber = isset($this->structure['data']['first_page']['customer_vat_registration_number']) ? $this->structure['data']['first_page']['customer_vat_registration_number'] : '';
        $sInvoiceHeader = sprintf($this->translations['header_facture'], $this->structure['data']['first_page']['type_fact'], $this->structure['data']['first_page']['num_facture'], $sInvoiceDate);
        $sOrderNumberHeader = ! empty($sOrderNumber) ? sprintf($this->translations['header_bdc'], $sOrderNumber, $sInvoiceDate) : '';

        // Draw
        $this->SetY(self::POSY_ENTETE);
        $this->setBold(true);
        $this->Cell($iWidth, 0, $this->structure['data']['first_page']['mention_fact'], 0, 1);
        $this->Cell($iWidth, 0, $sInvoiceHeader, 0, 1);
        $this->setBold(false);
        $this->Cell($iWidth, 0, $sOrderNumberHeader, 0, 1);

        // Specific mention
        $this->MultiCell(self::WIDTH_ENTETE_BLOC_DROITE, 0, $this->structure['data']['first_page']['mentions_specifiques'], 0, 'L');

        $iLeftY = $this->GetY();

        $this->SetFontSize(self::FONT_SIZE_MINI);
        $this->setColor('text', $this->fontColors['MENTIONS'][0], $this->fontColors['MENTIONS'][1], $this->fontColors['MENTIONS'][2]);
        if ($this->structure['data']['first_page']['display_header_reverse_charge'] == 1) {
            // Note: "\n" is important to align the line to left
            $this->MultiCell($iWidth, 0, $this->translations['header_reverse_charge'] . "\n", 0, 'J');
        }

        // Draw customer header
        $iWidth = self::WIDTH_ENTETE_BLOC_DROITE;
        $iHeight = 30;
        $iXPosition = $this->getPageWidth() - ($this->getMargin('right') + $iWidth);
        $this->resetFontColor();

        // Draw container rectangle
        $this->setColor('draw', $this->fontColors['CONTOUR_BLOC'][0], $this->fontColors['CONTOUR_BLOC'][1], $this->fontColors['CONTOUR_BLOC'][2]);
        $this->RoundedRect($iXPosition, self::POSY_ENTETE, $iWidth, $iHeight, self::R);
        $this->resetColor();

        // Draw - client
        $this->SetXY($iXPosition + self::TEXT_MARGIN, self::POSY_ENTETE + self::TEXT_MARGIN);
        $this->Cell($iWidth, 0, $this->structure['data']['first_page']['nom_client'], 0, 2);

        // Client contact
        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_CLIENT_CONTACT_DATA)) {
            $this->Cell($iWidth, 0, $this->translations['attn'] . ' ' . $this->structure['data']['first_page']['contact_client'], 0, 2);
        }

        $this->Cell($iWidth, 0, $this->structure['data']['first_page']['adresse_1'], 0, 2);
        if (! empty($this->structure['data']['first_page']['adresse_2'])) {
            $this->Cell($iWidth, 0, $this->structure['data']['first_page']['adresse_2'], 0, 2);
        }
        if (! empty($this->structure['data']['first_page']['adresse_3'])) {
            $this->Cell($iWidth, 0, $this->structure['data']['first_page']['adresse_3'], 0, 2);
        }
        $this->Cell($iWidth, 0, $this->structure['data']['first_page']['code_postal'] . ' ' . $this->structure['data']['first_page']['ville'], 0, 2);
        $this->Cell($iWidth, 0, $this->structure['data']['first_page']['pays'], 0, 2);

        // Drawing customer VAT registration number
        if ($sCustomerVatRegistrationNumber) {
            $this->SetY(76);
            $this->SetX($iXPosition);
            $this->Cell($iWidth, 0, $this->translations['header_customer_vat_registration_number'] . ' : ' . $sCustomerVatRegistrationNumber, 0, 2);
        }

        $this->SetY(max(array($iLeftY + (self::TEXT_MARGIN*2), 65)));
    }

    /**
     * Draws the operation header
     */
    protected function drawOperationHeader()
    {
        // Init
        $iWidth = $this->getDrawablePageWidth();
        $iPositionX = $this->getMargin("left");
        $iIndentationPositionX = $iPositionX + self::TEXT_MARGIN;
        $iPositionY = $this->getY();

        $iAccountingDepartmentPositionX = $iPositionX + ($iWidth / 2);
        $iAccountingDepartmentMarginIn = 4;

        $sOperationLabel = $this->structure['data']['first_page']['num_operation'] . ' - ' . $this->structure['data']['first_page']['titre_operation'];
        $iOperationLabelWidth = $iWidth * 0.45;
        $iOperationLabelHeight = round($this->getStringHeight($iOperationLabelWidth, $sOperationLabel, true));

        $iSeparatorPositionY = $iPositionY + self::TEXT_MARGIN + 16 + $iOperationLabelHeight;
        $iIndentSeparatorPositionY = $iSeparatorPositionY + 3;
        $iMarginInSeparator = self::TEXT_MARGIN + 1;

        $iBlock2Column1PositionX = $iPositionX + self::TEXT_MARGIN;
        $iBlock2Column2PositionX = $iPositionX + ($iWidth / 5) * 2;
        $iBlock2Column3PositionX = $iPositionX + ($iWidth / 5) * 3;

        $this->resetFontColor();

        // Contents
        $aOperationTranslations = $this->translations['operation'];
        $sPostalEndDate = $this->structure['data']['first_page']['date_fin_postale'];
        $sEndDate = $this->structure['data']['first_page']['date_fin_gestion'];
            
        
        // Define which data to display
        $bDisplayConsumeringDates = Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES);
        $bDisplayEndPostDate = $sPostalEndDate && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE);
        $bDisplayEndDate = $sEndDate && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE);
        $bDisplaySecondPart = $bDisplayConsumeringDates || $bDisplayEndPostDate || $bDisplayEndDate;
        
        // Define cartouche container height
        $iHeight = $bDisplaySecondPart ? 40 : 25;
        

        // Draw - frame & container
        $this->drawGreyCartoucheBloc($iHeight, $aOperationTranslations['title']);

        // Draw - first part (left)
        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_OPERATION_DATA)) {
            $this->SetXY($iIndentationPositionX, $iPositionY + self::TEXT_MARGIN);
            $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
            $this->MultiCell($iOperationLabelWidth, 6, $sOperationLabel, 0, 'L');
            $this->resetFont();

            $this->SetX($iIndentationPositionX);
            $this->Cell(-1, 0, $aOperationTranslations['suivant_devis'] . ' ', 0, 0);
            $this->setBold(true);
            $this->Cell(0, 0, $this->structure['data']['first_page']['num_dossier'], 0, 1);
            $this->setBold(false);
        }

        $this->SetX($iIndentationPositionX);
        $this->Cell(-1, 0, $aOperationTranslations['dossier_suivi'] . ' ', 0, 0);
        $this->setBold(true);
        $this->Cell(0, 0, $this->structure['data']['first_page']['nom_responsable_suivi'], 0, 1);
        $this->setBold(false);

        $this->SetX($iIndentationPositionX);
        $this->Cell($iWidth, 0, $this->translations['tel'] . ' ' . $this->structure['data']['first_page']['contact_telephonique_responsable'], 0, 1);

        // Draw - first part (right)
        $this->SetXY($iAccountingDepartmentPositionX, $iPositionY + $iAccountingDepartmentMarginIn);
        $this->MultiCell(0, 0, sprintf(
            $aOperationTranslations['service_compta'],
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_ACCOUNTS_DEPARTMENT_PHONE_NUMBER),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_ACCOUNTS_DEPARTMENT_FAX_NUMBER)
        ), 0, 2);
        
        // If second part must not be displayed, stop here
        if (! $bDisplaySecondPart) {
            return;
        }

        // Draw - separator
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->PolyLine(array(
            $iPositionX + $iMarginInSeparator,
            $iSeparatorPositionY,
            $iPositionX + $iWidth - $iMarginInSeparator,
            $iSeparatorPositionY
        ));

        // Draw - second part (left)
        if ($bDisplayConsumeringDates) {
            $this->SetXY($iBlock2Column1PositionX, $iIndentSeparatorPositionY);
            $this->setBold(true);
            $this->Cell(0, 5, $this->translations['duree_op'], 0, 2);
            $this->setBold(false);
            $this->Cell(0, 0, $this->translations['du'] . ' ' . $this->structure['data']['first_page']['date_start_op'] . ' ' . $this->translations['au'] . ' ' . $this->structure['data']['first_page']['date_end_op'], 0, 2);
        }

        // Draw - second part (middle)
        if ($bDisplayEndPostDate) {
            $this->SetXY($iBlock2Column2PositionX, $iIndentSeparatorPositionY);
            $this->setBold(true);
            $this->Cell(8, 8, '', "L", 0);  // Vertical line
            $this->Cell(0, 5, $this->translations['fin_postale'], 0, 2);
            $this->setBold(false);
            $this->Cell(0, 0, $sPostalEndDate, 0, 2);
        }

        // Draw - second part (right)
        if ($bDisplayEndDate) {
            $this->SetXY($iBlock2Column3PositionX, $iIndentSeparatorPositionY);
            $this->setBold(true);
            $this->Cell(8, 8, '', "L", 0);  // Vertical line
            $this->Cell(0, 5, $this->translations['fin_gestion'], 0, 2);
            $this->setBold(false);
            $this->Cell(0, 0, $sEndDate, 0, 2);
        }
    }

    /**
     * Draw the sections block
     */
    private function drawSections()
    {
        // Init
        $aColWidth = array(80, 20, 20, 20, 20, 0);
        $iXPosition = $this->getMargin("left");

        // Contents
        $aRubrics = $this->structure['rubriques'];

        // Adding affranchissements as rubrics
        if (count($this->structure['affranchissements']['prestations']) > 0) {
            $aPostageData = $this->structure['affranchissements'];
            $aPostageData['title'] = $this->translations['header_aff_fp'];
            $aPostageData['total_ht'] = $this->structure['affranchissements']['total'];
            $aPostageData['tva'] = $this->structure['affranchissements']['tva'];
            $aRubrics[] = $aPostageData;
        }

        // Draw - rubriques
        foreach ($aRubrics as $aRubric) {
            // Multipage handling : checking if we have enough space to dispay the bloc, the line break, service table header + the bloc that display total if there is a single service
            $iRequiredHeight = self::HEIGHT_CARTOUCHE + self::HEIGHT_CARTOUCHE_MARGIN_BOTTOM + self::HEIGHT_ENTETE_TABLE;
            $iRequiredHeight += $this->getServiceLineHeight($aColWidth[0], $aRubric['prestations'][0]);

            // + "Total" bloc if the service is unique
            $bIsUniqueService = (count($aRubric['prestations']) == 1);
            if ($bIsUniqueService) {
                $iRequiredHeight += self::MARGIN_TOP_ENTETE_TABLE + self::HEIGHT_TOTAL;
            }

            $this->checkPageBreak($iRequiredHeight);

            // Draw - container
            $sMsgTVA = '';
            if ($aRubric['tva'] != 100) {
                $iTva = (int) $aRubric['tva'];
                $sMsgTVA = ' (soumis à TVA ' . ($iTva == $aRubric['tva'] ? $iTva : $aRubric['tva']) . ' %)';
            }
            $this->drawRedCartouche($aRubric['title'] . $sMsgTVA);

            // Draw - table - header
            $this->drawSectionHeader($aColWidth);

            // Draw - table - data
            foreach ($aRubric['prestations'] as $iRowNumber => $aService) {
                // Calculate the height of the line
                $iColumnHeight = $this->getServiceLineHeight($aColWidth[0], $aService);

                // Multipage handling : checking if we have enough space to display the next service
                $iRequiredHeight = $iColumnHeight;

                // Add the "total" bloc if it's the last service
                $bIsLastService = ($iRowNumber == (count($aRubric['prestations']) - 1));
                if ($bIsLastService) {
                    $iRequiredHeight += self::MARGIN_TOP_ENTETE_TABLE + self::HEIGHT_TOTAL;
                }

                // Display again the header
                if ($this->checkPageBreak($iRequiredHeight)) {
                    $this->drawSectionHeader($aColWidth);
                }

                $sBorder = 'T';
                $bFill = false;

                if ($iRowNumber == 0) {
                    $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
                } else {
                    $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
                }

                // First Cells
                $iRemindY = $this->getY();

                $this->setBold(true);
                $this->MultiCell($aColWidth[0], 0, $aService['libelle'], $sBorder, 'L', $bFill, 1);
                $this->setBold(false);

                $this->setX($iXPosition);
                $this->setColor('text', $this->fontColors["DESCRIPTIF_PRESTA"][0], $this->fontColors["DESCRIPTIF_PRESTA"][1], $this->fontColors["DESCRIPTIF_PRESTA"][2]);
                $this->MultiCell($aColWidth[0], 0, $aService['descriptif'], 0, 'L', $bFill, 0);
                $this->setColor('text', $this->fontColors["DEFAULT"][0], $this->fontColors["DEFAULT"][1], $this->fontColors["DEFAULT"][2]);

                // Next cells
                $this->setY($iRemindY, false);  // Resetting cursor the to the line begining

                $bFill = ! $bFill;
                $this->MultiCell($aColWidth[1], $iColumnHeight, $this->getFormattedPrice($aService['tarif_unitaire']), $sBorder, 'C', $bFill, 0);
                $bFill = ! $bFill;
                $this->MultiCell($aColWidth[2], $iColumnHeight, $aService['cumul_total'], $sBorder, 'C', $bFill, 0);
                $bFill = ! $bFill;
                $this->MultiCell($aColWidth[3], $iColumnHeight, $aService['deja_facture'], $sBorder, 'C', $bFill, 0);
                $bFill = ! $bFill;
                $this->MultiCell($aColWidth[4], $iColumnHeight, $aService['solde_a_facturer'], $sBorder, 'C', $bFill, 0);
                $bFill = ! $bFill;
                $this->MultiCell($aColWidth[5], $iColumnHeight, $this->getFormattedPrice($aService['montant']), $sBorder, 'R', $bFill, 0);

                $this->Ln($iColumnHeight + 1);
            }

            // Draw - tableau - dashes
            $this->PolyLine(array(
                $iXPosition,
                $this->getY(),
                $this->getPageWidth() - $this->getMargin('right'),
                $this->getY(),
            ));
            $this->Ln(self::MARGIN_TOP_ENTETE_TABLE);

            // Draw - table - total
            $this->setColor('fill', $this->fontColors["FOND_SOUS_TOTAL"][0], $this->fontColors["FOND_SOUS_TOTAL"][1], $this->fontColors["FOND_SOUS_TOTAL"][2]);
            $this->setColor('draw', $this->fontColors["LINE_SOUS_TOTAL"][0], $this->fontColors["LINE_SOUS_TOTAL"][1], $this->fontColors["LINE_SOUS_TOTAL"][2]);
            $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);

            $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
            $sText = $this->getUpperText(sprintf($this->translations['header_total_s'], $aRubric['title']));
            $this->Cell($aColWidth[0] + $aColWidth[1], self::HEIGHT_TOTAL, $sText, 'BR', 0, 'L', $bFill = true);
            $this->Cell(0, self::HEIGHT_TOTAL, $this->getFormattedPrice($aRubric['total_ht']), 'BL', 1, 'R', $bFill = true);
            $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);


            if ($aRubric['display_recoverable_vat']) {
                $this->SetFont('', 'B', 7);

                $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
                $sText = $this->translations['retrieveable_vat_label'];
                $this->Cell($aColWidth[0] + $aColWidth[1], 4, $sText, 'BR', 0, 'L', $bFill = true);
                $this->Cell(0, 4, $this->getFormattedPrice($aRubric['rubric_recoverable_vat_amont']), 'BL', 1, 'R', $bFill = true);
                $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);


                $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
                $sText = $this->translations['amont_excluding_vat'];
                $this->Cell($aColWidth[0] + $aColWidth[1], 4, $sText, 'BR', 0, 'L', $bFill = true);
                $this->Cell(0, 4, $this->getFormattedPrice($aRubric['rubric_exluding_taxes_amount']), 'BL', 1, 'R', $bFill = true);
                $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);
            }

            $this->Ln(20);
        }
    }

    /**
     * Draw the synthesis block
     */
    protected function drawSynthesis()
    {
        // Init
        $iFirstColumnWidth = 130;
        $iDefaultHeight = 6;
        $iMarginBetween = 3;

        $iTotalHeight = $iDefaultHeight * 1.8;

        $aBankCodeColumns = array(25, 25, 35, 40, 50);
        $iBankCodeIndentation = 4;
        $iBankCodePositionX = $this->getMargin("left") + $iBankCodeIndentation;

        // Contents
        $aSections = $this->structure['rubriques'];

        // No VAT to display for fund-raising
        if (isset($this->structure['data']['last_page']['total_ht_soumis_a_tva'])) {
            $iTotalExcludingTaxSubjectToVat = $this->structure['data']['last_page']['total_ht_soumis_a_tva'];
            $aVatTotalList = $this->structure['data']['last_page']['total_tva'];
        }

        $aSynthesisTranslations = $this->translations['synthese'];

        // Draw - cartouche
        $this->drawRedCartouche($aSynthesisTranslations['header_synthese']);

        // Synthesis
        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);

        // Draw - tatals
        $this->Ln($iMarginBetween);

        $this->setColor('fill', $this->fontColors["FOND_SOUS_TOTAL"][0], $this->fontColors["FOND_SOUS_TOTAL"][1], $this->fontColors["FOND_SOUS_TOTAL"][2]);
        $this->setColor('draw', $this->fontColors["LINE_SOUS_TOTAL"][0], $this->fontColors["LINE_SOUS_TOTAL"][1], $this->fontColors["LINE_SOUS_TOTAL"][2]);

        $this->setColor('text', 0, 0, 0);

        // No VAT to display for fund-raising
        if (isset($iTotalExcludingTaxSubjectToVat)) {
            $this->Cell($iFirstColumnWidth, $iDefaultHeight, $this->translations['header_total_ht'], 'R', 0, 'L', true);
            $this->Cell(0, $iDefaultHeight, $this->getFormattedPrice($iTotalExcludingTaxSubjectToVat), 'L', 1, 'R', true);

            foreach ($aVatTotalList as $aLine) {
                $this->Cell($iFirstColumnWidth, $iDefaultHeight, $aLine['taux'], 'R', 0, 'L', true);
                $this->Cell(0, $iDefaultHeight, $this->getFormattedPrice($aLine['value']), 'L', 1, 'R', true);
            }
        }

        $this->setBold(false);

        // Draw - total payable
        $this->Ln($iMarginBetween * 2);
        $this->setColor('fill', $this->fontColors["FOND_TOTAL_PRINCIPAL"][0], $this->fontColors["FOND_TOTAL_PRINCIPAL"][1], $this->fontColors["FOND_TOTAL_PRINCIPAL"][2]);
        $this->setColor('draw', $this->fontColors["LINE_TOTAL_PRINCIPAL"][0], $this->fontColors["LINE_TOTAL_PRINCIPAL"][1], $this->fontColors["LINE_TOTAL_PRINCIPAL"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);

        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->Cell($iFirstColumnWidth, $iTotalHeight, $this->translations['header_total_a_payer_ttc'], 'BR', 0, 'L', true);
        $this->Cell(0, $iTotalHeight, $this->getFormattedPrice($this->structure['data']['last_page']['total_a_payer']), 'BL', 1, 'R', true);
        $this->resetFontColor();

        // Default
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

        // Terms of payment
        $this->Ln(10);
        $this->setColor('draw', $this->fontColors["LINE_CODE_BANQUE"][0], $this->fontColors["LINE_CODE_BANQUE"][1], $this->fontColors["LINE_CODE_BANQUE"][2]);

        // Draw - payment deadlines
        $this->checkPageBreak(30);
        $this->Cell(-1, 0, $aSynthesisTranslations['facture_delai']);
        $this->setBold(true);
        $this->Cell(0, 0, sprintf($aSynthesisTranslations['facture_delai_2'], $this->structure['data']['last_page']['reglement_delai'], $this->structure['data']['last_page']['reglement_date']), 0, 1);
        $this->setBold(false);

        // Draw - bank code
        $this->ln($iMarginBetween);
        $iRemindPositionY = $this->GetY();

        $sBankDetail = sprintf(
            $aSynthesisTranslations['banque_detail'],
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_IBAN),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_BIC_CODE),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_ACCOUNT_HOLDER),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_BANK_ADDRESS)
        );

        // Main frame with bank code details
        $this->setColor('fill', $this->fontColors["FOND_TABLEAU"][0], $this->fontColors["FOND_TABLEAU"][1], $this->fontColors["FOND_TABLEAU"][2]);
        $this->MultiCell(0, 0, "\n\n\n\n\n" . $sBankDetail . "\n\n", 0, 'L', true, 1);
        $iRemind2PositionX = $this->GetY();

        // Bank code table - header
        $this->SetXY($iBankCodePositionX, $iRemindPositionY + $iBankCodeIndentation);
        $this->setBold(true);

        $aHeaders = array(
            $aSynthesisTranslations['code_banque'],
            $aSynthesisTranslations['code_agence'],
            $aSynthesisTranslations['numero_compte'],
            $aSynthesisTranslations['cle_rib'],
            $aSynthesisTranslations['domicialiation']
        );
        foreach ($aHeaders as $iKey => $sValue) {
            $this->MultiCell($aBankCodeColumns[$iKey], 5, $sValue, 1, 'C', false, 0, '', '', true, 0, false, false, 8, 'B', false);
        }
        $this->Ln();
        $this->setBold(false);

        // Bank code table - data
        $this->setColor('fill', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetX($iBankCodePositionX);

        foreach (array(
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_BANK_CODE),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_SORT_CODE),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_ACCOUNT_NUMBER),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_KEY),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_RIB_BANK_NAME),
        ) as $iKey => $sValue) {
            $this->Cell($aBankCodeColumns[$iKey], 0, $sValue, 1, 0, 'C', 1);
        }

        $this->Ln();

        // Draw - Article L.441-6
        $this->SetY($iRemind2PositionX, false);
        $this->ln($iMarginBetween);

        $this->SetFontSize(self::FONT_SIZE_MINI);
        $this->MultiCell(0, 0, Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_INVOICE_MISSED_DEADLINE, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN : RLanguages::LOCALE_FR), 0, 'L');

        if ($this->structure['data']['last_page']['display_instruction_remboursement'] == 1) {
            $this->MultiCell(0, 0, Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_REIMBURSEMENT_INSTRUCTION, $this->structure['lang'] === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN : RLanguages::LOCALE_FR), 0, 'L');
        }
    }

    /**
     * Draws the header of a section
     *
     * @param array $aColumnsWidths : widths of the individual columns
     */
    protected function drawSectionHeader($aColumnsWidths)
    {
        // Init
        $aColumnHeaders = array(
            '',
            $this->translations["header_tarif_unitaire"],
            $this->translations["header_cumul_total"],
            $this->translations["header_deja_facture"],
            $this->translations["header_solde_a_facturer"],
            $this->translations["header_montant"]
        );
        $this->resetFontColor();

        // Draw
        $this->setColor('fill', $this->fontColors["FOND_TABLEAU"][0], $this->fontColors["FOND_TABLEAU"][1], $this->fontColors["FOND_TABLEAU"][2]);
        $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
        $this->setBold(true);

        $bFill = false;
        foreach ($aColumnHeaders as $iKey => $sValue) {
            $this->MultiCell($aColumnsWidths[$iKey], self::HEIGHT_ENTETE_TABLE, $sValue, 'B', 'C', $bFill, 0, '', '', true, 0, false, true, self::HEIGHT_ENTETE_TABLE, 'M');
            $bFill = ! $bFill;
        }
        $this->Ln();

        $this->setBold(false);
        // Don't reset colors because same colors will be used for the table data
    }
}
