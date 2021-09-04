<?php



/**
 * Skeleton subclass for performing query and update operations on the 'r_facture_motifs' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.phoenix
 */
class RFactureMotifsQuery extends BaseRFactureMotifsQuery {

   /**
    * 
    * @param string $sFactId
    * @return array
    * @throws \InvalidArgumentException
    */
    public function getSelectedMotifsForFacture($sFactId)
    {
        if(!is_string($sFactId)){
            throw new \InvalidArgumentException('An error occured while selecting motifs for facture fact id expects string, "' . gettype($sFactId) . '" given.');
        }
        
        $aSelectedMotifs = LnkFactureMotifsQuery::create()->select(array('MotifId'))->findByFactId($sFactId)->toArray();      

        if (count($aSelectedMotifs) > 0) {
            $sSelect = "case when (r_fact_motif_id in ('" . implode("','", $aSelectedMotifs) . "')) then 1 else 0 end as is_selected";
        } else {
            $sSelect = "0 as is_selected";
        }


        //return $this->withColumn($select,'isSelected')->find();

        $sSqlQuery = "select r_fact_motif_id, r_fact_motif_libelle," . $sSelect . "
            from r_facture_motifs
            where actif = ". 1 ."
            order by is_selected desc,r_fact_motif_libelle";

        return Propel::getConnection()->query($sSqlQuery)->fetchAll(PDO::FETCH_ASSOC);
        
    }
} // RFactureMotifsQuery
