<?php

abstract class Data_Doc_Reader
{

    protected $structure;

    /**
     * Lecture des données via un XML
     */
    abstract protected function _fillStructByXML();

    public function getStruct()
    {
        return $this->structure;
    }
}
