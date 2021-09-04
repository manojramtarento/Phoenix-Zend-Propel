<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reader
 *
 * @author info20
 */
class Data_Compil_Data_Reader {

    //put your code here

    static $_aIndicateurs = null;

    /**
     * 
     * @return type
     */
    public static function getIndicateurs($id = null) {

        if (!isset(self::$_aIndicateurs)) {
            self::$_aIndicateurs = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter()->select()->from('r_indicateur')
                            ->query()->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);

            self::$_aIndicateurs = array_map('reset', self::$_aIndicateurs);
        }

        if (!isset(self::$_aIndicateurs[$id])) {
            return 0;
        } elseif (!isset($id)) {
            return self::$_aIndicateurs;
        } else {
            return self::$_aIndicateurs[$id];
        }
    }

    /**
     * récupére la valeur d'un indicteur à date, avec ou sans segement
     * un indicateur qui est défini par défaut comme retournant une valeur cumulée ne peut retourner une valeur saisie à date
     * @param integer $opId
     * @param integer $iIndicateurId
     * @param string $mSegement 
     * <br>true => récupère les couples (segments => valeurs)
     * <br>non renseginé:retourne la valeur de l'indicteur, somme de tous les segments si il y a
     * <br>rensigné: retourne le couple (segment => valeur)
     * @param string $date
     * @param boolean $bCumul
     */
    public static function getIndicateurValue($opId, $iIndicateurId, $mSegement = null, $date = null, $bCumul = true) {

        $aIndicateur = self::getIndicateurs($iIndicateurId);

        $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

        $select = $oAdapter->select();

        $select->where('r_indicateur_id=?', $iIndicateurId)->where('data_compil_op_id = ?', $opId);


        if ($aIndicateur['r_data_type_id'] == Data_Compil_Data_Type::CUMUL) {
            //récupération de la  date la plus récente pour une valeur cumulée
            $date = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                    ->where('r_indicateur_id = ?', $iIndicateurId)
                    ->where('data_compil_op_id = ?', $opId)
                    ->order('data_compil_stamp desc')
                    ->limit(1)
            ;
        } elseif (!isset($date)) {
            $date = 'getDate()';
        }


        //selection d'un segement
        $select->group('data_volume_segment');
        if (isset($mSegement) && $mSegement !== true) {
            $select->where('data_volume_segment=?', $mSegement);
        }


        $select->from('View_CompilData', array('data_volume_segment', 'volume' => 'sum(data_volume_volume)'));

        //recupération cumulé/saisie
        if ($aIndicateur['r_data_type_id'] == Data_Compil_Data_Type::SAISIE && $bCumul) {
            $select->where('data_compil_stamp <= ' . $date);
        } elseif ($aIndicateur['r_data_type_id'] == Data_Compil_Data_Type::CUMUL) {
            $select->where('data_compil_stamp = (' . $date . ')');
        } else {
            $select->where('data_compil_stamp = ' . $date);
        }

        // echo $select->assemble();die;


        $result = $select->query()->fetchAll(PDO::FETCH_KEY_PAIR);

        if (!isset($mSegement)) {
            //$result = $select->query()->fetchColumn(1);
            $result = array_sum($result);
        } /* else {
          $result = $select->query()->fetchAll(PDO::FETCH_ASSOC);
          } */

        return $result;
    }

    /**
     * en cours...
     * @param type $iIndicateurId
     * @param type $opId
     * @param type $date
     * @param type $mSegement
     */
    public function getValue($iIndicateurId, $opId, $date = null, $aSegement, $bCumul = true) {
        
        $aIndicateur = self::getIndicateurs($iIndicateurId);

        $oAdapter = Phoenix_Db_Adapters::getInstance()->getCompilDataAdapter();

        $select = $oAdapter->select();

        $select->where('r_indicateur_id=?', $iIndicateurId)->where('data_compil_op_id = ?', $opId);


        if ($aIndicateur['r_data_type_id'] == Data_Compil_Data_Type::CUMUL) {
            //récupération de la  date la plus récente pour une valeur cumulée
            $date = $oAdapter->select()->from('data_compil', 'data_compil_stamp')
                    ->where('r_indicateur_id = ?', $iIndicateurId)
                    ->where('data_compil_op_id = ?', $opId)
                    ->order('data_compil_stamp desc')
                    ->limit(1)
            ;
        } elseif (!isset($date)) {
            $date = 'getDate()';
        }
        
        
        
        //recupération cumulé/saisie
        if ($aIndicateur['r_data_type_id'] == Data_Compil_Data_Type::SAISIE && $bCumul) {
            $select->where('data_compil_stamp <= ' . $date);
        } elseif ($aIndicateur['r_data_type_id'] == Data_Compil_Data_Type::CUMUL) {
            $select->where('data_compil_stamp = (' . $date . ')');
        } else {
            $select->where('data_compil_stamp = ' . $date);
        }
        
        
        
        foreach($aSegement as $i=>$segment){
            
            $select->group($segment);
        }
        
        
        
        
    }

}

?>