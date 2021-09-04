<?php

/**
 * Generic class for drawing graphs, based on JPgraph
 */
class Phoenix_GraphDrawer
{

    const OUT_FILE = 0;
    const OUT_DISPLAY = 1;

    protected static $fileNumber = 0;
    protected $out;

    /**
     * @var Graph
     */
    protected $jpGraph;

    /**
     * @param int $sOut
     */
    public function __construct($sOut = self::OUT_FILE)
    {
        $this->out = $sOut;
    }

    protected function buildGraph()
    {
        $this->uniformizeFont();

        $sFilename = '';
        switch ($this->out) {
            case self::OUT_DISPLAY:
                $this->jpGraph->Stroke();
                break;

            case self::OUT_FILE:
            default:
                $sFilename = $this->generateFilePath();
                $this->jpGraph->Stroke($sFilename);
                break;
        }

        return $sFilename;
    }

    /**
     * Creation of the temporary file name
     * @return string
     */
    protected function generateFilePath()
    {
        self::$fileNumber++;
        return Zend_Registry::get('config')->path->tmp . '/Phoenix_GraphDrawer-' . time() . '-' . self::$fileNumber . '.png';
    }

    protected function uniformizeFont()
    {
        $this->jpGraph->legend->SetFont(FF_DEFAULT, FS_NORMAL, 7);

        if ($this->jpGraph->xaxis != null) {
            $this->jpGraph->xaxis->SetFont(FF_DEFAULT, FS_NORMAL, 7);
        }

        if ($this->jpGraph->yaxis != null) {
            $this->jpGraph->yaxis->SetFont(FF_DEFAULT, FS_NORMAL, 7);
        }

        foreach ($this->jpGraph->plots as $oPlot) {
            $oPlot->value->SetFont(FF_DEFAULT, FS_NORMAL, 7);
        }
    }

    /**
     * @param array $aData [x=>y]
     * @param int $iWidth
     * @param int $iHeight
     * @return string filepath
     */
    public function barGraphVertical($aData, $iWidth, $iHeight)
    {
        // We need some data
        $aDataY = array();
        $aDataX = array();
        $iTotal = 0;
        foreach ($aData as $iMonth => $iNumber) {
            $aDataY[] = $iNumber;
            $aDataX[] = $iMonth;
            $iTotal += $iNumber;
        }

        // Set the basic parameters of the graph
        $this->jpGraph = new \Amenadiel\JpGraph\Graph\Graph($iWidth, $iHeight);
        if (count($aDataY) == 0) {
            $aDataY[] = 0;
            $aDataX[] = '';
        }
        $this->jpGraph->SetScale("textlin");

        $this->jpGraph->SetMargin(35, 5, 30, 50);   // LRTB
        // Set up the title for the graph
        $this->jpGraph->xaxis->SetTickLabels($aDataX);
        $this->jpGraph->xaxis->SetLabelMargin(1);
        $this->jpGraph->xaxis->SetLabelAngle(40);
        $this->jpGraph->ygrid->SetFill(false);

        $oBarPlot = new \Amenadiel\JpGraph\Plot\BarPlot($aDataY);
        $oBarPlot->SetWeight(0);
        $oBarPlot->SetWidth(0.4);
        $oBarPlot->SetValuePos('top');
        $this->jpGraph->Add($oBarPlot);

        $oBarPlot->value->SetFormat("%d");
        $oBarPlot->value->Show();

        $sFilename = $this->buildGraph();
        return $sFilename;
    }

    /**
     * @param array $aData [x1=>[label1=>value,label2=>value,... ], x2=>[label1=>value,label2=>value,... ] ]
     * @param int $iWidth
     * @param int $iHeight
     * @return string filepath
     */
    public function barGraphVerticalAccumulated($aData, $iWidth, $iHeight)
    {

        // We need some data
        foreach ($aData as $iMonth => $aNumber) {
            foreach ($aNumber as $sLabel => $iNumber) {
                $aDatay[$sLabel][] = $iNumber;
            }
            $aDataX[] = $iMonth;
        }

        if (empty($aDataX)) {
            $aDataX[]='';
        }

        // Set the basic parameters of the graph
        $this->jpGraph = new \Amenadiel\JpGraph\Graph\Graph($iWidth, $iHeight);
        $this->jpGraph->SetScale("textlin");
        $this->jpGraph->SetMargin(35, 5, 50, 0);   // LRTB
        // Set up the title for the graph
        $this->jpGraph->xaxis->SetTickLabels($aDataX);
        $this->jpGraph->xaxis->SetLabelMargin(1.5);

        $this->jpGraph->xaxis->SetLabelAngle(40);
        $this->jpGraph->ygrid->SetFill(false);

        foreach ($aDatay as $sLabel => $aDataY) {
            $oBarPlot = new \Amenadiel\JpGraph\Plot\BarPlot($aDataY);
            $oBarPlot->SetWeight(0);
            $oBarPlot->SetWidth(0.4);
            $oBarPlot->SetValuePos('top');
            $oBarPlot->SetLegend($sLabel);

            $aPlot[] = $oBarPlot;
        }

        $oAccBarPlot = new \Amenadiel\JpGraph\Plot\AccBarPlot($aPlot);

        $oAccBarPlot->value->SetFormat("%d");
        $oAccBarPlot->value->Show();

        // Graph positioning
        $this->jpGraph->legend->Pos(0, 0, 'right');
        $iNbColumns = (count($aDatay) < 3) ? 1 : (int) count($aDataX) / 3;
        $this->jpGraph->legend->setColumns($iNbColumns);
        $this->jpGraph->Add($oAccBarPlot);


        $sFilename = $this->buildGraph();
        return $sFilename;
    }

