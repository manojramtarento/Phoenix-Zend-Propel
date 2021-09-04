<?php

class Phoenix_Kpi_KpiActivityDigital
{

    /**
     * @var array
     */
    protected $aData;

    /**
     * @var string
     */
    protected $sOptions;

    /**
     * @var int
     */
    protected $iNbOpCurrentMonth;

    /**
     * @var int
     */
    protected $iNbOpCurrentMonthLastYear;

    /**
     * @var int
     */
    protected $iDeltaNbOpMonth;

    /**
     * @var int
     */
    protected $iNbOpCurrentYear;

    /**
     * @var int
     */
    protected $iNbOpPastYear;

    /**
     * @var int
     */
    protected $iDeltaNbOpYear;

    /**
     * @var float
     */
    protected $fSoldCurrentMonth;

    /**
     * @var float
     */
    protected $fSoldCurrentMonthLastYear;

    /**
     * @var float
     */
    protected $fDeltaSoldMonth;

    /**
     * @var float
     */
    protected $fRealizedChargesForCurrentMonth;

    /**
     * @var float
     */
    protected $fRealizedChargesForPastMonth;

    /**
     * @var float
     */
    protected $fDeltaRealizedChargesForMonth;

    /**
     * @var float
     */
    protected $fSoldCurrentYear;

    /**
     *
     * @var float
     */
    protected $fSoldPastYear;

    /**
     * @var float
     */
    protected $fRealizedChargesForCurrentYear;

    /**
     * @var float
     */
    protected $fRealizedChargesForPastYear;

    /**
     * @var float
     */
    protected $fProfitabilityCurrentYear;

    /**
     * @var float
     */
    protected $fProfitabilityPastYear;

    /**
     * @var string
     */
    protected $sProfitability;

    /**
     * @param string $sOptions
     * @param array $aData
     */
    public function __construct($sOptions = '', $aData = array())
    {
        if ($sOptions) {
            $this->setOptions($sOptions);
        }
        if ($aData) {
            $this->setData($aData);
        }
    }

