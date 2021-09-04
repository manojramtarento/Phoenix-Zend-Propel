<?php

class FacturesQuery extends BaseFacturesQuery
{

    /**
     *
     * @param integer $iOperationId
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getInvoicesExportDataIterator()
    {
        $oStatement = Propel::getConnection()->prepare('
            SELECT 
                O.op_number AS \'Numero Operation\',
                C.cl_libelle AS \'Client\',
                F.fact_reference AS \'Réference Facture\',
                FRB.fact_rub_libelle AS \'Rubrique\',
                FP.r_prestation_id AS \'Id Prestation\',
                FP.op_prest_id AS \'op_prest_id\',
                FP.fact_prest_libelle AS \'Intitule de prestation (Devis)\',
                RP.r_p_libelle AS \'Intitule de prestation (Referentiel)\', 
                RP.r_p_libelle_en AS \'Intitule de prestation (Referentiel EN)\', 
                COALESCE(P.op_prest_qestim, 0) AS \'Quantite estimee\',
                COALESCE(REPLACE(CAST(P.op_prest_mestim AS CHAR (100)), \'.\', \',\'), 0) AS \'Montant estime\',
                COALESCE(P.op_prest_qreel, 0) AS \'Quantite reelle\',
                COALESCE(REPLACE(CAST(P.op_prest_mreel AS CHAR (100)), \'.\', \',\'), 0) AS \'Montant reel\',
                COALESCE(REPLACE(CAST(FP.fact_prest_quantite_facture_final AS DECIMAL (26,2)), \'.\', \',\'), 0)  AS \'Quantite facturee\',
                COALESCE(REPLACE(CAST(FP.fact_prest_montant_facture_final AS CHAR (100)), \'.\', \',\'), 0) AS \'Montant facture\',               
                RFS.r_fact_stat_libelle AS \'Statut actuel de la Facture\',
                COALESCE(REPLACE(CAST(RP.r_p_cout_interne AS CHAR (100)), \'.\', \',\'), 0) AS \'Cout Interne unitaire de la prestation (Referentiel)\', 
                COALESCE(REPLACE(CAST(RP.r_p_cout_externe AS CHAR (100)), \'.\', \',\'), 0) AS \'Cout Externe unitaire de la prestation (Referentiel)\',
                DATE_FORMAT(F.fact_date, \'%d/%m/%Y\') AS \'Date Facturation\',
                RP.r_p_code_comptable AS \'Code_Comptable\',
                OP.op_prime_numero AS \'Code Prime\',
                OP.op_prime_libelle AS \'Libellé Prime\'
                FROM factures F
                LEFT JOIN factures_rubriques FRB ON FRB.fact_id = F.fact_id
                LEFT JOIN factures_prestations FP ON FP.fact_rub_id = FRB.fact_rub_id
                LEFT JOIN operation_prestations P ON P.op_prest_id = FP.op_prest_id
                LEFT JOIN r_prestations RP ON RP.r_prestation_id = P.op_r_prest_id
                LEFT JOIN r_facture_statuts RFS ON RFS.r_fact_stat_id = F.fact_status_id
                LEFT JOIN operations O ON O.op_id = F.op_id
                LEFT JOIN operation_primes OP ON P.op_prest_prime_id = OP.op_prime_id
                LEFT JOIN clients C ON C.cl_id = O.op_cl_id
            WHERE
            FP.r_prestation_id IS NOT NULL
            AND REPLACE(DATE_FORMAT(F.date_create, \'%Y/%m/%d\'), \'/\', \'-\') < REPLACE(DATE_FORMAT(NOW(), \'%Y/%m/%d\'), \'/\', \'-\')
            ORDER BY Client, `Numero Operation`
        ');
        $oStatement->execute();
        return $oStatement;
    }

    public function getSimpleInvoicesExportData($sType)
    {
        switch ($sType) {
            case Cron_FacturationController::EXPORT_TYPE_WEEKLY:
                $sDateCriteria = 'F.date_create < DATE_SUB(NOW(), INTERVAL 1 DAY)';
                break;
            case Cron_FacturationController::EXPORT_TYPE_MONTHLY:
                $sDateCriteria = 'F.date_create < DATE_ADD(DATE_ADD(DATE_ADD(LAST_DAY(NOW() - INTERVAL 1 MONTH), INTERVAL 23 HOUR), INTERVAL 59 MINUTE), INTERVAL 59 SECOND)';
                break;
            default:
                throw new \DomainException('Argument "$sType" "' . $sType . '" is not supported');
        }

        $oStatement = Propel::getConnection()->prepare(' SET sql_mode = \'\'');
        $oStatement->execute();
        $oStatement = Propel::getConnection()->prepare('
            SELECT
                C.cl_libelle AS \'Client\',                                
                O.op_number AS \'Numero Operation\',
                OT.ot_libelle AS \'Type Operation\',
                OS.os_libelle AS \'Statut\',
                OPR.op_rubrique_libelle AS \'Rubrique\',
                RPFP.r_plan_fact_periode_libelle AS \'Periodicite plan facturation\',
                P.op_r_prest_id AS \'Id Prestation\',
                P.op_prest_id AS \'op_prest_id\',
                P.op_prest_libelle_devis AS \'Lib Prest Devis\',
                RP.r_p_libelle AS \'Lib Prest FR\',
                RP.r_p_libelle_en AS \'Lib Prest EN\',
                P.op_prest_code_comptable AS \'Code_Comptable\',
                P.op_prest_off AS \'Offerte\',
                P.op_prest_npr AS \'Ne Pas Realiser\',
                P.op_prest_npa AS \'N\'\'apparait pas\',
                DATE_FORMAT(O.op_stamp_start, \'%d/%m/%Y\') AS \'Date Debut Gestion\',
                DATE_FORMAT(O.op_dateConso_start, \'%d/%m/%Y\') AS \'Date Debut Conso\',
                DATE_FORMAT(O.op_dateConso_end, \'%d/%m/%Y\') AS \'Date Fin Conso\',
                DATE_FORMAT(O.op_datePoste_end, \'%d/%m/%Y\') AS \'Date Fin Poste\',
                DATE_FORMAT(O.op_stamp_end, \'%d/%m/%Y\') AS \'Date Fin Gestion\',
                COALESCE(P.op_prest_qestim, 0) AS \'Quantite estimee\',
                COALESCE(REPLACE(CAST(P.op_prest_mestim AS CHAR(100)), \'.\', \',\'), 0) AS \'Montant estime\',
                COALESCE(P.op_prest_qreel, 0) AS \'Quantite reelle\',
                COALESCE(REPLACE(CAST(P.op_prest_mreel AS CHAR (100)), \'.\', \',\'), 0) AS \'Montant reel\',
                COALESCE(REPLACE(CAST(FP.fact_prest_quantite_facture_final AS DECIMAL (26,2)), \'.\', \',\'), 0) AS \'Quantite facturee\',
                COALESCE(REPLACE(CAST(FP.fact_prest_montant_facture_final AS CHAR (100)), \'.\', \',\'), 0) AS \'Montant facture\',
                \'0\' AS \'Facture\',
                OP.op_prime_numero AS \'Code Prime\',
                OP.op_prime_libelle AS \'Libellé Prime\'
            FROM operations O
            INNER JOIN operation_prestations P ON P.op_id = O.op_id
            INNER JOIN r_operation_status OS on OS.os_id = O.op_status_id
            LEFT JOIN plan_facturation_params PFP on PFP.op_id = O.op_id
            LEFT JOIN r_plan_fact_periodes RPFP on PFP.plan_fact_periode_id = RPFP.r_plan_fact_periode_id
            LEFT JOIN r_operation_type OT ON OT.ot_id = O.op_type_id
            LEFT JOIN factures_prestations FP ON P.op_prest_id = FP.op_prest_id
            LEFT JOIN factures_rubriques FRB ON FRB.fact_rub_id = FP.fact_rub_id
            LEFT JOIN operation_rubriques OPR ON P.op_prest_rubri_id = OPR.op_rubrique_id
            LEFT JOIN factures F ON F.fact_id = FRB.fact_id
            LEFT JOIN r_facture_statuts RFS ON RFS.r_fact_stat_id = F.fact_status_id
            LEFT JOIN clients C ON C.cl_id = O.op_cl_id
            LEFT JOIN r_prestations RP ON RP.r_prestation_id = P.op_r_prest_id
            LEFT JOIN operation_primes OP ON P.op_prest_prime_id = OP.op_prime_id
            WHERE (F.fact_status_id NOT IN (3,4,5)OR F.fact_id IS NULL)
            AND O.op_status_id IN (1, 2, 6, 4)
            AND P.op_prest_id NOT IN (
                SELECT
                    P.op_prest_id
                    FROM operations O
                INNER JOIN operation_prestations P ON P.op_id = O.op_id
                INNER JOIN factures_prestations FP ON P.op_prest_id = FP.op_prest_id
                INNER JOIN factures_rubriques FRB ON FRB.fact_rub_id = FP.fact_rub_id
                INNER JOIN factures F ON F.fact_id = FRB.fact_id
                WHERE F.fact_status_id IN (3,4,5)
                AND O.op_status_id IN (1, 2, 6, 4)
            )
            AND O.op_number NOT IN (40555, 1, 211, 311, 40106, 40101, 42495, 46629 )
            UNION ALL                            
            SELECT
                C.cl_libelle AS \'Client\',
                O.op_number AS \'Numero Operation\',
                OT.ot_libelle AS \'Type Operation\',
                OS.os_libelle AS \'Statut\',
                OPR.op_rubrique_libelle AS \'Rubrique\',
                RPFP.r_plan_fact_periode_libelle AS \'Periodicite plan facturation\',                                
                FP.r_prestation_id AS \'Id Prestation\',
                FP.op_prest_id AS \'op_prest_id\',
                P.op_prest_libelle_devis AS \'Lib Prest Devis\',
                RP.r_p_libelle AS \'Lib Prest FR\',
                RP.r_p_libelle_en AS \'Lib Prest EN\',
                P.op_prest_code_comptable AS \'Code_Comptable\',
                P.op_prest_off AS \'Offerte\',
                P.op_prest_npr AS \'Ne Pas Realiser\',
                P.op_prest_npa AS \'N\'\'apparait pas\',
                DATE_FORMAT(O.op_stamp_start, \'%d/%m/%Y\') AS \'Date Debut Gestion\',
                DATE_FORMAT(O.op_dateConso_start, \'%d/%m/%Y\') AS \'Date Debut Conso\',
                DATE_FORMAT(O.op_dateConso_end, \'%d/%m/%Y\') AS \'Date Fin Conso\',
                DATE_FORMAT(O.op_datePoste_end, \'%d/%m/%Y\') AS \'Date Fin Poste\',
                DATE_FORMAT(O.op_stamp_end, \'%d/%m/%Y\') AS \'Date Fin Gestion\',
                COALESCE( (SELECT op_prest_qestim FROM operation_prestations OP1 WHERE OP1.op_prest_id = FP.op_prest_id), 0) AS \'Quantite estimee\',
                COALESCE( REPLACE(CAST((SELECT op_prest_mestim FROM operation_prestations OP1 WHERE OP1.op_prest_id = FP.op_prest_id) AS CHAR(100)), \'.\', \',\'), 0) AS \'Montant estime\',
                COALESCE( (SELECT op_prest_qreel FROM operation_prestations OP1 WHERE OP1.op_prest_id = FP.op_prest_id), 0) AS \'Quantite reelle\',
                COALESCE( REPLACE(CAST((SELECT op_prest_mreel FROM operation_prestations OP1 WHERE OP1.op_prest_id = FP.op_prest_id) AS CHAR(100)), \'.\', \',\'), 0) AS \'Montant reel\',
                COALESCE(CONVERT(SUM(FP.fact_prest_quantite_facture_final), SIGNED INTEGER ), 0) AS \'Quantite facturee\',
                COALESCE(REPLACE(CAST(SUM(FP.fact_prest_montant_facture_final) AS CHAR(100)), \'.\', \',\'), 0) AS \'Montant facture\',
                 \'1\' AS \'Facture\',
                OP.op_prime_numero AS \'Code Prime\',
                OP.op_prime_libelle AS \'Libellé Prime\'
            FROM factures F
            LEFT JOIN factures_rubriques FRB ON FRB.fact_id = F.fact_id
            LEFT JOIN factures_prestations FP ON FP.fact_rub_id = FRB.fact_rub_id
            LEFT JOIN operation_prestations P ON P.op_prest_id = FP.op_prest_id
            LEFT JOIN operation_rubriques OPR ON P.op_prest_rubri_id = OPR.op_rubrique_id
            LEFT JOIN r_prestations RP ON RP.r_prestation_id = P.op_r_prest_id
            LEFT JOIN r_facture_statuts RFS ON RFS.r_fact_stat_id = F.fact_status_id
            LEFT JOIN operations O ON O.op_id = F.op_id
            LEFT JOIN plan_facturation_params PFP on PFP.op_id = O.op_id
            LEFT JOIN r_plan_fact_periodes RPFP on PFP.plan_fact_periode_id = RPFP.r_plan_fact_periode_id
            LEFT JOIN clients C ON C.cl_id = O.op_cl_id
            LEFT JOIN r_operation_type OT ON OT.ot_id = O.op_type_id
            LEFT JOIN r_operation_status OS ON OS.os_id = O.op_status_id
            LEFT JOIN operation_primes OP ON P.op_prest_prime_id = OP.op_prime_id
            WHERE
            FP.r_prestation_id IS NOT NULL
            AND F.fact_reference not like \'AF%\'
            AND F.fact_status_id in (3, 4, 5)
            AND ' . $sDateCriteria . '
            AND O.op_number NOT IN (40555, 1, 211, 311, 40106, 40101, 42495, 46629 )                                             
            GROUP BY C.cl_libelle, O.op_number, OT.ot_libelle, OS.os_libelle, OPR.op_rubrique_libelle,RPFP.r_plan_fact_periode_libelle, FP.r_prestation_id,  P.op_prest_libelle_devis, RP.r_p_libelle, RP.r_p_libelle_en, P.op_prest_code_comptable, P.op_prest_off, P.op_prest_npr, P.op_prest_npa, O.op_stamp_start, O.op_dateConso_start, O.op_dateConso_end, O.op_datePoste_end, O.op_stamp_end, FP.op_prest_id
            ORDER BY Client,`Numero Operation`
         ');
        $oStatement->execute();
        return $oStatement;
    }

    /**
     * @param string $sWhereCondition
     */
    public function getCostsValidationExportData(string $sWhereCondition = '')
    {
        $oConnection = Propel::getConnection();
        $oConnection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $oStatement = $oConnection->prepare('
            SELECT
                `View_Validation_Couts`.`r_prestation_id` AS `id prestation`,
                `View_Validation_Couts`.`op_number` AS `num op`,
                `View_Validation_Couts`.`cl_libelle` AS `client`,
                `View_Validation_Couts`.`op_id`,
                `View_Validation_Couts`.`nb_factures_en_attente`,
                FORMAT(`View_Validation_Couts`.`op_prest_ciestim`, 2 , \'FR_fr\') AS `coût interne estimé`,
                FORMAT(`View_Validation_Couts`.`op_prest_ceestim`, 2 , \'FR_fr\') AS `coût externe estimé`,
                FORMAT(`View_Validation_Couts`.`op_prest_cireel`, 2 , \'FR_fr\') AS `coût interne réalisé`,
                FORMAT(`View_Validation_Couts`.`op_prest_cereel`, 2 , \'FR_fr\') AS `coût externe réalisé`,
                FORMAT(`View_Validation_Couts`.`ecart`, 2 , \'FR_fr\') AS `ecart`,
                `View_Validation_Couts`.`r_p_type_validation_libelle` AS `type de validation`,
                `View_Validation_Couts`.`op_prest_id`,
                `View_Validation_Couts`.`op_libelle` AS `opération`,
                `View_Validation_Couts`.`op_prest_libelle_devis`,
                `View_Validation_Couts`.`r_p_libelle` AS `prestation`,
                FORMAT(`View_Validation_Couts`.`op_prest_pv`, 2 , \'FR_fr\') AS `prix de vente`,
                DATE_FORMAT(`View_Validation_Couts`.cost_validation_date, \'%d/%m/%Y\') AS `Dernière modification`,
                `View_Validation_Couts`.`op_prest_couts_valides` AS `coût finalisé`,
                CONCAT(COALESCE(users.user_nom,\'\'), \'  \', COALESCE(users.user_prenom,\'\')) AS `Utilisateur`,
                FORMAT(`View_Validation_Couts`.`quantite_estimee`, 2 , \'FR_fr\') AS `quantité estimée`,
                FORMAT(`View_Validation_Couts`.`quantite_realisee`, 2 , \'FR_fr\') AS `quantité réalisée`,
                FORMAT(`View_Validation_Couts`.`quantite_facturee`, 2 , \'FR_fr\') AS `quantité facturée`,
                OP.op_prime_numero AS \'Code Prime\',
                OP.op_prime_libelle AS \'Libellé Prime\',
                P.op_prest_off  AS \'Offerte\',
                P.op_prest_npr AS \'Ne Pas Realiser\',
                P.op_prest_npa AS \'N\'\'apparait pas\',
                DATE_FORMAT(`View_Validation_Couts`.op_dateConso_start, \'%d/%m/%Y\') AS \'Date Debut Conso\',
                DATE_FORMAT(`View_Validation_Couts`.op_stamp_start, \'%d/%m/%Y\') AS \'Date Debut Gestion\',
                DATE_FORMAT(`View_Validation_Couts`.op_stamp_end, \'%d/%m/%Y\') AS \'Date Fin Gestion\'
            FROM `View_Validation_Couts`
            LEFT JOIN `users` ON users.user_id = View_Validation_Couts.cost_updater_user
            LEFT JOIN operation_prestations P ON P.op_prest_id = View_Validation_Couts.op_prest_id
            LEFT JOIN operation_primes OP ON P.op_prest_prime_id = OP.op_prime_id
            ' . ($sWhereCondition ? 'WHERE ' . str_replace('op_prest_couts_valides', '`View_Validation_Couts`.`op_prest_couts_valides`', $sWhereCondition) : '') . '
            ORDER BY `nb_factures_en_attente` DESC,
                 `deadline_facture_fr` ASC,
                 `r_p_libelle` ASC
         ');
        $oStatement->execute();
        return $oStatement;
    }

    /**
     * @return PDOStatement
     */
    public function getInvoicesIdWithoutFileIterator(array $aInvoicesReferences = array()) : PDOStatement
    {
        $oStatement = Propel::getConnection()->prepare('
            SELECT fact_id
            FROM factures
            LEFT JOIN files ON factures.fact_id = files.file_entity_id
                AND files.file_entity_name = "' . Factures::FILE_ENTITY_NAME . '"
                AND files.file_category_id = ' . RFileCategories::FACTURE . '
            WHERE file_id IS NULL
            ' . ($aInvoicesReferences ? ' AND factures.fact_reference IN("' . join('","', $aInvoicesReferences) . '")' : ''));
            
        $oStatement->execute();
        return $oStatement;
    }
}