    /**
     *
     * @param array $aData
     * @param int $iWidth
     * @param int $iHeight
     * @return string filepath
     */
    public function barGraphHorizontal($aData, $iWidth, $iHeight)
    {

        if (empty($aData)) {
            $aData[]='';
        }

        // We need some data
        $iTotal = 0;
        foreach ($aData as $iMonth => $iNumber) {
            $aDataY[] = $iNumber;
            $aDataX[] = $iMonth;
            $iTotal+=$iNumber;
        }

        if (empty($aDataX)) {
            $aDataX[]='';
        }

        // Set the basic parameters of the graph
        $this->jpGraph = new \Amenadiel\JpGraph\Graph\Graph($iWidth, $iHeight, 'auto');
        $this->jpGraph->SetScale("textlin");
        $this->jpGraph->Set90AndMargin($iWidth / 1.8, 2, 5, 5); // LRTB



        $this->jpGraph->ygrid->SetFill(false);
        $this->jpGraph->yaxis->Hide();
        $this->jpGraph->xaxis->SetTickLabels($aDataX);
        $this->jpGraph->xaxis->scale->ticks->SetSize(10);
        // Add some grace to y-axis so the bars doesn't go all the way to the end of the plot area
        $this->jpGraph->yaxis->scale->SetGrace(54);

        // Now create a bar pot
        $oBarPlot = new \Amenadiel\JpGraph\Plot\BarPlot($aDataY);
        $oBarPlot->SetWeight(0);
        $oBarPlot->SetWidth(0.4);
        $this->jpGraph->Add($oBarPlot);

        $oBarPlot->value->SetFormatCallback(create_function('$sLabelValue', '$i=round($sLabelValue);
					$iTaux = (int)' . $iTotal . ' === 0 ? 0 : round($i/' . $iTotal . ' * 100,1);
					return number_format($i, 0, "", " ").\' (\'.number_format($iTaux,1).\'%)\';'));
        $oBarPlot->value->SetMargin(0);
        $oBarPlot->value->Show();

        $sFilename = $this->buildGraph();
        return $sFilename;
    }

    /**
     * @param array $aData [ x => y ]
     * @param float $iWidth
     * @param float $iHeight
     * @return string filepath
     */
    public function pie($aData, $iWidth, $iHeight)
    {

        // We need some data
        $iSum = 0;
        foreach ($aData as $sKeyX => $iNumber) {
            // protect % symbol which is interpreted by JPGraph
            $sKeyX = str_replace('%', '%%', $sKeyX);

            //limitation du nombre de caractère si beaucoup d'éléments à afficher dans la légende
            if (count($aData) > 8) {
                $sKeyX = Phoenix_Data_Convert::getShortString($sKeyX, 20) . ' (' . $iNumber . ')';
            } else {
                $sKeyX = $sKeyX . ' (' . $iNumber . ')';
            }

            $aDataY[] = $iNumber;
            $aDataX[] = $sKeyX;
            $iSum+=$iNumber;
        }

        if ($iSum > 0) {
            $iNbColumns = (count($aDataX) < 4) ? 1 : (int) count($aDataX) / 4;

            // Set the basic parameters of the graph
            $this->jpGraph = new \Amenadiel\JpGraph\Graph\PieGraph($iWidth, $iHeight);
            $this->jpGraph->SetMargin(20, 20, 20, 20);  // LRTB

            $this->jpGraph->legend->SetHColMargin(0.5);
            $this->jpGraph->legend->SetVColMargin(0.5);
            $this->jpGraph->legend->SetFillColor(array(255, 255, 255));
            // légende transparente
            $this->jpGraph->legend->SetFillColor('white@1');

            $this->jpGraph->legend->Pos(0, 0, 'left', 'top');
            $this->jpGraph->legend->SetColumns($iNbColumns);

            $oPiePlot = new \Amenadiel\JpGraph\Plot\PiePlot3D($aDataY);

            $oPiePlot->SetAngle(40);
            $oPiePlot->SetLegends($aDataX);
            // Calculate correct size(if the graph is 'squared', size must be lower)
            if ($iWidth > ($iHeight * 0.9) && $iWidth < ($iHeight * 1.1)) {
                $oPiePlot->SetSize(0.3);
            } else {
                $oPiePlot->SetSize(0.5);
            }
            $oPiePlot->SetCenter(0.5, 0.65);
            $oPiePlot->SetLabelMargin(0);
            $this->jpGraph->Add($oPiePlot);

            $sFilename = $this->buildGraph();
            return $sFilename;
        } else {
            return null;
        }
    }

