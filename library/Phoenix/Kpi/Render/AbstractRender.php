<?php

/**
 * @author NABIL NIZAR
 */
abstract class Phoenix_Kpi_Render_AbstractRender
{

    /**
     * @var array
     */
    protected $result;

    /**
     * @param array $aResult
     */
    public function __construct(array $aResult = array())
    {
        if ($aResult) {
            $this->setResult($aResult);
        }
    }

    public function getResult()
    {
        if (is_array($this->result)) {
            return $this->result;
        }
        throw new \LogicException('Property "result" expects an array, "' . gettype($this->result) . '" defined');
    }

    /**
     * @param array $aResult
     * @return \Phoenix_Kpi_Render_AbstractRender
     */
    public function setResult(array $aResult)
    {
        $this->result = $aResult;
        return $this;
    }
}
