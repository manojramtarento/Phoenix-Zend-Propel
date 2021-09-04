<?php

class Phoenix_PDFGen_Statistics extends Phoenix_PDFGen_AbstractPdfGenerator
{

    const ENTETE_COL1_WIDTH = 85;
    const ENTETE_COL2_WIDTH = 45;
    const ENTETE_COL3_WIDTH = 45;
    const WIDTH_CARTOUCHE_LARGE = 100;

    protected $nbGraphsPerLine = 0;
    protected $currentY = 0;

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
        $aStructure = array(
            'data' => array(
                'first_page' => array(
                    'contact_dc' => array(),
                    'contact_cp' => array(),
                ),
                'last_page' => array()
            ),
            'indicators' => array(),
        );

        $aLookForContact = array('nom_contact', 'email_contact', 'tel_contact', 'fax_contact');

        $aLookForFirstPage = array('nom_offre', 'num_operation', 'date_stats', 'date_start_op', 'date_end_op', 'duree_operation', 'date_fin_postale', 'date_fin_gestion');

        $aLookForLastPage = array('num_tva');

        $aLookForBline = array('libelle', 'qte_estimee', 'qte_realisee', 'pourcentage_realisation', 'montant_estime', 'montant_realise', 'montant_encaisse', 'montant_disponible');

        $aLookForSline = array('libelle', 'qte_estimee', 'qte_affectee', 'qte_entree', 'qte_stock');

        // Retrieves the data for the first page
        $oFirstPageElement = $oDomDocument->getElementsByTagName('first_page')->item(0);
        $aFirstPageData = $this->retrieveXmlDataArray($aLookForFirstPage, $oFirstPageElement);
        $aStructure['data']['first_page'] = array_merge($aStructure['data']['first_page'], $aFirstPageData);

        // Retrieves the sales manager contact.
        $aSalesDirectorContactElement = $oFirstPageElement->getElementsByTagName('contact_dc')->item(0);
        $aSalesDirectorContactData = $this->retrieveXmlDataArray($aLookForContact, $aSalesDirectorContactElement);
        $aStructure['data']['first_page']['contact_dc'] = $aSalesDirectorContactData;

        // Retrieves the project manager contact
        $oProjectManagerContactElement = $oFirstPageElement->getElementsByTagName('contact_cp')->item(0);
        $aProjectManagerContactData = $this->retrieveXmlDataArray($aLookForContact, $oProjectManagerContactElement);
        $aStructure['data']['first_page']['contact_cp'] = $aProjectManagerContactData;

        // Retrieves the data for the last page
        $oLastPageElement = $oDomDocument->getElementsByTagName('last_page')->item(0);
        $aLastPageData = $this->retrieveXmlDataArray($aLookForLastPage, $oLastPageElement);
        $aStructure['data']['last_page'] = array_merge($aStructure['data']['last_page'], $aLastPageData);