    /**
     * Aggregation of data-to-date data on intervals with an automatically calculated period
     * @param array $aData [date => qté ]
     * @param string $sStartDate
     * @param string $sEndDate
     * @param array $aOption
     * - date_format : format strftotime
     * @return array
     */
    public static function groupDataByIntervals($aData, $sStartDate, $sEndDate, $aOption = array())
    {
        $oDateDebut = new DateTime($sStartDate);
        $oDateFin = new DateTime($sEndDate);

        $oDateInterval = date_diff($oDateDebut, $oDateFin);
        $iNbDaysPeriod = (int) $oDateInterval->format('%a');

        if ($iNbDaysPeriod < 200) {
            $oDateInterval = new DateInterval('P7D');
        } else {
            $oDateInterval = new DateInterval('P1M');
        }

        $oGraphPeriod = new DatePeriod($oDateDebut, $oDateInterval, $oDateFin, DatePeriod::EXCLUDE_START_DATE);

        // Interval aggregation of data
        foreach ($oGraphPeriod as $oDateGraph) {
            foreach ($aData as $sDate => $aRow) {
                if (is_array($aRow)) {
                    foreach ($aRow as $iKey => $sValue) {
                        $aSegment[$iKey]=$iKey;
                        if (! isset($aNewData[$oDateGraph->format('Y-m-d')][$iKey])) {
                            $aNewData[$oDateGraph->format('Y-m-d')][$iKey] = 0;
                        }
                        if ($oDateGraph->format('Y-m-d') >= $sDate) {
                            $aNewData[$oDateGraph->format('Y-m-d')][$iKey]+=$sValue;
                            unset($aData[$sDate]);
                        }
                    }
                } else {
                    if (! isset($aNewData[$oDateGraph->format('Y-m-d')])) {
                        $aNewData[$oDateGraph->format('Y-m-d')] = 0;
                    }
                    if ($oDateGraph->format('Y-m-d') >= $sDate) {
                        $aNewData[$oDateGraph->format('Y-m-d')]+=$aRow;
                        unset($aData[$sDate]);
                    }
                }
            }
        }

        foreach ($aData as $sDate => $aRow) {
            if (! is_array($aRow)) {
                if (! isset($aNewData[$oDateFin->format('Y-m-d')])) {
                    $aNewData[$oDateFin->format('Y-m-d')] = 0;
                }
                $aNewData[$oDateFin->format('Y-m-d')]+=$aRow;
                unset($aData[$sDate]);
            } else {
                foreach ($aRow as $iKey => $sValue) {
                    $aSegment[$iKey] = $iKey;
                    if (! isset($aNewData[$oDateFin->format('Y-m-d')][$iKey])) {
                        $aNewData[$oDateFin->format('Y-m-d')][$iKey] = 0;
                    }
                    $aNewData[$oDateFin->format('Y-m-d')][$iKey]+=$sValue;
                    unset($aData[$sDate]);
                }
            }
        }

        if (isset($aSegment)) {
            foreach ($aNewData as $sDate => $aData) {
                foreach ($aSegment as $sSegment) {
                    if (! isset($aData[$sSegment])) {
                        $aNewData[$sDate][$sSegment]=0;
                    }
                }
            }
        }

        $sCurrentLocale = setlocale(LC_TIME, 0);
        setlocale(LC_TIME, 'fr_FR');

        // Output date formatting
        if (isset($aOption['date_format'])) {
            foreach ($aNewData as $sDate => $sValue) {
                $oDateTime = new DateTime($sDate);
                $aNewData[strftime($aOption['date_format'], $oDateTime->getTimestamp())] = $sValue;
                unset($aNewData[$sDate]);
            }
        }
        setlocale(LC_TIME, $sCurrentLocale);

        return $aNewData;
    }

}
