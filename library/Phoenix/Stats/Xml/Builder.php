<?php

/**
 * création d'un flux xml pour génération d'un pdf de stat client
 *
 * @author info20
 */
class Phoenix_Stats_Xml_Builder
{

    /**
     *
     * @var DOMDocument 
     */
    private $_oDOMDocument;

    public function __construct()
    {
        $this->_oDOMDocument = new DOMDocument();
        $this->_oDOMroot = $this->_oDOMDocument->appendChild($this->_oDOMDocument->createElement('root'));
        $this->_oDOMindicators = $this->_oDOMroot->appendChild($this->_oDOMDocument->createElement('indicators'));
    }

    /**
     * 
     * @param type $aData <br>
     * $aData=array(
     *      'lang'=>'',
     * 		'contact_dc'=>array('nom_contact'=>'','email_contact'=>'','tel_contact'=>'','fax_contact'=>''),
     * 		'contact_cp'=>array('nom_contact'=>'','email_contact'=>'','tel_contact'=>'','fax_contact'=>''),
     * 		'nom_offre'=>'',
     * 		'num_operation'=>'',
     * 		'operation_conso_start'=>'',
     * 		'operation_conso_end'=>'',
     * 		'operation_end_postale'=>'',
     * 		'operation_gestion_end'=>''
     * 		'date_stats'=>''
     * )
     */
    public function addEntete($aData)
    {

        //config, pattributs ans root
        $oAttribute = $this->_oDOMDocument->createAttribute('lang');
        $oAttribute->value = $aData['lang'];
        $this->_oDOMroot->appendChild($oAttribute);


        $this->_oDOMdata = $this->_oDOMroot->appendChild($this->_oDOMDocument->createElement('data'));
        $this->_oDOMfirst_page = $this->_oDOMdata->appendChild($this->_oDOMDocument->createElement('first_page'));
        $this->_oDOMlast_page = $this->_oDOMdata->appendChild($this->_oDOMDocument->createElement('last_page'));
        $oDOMcontact_dc = $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('contact_dc'));

