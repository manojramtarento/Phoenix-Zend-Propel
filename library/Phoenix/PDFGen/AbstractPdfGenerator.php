<?php

abstract class Phoenix_PDFGen_AbstractPdfGenerator extends TCPDF
{
    const LANGUAGE_FRENCH = 'FRA';
    const LANGUAGE_ENGLISH = 'ENG';
    const LANGUAGE_DEFAULT = self::LANGUAGE_FRENCH;
    const LANGUAGE_EXTENSION = '.ini';
    const FONT_FAMILY_DEFAULT = 'arial';
    const FONT_SIZE_DEFAULT = 8;
    const FONT_SIZE_IMPORTANT = 9; // Subtotals
    const FONT_SIZE_VERY_IMPORTANT = 11; // Total payable
    const FONT_SIZE_WATERMARK = 68;   // Watermark
    const FONT_SIZE_MINI = 6;   // footer, etc.
    const FONT_SIZE_FOOTER_1 = 7;
    const FONT_SIZE_FOOTER_2 = 6;
    const LINE_WIDTH_DEFAULT = 0.2;
    const LINE_WIDTH_IMPORTANT = 0.3;
    const POSY_ENTETE = 45;
    const POSX_CARTOUCHE = 4; // In addition of left margin
    const WIDTH_CARTOUCHE_MINI = 30;
    const WIDTH_CARTOUCHE_NORMAL = 50;
    const WIDTH_CARTOUCHE_MEDIUM = 80;
    const WIDTH_CARTOUCHE_LARGE = 120;
    const WIDTH_ENTETE_BLOC_DROITE = 90; // Size of the block on the right (client or operation title)
    const HEIGHT_CARTOUCHE = 6;
    const HEIGHT_CARTOUCHE_MARGIN_BOTTOM = 10;
    const HEIGHT_ENTETE_TABLE = 8;
    const MARGIN_TOP_ENTETE_TABLE = 4;
    const TEXT_MARGIN = 4;
    const R = 2;

    /**
     * Structure of the document
     *
     * @var array
     */
    protected $structure;

    /**
     * Language of the document
     *
     * @var array
     */
    protected $language;

    /**
     * Translations of the document
     *
     * @var array
     */
    protected $translations;

    /**
     * Set if watermark must be printed
     *
     * @var bool
     */
    protected $watermark = false;

    /**
     * Number of grouped documents
     *
     * @var int
     */
    protected $pageGroups = 0;

    /**
     * Page number within a group of documents
     *
     * @var int
     */
    protected $pageGroup = 0;

    /**
     * @var array
     */
    protected $fontColors = array();

    /**
     * Generate the document
     */
    abstract public function generate();

    /**
     * @param array $aStructure
     * @param array $aConfig (all keys are optionals)
     *  - xml : name of the xml file to be used or xml content directly
     *  - lang : name of the language to be used (ex: french). The language file must exist (ex: french. ini)
     *  - watermark : text to display as watermark
     */
    public function initialize(array $aStructure, array $aConfig = array())
    {
        $this->structure = $aStructure;

        $this->SetCreator(PDF_CREATOR);
        $this->SetAuthor(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME));

        $this->SetTitle($this->structure['title'] ?? $aConfig['title'] ?? '');

        $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->SetFooterMargin(PDF_MARGIN_FOOTER);
        $this->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Init the useful colors
        $this->fontColors = array(
            'DEFAULT' => array(61, 60, 63),
            'BLACK' => array(0, 0, 0),
            'WHITE' => array(255, 255, 255),
            'RED' => array(255, 0, 0),
            'MENTIONS' => array(88, 88, 90),
            'DESCRIPTIF_PRESTA' => array(100, 101, 103),
            'FOOTER' => array(158, 158, 158),
            'CONTOUR_BLOC' => array(207, 209, 210),
            'FOND_CARTOUCHE_GREY' => array(136, 136, 136),
            'FOND_CARTOUCHE_RED' => array(231, 76, 85),
            'FOND_TABLEAU' => array(236, 236, 236),
            'FOND_SOUS_TOTAL' => array(218, 218, 218),
            'FOND_TOTAL_PRINCIPAL' => array(113, 113, 113),
            'FOND_ORANGE' => array(248, 228, 215),
            'LINE_TABLEAU_HEADER' => array(158, 158, 158),
            'LINE_TABLEAU_CELL' => array(218, 218, 218),
            'LINE_SOUS_TOTAL' => array(158, 158, 158),
            'LINE_TOTAL_PRINCIPAL' => array(52, 52, 52),
            'LINE_CODE_BANQUE' => array(197, 199, 200),
        );

