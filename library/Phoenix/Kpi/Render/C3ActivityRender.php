<?php

/**
 * Description of C3Render
 *
 * @author NABIL NIZAR
 */
class Phoenix_Kpi_Render_C3ActivityRender extends Phoenix_Kpi_Render_AbstractRender
{

    /**
     * @return array
     */
    public function render()
    {

        $aColumns = array();
        $aTypes = array();
        $aAxes = array();

        $aStartDashed = current($this->result[3]['data']);

        if (!empty($aStartDashed['M']) && $aStartDashed['M'] - 2 >= 1) {
            $aRegions = array(
                $this->result[2]['displayed_name'] => array(
                    array('start' => $aStartDashed['M'] - 2, 'style' => 'dashed'),
                )
            );
        } else {
            $aRegions = array();
        }

        $aGroups = array(
            array($this->result[6]['displayed_name'], $this->result[4]['displayed_name'], 'DIFF N - 1'),
            array($this->result[7]['displayed_name'], $this->result[5]['displayed_name'], 'DIFF N'),
        );

        $aColors = array(
            $this->result[1]['displayed_name'] => '#59c0ae',
            $this->result[2]['displayed_name'] => '#2a6f63',
            $this->result[6]['displayed_name'] => '#c0d7ef',
            $this->result[7]['displayed_name'] => '#6bc7b7',
            $this->result[4]['displayed_name'] => '#a2b9d1',
            $this->result[5]['displayed_name'] => '#318173',
            'DIFF N - 1' => 'red',
            'DIFF N' => 'red',
        );

        $aAxis = array(
            'x' => array(
                'show' => true,
                'label' => array(
                    'text' => 'Mois',
                    'position' => 'outer-center',
                ),
                'type' => 'category',
                'categories' => array('JANV.', 'FEVR.', 'MARS.', 'AVR.', 'MAI.', 'JUIN.', 'JUILL.', 'AOUT.', 'SEPT.', 'OCT.', 'NOV.', 'DEC.'),
            ),
            'y' => array(
                'label' => array(
                    'text' => 'K€',
                    'position' => 'outer-top',
                ),
            ),
            'y2' => array(
                'show' => true,
                'label' => array(
                    'text' => 'Nombre d\'opérations',
                    'position' => 'outer-top',
                ),
            ),
        );

        if (!empty($aStartDashed['M']) && $aStartDashed['M'] - 2 >= 1) {
            $aGrid = array(
                'x' => array('lines' => array(array('value' => $aStartDashed['M'] - 2, 'text' => $aAxis['x']['categories'][$aStartDashed['M'] - 2]))),
            );
        } else {
            $aGrid = array();
        }

        $this->result[2]['data'] = array_merge($this->result[2]['data'], $this->result[3]['data']);
        unset($this->result[3]);

        foreach ($this->result as $aSegment) {
            $aColumns[] = array_merge(array(0 => $aSegment['displayed_name']), $this->formatDataForJSON($aSegment['data']));
            $aTypes[$aSegment['displayed_name']] = $aSegment['type'];
            if (isset($aSegment['axes']) && $aSegment['axes']) {
                $aAxes[$aSegment['displayed_name']] = $aSegment['axes'];
            }
        }

        $aTypes['DIFF N - 1'] = 'bar';
        $aTypes['DIFF N'] = 'bar';

        $aColumns = $this->groupSegments($aColumns, 2, 4, 'DIFF N - 1');
        $aColumns = $this->groupSegments($aColumns, 3, 5, 'DIFF N');

        return array('data' => array('columns' => $aColumns, 'types' => $aTypes, 'axes' => $aAxes, 'regions' => $aRegions, 'groups' => $aGroups, 'order' => null, 'colors' => $aColors), 'axis' => $aAxis, 'grid' => $aGrid, 'legend' => array('hide' => array('DIFF N - 1', 'DIFF N')), 'tooltip' => array('format' => array('value' => "{tooltipFormatGraphActivity}")));
    }

    /**
     * Format query result to array
     * @param type $aData
     * @return int
     */
    protected function formatDataForJSON($aData)
    {
        $aFormatedResult = array();
        foreach ($aData as $aRow) {
            $aFormatedResult[(int) $aRow['M']] = $aRow['Value'];
        }

        for ($iMonth = 1; $iMonth <= 12; $iMonth++) {
            if (!isset($aFormatedResult[$iMonth])) {
                $aFormatedResult[$iMonth] = 0;
            }
        }

        ksort($aFormatedResult, SORT_NUMERIC);

        return $aFormatedResult;
    }

    /**
     * @param array $aColumns
     * @param int $iIndexElementIn
     * @param int $iIndexElementOut
     * @param string $sGoupName
     * @return array
     */
    protected function groupSegments($aColumns, $iIndexElementIn, $iIndexElementOut, $sGoupName)
    {
        $aGroup = array(0 => $sGoupName);

        foreach ($aColumns[$iIndexElementIn] as $ikey => $sValue) {
            $fValue = (float) $sValue;
            if ($ikey) {
                if (((float) $aColumns[$iIndexElementOut][$ikey] - $fValue) >= 0) {
                    $aColumns[$iIndexElementOut][$ikey] = (float) $aColumns[$iIndexElementOut][$ikey] - $fValue;
                    $aGroup[$ikey] = 0;
                } else {
                    $aColumns[$iIndexElementIn][$ikey] = (float) $aColumns[$iIndexElementOut][$ikey];
                    $aGroup[$ikey] = $fValue - (float) $aColumns[$iIndexElementOut][$ikey];
                    $aColumns[$iIndexElementOut][$ikey] = 0;
                }
            }
        }

        $aColumns[] = $aGroup;

        return $aColumns;
    }
}
