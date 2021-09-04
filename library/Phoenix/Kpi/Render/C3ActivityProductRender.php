<?php

/**
 * Description of C3ActivityProductRender
 *
 * @author NABIL NIZAR
 */
class Phoenix_Kpi_Render_C3ActivityProductRender extends Phoenix_Kpi_Render_AbstractRender
{

    /**
     * @return array
     */
    public function render()
    {
        $aColumns = array();
        $aTypes = array();
        $aAxes = array();

        $aGroups = array(
            array($this->result[2]['displayed_name'], $this->result[1]['displayed_name']),
            array($this->result[4]['displayed_name'], $this->result[3]['displayed_name']),
            array($this->result[6]['displayed_name'], $this->result[5]['displayed_name']),
        );

        $aColors = array(
            $this->result[2]['displayed_name'] => '#59c0ae',
            $this->result[1]['displayed_name'] => '#2a6f63',
            $this->result[4]['displayed_name'] => '#6bc7b7',
            $this->result[3]['displayed_name'] => '#318173',
            $this->result[6]['displayed_name'] => '#7ecec0',
            $this->result[5]['displayed_name'] => '#389484',
        );

        $aCategories = array_unique(array_merge($this->getCategories($this->result[1]['data']), $this->getCategories($this->result[2]['data']), $this->getCategories($this->result[3]['data']), $this->getCategories($this->result[4]['data']), $this->getCategories($this->result[5]['data']), $this->getCategories($this->result[6]['data'])));

        sort($aCategories);

        $aAxis = array(
            'x' => array(
                'show' => true,
                'type' => 'category',
                'categories' => $aCategories,
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

        foreach ($this->result as $aSegment) {
            $aSegmentColumn = array(0 => $aSegment['displayed_name']);
            $aSegmentColumn += $this->formatDataForJSON($aSegment['data'], $aCategories);
            $aColumns[] = array_values($aSegmentColumn);
            $aTypes[$aSegment['displayed_name']] = $aSegment['type'];
            if (isset($aSegment['axes']) && $aSegment['axes']) {
                $aAxes[$aSegment['displayed_name']] = $aSegment['axes'];
            }
        }

        if (isset($aColumns[0]) && isset($aColumns[1])) {
            $aColumns = $this->groupSegments($aColumns, 0, 1);
            $aColumns = $this->groupSegments($aColumns, 2, 3);
            $aColumns = $this->groupSegments($aColumns, 4, 5);
        }

        return array('data' => array('columns' => $aColumns, 'types' => $aTypes, 'axes' => $aAxes, 'groups' => $aGroups, 'order' => null, 'colors' => $aColors), 'axis' => $aAxis, 'tooltip' => array('format' => array('value' => "{tooltipFormatGraphProduct}")));
    }

    /**
     *
     * @param array $aData
     * @param array $aCategories
     * @return array
     */
    protected function formatDataForJSON(array $aData, array $aCategories)
    {
        $aFormatedResult = array();
        foreach ($aData as $aRow) {
            $aFormatedResult[$aRow['Id']] = $aRow['Value'];
        }

        $aFormatedResult += array_fill_keys($aCategories, 0);
        ksort($aFormatedResult);
        return $aFormatedResult;
    }

    /**
     * @param array $aData
     * @return array
     */
    protected function getCategories(array $aData)
    {
        $aCategories = array();
        foreach ($aData as $aRow) {
            $aCategories[] = $aRow['Id'];
        }

        return $aCategories;
    }

    /**
     * @param array $aColumns
     * @param int $iIndexElementIn
     * @param int $iIndexElementOut
     * @return array
     */
    protected function groupSegments($aColumns, $iIndexElementIn, $iIndexElementOut)
    {
        foreach ($aColumns[$iIndexElementIn] as $ikey => $sValue) {
            if ($ikey && isset($aColumns[$iIndexElementOut][$ikey])) {
                if (($aColumns[$iIndexElementOut][$ikey] - $sValue) >= 0) {
                    $aColumns[$iIndexElementOut][$ikey] = $aColumns[$iIndexElementOut] [$ikey] - $sValue;
                } else {
                    $aColumns[$iIndexElementOut][$ikey] = 0;
                }
            }
        }

        return $aColumns;
    }
}