    /**
     * @return array
     * @throws \LogicException
     */
    public function getData()
    {
        if (is_array($this->aData)) {
            return $this->aData;
        }
        throw new \LogicException('Property "aData" expects an array, "' . gettype($this->aData) . '" defined');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getOptions()
    {
        if (is_string($this->sOptions)) {
            return $this->sOptions;
        }
        throw new \LogicException('Property "sOptions" expects a string, "' . gettype($this->sOptions) . '" defined');
    }

    /**
     * @return int
     * @throws \LogicException
     */
    public function getNbOpCurrentMonth()
    {
        if (is_int($this->iNbOpCurrentMonth)) {
            return $this->iNbOpCurrentMonth;
        }

        $aData = $this->getData();

        $iNbOpCurrentMonth = isset($aData['NbOpCurrentMonth']) ? (int) $aData['NbOpCurrentMonth'] : 0;
        $this->setNbOpCurrentMonth($iNbOpCurrentMonth);

        if (is_int($this->iNbOpCurrentMonth)) {
            return $this->iNbOpCurrentMonth;
        }
        throw new \LogicException('Property "iNbOpCurrentMonth" expects an integer, "' . gettype($this->iNbOpCurrentMonth) . '" defined');
    }

    /**
     * @return int
     * @throws \LogicException
     */
    public function getNbOpCurrentMonthLastYear()
    {
        if (is_int($this->iNbOpCurrentMonthLastYear)) {
            return $this->iNbOpCurrentMonthLastYear;
        }

        $aData = $this->getData();

        $iNbOpCurrentMonthLastYear = isset($aData['NbOpCurrentMonthLastYear']) ? (int) $aData['NbOpCurrentMonthLastYear'] : 0;
        $this->setNbOpCurrentMonthLastYear($iNbOpCurrentMonthLastYear);

        if (is_int($this->iNbOpCurrentMonthLastYear)) {
            return $this->iNbOpCurrentMonthLastYear;
        }
        throw new \LogicException('Property "iNbOpCurrentMonthLastYear" expects an integer, "' . gettype($this->iNbOpCurrentMonthLastYear) . '" defined');
    }

    /**
     * @return int
     * @throws \LogicException
     */
    public function getDeltaNbOpMonth()
    {
        if (is_int($this->iDeltaNbOpMonth)) {
            return $this->iDeltaNbOpMonth;
        }

        $iDeltaNbOpMonth = $this->getNbOpCurrentMonth() - $this->getNbOpCurrentMonthLastYear();
        $this->setDeltaNbOpMonth($iDeltaNbOpMonth);

        if (is_int($this->iDeltaNbOpMonth)) {
            return $this->iDeltaNbOpMonth;
        }
        throw new \LogicException('Property "iDeltaNbOpMonth" expects an integer, "' . gettype($this->iDeltaNbOpMonth) . '" defined');
    }

    /**
     * @return int
     * @throws \LogicException
     */
    public function getNbOpCurrentYear()
    {
        if (is_int($this->iNbOpCurrentYear)) {
            return $this->iNbOpCurrentYear;
        }

        $aData = $this->getData();

        $iNbOpCurrentYear = isset($aData['NbOpCurrentYear']) ? (int) $aData['NbOpCurrentYear'] : 0;
        $this->setNbOpCurrentYear($iNbOpCurrentYear);

        if (is_int($this->iNbOpCurrentYear)) {
            return $this->iNbOpCurrentYear;
        }
        throw new \LogicException('Property "iNbOpCurrentYear" expects an integer, "' . gettype($this->iNbOpCurrentYear) . '" defined');
    }

    /**
     * @return int
     * @throws \LogicException
     */
    public function getNbOpPastYear()
    {
        if (is_int($this->iNbOpPastYear)) {
            return $this->iNbOpPastYear;
        }

        $aData = $this->getData();

        $iNbOpPastYear = isset($aData['NbOpPastYear']) ? (int) $aData['NbOpPastYear'] : 0;
        $this->setNbOpPastYear($iNbOpPastYear);

        if (is_int($this->iNbOpPastYear)) {
            return $this->iNbOpPastYear;
        }
        throw new \LogicException('Property "iNbOpPastYear" expects an integer, "' . gettype($this->iNbOpPastYear) . '" defined');
    }

    /**
     * @return int
     * @throws \LogicException
     */
    public function getDeltaNbOpYear()
    {
        if (is_int($this->iDeltaNbOpYear)) {
            return $this->iDeltaNbOpYear;
        }

        $iDeltaNbOpYear = $this->getNbOpCurrentYear() - $this->getNbOpPastYear();
        $this->setDeltaNbOpYear($iDeltaNbOpYear);

        if (is_int($this->iDeltaNbOpYear)) {
            return $this->iDeltaNbOpYear;
        }
        throw new \LogicException('Property "iDeltaNbOpYear" expects an integer, "' . gettype($this->iDeltaNbOpYear) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getSoldCurrentMonth()
    {
        if (is_float($this->fSoldCurrentMonth)) {
            return $this->fSoldCurrentMonth;
        }

        $aData = $this->getData();

        $fSoldCurrentMonth = isset($aData['SoldCurrentMonth']) ? (float) $aData['SoldCurrentMonth'] : 0.0;
        $this->setSoldCurrentMonth($fSoldCurrentMonth);

        if (is_float($this->fSoldCurrentMonth)) {
            return $this->fSoldCurrentMonth;
        }
        throw new \LogicException('Property "fSoldCurrentMonth" expects a float, "' . gettype($this->fSoldCurrentMonth) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getSoldCurrentMonthLastYear()
    {
        if (is_float($this->fSoldCurrentMonthLastYear)) {
            return $this->fSoldCurrentMonthLastYear;
        }

        $aData = $this->getData();

        $fSoldCurrentMonthLastYear = isset($aData['SoldCurrentMonthLastYear']) ? (float) $aData['SoldCurrentMonthLastYear'] : 0.0;
        $this->setSoldCurrentMonthLastYear($fSoldCurrentMonthLastYear);

        if (is_float($this->fSoldCurrentMonthLastYear)) {
            return $this->fSoldCurrentMonthLastYear;
        }
        throw new \LogicException('Property "fSoldCurrentMonthLastYear" expects a float, "' . gettype($this->fSoldCurrentMonthLastYear) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getDeltaSoldMonth()
    {
        if (is_float($this->fDeltaSoldMonth)) {
            return $this->fDeltaSoldMonth;
        }

        $fDeltaSoldMonth = $this->getSoldCurrentMonth() - $this->getSoldCurrentMonthLastYear();
        $this->setDeltaSoldMonth($fDeltaSoldMonth);

        if (is_float($this->fDeltaSoldMonth)) {
            return $this->fDeltaSoldMonth;
        }
        throw new \LogicException('Property "fDeltaSoldMonth" expects a float, "' . gettype($this->fDeltaSoldMonth) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getRealizedChargesForCurrentMonth()
    {
        if (is_float($this->fRealizedChargesForCurrentMonth)) {
            return $this->fRealizedChargesForCurrentMonth;
        }

        $aData = $this->getData();

        $fRealizedChargesForCurrentMonth = isset($aData['RealizedCurrentMonth']) ? (float) $aData['RealizedCurrentMonth'] : 0.0;
        $this->setRealizedChargesForCurrentMonth($fRealizedChargesForCurrentMonth);

        if (is_float($this->fRealizedChargesForCurrentMonth)) {
            return $this->fRealizedChargesForCurrentMonth;
        }
        throw new \LogicException('Property "fRealizedChargesForCurrentMonth" expects a float, "' . gettype($this->fRealizedChargesForCurrentMonth) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getRealizedChargesForPastMonth()
    {
        if (is_float($this->fRealizedChargesForPastMonth)) {
            return $this->fRealizedChargesForPastMonth;
        }

        $aData = $this->getData();

        $fRealizedChargesForPastMonth = isset($aData['RealizedChargeCurrentMonthLastYear']) ? (float) $aData['RealizedChargeCurrentMonthLastYear'] : 0.0;
        $this->setRealizedChargesForPastMonth($fRealizedChargesForPastMonth);

        if (is_float($this->fRealizedChargesForPastMonth)) {
            return $this->fRealizedChargesForPastMonth;
        }
        throw new \LogicException('Property "fRealizedChargesForPastMonth" expects a float, "' . gettype($this->fRealizedChargesForPastMonth) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getDeltaRealizedChargesForMonth()
    {
        if (is_float($this->fDeltaRealizedChargesForMonth)) {
            return $this->fDeltaRealizedChargesForMonth;
        }

        $fDeltaRealizedChargesForMonth = $this->getRealizedChargesForCurrentMonth() - $this->getRealizedChargesForPastMonth();
        $this->setDeltaRealizedChargesForMonth($fDeltaRealizedChargesForMonth);

        if (is_float($this->fDeltaRealizedChargesForMonth)) {
            return $this->fDeltaRealizedChargesForMonth;
        }
        throw new \LogicException('Property "fDeltaRealizedChargesForMonth" expects a float, "' . gettype($this->fDeltaRealizedChargesForMonth) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getSoldCurrentYear()
    {
        if (is_float($this->fSoldCurrentYear)) {
            return $this->fSoldCurrentYear;
        }

        $aData = $this->getData();

        $fSoldCurrentYear = (isset($aData['SoldCurrentYear'])) ? (float) $aData['SoldCurrentYear'] : 0.0;
        $this->setSoldCurrentYear($fSoldCurrentYear);

        if (is_float($this->fSoldCurrentYear)) {
            return $this->fSoldCurrentYear;
        }
        throw new \LogicException('Property "fSoldCurrentYear" expects a float, "' . gettype($this->fSoldCurrentYear) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getSoldPastYear()
    {
        if (is_float($this->fSoldPastYear)) {
            return $this->fSoldPastYear;
        }

        $aData = $this->getData();

        $fSoldPastYear = (isset($aData['SoldPastYear'])) ? (float) $aData['SoldPastYear'] : 0.0;
        $this->setSoldPastYear($fSoldPastYear);

        if (is_float($this->fSoldPastYear)) {
            return $this->fSoldPastYear;
        }
        throw new \LogicException('Property "fSoldPastYear" expects a float, "' . gettype($this->fSoldPastYear) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getRealizedChargesForCurrentYear()
    {
        if (is_float($this->fRealizedChargesForCurrentYear)) {
            return $this->fRealizedChargesForCurrentYear;
        }

        $aData = $this->getData();

        $fRealizedChargesForCurrentYear = isset($aData['RealizedCurrentYear']) ? (float) $aData['RealizedCurrentYear'] : 0.0;
        $this->setRealizedChargesForCurrentYear($fRealizedChargesForCurrentYear);

        if (is_float($this->fRealizedChargesForCurrentYear)) {
            return $this->fRealizedChargesForCurrentYear;
        }
        throw new \LogicException('Property "fRealizedChargesForCurrentYear" expects a float, "' . gettype($this->fRealizedChargesForCurrentYear) . '" defined');
    }

    /**
     * @return float
     * @throws \LogicException
     */
    public function getRealizedChargesForPastYear()
    {
        if (is_float($this->fRealizedChargesForPastYear)) {
            return $this->fRealizedChargesForPastYear;
        }

        $aData = $this->getData();

        $fRealizedChargesForPastYear = isset($aData['RealizedPastYear']) ? (float) $aData['RealizedPastYear'] : 0.0;
        $this->setRealizedChargesForPastYear($fRealizedChargesForPastYear);

        if (is_float($this->fRealizedChargesForPastYear)) {
            return $this->fRealizedChargesForPastYear;
        }
        throw new \LogicException('Property "fRealizedChargesForPastYear" expects a float, "' . gettype($this->fRealizedChargesForPastYear) . '" defined');
    }

    /**
     * @return float|null
     * @throws \LogicException
     */
    public function getProfitabilityCurrentYear()
    {
        if (is_float($this->fProfitabilityCurrentYear)) {
            return $this->fProfitabilityCurrentYear;
        }

        $fProfitabilityCurrentYear = $this->getRealizedChargesForCurrentYear() != 0 ? (float) ($this->getSoldCurrentYear() - $this->getRealizedChargesForCurrentYear()) * 100 / $this->getRealizedChargesForCurrentYear() : null;
        $this->setProfitabilityCurrentYear($fProfitabilityCurrentYear);

        if (is_float($this->fProfitabilityCurrentYear) || is_null($this->fProfitabilityCurrentYear)) {
            return $this->fProfitabilityCurrentYear;
        }
        throw new \LogicException('Property "fProfitabilityCurrentYear" expects a float or null, "' . gettype($this->fProfitabilityCurrentYear) . '" defined');
    }

    /**
     * @return float|null
     * @throws \LogicException
     */
    public function getProfitabilityPastYear()
    {
        if (is_float($this->fProfitabilityPastYear)) {
            return $this->fProfitabilityPastYear;
        }

        $fProfitabilityPastYear = $this->getRealizedChargesForPastYear() != 0 ? (float) ($this->getSoldPastYear() - $this->getRealizedChargesForPastYear()) * 100 / $this->getRealizedChargesForPastYear() : null;
        $this->setProfitabilityPastYear($fProfitabilityPastYear);

        if (is_float($this->fProfitabilityPastYear) || is_null($this->fProfitabilityPastYear)) {
            return $this->fProfitabilityPastYear;
        }
        throw new \LogicException('Property "fProfitabilityPastYear" expects a float or null, "' . gettype($this->fProfitabilityPastYear) . '" defined');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getProfitability()
    {
        if (is_string($this->sProfitability)) {
            return $this->sProfitability;
        }

        $this->sProfitability = '';

        if (is_null($this->getProfitabilityCurrentYear())) {
            $this->sProfitability .= 'Non dispo';
        } else {
            $this->sProfitability .= number_format($this->getProfitabilityCurrentYear(), 0, '', ' ');
        }

        if (!is_null($this->getProfitabilityPastYear())) {
            $this->sProfitability .= " \t (" . number_format($this->getProfitabilityPastYear(), 0, '', ' ') . ')';
        }

        if (!is_null($this->getProfitabilityCurrentYear()) || !is_null($this->getProfitabilityPastYear())) {
            $this->sProfitability .= '%';
        }

        return $this->sProfitability;
    }

    /**
     * @param array $aData
     * @return \Phoenix_Kpi_KpiActivityDigital
     */
    public function setData(array $aData)
    {
        $this->aData = $aData;
        return $this;
    }

    /**
     * @param string $sOptions
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setOptions($sOptions)
    {
        if (is_string($sOptions)) {
            $this->sOptions = $sOptions;
            return $this;
        }

        throw new \InvalidArgumentException('Argument "$sOptions" expects a string, "' . gettype($sOptions) . '" given');
    }

    /**
     * @param int $iNbOpCurrentMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setNbOpCurrentMonth($iNbOpCurrentMonth)
    {
        if (is_int($iNbOpCurrentMonth)) {
            $this->iNbOpCurrentMonth = $iNbOpCurrentMonth;
            return $this;
        }

        throw new \InvalidArgumentException('Argument "$iNbOpCurrentMonth" expects an integer, "' . gettype($iNbOpCurrentMonth) . '" given');
    }

    /**
     * @param int $iNbOpCurrentMonthLastYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setNbOpCurrentMonthLastYear($iNbOpCurrentMonthLastYear)
    {
        if (is_int($iNbOpCurrentMonthLastYear)) {
            $this->iNbOpCurrentMonthLastYear = $iNbOpCurrentMonthLastYear;
            return $this;
        }

        throw new \InvalidArgumentException('Argument "$iNbOpCurrentMonthLastYear" expects an integer, "' . gettype($iNbOpCurrentMonthLastYear) . '" given');
    }

    /**
     * @param int $iDeltaNbOpMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setDeltaNbOpMonth($iDeltaNbOpMonth)
    {
        if (is_int($iDeltaNbOpMonth)) {
            $this->iDeltaNbOpMonth = $iDeltaNbOpMonth;
            return $this;
        }

        throw new \InvalidArgumentException('Argument "$iDeltaNbOpMonth" expects an integer, "' . gettype($iDeltaNbOpMonth) . '" given');
    }

    /**
     * @param int $iNbOpCurrentYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setNbOpCurrentYear($iNbOpCurrentYear)
    {
        if (is_int($iNbOpCurrentYear)) {
            $this->iNbOpCurrentYear = $iNbOpCurrentYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$iNbOpCurrentYear" expects an integer, "' . gettype($iNbOpCurrentYear) . '" given');
    }

    /**
     * @param int $iNbOpPastYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setNbOpPastYear($iNbOpPastYear)
    {
        if (is_int($iNbOpPastYear)) {
            $this->iNbOpPastYear = $iNbOpPastYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$iNbOpPastYear" expects an integer, "' . gettype($iNbOpPastYear) . '" given');
    }

    /**
     * @param int $iDeltaNbOpYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setDeltaNbOpYear($iDeltaNbOpYear)
    {
        if (is_int($iDeltaNbOpYear)) {
            $this->iDeltaNbOpYear = $iDeltaNbOpYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$iDeltaNbOpYear" expects an integer, "' . gettype($iDeltaNbOpYear) . '" given');
    }

    /**
     * @param float $fSoldCurrentMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setSoldCurrentMonth($fSoldCurrentMonth)
    {
        if (is_float($fSoldCurrentMonth)) {
            $this->fSoldCurrentMonth = $fSoldCurrentMonth;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fSoldCurrentMonth" expects a float, "' . gettype($fSoldCurrentMonth) . '" given');
    }

    /**
     * @param float $fSoldCurrentMonthLastYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setSoldCurrentMonthLastYear($fSoldCurrentMonthLastYear)
    {
        if (is_float($fSoldCurrentMonthLastYear)) {
            $this->fSoldCurrentMonthLastYear = $fSoldCurrentMonthLastYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fSoldCurrentMonthLastYear" expects a float, "' . gettype($fSoldCurrentMonthLastYear) . '" given');
    }

    /**
     * @param float $fDeltaSoldMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setDeltaSoldMonth($fDeltaSoldMonth)
    {
        if (is_float($fDeltaSoldMonth)) {
            $this->fDeltaSoldMonth = $fDeltaSoldMonth;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fDeltaSoldMonth" expects a float, "' . gettype($fDeltaSoldMonth) . '" given');
    }

    /**
     * @param float $fRealizedChargesForCurrentMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setRealizedChargesForCurrentMonth($fRealizedChargesForCurrentMonth)
    {
        if (is_float($fRealizedChargesForCurrentMonth)) {
            $this->fRealizedChargesForCurrentMonth = $fRealizedChargesForCurrentMonth;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fRealizedChargesForCurrentMonth" expects a float, "' . gettype($fRealizedChargesForCurrentMonth) . '" given');
    }

    /**
     * @param float $fRealizedChargesForPastMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setRealizedChargesForPastMonth($fRealizedChargesForPastMonth)
    {
        if (is_float($fRealizedChargesForPastMonth)) {
            $this->fRealizedChargesForPastMonth = $fRealizedChargesForPastMonth;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fRealizedChargesForPastMonth" expects a float, "' . gettype($fRealizedChargesForPastMonth) . '" given');
    }

    /**
     * @param float $fDeltaRealizedChargesForMonth
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setDeltaRealizedChargesForMonth($fDeltaRealizedChargesForMonth)
    {
        if (is_float($fDeltaRealizedChargesForMonth)) {
            $this->fDeltaRealizedChargesForMonth = $fDeltaRealizedChargesForMonth;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fDeltaRealizedChargesForMonth" expects a float, "' . gettype($fDeltaRealizedChargesForMonth) . '" given');
    }

    /**
     * @param float $fSoldCurrentYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setSoldCurrentYear($fSoldCurrentYear)
    {
        if (is_float($fSoldCurrentYear)) {
            $this->fSoldCurrentYear = $fSoldCurrentYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fSoldCurrentYear" expects a float, "' . gettype($fSoldCurrentYear) . '" given');
    }

    /**
     * @param float $fSoldPastYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setSoldPastYear($fSoldPastYear)
    {
        if (is_float($fSoldPastYear)) {
            $this->fSoldPastYear = $fSoldPastYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fSoldPastYear" expects a float, "' . gettype($fSoldPastYear) . '" given');
    }

    /**
     * @param float $fRealizedChargesForCurrentYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setRealizedChargesForCurrentYear($fRealizedChargesForCurrentYear)
    {
        if (is_float($fRealizedChargesForCurrentYear)) {
            $this->fRealizedChargesForCurrentYear = $fRealizedChargesForCurrentYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fRealizedChargesForCurrentYear" expects a float, "' . gettype($fRealizedChargesForCurrentYear) . '" given');
    }

    /**
     * @param float $fRealizedChargesForPastYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setRealizedChargesForPastYear($fRealizedChargesForPastYear)
    {
        if (is_float($fRealizedChargesForPastYear)) {
            $this->fRealizedChargesForPastYear = $fRealizedChargesForPastYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fRealizedChargesForPastYear" expects a float, "' . gettype($fRealizedChargesForPastYear) . '" given');
    }

    /**
     * @param float $fProfitabilityCurrentYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setProfitabilityCurrentYear($fProfitabilityCurrentYear)
    {
        if (is_float($fProfitabilityCurrentYear) || is_null($fProfitabilityCurrentYear)) {
            $this->fProfitabilityCurrentYear = $fProfitabilityCurrentYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fProfitabilityCurrentYear" expects a float or null, "' . gettype($fProfitabilityCurrentYear) . '" given');
    }

    /**
     * @param float $fProfitabilityPastYear
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setProfitabilityPastYear($fProfitabilityPastYear)
    {
        if (is_float($fProfitabilityPastYear) || is_null($fProfitabilityPastYear)) {
            $this->fProfitabilityPastYear = $fProfitabilityPastYear;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$fProfitabilityPastYear" expects a float or null, "' . gettype($fProfitabilityPastYear) . '" given');
    }

    /**
     * @param int $sProfitability
     * @return \Phoenix_Kpi_KpiActivityDigital
     * @throws \InvalidArgumentException
     */
    public function setProfitability($sProfitability)
    {
        if (is_string($sProfitability)) {
            $this->sProfitability = $sProfitability;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sProfitability" expects a string, "' . gettype($sProfitability) . '" given');
    }
}
