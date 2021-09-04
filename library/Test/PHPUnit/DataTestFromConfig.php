<?php

/**
 * @author BIYA Reda <mbiya@neo-data.ma>
 */
class Test_PHPUnit_DataTestFromConfig extends Test_PHPUnit_AbstractDataTest
{
    /**
     * @param array $oConfig
     */
    public function __construct(array $aConfigDatakeys)
    {
        $this->setDataKeys($aConfigDatakeys);
    }
}
