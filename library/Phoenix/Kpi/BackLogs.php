<?php

class Phoenix_Kpi_BackLogs
{

    /**
     * Kpi BackLogs Queries
     * @var array
     */
    protected $queries = array(
        'nbOp' => '
                        SELECT SUM(taux) AS nbOp FROM

                                (SELECT  distinct op.op_id , (op_taux_conversion / 100)  AS taux
                                    FROM operations op
                                    LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                    LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                    LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                    LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                    WHERE op.op_status_id = {StatutIdQuery1}
                                    {StatutsTaux}
                                    {Condition}

                                UNION

                                SELECT  distinct op.op_id , 1 AS taux
                                    FROM operations op
                                    LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                    LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                    LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                    LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                    {StatutIds}
                                    {Condition} ) operationtaux',
        'prevision_expenses' => '
                        SELECT SUM(tauxMontant) AS prevision_expenses FROM

                                (SELECT  op.op_id , SUM(oppres.op_prest_mestim) * (op_taux_conversion / 100)  AS tauxMontant
                                    FROM operations op
                                    LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                    LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                    LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                    LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                    WHERE op.op_status_id = {StatutIdQuery1}
                                    AND oppres.op_prest_code_comptable LIKE \'70%\'
                                    {StatutsTaux}
                                    {Condition}
                                    GROUP BY op.op_id
                                UNION

                                SELECT op.op_id , SUM(oppres.op_prest_mestim) AS tauxMontant
                                    FROM operations op
                                    LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                    LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                    LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                    LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                    AND oppres.op_prest_code_comptable LIKE \'70%\'
                                    {StatutIds}
                                    {Condition}
                                    GROUP BY op.op_id
                                ) operationtaux',
    );

    /**
     *
     * @param string $sMonth
     * @param string $sYear
     * @param string $sQueryKey
     * @param int $iIncrement
     * @return string
     * @throws InvalidArgumentException
     */
    public function getInfosBackLogsInfosByMonthAndYear($sMonth, $sYear, $sActivitie, $sStatusTauxId, $sQueryKey, $iIncrement, $bIncludeClosedOP = false)
    {
        if (!is_string($sMonth)) {
            throw new InvalidArgumentException('month  expect string, "' . gettype($sMonth) . '" given');
        }
        if (!is_string($sYear)) {
            throw new InvalidArgumentException('year  expect string, "' . gettype($sYear) . '" given');
        }
        if (!is_string($sActivitie)) {
            throw new InvalidArgumentException('month  expect string, "' . gettype($sActivitie) . '" given');
        }
        if (!is_string($sStatusTauxId)) {
            throw new InvalidArgumentException('year  expect string, "' . gettype($sStatusTauxId) . '" given');
        }
        if (!is_string($sQueryKey)) {
            throw new InvalidArgumentException('query key  expect string, "' . gettype($sQueryKey) . '" given');
        }
        if (!is_int($iIncrement)) {
            throw new InvalidArgumentException('$iIncrement  expect integer , "' . gettype($iIncrement) . '" given');
        }

        $aIncludeStatus = array();

        $oSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

        $sFilterDate = '01-' . str_pad($sMonth, 2, '0', STR_PAD_LEFT) . '-' . $sYear;

        $oFilterDate = new DateTime($sFilterDate);

        $oFilterDate->add(new DateInterval('P' . $iIncrement . 'M'));

        $sDateMin = $oFilterDate->modify('first day of this month')->format('d-m-Y');

        $sDateMax = $oFilterDate->modify('last day of this month')->format('d-m-Y');

        $sSearchQuery = 'AND op_dateConso_start BETWEEN \'' . Phoenix_Data_Convert::FormatDateForMysqlWithDetails($sDateMin) . '\' and \'' . Phoenix_Data_Convert::FormatDateForMysqlWithDetails($sDateMax, false) . '\'';

        if ($sActivitie) {
            $sSearchQuery.= ' AND kpiact.r_activity_kpi_id = ' . $sActivitie;
        }

        $sQuery = str_replace('{Condition}', $sSearchQuery, $this->queries[$sQueryKey]);

        // If include status 4
        if ($bIncludeClosedOP) {
            $aIncludeStatus[] = 4;
        }

        if ($sStatusTauxId == 2) {
            $aIncludeStatus = array_merge($aIncludeStatus, array(2, 6));
        }

        if (!$sStatusTauxId) { // Whitout filter
            $sQuery = str_replace('{StatutIds}', 'WHERE op.op_status_id IN (2, 6' . (($bIncludeClosedOP) ? ',4' : '') . ')', $sQuery);
        } elseif ($aIncludeStatus) { // Filter status taux
            $sQuery = str_replace('{StatutIds}', 'WHERE op.op_status_id IN (' . implode(',', $aIncludeStatus) . ')', $sQuery);
        } else { // Whitout accepted status
            $sQuery = str_replace('{StatutIds}', 'WHERE op.op_status_id = -1', $sQuery);
        }

        if ($sStatusTauxId && $sStatusTauxId <> 2) { // Filter status taux
            $sQuery = str_replace('{StatutsTaux}', 'AND op.op_taux_conversion = ' . $sStatusTauxId, $sQuery);
            $sQuery = str_replace('{StatutIdQuery1}', '1', $sQuery);
        } elseif ($sStatusTauxId == 2) { // Only accepted status
            $sQuery = str_replace('{StatutsTaux}', '', $sQuery);
            $sQuery = str_replace('{StatutIdQuery1}', '-1', $sQuery);
        } else { // Whitout filter
            $sQuery = str_replace('{StatutsTaux}', '', $sQuery);
            $sQuery = str_replace('{StatutIdQuery1}', '1', $sQuery);
        }

        $fResults = $oSelect->getAdapter()->query($sQuery)->fetchColumn();

        return $fResults;
    }

