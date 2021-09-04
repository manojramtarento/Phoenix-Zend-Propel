<?php

abstract class Data_Doc_Reader_Xml extends Data_Doc_Reader
{

    /**
     * chemin d'accès d'un fichier xml ou cha$ine xml
     * @var string
     */
    protected $_xml;

    /**
     *
     * @var DomDocument
     */
    protected $_dom;

    /**
     *
     * @param string $sXml
     */
    public function __construct($sXml)
    {
        $this->_xml=$sXml;
        $this->_dom = new DomDocument();

        if (strpos($this->_xml, '.xml') !== false) {
            // On dispose d'un chemin de fichier
            $this->_dom->load($this->_xml);
        } else {
            // On dispose du xml en tant que variable
            $this->_xml = mb_convert_encoding($this->_xml, 'utf-8', mb_detect_encoding($this->_xml));
            // 33448 : Supression des caractères de control, qui donne lieu à des
            // Section CDATA non terminé
            $this->_dom->loadXML(Phoenix_Data_Convert::removeControlCharacters($this->_xml));
        }

        $this->_fillStructByXML();
        $this->_initConfigFromXml();
    }

    private function _initConfigFromXml()
    {
        $this->structure['lang'] = $this->_dom->getElementsByTagName('root')->item(0)->getAttribute('lang');
    }

    /**
     * Return an array of wanted data
     * @param array $data_to_retrieve : tableau des clés à récupérer
     * @param DomElement $xml_elt : element DOM où l'on doit chercher les données
     * @return array
     * @throws LogicException
     */
    protected function retrieveXMLDataArray($data_to_retrieve, $xml_elt)
    {
        $data = array();
        foreach ($data_to_retrieve as $data_key) {
            if (! isset($xml_elt)) {
                continue;
            }
            try {
                $a = $xml_elt->getElementsByTagName($data_key);
                if ($xml_elt->getElementsByTagName($data_key)->item(0) != null) {
                    $data[$data_key] = $xml_elt->getElementsByTagName($data_key)->item(0)->nodeValue;
                }
            } catch (Exception $oException) {
                throw new \LogicException('Error when reading XML: The '.$data_key.' tag is missing in the '.$xml_elt->nodeName.' branch', (int) $oException->getCode(), $oException);
            }
        }

        return $data;
    }
}
