<?php

/**
 * Skeleton subclass for representing a row from the 'journal_de_vente' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class JournalDeVente extends BaseJournalDeVente
{

    /**
     * lignes du journal de ventes
     * @var array
     */
    protected $_aLignes = array();

    /**
     * 29774
     * Cette fonction permet d'ajouter des objets JournalDeVenteLigne à
     * l'attribut _aLignes
     * @param Mixed $oLine
     */
    public function addJournalDeVenteLigneRecord($oLine)
    {
        if ($oLine instanceof JournalDeVenteLigne) {
            $this->_aLignes[] = $oLine->toArray();
        } else {
            $this->_aLignes[] = $oLine;
        }
    }

    public function save(\PropelPDO $con = null)
    {

        parent::save($con);

        foreach ($this->_aLignes as $aLigne) {
            $oJournalDeVenteLigne = new JournalDeVenteLigne();
            $aLigne['JdvId'] = $this->getJdvId();
            $oJournalDeVenteLigne->fromArray($aLigne);
            $oJournalDeVenteLigne->save();
        }
    }

    public function getCsv()
    {

        $array = array();

        if (count($this->_aLignes) == 0) {
            $aObj = $this->getJournalDeVenteLignes();

            foreach ($aObj as $obj) {
                $aJournaleDeVenteLigneData = $obj->toArray();
                // 34520 Formattage des dates dans le format attendue
                $aJournaleDeVenteLigneData['JdvlDate'] = $obj->getJdvlDate('dmY');
                $aJournaleDeVenteLigneData['JdvlDateEcheance'] = $obj->getJdvlDateEcheance('dmY');
                // 34520 Récupération du op_number à partir de l'op_id
                $aJournaleDeVenteLigneData['JdvlOpNumber'] = (($oOperation = OperationsQuery::create()->findPk($obj->getJdvlOpId())) instanceof Operations) ? $oOperation->getOpNumber() : '';
                $this->_aLignes[] = $aJournaleDeVenteLigneData;
            }
        }

        $oMy_Data_Export_CSV = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Array($this->_aLignes, array('JdvlType' => 'Type',
            'JdvlDate' => 'Date',
            'JdvlJournal' => 'Journal',
            'JdvlGeneral' => 'General',
            'JdvlAuxiliaire' => 'Auxiliaire',
            'JdvlSens' => 'Sens',
            'JdvlMontant' => 'Montant',
            'JdvlClient' => 'Libellé',
            'JdvlReference' => 'Reference',
            'JdvlOpNumber' => 'Num op',
            'JdvlDateEcheance' => 'date d\'échéance',
            'JdvlSectionAnalytique1' => 'section  analytique 1',
            'JdvlSectionAnalytique2' => 'section  analytique 2',
            'JdvlSectionAnalytique3' => 'section  analytique 3',
            'JdvlSectionAnalytique4' => 'section  analytique 4',
            'JdvlSectionAnalytique5' => 'section  analytique 5',
        )));

        return $oMy_Data_Export_CSV->make();
    }
}

// JournalDeVente