    /**
     * Retrieve Backlogs Data By year and month
     * @param string $sMonth
     * @param string $sYear
     * @return array
     * @throws InvalidArgumentException
     */
    public function getBackLogsTableByMonthAndYear($sMonth, $sYear, $sActivitie, $sStatusTauxId)
    {
        if (!is_string($sMonth)) {
            throw new InvalidArgumentException('month  expect string, "' . gettype($sMonth) . '" given');
        }
        if (!is_string($sYear)) {
            throw new InvalidArgumentException('month  expect string, "' . gettype($sYear) . '" given');
        }
        if (!is_string($sActivitie)) {
            throw new InvalidArgumentException('month  expect string, "' . gettype($sActivitie) . '" given');
        }
        if (!is_string($sStatusTauxId)) {
            throw new InvalidArgumentException('month  expect string, "' . gettype($sStatusTauxId) . '" given');
        }

        for ($iMonthIncrement = 1; $iMonthIncrement <= 5; $iMonthIncrement++) {
            $aResult['nbOpCurrentMonth' . $iMonthIncrement] = $this->getInfosBackLogsInfosByMonthAndYear($sMonth, $sYear, $sActivitie, $sStatusTauxId, 'nbOp', $iMonthIncrement);
            $aResult['nbOpCurrentMonthIncludeClosed' . $iMonthIncrement] = $this->getInfosBackLogsInfosByMonthAndYear($sMonth, $sYear, $sActivitie, $sStatusTauxId, 'nbOp', $iMonthIncrement, true);
            $aResult['nbOpPastMonth' . $iMonthIncrement] = $this->getInfosBackLogsInfosByMonthAndYear($sMonth, (string) ($sYear - 1), $sActivitie, $sStatusTauxId, 'nbOp', $iMonthIncrement, true);
            $aResult['previsionExpensesCurrentMonth' . $iMonthIncrement] = $this->getInfosBackLogsInfosByMonthAndYear($sMonth, $sYear, $sActivitie, $sStatusTauxId, 'prevision_expenses', $iMonthIncrement);
            $aResult['previsionExpensesCurrentMonthIncludeClosed' . $iMonthIncrement] = $this->getInfosBackLogsInfosByMonthAndYear($sMonth, $sYear, $sActivitie, $sStatusTauxId, 'prevision_expenses', $iMonthIncrement, true);
            $aResult['previsionExpensesPastMonth' . $iMonthIncrement] = $this->getInfosBackLogsInfosByMonthAndYear($sMonth, (string) ($sYear - 1), $sActivitie, $sStatusTauxId, 'prevision_expenses', $iMonthIncrement, true);
        }
        return $aResult;
    }