        // Init the language
        $this->setLanguage($this->structure['lang'] ?? $aConfig['lang'] ?? self::LANGUAGE_DEFAULT);

        // Save the watermark flag
        $this->watermark = ! empty($aConfig['watermark']);

        $this->loadDefaultFonts();
    }

    /**
     * Load default font and its differents styles
     */
    protected function loadDefaultFonts()
    {

        $sFontDirectoryPath = APPLICATION_PATH . '/../resources/tcpdf/fonts';

        foreach (array('b','i','bi') as $sStyle) {
            if (! file_exists($sDefaultFontFilePath = $sFontDirectoryPath.'/'.self::FONT_FAMILY_DEFAULT.$sStyle.'.php')) {
                throw new \LogicException('Default font file for style "'.$sStyle.'" "'.$sDefaultFontFilePath.'" does not exists');
            }
            $this->AddFont(self::FONT_FAMILY_DEFAULT, strtoupper($sStyle), $sDefaultFontFilePath, false);
        }

        // Set default font
        $sDefaultFontFilePath = APPLICATION_PATH . '/../resources/tcpdf/fonts/'.self::FONT_FAMILY_DEFAULT.'.php';
        if (! file_exists($sDefaultFontFilePath)) {
            throw new \LogicException('Default font file "'.$sDefaultFontFilePath.'" does not exists');
        }
        $this->SetFont(self::FONT_FAMILY_DEFAULT, '', self::FONT_SIZE_DEFAULT, $sDefaultFontFilePath);
    }

    /**
     * @return int
     */
    public function getPageGroup()
    {
        return $this->pageGroup;
    }

    /**
     * @param string $sPageGroup
     */
    public function startPageGroup($sPageGroup = '')
    {
        parent::startPageGroup($sPageGroup);
        $this->pageGroups++;
        $this->pageGroup = 1;
    }

    /**
     * @param string $sOrientation
     * @param string $sFormat
     * @param bool $bKeepMargins
     * @param bool $bTocPage
     */
    public function AddPage($sOrientation = '', $sFormat = '', $bKeepMargins = false, $bTocPage = false)
    {
        parent::AddPage($sOrientation, $sFormat, $bKeepMargins, $bTocPage);
        $this->pageGroup++;
    }

    /**
     * Returns a quantity formatted for display (e. g. 1800 >' 1 800')
     *
     * @param float $fValue
     * @return string
     */
    protected function getFormattedQuantity($fValue)
    {
        if ($fValue === '') {
            return '';
        }

        if (is_numeric($fValue)) {
            $fValue = number_format((double) $fValue, 0, ',', ' ');
        }

        return $fValue;
    }

    /**
     * Returns a percentage formatted for display (e. g. 58 >' 58 %')
     *
     * @param float $fValue
     * @param bool $bDouble
     * @return string
     */
    protected function getFormattedPourcent($fValue, $bDouble = true)
    {
        return Phoenix_Data_Convert::formatPercent($fValue, $bDouble);
    }

    /**
     * Returns a price formatted for display (ex: 1800.44 >' 1 800,44 €')
     *
     * @param float $fValue
     * @param string $sCurrency
     * @return string
     */
    protected function getFormattedPrice($fValue, $sCurrency = '€')
    {
        if ($fValue === '') {
            return '';
        }

        if (is_numeric($fValue)) {
            $fValue = number_format((double) $fValue, 2, ',', ' ') . ' '.$sCurrency;
        }

        return $fValue;
    }

    /**
     * Returns the height of a service (line)
     *
     * @param int $iWidth : column width
     * @param array $aRow : data to display
     * @return int
     */
    protected function getServiceLineHeight($iWidth, $aRow) : int
    {
        if (is_string($aRow)) {
            return $this->getStringHeight($iWidth, $aRow, true);
        }

        $iColumnH1 = 0;
        $iColumnH2 = 0;
        if (isset($aRow['libelle'])) {
            $this->setBold(true);
            $iColumnH1 = $this->getStringHeight($iWidth, $aRow['libelle'], true);
            $this->setBold(false);
        }

        if (isset($aRow['descriptif'])) {
            $iColumnH2 = $this->getStringHeight($iWidth, $aRow['descriptif'], true);
        }

        return $iColumnH1 + $iColumnH2;
    }

    /**
     * Returns text provided in upper case
     * Note: Do not use the strtoupper function that does not convert accents to uppercase. In addition, it is necessary to specify the encoding' utf-8' for the mb_strtoupper function.
     *
     * @param string $sText
     * @return string
     */
    protected function getUpperText($sText)
    {
        return mb_strtoupper($sText, 'utf-8');
    }

    /**
     * Reset font and colors to be used
     */
    protected function resetFontColor()
    {
        $this->resetFont();
        $this->resetColor();
    }

    /**
     * Enable/Disable Bold Text Bold setting
     */
    protected function setBold($bEnable = true)
    {
        $this->SetFont('', $bEnable?'B':'');
    }

    /**
     * Reset the font to use
     */
    protected function resetFont()
    {
        $this->SetFont(self::FONT_FAMILY_DEFAULT, '', self::FONT_SIZE_DEFAULT);
    }

    /**
     * Reset the colors to use
     */
    protected function resetColor()
    {
        $this->setColor('text', $this->fontColors["DEFAULT"][0], $this->fontColors["DEFAULT"][1], $this->fontColors["DEFAULT"][2]);
        $this->setColor('draw', $this->fontColors["BLACK"][0], $this->fontColors["BLACK"][1], $this->fontColors["BLACK"][2]);
        $this->setColor('fill', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
    }

    /**
     * Returns the requested margin
     *
     * @param string $sType ('left', 'top', 'right', 'bottom')
     * @return int
     */
    protected function getMargin($sType)
    {
        return $this->getMargins()[$sType];
    }

    /**
     * Returns page width without left and right margins
     */
    protected function getDrawablePageWidth()
    {
        return $this->getPageWidth() - $this->getMargin("left") - $this->getMargin("right");
    }

    /**
     * Returns page height without high and low margins
     */
    protected function getDrawablePageHeight()
    {
        return $this->getPageHeight() - $this->getMargin("top") - $this->getMargin("bottom");
    }

    /**
     * Applies the watermark specified on all pages of the document
     */
    protected function applyWatermark()
    {

        // Find the middle of the page and adjust.
        $iWatermarkX = 5;
        $iWatermarkY = $this->getPageHeight() - 50;
        $iNbPages = $this->getNumPages();
        for ($iCurrentPage = 1; $iCurrentPage <= $iNbPages; $iCurrentPage++) {
            $this->setPage($iCurrentPage);

            // Get the current page break margin
            $bMargin = $this->getBreakMargin();

            // Get current auto-page-break mode
            $bAutoPageBreak = $this->AutoPageBreak;

            // Disable auto-page-break
            $this->SetAutoPageBreak(false, 0);

            // Set the transparency of the text to really light (need to be done each time)
            $this->setAlpha(0.09);

            // Set the transparency of the text to really light (need to be done each time)
            $this->StartTransform();
            $this->Rotate(45, $iWatermarkX, $iWatermarkY);
            $this->SetFontSize(self::FONT_SIZE_WATERMARK);
            $this->Text($iWatermarkX, $iWatermarkY, $this->translations['watermark_text']);
            $this->StopTransform();

            // Reset the transparency to default (need to be done each time)
            $this->setAlpha(1);

            // Restore the auto-page-break status
            $this->SetAutoPageBreak($bAutoPageBreak, $bMargin);

            // Set the starting point for the page content
            $this->setPageMark();
        }
    }

    /**
     * Creating the header with custom header
     */
    public function Header()
    {
        $sDataURI = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_PDF_HEADER_LOGO, $this->getLanguage() === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);
        $aDataParts = explode(',', $sDataURI);
        $sTmpFilePath = tempnam(sys_get_temp_dir(), uniqid());
        file_put_contents($sTmpFilePath, base64_decode($aDataParts[1]));
        $this->Image($sTmpFilePath, 0, 0, $this->getPageWidth());
        unlink($sTmpFilePath);
    }

    /**
     * Creating footer page with the CS footer
     */
    public function Footer()
    {
        // Init
        $iFooterLineHeight = 3;
        $this->resetFontColor();

        // Contents
        $aTranslations = $this->translations['footer'];

        // Draw
        $this->SetY(-15);
        $this->setColor('text', $this->fontColors["FOOTER"][0], $this->fontColors["FOOTER"][1], $this->fontColors["FOOTER"][2]);

        $this->Ln($iFooterLineHeight * 1.3);

        $this->SetFont(self::FONT_FAMILY_DEFAULT, 'B', self::FONT_SIZE_FOOTER_1);
        $this->Cell(0, $iFooterLineHeight, Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_WEBSITE), 0, 1, "C");

        $this->SetFont(self::FONT_FAMILY_DEFAULT, '', self::FONT_SIZE_FOOTER_2);

        $sLine1 = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME).' - '.Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_STATUTES, $this->getLanguage() === RLanguages::LANG_ENG ? RLanguages::LOCALE_EN:RLanguages::LOCALE_FR);
        $this->Cell(0, $iFooterLineHeight, $sLine1, 0, 0, "C"); // Page number

        $this->SetFont(self::FONT_FAMILY_DEFAULT, 'B', self::FONT_SIZE_FOOTER_1);

        if ($this->pageGroups == 0) {
            $sText = sprintf($aTranslations['numPage'], $this->getAliasNumPage(), $this->getAliasNbPages());
        } else {
            $sText = sprintf($aTranslations['numPage'], $this->getPageNumGroupAlias(), $this->getPageGroupAlias());
        }
        $this->Cell(0, $iFooterLineHeight, $sText, 0, 1);

        $this->SetFont(self::FONT_FAMILY_DEFAULT, '', self::FONT_SIZE_FOOTER_2);

        $sLine2 =  Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_ADDRESS).' – Tel : '. Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_PHONE_NUMBER).' – Fax : '. Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER).' - e-mail : '. Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_CONTACT);
        $this->Cell(0, $iFooterLineHeight, $sLine2, 0, 0, "C");
    }

    /**
     * Draw a red cartouche with a line
     *
     * @param string $sText : text to display in the cartouche
     * @param string $sTermsAndConditionsOfSale
     */
    protected function drawRedCartouche($sText, $sTermsAndConditionsOfSale = "")
    {
        // Init
        $iHeaderPositionX = $this->getMargin("left") + self::POSX_CARTOUCHE;
        $iCurrentPositionY = $this->getY();
        $iHeaderPositionY = $iCurrentPositionY - (self::HEIGHT_CARTOUCHE / 2);
        $this->resetFontColor();

        // If we have Terms and conditions of sale, we add a star to the text
        if (! empty($sTermsAndConditionsOfSale)) {
            $sText .= '*';
        }

        // Draw
        $this->setColor('draw', $this->fontColors["FOND_CARTOUCHE_RED"][0], $this->fontColors["FOND_CARTOUCHE_RED"][1], $this->fontColors["FOND_CARTOUCHE_RED"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);

        // Draw - trait
        $this->SetLineWidth(self::LINE_WIDTH_IMPORTANT);
        $this->PolyLine(array(
            0,
            $iCurrentPositionY,
            $this->getPageWidth(),
            $iCurrentPositionY
        ));
        $this->SetLineWidth(self::LINE_WIDTH_DEFAULT);

        // Draw - cartouche
        $this->RoundedRect($iHeaderPositionX, $iHeaderPositionY, self::WIDTH_CARTOUCHE_LARGE, self::HEIGHT_CARTOUCHE, self::R, '1111', 'F', array(), $this->fontColors["FOND_CARTOUCHE_RED"]);
        $this->SetXY($iHeaderPositionX + 2, $iHeaderPositionY - 0.5);
        $this->Cell(0, self::HEIGHT_CARTOUCHE + 1, $this->getUpperText($sText), 0, 1);

        $this->resetFontColor();

        // Draw - Terms and conditions of sale if provided
        if (! empty($sTermsAndConditionsOfSale)) {
            $this->setX($iHeaderPositionX);

            $this->setColor('text', $this->fontColors["FOOTER"][0], $this->fontColors["FOOTER"][1], $this->fontColors["FOOTER"][2]);
            $this->SetFont('', '', self::FONT_SIZE_MINI);
            $this->Cell(0, 0, '(*) ' . $sTermsAndConditionsOfSale, 0);
            $this->resetFontColor();
        }

        $this->Ln(2);
    }

    /**
     * Draws a grey cartouche centered over the full width of the page
     *
     * @param string $sText : text to display in the cartouche
     */
    protected function drawGreyCartouche($sText)
    {
        // Init
        $iHeaderPositionX = $this->getMargin("left");
        $iCurrentPositionY = $this->getY();
        $iHeaderPositionY = $iCurrentPositionY - (self::HEIGHT_CARTOUCHE / 2);
        $iWidth = $this->getDrawablePageWidth();
        $this->resetFontColor();

        // Draw
        $this->setColor('draw', $this->fontColors["FOND_CARTOUCHE_GREY"][0], $this->fontColors["FOND_CARTOUCHE_GREY"][1], $this->fontColors["FOND_CARTOUCHE_GREY"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_IMPORTANT);

        // Draw - cartouche
        $this->RoundedRect($iHeaderPositionX, $iHeaderPositionY, $iWidth, self::HEIGHT_CARTOUCHE, self::R, '1111', 'F', array(), $this->fontColors["FOND_CARTOUCHE_GREY"]);
        $this->SetXY($iHeaderPositionX + 2, $iHeaderPositionY - 0.5);
        $this->Cell(0, self::HEIGHT_CARTOUCHE + 1, $this->getUpperText($sText), 0);

        $this->resetFontColor();
        $this->Ln(self::HEIGHT_CARTOUCHE_MARGIN_BOTTOM);
    }

    /**
     * Draw a frame with a grey cartouche
     *
     * @param string $iHeigth : frame height
     * @param string $sText : text to display in the cartouche
     * @param array $aOptions : customizable options
     *  - w_entete : header width (default: self::WIDTH_CARTOUCHE_MINI)
     *  - width : block width (default: $this->getDrawablePageWidth())
     */
    protected function drawGreyCartoucheBloc($iHeigth, $sText, $aOptions = array())
    {
        // Defined options
        $iHeaderWidth = array_key_exists('w_entete', $aOptions) ? $aOptions['w_entete'] : self::WIDTH_CARTOUCHE_MINI;
        $iWidth = array_key_exists('width', $aOptions) ? $aOptions['width'] : $this->getDrawablePageWidth();

        // Init
        $iRemindX = $this->GetX();
        $iRemindY = $this->GetY();

        $iPositionX = $aOptions['posX'] ?? $this->GetX();
        $iPositionY = $aOptions['posY'] ?? $iRemindY;

        $iHeaderHeight = self::HEIGHT_CARTOUCHE;
        $iHeaderPositionX = $iPositionX + self::POSX_CARTOUCHE;
        $iHeaderPositionY = $iPositionY - ($iHeaderHeight / 2);

        // Draw - frame & cartouche
        $this->setColor('draw', $this->fontColors["CONTOUR_BLOC"][0], $this->fontColors["CONTOUR_BLOC"][1], $this->fontColors["CONTOUR_BLOC"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->SetFont('', 'B', self::FONT_SIZE_DEFAULT);

        // Frame
        $this->RoundedRect($iPositionX, $iPositionY, $iWidth, $iHeigth, self::R);

        // Cartouche
        $this->RoundedRect($iHeaderPositionX, $iHeaderPositionY, $iHeaderWidth, $iHeaderHeight, self::R, '1111', 'F', array(), $this->fontColors["FOND_CARTOUCHE_GREY"]);

        $sText = $this->getUpperText($sText);
        if (empty($aOptions['draw_as_text'])) {
            $this->SetXY($iHeaderPositionX + 2, $iHeaderPositionY - 0.5);
            $this->Cell(0, $iHeaderHeight + 1, $sText, 0, 1);
        } else {
            $this->Text($iHeaderPositionX + 2, $iHeaderPositionY + 1, $sText, false, false, true, 0, 0);
            $this->SetXY($iRemindX, $iRemindY);
        }

        $this->resetFontColor();
    }

    /**
     * Draw a dark frame with a red cartouche
     *
     * @param string $iHeigth : frame height
     * @param string $sText : text to display in the cartouche
     * @param array $aOptions : customizable options
     *  - w_entete : header width (default: self::WIDTH_CARTOUCHE_MEDIUM)
     *  - width : block width (default: $this->getDrawablePageWidth())
     */
    protected function drawRedCartoucheBloc($iHeigth, $sText, $aOptions = array())
    {
        // Defined options
        $iHeaderWidth = array_key_exists('w_entete', $aOptions) ? $aOptions['w_entete'] : self::WIDTH_CARTOUCHE_MEDIUM;

        // Init
        $iPositionX = $this->getMargin("left");
        $iPositionY = $this->getY();
        $iWidth = $this->getDrawablePageWidth();
        $iHeaderHeight = self::HEIGHT_CARTOUCHE;
        $iHeaderPositionX = $iPositionX + self::POSX_CARTOUCHE;
        $iHeaderPositionY = $iPositionY - ($iHeaderHeight / 2);

        // Draw - frame & cartouche
        $this->setColor('draw', $this->fontColors["FOND_CARTOUCHE_GREY"][0], $this->fontColors["FOND_CARTOUCHE_GREY"][1], $this->fontColors["FOND_CARTOUCHE_GREY"][2]);
        $this->setColor('fill', $this->fontColors["FOND_TABLEAU"][0], $this->fontColors["FOND_TABLEAU"][1], $this->fontColors["FOND_TABLEAU"][2]);
        $this->setColor('text', $this->fontColors["WHITE"][0], $this->fontColors["WHITE"][1], $this->fontColors["WHITE"][2]);
        $this->setBold();

        // Frame
        $this->RoundedRect($iPositionX, $iPositionY, $iWidth, $iHeigth, self::R, '1111', '', array(), $this->fontColors["FOND_TABLEAU"]);
        $this->RoundedRect($iPositionX, $iPositionY, $iWidth, $iHeigth, self::R, '1111', 'F', array(), $this->fontColors["FOND_TABLEAU"]);

        // Cartouche
        $this->RoundedRect($iHeaderPositionX, $iHeaderPositionY, $iHeaderWidth, $iHeaderHeight, self::R, '1111', 'F', array(), $this->fontColors["FOND_CARTOUCHE_RED"]);
        $this->SetXY($iHeaderPositionX + 2, $iHeaderPositionY - 0.5);
        $sText = $this->getUpperText($sText);
        $this->Cell(0, $iHeaderHeight + 1, $sText, 0, 1);

        $this->resetFontColor();
    }

    /**
     * Send the document to a given destination: string, local file or browser.
     * In the last case, the plug-in may be used (if present) or a download ("Save as" dialog box) may be forced.<br />
     * The method first calls Close() if necessary to terminate the document.
     *
     * @param $sName (string) The name of the file when saved. Note that special characters are removed and blanks characters are replaced with the underscore character.
     * @param $sDest (string) Destination where to send the document. It can take one of the following values:<ul><li>I: send the file inline to the browser (default). The plug-in is used if available. The name given by name is used when one selects the "Save as" option on the link generating the PDF.</li><li>D: send to the browser and force a file download with the name given by name.</li><li>F: save to a local server file with the name given by name.</li><li>S: return the document as a string (name is ignored).</li><li>FI: equivalent to F + I option</li><li>FD: equivalent to F + D option</li><li>E: return the document as base64 mime multi-part email attachment (RFC 2045)</li></ul>
     * @public
     * @since  1.0
     * @see    Close()
     */
    public function Output($sName = 'doc.pdf', $sDest = 'I')
    {
        // Add a watermark if defined
        if ($this->watermark) {
            $this->applyWatermark();
        }

        if ($sDest === 'D' && headers_sent()) {
            $sDest = 'E';
        }

        return parent::Output($sName, $sDest);
    }

    /**
     * Prints a cell (rectangular area) with optional borders, background color and character string. The upper-left corner of the cell corresponds to the current position. The text can be aligned or centered. After the call, the current position moves to the right or to the next line. It is possible to put a link on the text.<br />
     * If automatic page breaking is enabled and the cell goes beyond the limit, a page break is done before outputting.
     *
     * @param float $iWidth : Cell width. If 0, the cell extends up to the right margin.
     * @param float $iHeight : Cell height. Default value: 0.
     * @param string $sText : String to print. Default value: empty string.
     * @param mixed $iBorder : Indicates if borders must be drawn around the cell. The value can be a number:<ul><li>0: no border (default)</li><li>1: frame</li></ul> or a string containing some or all of the following characters (in any order):<ul><li>L: left</li><li>T: top</li><li>R: right</li><li>B: bottom</li></ul> or an array of line styles for each border group - for example: array('LTRB' => array('width' => 2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)))
     * @param int $iCurrentLine : Indicates where the current position should go after the call. Possible values are:<ul><li>0: to the right (or left for RTL languages)</li><li>1: to the beginning of the next line</li><li>2: below</li></ul> Putting 1 is equivalent to putting 0 and calling Ln() just after. Default value: 0.
     * @param string $sAlign : Allows to center or align the text. Possible values are:<ul><li>L or empty string: left align (default value)</li><li>C: center</li><li>R: right align</li><li>J: justify</li></ul>
     * @param boolean $bFill : Indicates if the cell background must be painted (true) or transparent (false).
     * @param mixed $sLink : URL or identifier returned by AddLink().
     * @param int $iStretch : font stretch mode: <ul><li>0 = disabled</li><li>1 = horizontal scaling only if text is larger than cell width</li><li>2 = forced horizontal scaling to fit cell width</li><li>3 = character spacing only if text is larger than cell width</li><li>4 = forced character spacing to fit cell width</li></ul> General font stretching and scaling values will be preserved when possible.
     * @param boolean $bIgnoreMinHeight : if true ignore automatic minimum height value.
     * @param string $sCalign : cell vertical alignment relative to the specified Y value. Possible values are:<ul><li>T : cell top</li><li>C : center</li><li>B : cell bottom</li><li>A : font top</li><li>L : font baseline</li><li>D : font bottom</li></ul>
     * @param string $sValign : text vertical alignment inside the cell. Possible values are:<ul><li>T : top</li><li>C : center</li><li>B : bottom</li></ul>
     * @public
     * @since  1.0
     * @see    SetFont(), SetDrawColor(), SetFillColor(), SetTextColor(), SetLineWidth(), AddLink(), Ln(), MultiCell(), Write(), SetAutoPageBreak()
     */
    public function Cell($iWidth, $iHeight = 0, $sText = '', $iBorder = 0, $iCurrentLine = 0, $sAlign = '', $bFill = false, $sLink = '', $iStretch = 0, $bIgnoreMinHeight = false, $sCalign = 'T', $sValign = 'M')
    {
        // We added the following functionnality: if $iWidth equals to -1, we automatically calculate the exact width to fit the text
        if ($iWidth == -1) {
            $iWidth = $this->GetStringWidth($sText);
        }

        // Call parent
        parent::Cell($iWidth, $iHeight, $sText, $iBorder, $iCurrentLine, $sAlign, $bFill, $sLink, $iStretch, $bIgnoreMinHeight, $sCalign, $sValign);
    }

    /**
     * @param string $sLanguage
     */
    public function setLanguage(string $sLanguage)
    {
        $this->language = $sLanguage;
        $this->translations = Phoenix_Translation_Files::getPdf($sLanguage);
    }

    /**
     * @string string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
}