        // Parse the indicators to display
        $oIndicatorElement = $oDomDocument->getElementsByTagName('indicators')->item(0);
        foreach ($oIndicatorElement->childNodes as $oChild) {
            if ($oChild instanceof DOMElement) {
                $aData = array();

                switch ($oChild->nodeName) {
                    case 'graph':
                        $aGraphData = array();

                        $aPlotNodes = $oChild->getElementsByTagName('plot');
                        if ($oChild->getAttribute('type') != 'barc') {
                            foreach ($aPlotNodes as $oPlotNode) {
                                $aGraphData[$oPlotNode->getAttribute('x')] = $oPlotNode->getAttribute('y');
                            }
                        } else {
                            foreach ($aPlotNodes as $oPlotNode) {
                                $sAttributeX = $oPlotNode->getAttribute('x');
                                $aSegments = array();
                                foreach ($oPlotNode->getElementsByTagName('segment') as $oSegmentNode) {
                                    $aSegments[$oSegmentNode->getAttribute('label')] = $oSegmentNode->nodeValue;
                                }
                                $aGraphData[$sAttributeX] = $aSegments;
                                unset($aSegments);
                            }
                        }
                        $aData = array(
                            'title' => $oChild->getAttribute('title'),
                            'type' => $oChild->getAttribute('type'),
                            'size' => $oChild->getAttribute('size'),
                            'data' => $aGraphData
                        );
                        break;

                    case 'bilan_financier':
                        // Retrieves data for the balance sheet section
                        $aBlineNodes = $oChild->getElementsByTagName('bline');
                        foreach ($aBlineNodes as $oBlineNode) {
                            $aBlineNodeData = $this->retrieveXmlDataArray($aLookForBline, $oBlineNode);
                            $aData[] = $aBlineNodeData;
                        }
                        break;

                    case 'stocks':
                        // Retrieves the data for the inventory section
                        $aLineNodes = $oDomDocument->getElementsByTagName('sline');
                        foreach ($aLineNodes as $oLineNode) {
                            $aData[] = $this->retrieveXmlDataArray($aLookForSline, $oLineNode);
                        }
                        break;

                    case 'tx_remontee':
                    case 'nb_participations':
                    case 'nb_demandes':
                        $aData = $oChild->nodeValue;
                        break;
                }

                $aStructure["indicators"][] = array(
                    'type' => $oChild->nodeName,
                    'data' => $aData
                );
            }
        }
        $this->initialize($aStructure, $aConfig);
    }

    /**
     * Generate document
     */
    public function generate()
    {
        $this->AddPage();
        $this->drawStatisticsHeader();
        $this->Ln(15);
        $this->drawClientHeader();
        $this->Ln(10);
        $this->drawOperationHeader();
        $this->Ln(10);
        $this->drawIndicators();
    }

    /**
     * Header customization
     */
    public function header()
    {
        if ($this->getPage() == 1) {
            parent::header();
        } else {
            // Contents
            $sOperationNumber = $this->structure['data']['first_page']['num_operation'];
            $sStatisticsDate = $this->structure['data']['first_page']['date_stats'];
            $sOperationLabel = $this->structure['data']['first_page']['nom_offre'];
            $sHeaderTitle = $this->translations['header_statistiques'];
            $sOperationHeader = sprintf($this->translations['header_stats'], $sOperationNumber, $sStatisticsDate);

            // Draw
            $this->setBold(true);
            $this->Cell(0, 0, $sHeaderTitle . ' | ' . $sOperationLabel, 0, 1);
            $this->setBold(false);
            $this->Cell(0, 0, $sOperationHeader);
        }
    }

    /**
     * Draws the statistics header
     */
    protected function drawStatisticsHeader()
    {
        // Init
        $iWidth = self::WIDTH_ENTETE_BLOC_DROITE;
        $iHeight = 15;
        $iPositionX = $this->getPageWidth() - ($this->getMargin("right") + $iWidth);
        $this->resetFontColor();

        // Contents
        $sOperationLabel = $this->structure['data']['first_page']['nom_offre'];
        $sOperationNumber = $this->structure['data']['first_page']['num_operation'];
        $sStatisticsDate = $this->structure['data']['first_page']['date_stats'];
        $sHeaderTitle = $this->translations['header_statistiques'];
        $sOperationHeader = sprintf($this->translations['header_stats'], $sOperationNumber, $sStatisticsDate);

        // Draw
        $this->SetY(self::POSY_ENTETE + self::TEXT_MARGIN);
        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->Cell(0, 0, $sHeaderTitle, 0, 1);
        $this->SetFont('', '', self::FONT_SIZE_IMPORTANT);
        $this->Cell(0, 0, $sOperationHeader);

        // Draw - frame
        $this->RoundedRect($iPositionX, self::POSY_ENTETE, $iWidth, $iHeight, self::R, '1111', 'F', array(), $this->fontColors["FOND_TABLEAU"]);

        // Draw - offer
        $this->SetXY($iPositionX, self::POSY_ENTETE + self::TEXT_MARGIN);
        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->MultiCell($iWidth, 0, $sOperationLabel, 0, 'C');
        $this->resetFont();
    }

    protected function drawClientHeader()
    {
        // Init
        $iHeight = 25;
        $iPositionY = $this->getY() + self::TEXT_MARGIN;
        $iColumn1PositionX = $this->getMargin("left") + self::TEXT_MARGIN;
        $iColumn2PositionX = $iColumn1PositionX + self::ENTETE_COL1_WIDTH + (self::TEXT_MARGIN * 2);

        $this->resetFontColor();

        // Contents
        $sSalesDirectorContactName = $this->structure['data']['first_page']['contact_dc']['nom_contact'];
        $sSalesDirectorContactEmail = $this->structure['data']['first_page']['contact_dc']['email_contact'];
        $sSalesDirectorContactPhoneNumber = $this->structure['data']['first_page']['contact_dc']['tel_contact'];
        $sSalesDirectorContactFaxNumber = $this->structure['data']['first_page']['contact_dc']['fax_contact'];
        $sProjectManagerContactName = $this->structure['data']['first_page']['contact_cp']['nom_contact'];
        $sProjectManagerContactEmail = $this->structure['data']['first_page']['contact_cp']['email_contact'];
        $sProjectManagerContactPhoneNumber = $this->structure['data']['first_page']['contact_cp']['tel_contact'];
        $sProjectManagerContactFaxNumber = $this->structure['data']['first_page']['contact_cp']['fax_contact'];
        $aTranslations = $this->translations['contact'];

        // Draw - frame & cartouche
        $this->drawGreyCartoucheBloc($iHeight, $aTranslations['title2'], array('w_entete' => self::WIDTH_CARTOUCHE_NORMAL));

        // Draw - first column (left)
        $this->SetXY($iColumn1PositionX, $iPositionY);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        $this->Cell(self::ENTETE_COL1_WIDTH, 5, $sSalesDirectorContactName, 0, 2);
        $this->resetFont();
        $this->Cell(self::ENTETE_COL1_WIDTH, 0, $this->translations['directeur_de_clientele'], 0, 2);
        $this->Cell(self::ENTETE_COL1_WIDTH, 0, $sSalesDirectorContactEmail, 0, 2);
        $this->Cell(self::ENTETE_COL1_WIDTH, 0, $this->translations['tel'] . ' ' . $sSalesDirectorContactPhoneNumber, 0, 2);
        $this->Cell(self::ENTETE_COL1_WIDTH, 0, $this->translations['fax'] . ' ' . $sSalesDirectorContactFaxNumber, 0, 2);

        // Draw - second column (right)
        $this->setXY($iColumn2PositionX, $iPositionY);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        $this->Cell(self::ENTETE_COL2_WIDTH, 5, $sProjectManagerContactName, 0, 2);
        $this->resetFont();
        $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['charge_de_projet'], 0, 2);
        $this->Cell(self::ENTETE_COL2_WIDTH, 0, $sProjectManagerContactEmail, 0, 2);
        $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['tel'] . ' ' . $sProjectManagerContactPhoneNumber, 0, 2);
        $this->Cell(self::ENTETE_COL2_WIDTH, 0, $this->translations['fax'] . ' ' . $sProjectManagerContactFaxNumber, 0, 2);
    }

    protected function drawOperationHeader()
    {
        // Init
        $iHeight = 15;
        $iPositionY = $this->getY();
        $iColumn1PositionX = $this->getMargin("left") + self::TEXT_MARGIN;
        $iColumn2PositionX = $iColumn1PositionX + self::ENTETE_COL1_WIDTH;
        $iColumn3PositionX = $iColumn2PositionX + self::ENTETE_COL2_WIDTH;

        $this->resetFontColor();

        // Draw - frame & container
        $this->drawGreyCartoucheBloc($iHeight, $this->translations['header_date_ope'], array('w_entete' => self::WIDTH_CARTOUCHE_NORMAL));

        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);

        // Draw - left
        $this->SetXY($iColumn1PositionX, $iPositionY + self::TEXT_MARGIN);

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::CONSUMERING_DATES)) {
            $this->setBold(true);
            $this->Cell(0, 5, $this->translations['duree_op'], 0, 2);
            $this->setBold(false);
            if (! empty($this->structure['data']['first_page']['duree_operation'])) {
                $this->Cell(0, 0, $this->structure['data']['first_page']['duree_operation'], 0, 2);
            } else {
                $this->Cell(0, 0, $this->translations['du'] . ' ' . $this->structure['data']['first_page']['date_start_op'] . ' ' . $this->translations['au'] . ' ' . $this->structure['data']['first_page']['date_end_op'], 0, 2);
            }
        }

        // Draw - middle
        $this->SetXY($iColumn2PositionX, $iPositionY + self::TEXT_MARGIN);
        $sPostalEndDate = $this->structure['data']['first_page']['date_fin_postale'];
        if ($sPostalEndDate && Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_POSTE_DATE)) {
            $this->setBold(true);
            $this->Cell(self::TEXT_MARGIN * 2, 8, '', "L", 0);  // Vertical line
            $this->Cell(0, 5, $this->translations['fin_postale'], 0, 2);
            $this->setBold(false);
            $this->Cell(0, 0, $sPostalEndDate, 0, 2);
        }

        // Draw - right
        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::END_DATE)) {
            $sManagementFinishDate = $this->structure['data']['first_page']['date_fin_gestion'];
            $this->SetXY($iColumn3PositionX, $iPositionY + self::TEXT_MARGIN);
            if ($sManagementFinishDate) {
                $this->setBold(true);
                $this->Cell(self::TEXT_MARGIN * 2, 8, '', "L", 0);  // Vertical line
                $this->Cell(0, 5, $this->translations['fin_gestion'], 0, 2);
                $this->setBold(false);
                $this->Cell(0, 0, $sManagementFinishDate, 0, 2);
            }
        }
    }

    protected function drawNbConsumersRequests($aData)
    {
        // Init
        $iHeight = 8;
        $iPositionX = $this->getMargin("left");
        $iPositionY = $this->getY();

        $this->resetFontColor();

        // Contents
        $sStatisticsDate = $this->structure['data']['first_page']['date_stats'];
        $aTranslations = $this->translations['stats'];
        $sText = sprintf($aTranslations['nb_participations'], $sStatisticsDate, $this->getFormattedQuantity($aData));

        // Draw frame
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
        $this->RoundedRect($iPositionX, $iPositionY, $this->getDrawablePageWidth(), $iHeight, self::R);
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

        $this->Cell(0, $iHeight, $this->getUpperText($sText), 0, 2, 'C');
        $this->Ln();
    }

    protected function drawNbComplaints($aData)
    {
        // Init
        $iHeight = 8;
        $iPositionX = $this->getMargin("left");
        $iPositionY = $this->getY();

        $this->resetFontColor();

        // Contents
        $aTranslations = $this->translations['stats'];
        $sText = sprintf($aTranslations['nb_demandes'], $aData);

        // Draw frame
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
        $this->RoundedRect($iPositionX, $iPositionY, $this->getDrawablePageWidth(), $iHeight, self::R);
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

        $this->Cell(0, $iHeight, $this->getUpperText($sText), 0, 2, 'C');
        $this->Ln();
    }

    protected function drawParticipationRate($aData)
    {
        // Pre-init
        $this->resetFontColor();
        $this->SetFontSize(self::FONT_SIZE_MINI);
        $aTranslations = $this->translations['stats'];

        // Init
        $iHeight = 8;
        $iWidthInfoBloc1 = $this->GetStringWidth($aTranslations['tx_remontee_info1']) + 2;
        $iWidthInfoBloc2 = $this->GetStringWidth($aTranslations['tx_remontee_info3']) + 2;
        $iPositionX = $this->getMargin("left");
        $iPositionY = $this->getY();

        // Contents
        $sStatisticsDate = $this->structure['data']['first_page']['date_stats'];
        $sText = sprintf($aTranslations['tx_remontee'], $sStatisticsDate, $this->getFormattedPourcent($aData, true));

        // Draw frame
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_VERY_IMPORTANT);
        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
        $this->RoundedRect($iPositionX, $iPositionY, $this->getDrawablePageWidth(), $iHeight, self::R);
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

        $this->Cell(0, $iHeight, $this->getUpperText($sText), 0, 1, 'C');

        // The information block is displayed. Returns rate = (mail received / nb of forwarding agents)
        $this->StartTransform();
        $this->setX(-10);
        $this->Rotate(90);

        $this->setColor('text', $this->fontColors["FOOTER"][0], $this->fontColors["FOOTER"][1], $this->fontColors["FOOTER"][2]);
        $this->SetFont('', '', self::FONT_SIZE_MINI);
        $this->Cell($iWidthInfoBloc1, 5, $aTranslations['tx_remontee_info1']);
        $this->Cell($iWidthInfoBloc2, 3, $aTranslations['tx_remontee_info2'], 0, 2, 'C');
        $this->Line($this->getX(), $this->getY(), $this->getX() + $iWidthInfoBloc2, $this->getY());
        $this->Cell($iWidthInfoBloc2, 3, $aTranslations['tx_remontee_info3'], 0, 0, 'C');
        $this->StopTransform();

        $this->Ln();
    }

    /**
     * Displays the indicators one by one
     */
    private function drawIndicators()
    {
        // Contents
        $aIndicators = $this->structure['indicators'];
        foreach ($aIndicators as $aIndicator) {
            $aData = $aIndicator['data'];

            switch ($aIndicator['type']) {
                case 'graph':
                    $this->drawGraph($aData);
                    break;

                case 'bilan_financier':
                    $this->drawFinancialBalance($aData);
                    break;

                case 'stocks':
                    $this->drawStocks($aData);
                    break;

                case 'tx_remontee':
                    $this->drawParticipationRate($aData);
                    break;

                case 'nb_participations':
                    $this->drawNbConsumersRequests($aData);
                    break;

                case 'nb_demandes':
                    $this->drawNbComplaints($aData);
                    break;
            }

            if ($aIndicator['type'] != 'graph') {
                $this->nbGraphsPerLine = 0;
                $this->currentY = $this->getY();
            }
        }
    }

    /**
     * Displays a graph
     * @param array $aGraphData
     */
    private function drawGraph($aGraphData)
    {
        // Init
        $iHeightLarge = 50;
        $iHeightMini = 45;
        $iWidthMini = 88;
        $iWidthLine = 6;
        $iMarginX = 1;
        $iMarginY = 3;
        $iColumn2PositionX = $this->getPageWidth() - $this->getMargin('right') - $iWidthMini;

        $this->resetFontColor();

        // Contents
        $oGraphDrawer = new Phoenix_GraphDrawer();
        $oGraphFile = null;

        // Draw - graph
        $this->nbGraphsPerLine++;

        // The appropriate size for the graph and ideal position is calculated.
        switch ($aGraphData['size']) {
            case 'large':
                $iHeight = $iHeightLarge;
                $iWidth = $this->getDrawablePageWidth();

                if ($this->nbGraphsPerLine > 1) {
                    // We have already displayed a mini graph on this line, so we force the return to the line.
                    $this->nbGraphsPerLine = 1;

                    // Let's get to the end of the mini graph and skip a line.
                    $this->setY($this->currentY + $iHeightMini + $iWidthLine);
                    $this->currentY = $this->getY();
                }
                break;

            case 'mini':
                $iHeight = $iHeightMini;
                $iWidth = $iWidthMini;

                if ($this->nbGraphsPerLine == 1) {
                    // On garde la position Y (avant dessin) pour le second graph
                    $this->currentY = $this->getY();
                } elseif ($this->nbGraphsPerLine == 2) {
                    // On se place au bon endroit pour afficher le second graph
                    $this->setXY($iColumn2PositionX, $this->currentY);
                }
                break;
        }

        // Draws the frame if you have room, otherwise you can change the page.
        if ($this->checkPageBreak($iHeight)) {
            $this->currentY = $this->getY();
        }
        $this->drawGreyCartoucheBloc($iHeight, $aGraphData['title'], array('w_entete' => self::WIDTH_CARTOUCHE_MEDIUM, 'width' => $iWidth));

        // Then recover the image file of the graph according to its type and size
        $iPixelWidth = $iWidth * 3.45;  // Specific adapation for pixels
        $iPixelHeight = $iHeight * 3.25;  // Specific adapation for pixels

        switch ($aGraphData['type']) {
            case 'table':
                // On affiche un mini-tableau à gauche
                $this->drawTable($aGraphData['data'], $iWidth);
                break;
            case 'table-pie':
                // On affiche un mini-tableau à gauche
                $this->drawGraphMiniTable($aGraphData['data'], $iWidth / 2);

                // On se décale à droite pour le mini-graph
                $this->setXY($this->getX() + ($iWidth / 2), $this->currentY + $iMarginY);

                $oGraphFile = $oGraphDrawer->pie($aGraphData['data'], ($iPixelWidth / 2) - 1, $iPixelHeight);
                break;

            case 'pie':
                $oGraphFile = $oGraphDrawer->pie($aGraphData['data'], $iPixelWidth, $iPixelHeight);
                break;

            case 'barv':
                $oGraphFile = $oGraphDrawer->barGraphVertical($aGraphData['data'], $iPixelWidth, $iPixelHeight);
                break;

            case 'barh':
                $oGraphFile = $oGraphDrawer->barGraphHorizontal($aGraphData['data'], $iPixelWidth, $iPixelHeight);
                break;
            case 'barc':
                $oGraphFile = $oGraphDrawer->barGraphVerticalAccumulated($aGraphData['data'], $iPixelWidth, $iPixelHeight);
                break;
        }

        // On affiche le graph
        if ($oGraphFile != null) {
            // Ajust margins
            if ($aGraphData['size'] == 'mini' && $this->nbGraphsPerLine == 2) {
                $this->setXY($iColumn2PositionX + $iMarginX, $this->currentY + $iMarginY);
            } else {
                $this->setX($this->getX() + $iMarginX);
            }

            // Draw
            if ($aGraphData['size'] == 'large') {
                $this->Image($oGraphFile, '', '', '', 0, '', '', '', false, 300, 'C');
            } else {
                $this->Image($oGraphFile);
            }
        }

        // Set the end of the graph and skip a line
        $this->setY($this->currentY + $iHeight + $iWidthLine);

        // Reset nb graphs
        $bReset = ($aGraphData['size'] == 'large' || $this->nbGraphsPerLine == 2);
        if ($bReset) {
            $this->nbGraphsPerLine = 0;
            $this->currentY = $this->getY();
        }
    }

    /**
     * Draw a mini table linked with a graph
     * @param array $aGraphData : données du graph
     * @param int $iWidth : taille autorisée
     */
    protected function drawGraphMiniTable($aGraphData, $iWidth)
    {
        // Init
        $aColumnsWidths = array($iWidth * 1 / 2, ($iWidth * 1 / 2) - 10, 10);
        $aColumnsAligns = array('L', 'R', 'R');

        $this->resetFontColor();

        // Contents
        $sTotalTxt = $this->translations['header_total'];

        // Calculate total
        $iTotal = 0;
        foreach ($aGraphData as $iValue) {
            $iTotal += $iValue;
        }

        // Draw - table - header
        $aColumnsHeaders = array('', 'Q.', '%');

        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        foreach ($aColumnsHeaders as $iKey => $sValue) {
            $this->MultiCell($aColumnsWidths[$iKey], 5, $sValue, '', $aColumnsAligns[$iKey], 0, 0);
        }
        $this->resetFont();

        $this->Ln();

        // Draw - table - data
        $this->SetFontSize(7);
        $bIsFirstLine = true;
        foreach ($aGraphData as $sText => $iValue) {
            $sBorder = 'T';

            if ($bIsFirstLine == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
                $bIsFirstLine = false;
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }

            // Calculate the height of the line
            $iColumnHeight = $this->getServiceLineHeight($aColumnsWidths[0], $sText);

            $this->MultiCell($aColumnsWidths[0], $iColumnHeight, $sText, $sBorder, $aColumnsAligns[0], 0, 0);
            $this->MultiCell($aColumnsWidths[1], $iColumnHeight, $this->getFormattedQuantity($iValue), $sBorder, $aColumnsAligns[1], 0, 0);
            if ($iTotal != 0) {
                $this->MultiCell($aColumnsWidths[2], $iColumnHeight, $this->getFormattedPourcent($iValue / $iTotal * 100, false), $sBorder, $aColumnsAligns[2], 0, 0);
            }
            $this->Ln();
        }
        $this->resetFont();

        // Draw - table - total
        $this->setBold(true);
        $this->MultiCell($aColumnsWidths[0], 0, $sTotalTxt, 0, 'L', 0, 0);
        $this->MultiCell($aColumnsWidths[1], 0, $this->getFormattedQuantity($iTotal), 0, $aColumnsAligns[2], 0, 0);
        $this->setBold(false);

        $this->Ln();
    }

    /**
     * Draw a table for a graph
     * @param array $aGraphData : graph data
     * @param int $iWidth : authorized width
     */
    protected function drawTable($aGraphData, $iWidth)
    {
        // Init
        $aColumnsWidths = array($iWidth * 3 / 4, ($iWidth * 1 / 4));
        $aColumnsAligns = array('L', 'C');
        $this->resetFontColor();

        // Draw - table - header
        $this->resetFont();
        $this->Ln();

        // Draw - table - data
        $this->SetFontSize(7);
        foreach ($aGraphData as $sText => $iValue) {
            $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);

            // Calculate the height of the line
            $iColumnHeight = $this->getServiceLineHeight($aColumnsWidths[0], $sText);

            $this->MultiCell($aColumnsWidths[0], $iColumnHeight, $sText, 1, $aColumnsAligns[0], 0, 0);
            $this->MultiCell($aColumnsWidths[1], $iColumnHeight, $this->getFormattedQuantity($iValue), 1, $aColumnsAligns[1], 0, 0);

            $this->Ln();
        }
        $this->resetFont();
        $this->setBold(false);
        $this->Ln();
    }



    /**
     * Draw the Financial Statement table, it needs at least 1/3 page and takes all the remaining page
     *
     * @param array $aFinancalBalanceData
     */
    protected function drawFinancialBalance(array $aFinancalBalanceData)
    {
        // Pre-init, block a blank page if you don't have at least 1/3 of the page
        $iMinHeight = $this->getDrawablePageHeight() * 1 / 3;
        $this->checkPageBreak($iMinHeight);

        $iRemindX = $this->GetX();
        $iRemindY = $this->GetY();

        // Init
        $aColumnsWidths = array(40, 20, 20, 20, 20, 20, 20, 20);
        $aColumnsAligns = array('L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'R');
        // Take all the available height
        $iHeight = $this->getPageHeight() - $this->GetY() - $this->getMargin('bottom');

        $this->resetFontColor();

        // Contents
        $sTotalTxt = $this->translations['header_total'];
        $sTitle = $this->translations['stats']['header_bilan__financier'];
        $this->Ln();

        // Draw - table - header
        $aColumnsHeaders = array(
            '',
            $this->translations['header_qte_estimee'],
            $this->translations['header_qte_realisee'],
            $this->translations['header_pourcentage_realisation'],
            $this->translations['header_montant_estime'],
            $this->translations['header_montant_realise'],
            $this->translations['header_montant_encaisse'],
            $this->translations['header_montant_disponible'],
        );

        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        foreach ($aColumnsHeaders as $iKey => $sValue) {
            $this->MultiCell($aColumnsWidths[$iKey], self::HEIGHT_ENTETE_TABLE, $sValue, '', $aColumnsAligns[$iKey], 0, 0);
        }
        $this->resetFont();

        $this->Ln();

        // Draw - table - data
        $iTotal = 0;
        foreach ($aFinancalBalanceData as $iKey => $aRow) {
            $sBorder = 'T';

            if ($iKey == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }

            // Calculate the height of the line
            $iColumnHeight = $this->getServiceLineHeight($aColumnsWidths[0], $aRow);


            if ($this->GetY() + $iColumnHeight > $this->getPageHeight() - $this->getMargin('bottom')) {//die;
                $this->drawGreyCartoucheBloc($this->GetY() - $iRemindY, $sTitle, array('posY' => $iRemindY, 'posX' => $iRemindX, 'w_entete' => self::WIDTH_CARTOUCHE_MEDIUM, 'draw_as_text' => true));
            }
            if ($this->checkPageBreak($iColumnHeight)) {
                $iRemindY = $this->GetY();
                $this->Ln();
                $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
                foreach ($aColumnsHeaders as $iColumnKey => $sValue) {
                    $this->MultiCell($aColumnsWidths[$iColumnKey], self::HEIGHT_ENTETE_TABLE, $sValue, '', $aColumnsAligns[$iColumnKey], 0, 0);
                }
                $this->resetFont();
                $this->Ln();
            }

            $this->MultiCell($aColumnsWidths[0], $iColumnHeight, $aRow['libelle'], $sBorder, $aColumnsAligns[0], 0, 0);
            $this->MultiCell($aColumnsWidths[1], $iColumnHeight, $this->getFormattedQuantity($aRow['qte_estimee']), $sBorder, $aColumnsAligns[8], 0, 0);
            $this->MultiCell($aColumnsWidths[2], $iColumnHeight, $this->getFormattedQuantity($aRow['qte_realisee']), $sBorder, $aColumnsAligns[8], 0, 0);
            $this->MultiCell($aColumnsWidths[3], $iColumnHeight, $this->getFormattedPourcent($aRow['pourcentage_realisation']), $sBorder, $aColumnsAligns[8], 0, 0);
            $this->MultiCell($aColumnsWidths[4], $iColumnHeight, $this->getFormattedPrice($aRow['montant_estime']), $sBorder, $aColumnsAligns[8], 0, 0);
            $this->MultiCell($aColumnsWidths[5], $iColumnHeight, $this->getFormattedPrice($aRow['montant_realise']), $sBorder, $aColumnsAligns[8], 0, 0);
            $this->MultiCell($aColumnsWidths[6], $iColumnHeight, $this->getFormattedPrice($aRow['montant_encaisse']), $sBorder, $aColumnsAligns[8], 0, 0);
            $this->MultiCell($aColumnsWidths[7], $iColumnHeight, $this->getFormattedPrice($aRow['montant_disponible']), $sBorder, $aColumnsAligns[8], 0, 0);

            $iTotal += $aRow['montant_disponible'];
            $this->Ln();
        }

        // Draw - table - total
        $iColumnsTotalWidth = $aColumnsWidths[0] + $aColumnsWidths[1] + $aColumnsWidths[2] + $aColumnsWidths[3] + $aColumnsWidths[4] + $aColumnsWidths[5] + $aColumnsWidths[6];

        $this->Ln();
        $this->setFont('', 'B', 11);
        $this->MultiCell($iColumnsTotalWidth, 0, $sTotalTxt, 0, 'L', 0, 0);
        $this->resetFont();
        $this->setFont('', 'B', 9);
        $this->MultiCell($aColumnsWidths[6], 0, $this->getFormattedPrice($iTotal), 0, $aColumnsAligns[6], 0, 0);

        $this->Ln();
        $this->Ln();

        $this->drawGreyCartoucheBloc($this->GetY() - $iRemindY, $sTitle, array('posY' => $iRemindY, 'posX' => $iRemindX, 'w_entete' => self::WIDTH_CARTOUCHE_MEDIUM, 'draw_as_text' => true));

        if ($iTotal < 0) {
            $this->Ln();
            $this->Ln();
            $this->resetFont();
            $this->setColor('text', $this->fontColors["RED"][0], $this->fontColors["RED"][1], $this->fontColors["RED"][2]);
            $this->Cell(0, 0, $this->translations['stats']['fonds_dispo']);
        }
        $this->resetFont();

        $this->Ln();
    }

    /**
     * Displays the Stock Status table, this table needs at least 1/3 of a page and takes all the remaining page.
     * @param array $aStocks
     */
    protected function drawStocks($aStocks)
    {
        // Pre-init, block a blank page if you don't have at least 1/3 of the page
        $iMinHeight = $this->getDrawablePageHeight() * 1 / 3;
        $this->checkPageBreak($iMinHeight);

        $iRemindY = $this->GetY();

        // Init
        $aColumnsWidths = array(55, 30, 30, 30, 30);
        $aColumnsAligns = array('L', 'C', 'C', 'C', 'C');
        // We take all the available height
        $iHeight = $this->getPageHeight() - $this->GetY() - $this->getMargin('bottom');

        $this->resetFontColor();

        // Contents
        $sTitle = $this->translations['stats']['header_etat_des_stocks'];
        $aTranslations = $this->translations['stats'];

        // Draw
        $this->drawGreyCartoucheBloc($iHeight, $sTitle, array('w_entete' => self::WIDTH_CARTOUCHE_MEDIUM));

        // Draw - table - header
        $aColumnsHeaders = array(
            '',
            $this->translations['header_qte_estimee'],
            $this->translations['header_qte_affectee'],
            $this->translations['header_qte_entree'],
            $this->translations['header_qte_stock']
        );

        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);
        foreach ($aColumnsHeaders as $iKey => $sValue) {
            $this->MultiCell($aColumnsWidths[$iKey], self::HEIGHT_ENTETE_TABLE, $sValue, '', $aColumnsAligns[$iKey], 0, 0, '', '', true, 0, false, true, self::HEIGHT_ENTETE_TABLE, 'M');
        }
        $this->resetFont();

        $this->Ln();

        // Draw - tableau - data
        $bAlert = false;
        foreach ($aStocks as $iKey => $aRow) {
            $sBorder = 'T';

            if ($iKey == 0) {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_HEADER"][0], $this->fontColors["LINE_TABLEAU_HEADER"][1], $this->fontColors["LINE_TABLEAU_HEADER"][2]);
            } else {
                $this->setColor('draw', $this->fontColors["LINE_TABLEAU_CELL"][0], $this->fontColors["LINE_TABLEAU_CELL"][1], $this->fontColors["LINE_TABLEAU_CELL"][2]);
            }

            $this->MultiCell($aColumnsWidths[0], 0, $aRow['libelle'], $sBorder, $aColumnsAligns[0], 0, 0);
            $this->MultiCell($aColumnsWidths[1], 0, $this->getFormattedQuantity($aRow['qte_estimee']), $sBorder, $aColumnsAligns[1], 0, 0);
            $this->MultiCell($aColumnsWidths[2], 0, $this->getFormattedQuantity($aRow['qte_affectee']), $sBorder, $aColumnsAligns[2], 0, 0);
            $this->MultiCell($aColumnsWidths[3], 0, $this->getFormattedQuantity($aRow['qte_entree']), $sBorder, $aColumnsAligns[3], 0, 0);
            $this->MultiCell($aColumnsWidths[4], 0, $this->getFormattedQuantity($aRow['qte_stock']), $sBorder, $aColumnsAligns[4], 0, 0);

            $this->Ln();

            if ($aRow['qte_stock'] < 0) {
                $bAlert = true;
            }
        }

        if ($bAlert) {
            $this->Cell(0, 10, $aTranslations['alerte_stocks']);
        }
        // Go to the end of page
        $this->setY($iMinHeight + $iRemindY);
        $this->Ln();
    }

    /**
     * Return an array of wanted data
     *
     * @param array $aDataToRetrieve : tableau des clés à récupérer
     * @param DomElement $oXmlElement : element DOM où l'on doit chercher les données
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
                throw new \LogicException('Error when reading XML: The ' . $sDataKey . ' tag is missing in the ' . $oXmlElement->nodeName . ' branch', (int) $oException->getCode(), $oException);
            }
        }

        return $aData;
    }
}