    /**
     * @return array
     */
    public function getStatusTauxList()
    {
        return array(
            'En cours 25%' => array('value' => '25'),
            'En cours 50%' => array('value' => '50'),
            'En cours 75%' => array('value' => '75'),
            'En cours 100%' => array('value' => '100'),
            'Accepté' => array('value' => '2'),
        );
    }

    /**
     * Compute data for backlogs
     * @param array $aData
     * @return string
     */
    public function computeDataBackLogs(array $aData)
    {
        $aComputedData = array(
            'Nombre d\'opérations' => array(),
            'Charge prévisionnelle' => array(),
        );

        for ($iMonthIncrement = 1; $iMonthIncrement <= 5; $iMonthIncrement++) {
            // Compute Nb Ops
            $fNbOpCurrentMonth = isset($aData['nbOpCurrentMonth' . $iMonthIncrement]) ? $aData['nbOpCurrentMonth' . $iMonthIncrement] : 0;
            $fNbOpCurrentMonthIncludeClosed = isset($aData['nbOpCurrentMonthIncludeClosed' . $iMonthIncrement]) ? $aData['nbOpCurrentMonthIncludeClosed' . $iMonthIncrement] : 0;
            $fNbOpPastMonth = isset($aData['nbOpPastMonth' . $iMonthIncrement]) ? $aData['nbOpPastMonth' . $iMonthIncrement] : 0;

            $fDeltaNbOpMonth = $fNbOpCurrentMonthIncludeClosed - $fNbOpPastMonth;
            $aComputedData['Nombre d\'opérations']['Mois+' . $iMonthIncrement]['value'] = number_format($fNbOpCurrentMonth, 0) . ' (' . number_format($fDeltaNbOpMonth, 0) . ')';
            $aComputedData['Nombre d\'opérations']['Mois+' . $iMonthIncrement]['delta'] = $fDeltaNbOpMonth;

            // Compute prevision expenses
            $fPrevisionExpensesCurrentMonth = isset($aData['previsionExpensesCurrentMonth' . $iMonthIncrement]) ? $aData['previsionExpensesCurrentMonth' . $iMonthIncrement] : 0;
            $fPrevisionExpensesCurrentMonthIncludeClosed = isset($aData['previsionExpensesCurrentMonthIncludeClosed' . $iMonthIncrement]) ? $aData['previsionExpensesCurrentMonthIncludeClosed' . $iMonthIncrement] : 0;
            $fPrevisionExpensesPastMonth = isset($aData['previsionExpensesPastMonth' . $iMonthIncrement]) ? $aData['previsionExpensesPastMonth' . $iMonthIncrement] : 0;

            $fDeltaPrevisionExpensesMonth = $fPrevisionExpensesCurrentMonthIncludeClosed - $fPrevisionExpensesPastMonth;
            $aComputedData['Charge prévisionnelle']['Mois+' . $iMonthIncrement]['value'] = number_format($fPrevisionExpensesCurrentMonth, 0, '', ' ') . ' € (' . number_format($fDeltaPrevisionExpensesMonth, 0, '', ' ') . ' €)';
            $aComputedData['Charge prévisionnelle']['Mois+' . $iMonthIncrement]['delta'] = $fDeltaPrevisionExpensesMonth;
        }

        return $aComputedData;
    }

    /**
     * Format Data For export CSV
     * @param array $aData
     * @return array
     */
    public function formatDataForCSV(array $aData)
    {
        $aFormatedData = array();

        $aFormatedNOpData = array(
            '' => 'Nombre d\'opérations',
        );

        foreach ($aData['Nombre d\'opérations'] as $sKey => $aColumn) {
            $aFormatedNOpData[$sKey] = $aColumn['value'];
        }

        $aFormatedData[] = $aFormatedNOpData;

        $aFormatedPrevisionExpensesData = array(
            '' => 'CA prévisionnel',
        );

        foreach ($aData['Charge prévisionnelle'] as $sKey => $aColumn) {
            $aFormatedPrevisionExpensesData[$sKey] = $aColumn['value'];
        }

        $aFormatedData[] = $aFormatedPrevisionExpensesData;

        return $aFormatedData;
    }
}