        if (isset($aData['contact_dc'])) {
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('nom_contact', $aData['contact_dc']['nom_contact']));
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('email_contact', $aData['contact_dc']['email_contact']));
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('tel_contact', $aData['contact_dc']['tel_contact']));
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('fax_contact', $aData['contact_dc']['fax_contact']));
        } else {
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('nom_contact', ''));
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('email_contact', ''));
            $oDOMcontact_dc->appendChild($this->_oDOMDocument->createElement('tel_contact', ''));
        }

        $oDOMcontact_cp = $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('contact_cp'));
        if (isset($aData['contact_cp'])) {
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('nom_contact', $aData['contact_cp']['nom_contact']));
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('email_contact', $aData['contact_cp']['email_contact']));
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('tel_contact', $aData['contact_cp']['tel_contact']));
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('fax_contact', $aData['contact_cp']['fax_contact']));
        } else {
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('nom_contact', ''));
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('email_contact', ''));
            $oDOMcontact_cp->appendChild($this->_oDOMDocument->createElement('tel_contact', ''));
        }

        $element = $this->_oDOMDocument->createElement('nom_offre');
        $element->appendChild($this->_oDOMDocument->createCDATASection($aData['nom_offre']));
        $this->_oDOMfirst_page->appendChild($element);

        //$this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('nom_offre', $aData['nom_offre']));
        $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('num_operation', $aData['num_operation']));
        $oZend_Date = new Zend_Date($aData['date_stats']);

        $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('date_stats', $oZend_Date->toString('dd/MM/Y')));

        $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('date_start_op', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($aData['operation_conso_start'], $aData['lang'])));
        $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('date_end_op', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($aData['operation_conso_end'], $aData['lang'])));

        $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('date_fin_postale', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($aData['operation_end_postale'], $aData['lang'])));
        $this->_oDOMfirst_page->appendChild($this->_oDOMDocument->createElement('date_fin_gestion', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($aData['operation_gestion_end'], $aData['lang'])));

        //tout en bas
        $this->_oDOMlast_page->appendChild($this->_oDOMDocument->createElement('num_tva', $aData['num_tva']));
    }

    /**
     * 
     * @param type $aData<br>
     * 	$aData=array(
     * 	'title'=>'',
     * 	'type'=>'', ( barh | barv | pie | table-pie | barc | table)
     * 	'size'=>'', ( mini | large )
     * 	'plots'=>array($x=>$y,...))
     * )
     */
    public function addGraph($aData)
    {

        $this->_oDOMgraph = $this->_oDOMindicators->appendChild($this->_oDOMDocument->createElement('graph'));
        $DOMAttribute = $this->_oDOMDocument->createAttribute('title');
        $DOMAttribute->value = $aData['title'];
        $this->_oDOMgraph->appendChild($DOMAttribute);
        $DOMAttribute = $this->_oDOMDocument->createAttribute('type');
        $DOMAttribute->value = $aData['type'];
        $this->_oDOMgraph->appendChild($DOMAttribute);
        $DOMAttribute = $this->_oDOMDocument->createAttribute('size');
        $DOMAttribute->value = $aData['size'];
        $this->_oDOMgraph->appendChild($DOMAttribute);
        switch ($aData['type']) {
            case 'barc':
                foreach ($aData['plots'] as $x => $aSegment) {
                    $oDOMplot = $this->_oDOMgraph->appendChild($this->_oDOMDocument->createElement('plot'));
                    $DOMAttribute = $this->_oDOMDocument->createAttribute('x');
                    $DOMAttribute->value = $x;
                    $oDOMplot->appendChild($DOMAttribute);

                    foreach ($aSegment as $label => $value) {
                        $oDOMsegment = $this->_oDOMgraph->appendChild($this->_oDOMDocument->createElement('segment', $value));
                        $DOMAttribute = $this->_oDOMDocument->createAttribute('label');
                        $DOMAttribute->value = $label;
                        $oDOMsegment->appendChild($DOMAttribute);
                        $oDOMplot->appendChild($oDOMsegment);
                    }
                }
                break;
            default:
                foreach ($aData['plots'] as $sLib => $sVal) {
                    $oDOMplot = $this->_oDOMgraph->appendChild($this->_oDOMDocument->createElement('plot'));
                    $DOMAttribute = $this->_oDOMDocument->createAttribute('x');
                    $sLibelle = is_string($sLib) ? htmlspecialchars(Phoenix_Data_Convert::getUtf8EncodedString($sLib)) : $sLib;
                    $DOMAttribute->value = $sLibelle;

                    $oDOMplot->appendChild($DOMAttribute);
                    $DOMAttribute = $this->_oDOMDocument->createAttribute('y');
                    $DOMAttribute->value = $sVal;
                    $oDOMplot->appendChild($DOMAttribute);
                    $this->_oDOMgraph->appendChild($oDOMplot);
                }
                break;
        }
    }

    /**
     * nombre de remontés
     * @param integer $data
     */
    public function addTauxRemonte($data)
    {
        $this->_oDOMindicators->appendChild($this->_oDOMDocument->createElement('tx_remontee', $data));
    }

    public function addNbDemandes($data)
    {
        $this->_oDOMindicators->appendChild($this->_oDOMDocument->createElement('nb_demandes', $data));
    }

    public function addNbParticipations($data)
    {
        $this->_oDOMindicators->appendChild($this->_oDOMDocument->createElement('nb_participations', $data));
    }

    /**
     * 
     * @param type $data<br>
     * 	$aData=array( <br>
     * array(<br>
     * 	'libelle'=>'',<br>
     * 	'qte_estimee'=>'',<br>
     * 	'qte_realisee'=>'',<br>
     * 	'pourcentage_realisation'=>'',<br>
     * 	'montant_estime'=>'',<br>
     * 	'montant_realise'=>'',<br>
     * 	'montant_encaisse'=>'',<br>
     * 	'montant_disponible'=>''<br>
     *      ),...  <br>
     * )
     */
    public function addBilanFinancier($aData)
    {
        $this->_oDOMbilan_financier = $this->_oDOMindicators->appendChild($this->_oDOMDocument->createElement('bilan_financier'));
        foreach ($aData as $row) {
            $oDOMbline = $this->_oDOMbilan_financier->appendChild($this->_oDOMDocument->createElement('bline'));
            $sLibelle = is_string($row['libelle']) ? htmlspecialchars(Phoenix_Data_Convert::getUtf8EncodedString($row['libelle'])) : $row['libelle'];
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('libelle', $sLibelle));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('qte_estimee', $row['qte_estimee']));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('qte_realisee', $row['qte_realisee']));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('pourcentage_realisation', $row['pourcentage_realisation']));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('montant_estime', $row['montant_estime']));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('montant_realise', $row['montant_realise']));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('montant_encaisse', $row['montant_encaisse']));
            $oDOMbline->appendChild($this->_oDOMDocument->createElement('montant_disponible', $row['montant_disponible']));
        }
    }

    /**
     * 
     * @param type $aData
     * 	$aData=array(
     * 	'libelle'=>'',
     * 	'qte_estimee'=>'',
     * 	'qte_affectee'=>'',
     * 	'qte_entree'=>'',
     * 	'qte_stock'=>''
     * )
     */
    public function addStock($aData)
    {
        $this->_oDOMstocks = $this->_oDOMindicators->appendChild($this->_oDOMDocument->createElement('stocks'));
        foreach ($aData as $row) {
            $oDOMsline = $this->_oDOMstocks->appendChild($this->_oDOMDocument->createElement('sline'));
            $oDOMsline->appendChild($this->_oDOMDocument->createElement('libelle', htmlspecialchars($row['libelle'])));
            $oDOMsline->appendChild($this->_oDOMDocument->createElement('qte_estimee', $row['qte_estimee']));
            $oDOMsline->appendChild($this->_oDOMDocument->createElement('qte_affectee', $row['qte_affectee']));
            $oDOMsline->appendChild($this->_oDOMDocument->createElement('qte_entree', $row['qte_entree']));
            $oDOMsline->appendChild($this->_oDOMDocument->createElement('qte_stock', $row['qte_stock']));
        }
    }

    /**
     * retourne le flux xml
     * @return string
     */
    public function getXml()
    {
        //echo $this->_oDOMDocument->saveXML();
        return $this->_oDOMDocument->saveXML();
    }

}

?>
