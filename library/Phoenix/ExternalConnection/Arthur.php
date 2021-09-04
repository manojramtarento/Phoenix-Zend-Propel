<?php

class Phoenix_ExternalConnection_Arthur
{

    /**
     * @var Phoenix_ExternalConnection_Arthur
     */
    protected static $instance = null;


    /**
     * @return Phoenix_ExternalConnection_Arthur
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Retrieve the used & required funds raising for given operation ids
     * @param array $aOperationIds
     * @return array
     */
    public function getUsedAndRequiredFundsRaisingByOperationIds(array $aOperationIds) : array
    {
        $aOperationIds = array_map(function ($iValue) {
            return (int) $iValue;
        }, $aOperationIds);
        $oStatement = $this->getArthurParamAdapter()->prepare($sQuery = '
            SELECT op_id, SUM(Utilise) AS ADF_Utilise, SUM(Requis) AS op_required_funds
            FROM vue_phoenix_documents_global
            WHERE op_id IN (' . implode(',', $aOperationIds) . ')
            GROUP BY op_id
        ');
        $oStatement->execute();

        $aReturn = array_combine($aOperationIds, array_fill(0, count($aOperationIds), array('ADF_Utilise' => 0.0, 'op_required_funds' => 0.0)));

        while ($aData = $oStatement->fetch()) {
            $aReturn[(int) $aData['op_id']] = array(
                'ADF_Utilise' => (float) $aData['ADF_Utilise'],
                'op_required_funds' => (float) $aData['op_required_funds'],
            );
        }
        return $aReturn;
    }

    /**
     * Retrieve the value of the used fund raising amount from Arthur
     * @param string $sOperationId
     * @return float
     */
    public function getUsedFundRaisingByOperationId(string $sOperationId) : float
    {
        $aData = $this->getUsedAndRequiredFundsRaisingByOperationIds(array($sOperationId));
        return (float) ($aData[$sOperationId]['ADF_Utilise'] ?? 0);
    }

    /**
     * Retrieve the sum of required funds for given operation ids
     * @param array $aOperationIds
     * @return float
     */
    public function getRequiredFundsByOperationIds(array $aOperationIds)
    {
        $oZendDbSelect = new Zend_Db_Select($this->getArthurParamAdapter());
        $aRequiredFunds = $oZendDbSelect
            ->from('vue_phoenix_documents_global', array('sum' => '(sum(Requis))'))
            ->where('op_id IN (?)', $aOperationIds)
            ->query()
            ->fetchAll();
        return (float) $aRequiredFunds[0]['sum'];
    }

    /**
     * Retrieve a search engine based on operation documents
     * @param string $sOperationId
     * @return My_Search_Engine
     */
    public function getDocumentsSearchEngineByOperationId($sOperationId)
    {
        // Récupération des documents de l'opération
        $oSelect = $this->getArthurParamAdapter()->select()->from('vue_phoenix_documents_global')
            ->where('op_id = ?', $sOperationId)
            ->order('finalite_order')
            ->order('param_order');

        return new My_Search_Engine($oSelect);
    }

    /**
     * Retrieve Document data for a given operation Id and Param Id
     * @param string $sOperationId
     * @param string $sParamId
     * @return array
     */
    public function getDocumentDataByOperationIdAndParamId($sOperationId, $sParamId)
    {
        return $this->getArthurParamAdapter()
            ->select()
            ->from('vue_phoenix_documents_global')
            ->where('op_id = ?', $sOperationId)
            ->where('op_param_id = ?', $sParamId)
            ->query()->fetch();
    }

    /**
     * @param string $sOperationId
     * @return int
     */
    public function getNbPendingEditingDocumentsByOperationId(string $sOperationId)
    {
        $oZendDbSelect = new Zend_Db_Select($this->getArthurConsosAdapter());
        return (int) $oZendDbSelect
            ->from('vue_phoenix_documents_details_consos', array('count' => '(count(*))'))
            ->where('op_id = ?', $sOperationId)
            ->where('is_edited = 0')
            ->query()
            ->fetchColumn();
    }

    /**
     * @param string $sOperationId
     * @return int
     */
    public function getMailsBulksByOperationId($sOperationId)
    {
        return (int) $this->getArthurParamAdapter()->fetchOne('SELECT sum(recu) FROM vue_phoenix_lot_courrier WHERE lc_op_id = ?', $sOperationId);
    }

    /**
     * @param array $aSearch
     * @param array $aCriteria
     * @return My_Search_Engine
     */
    public function getDocumentsDetailsSearchEngine(array $aSearch, array $aCriteria = null)
    {
        $oMySearchEngine = new My_Search_Engine($this->getArthurConsosAdapter()->select()->from('vue_phoenix_documents_details_consos'));

        if ($aCriteria !== null) {
            $oMySearchEngine->setSearchData($aCriteria);
        }

        $oMySearchEngine->findWordOn(array('numDemande' => array('operator' => 'eql'), ));
        $oMySearchEngine->findByFields($aSearch, false);
        $oMySearchEngine->makeOrderBy();
        return $oMySearchEngine;
    }

    /**
     * @param string $sExportedFileName
     * @param My_Search_Engine $oMySearchEngine
     * @return Phoenix_ExternalConnection_Arthur
     */
    public function exportMultipleDocuments(string $sExportedFileName, My_Search_Engine $oMySearchEngine)
    {
        $oSelect = $oMySearchEngine->getSelect()->reset(Zend_Db_Select::COLUMNS)->columns(array(
            'op_num' => 'op_num',
            'numDemande' => 'numDemande',
            'demandes_id' => 'demandes_id',
            'doc_id' => 'doc_id',
            'op_param_id' => 'op_param_id',
            'Statut' => new Zend_Db_Expr('CASE WHEN is_back = 1 THEN \'Retourné\'
               WHEN is_edited = 1 AND is_sent = 1 THEN \'Expédié\'
               WHEN is_edited = 1 THEN \'Edité\'
               ELSE \'Non edite\'
           END'),
            'recu' => 'recu_fr',
            'integre' => 'integre_fr',
            'edite' => 'edite_fr',
            'expedie' => 'expedie_fr',
            'retourne' => 'retourne_fr',
            'montant_a_rembourser' => 'montant_a_rembourser',
            'montant_local' => 'montant_local',
            'devise' => 'devise',
            'timbre' => 'timbre',
            'Reg' => 'Reg',
            'Fact' => 'Fact',
            'primes' => 'primes',
            'libelle_anomalie_1' => 'libelle_anomalie_1',
            'libelle_anomalie_2' => 'libelle_anomalie_2',
            'libelle_anomalie_3' => 'libelle_anomalie_3',
            'montant_frais_envois' => 'montant_frais_envois',
            'nom du document' => 'document_libelle',
        ))->reset(Zend_Db_Select::ORDER)->order('numDemande')->order('op_param_id')->order('doc_create');
        $oResult = $oSelect->query();

        $sFilename = My_Env::getInstance()->getConfig()->path->tmp . DIRECTORY_SEPARATOR . $sExportedFileName;

        // Numbers the documents within each "numDemande" in chronological order (Ticket : 47119)
        $iDocOrder = 0;
        $sLastNumDemande = '';
        $sLastOpParamId = '';

        $aExportDocuments = array();
        $rFileHandle = fopen($sFilename, 'w');
        $bHasWriteHeader = false;
        while ($aExportDocument = $oResult->fetch()) {
            set_time_limit(120);
            if ($aExportDocument['numDemande'] === $sLastNumDemande && $aExportDocument['op_param_id'] === $sLastOpParamId) {
                ++$iDocOrder;
            } else {
                $iDocOrder = 1;
            }
            if (! empty($aExportDocument['montant_a_rembourser'])) {
                $aExportDocument['montant_a_rembourser'] = str_replace('.', ',', $aExportDocument['montant_a_rembourser']);
            }
            if (! empty($aExportDocument['montant_frais_envois'])) {
                $aExportDocument['montant_frais_envois'] = str_replace('.', ',', $aExportDocument['montant_frais_envois']);
            }
            if (! empty($aExportDocument['montant_local'])) {
                $aExportDocument['montant_local'] = str_replace('.', ',', $aExportDocument['montant_local']);
            }
            $aExportDocument['order document'] = $iDocOrder;

            if (! $bHasWriteHeader) {
                // Write header if neaded
                fwrite($rFileHandle, chr(239) . chr(187) . chr(191));
                fputcsv($rFileHandle, array_keys($aExportDocument), ';');
                $bHasWriteHeader = true;
            }
            fputcsv($rFileHandle, array_map(function ($sValue) {
                return $sValue instanceof \DateTime ? $sValue->format('d/m/Y H:i:s') : $sValue;
            }, $aExportDocument), ';');

            $sLastNumDemande = $aExportDocument['numDemande'];
            $sLastOpParamId = $aExportDocument['op_param_id'];
        }
        fclose($rFileHandle);
        My_File_Transfer::getInstance()->send($sFilename);
        return $this;
    }

    /**
     * Check if reward exists by given operation id and reward code
     *
     * @param int $iOperationId
     * @param string $sRewardCode
     * @return bool
     */
    public function rewardDataExists(int $iOperationId, string $sRewardCode) : bool
    {
        $oZendDbSelect = new Zend_Db_Select($this->getArthurParamAdapter());
        return ! ! current($oZendDbSelect
            ->from('primes', array('count' => '(count(*))'))
            ->where('op_id = ?', $iOperationId)
            ->where('prime_code = ?', $sRewardCode)
            ->query()
            ->fetch());
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     */
    public function getArthurParamAdapter()
    {
        return Phoenix_Db_Adapters::getInstance()->getArthurParam();
    }

    /**
     * @return Zend_Db_Adapter_Abstract
     */
    public function getArthurConsosAdapter()
    {
        return Phoenix_Db_Adapters::getInstance()->getArthurConsos();
    }
}
