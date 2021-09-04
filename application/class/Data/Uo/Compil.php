<?php

/**
 * Aggregation of prestations volumes coming from compilUo
 */
class Data_Uo_Compil
{

    /**
     * @var \Phoenix_Log
     */
    public $logger;

    /**
     * Constructor
     *
     * @param \Phoenix_Log $oPhoenixLog
     */
    public function __construct(Phoenix_Log $oPhoenixLog = null)
    {
        if ($oPhoenixLog) {
            $this->setLogger($oPhoenixLog);
        }
    }

    /**
     * Update of the volumes for the prestations according to the data contained in the CompilUO database
     *
     * @param  integer|null $iOperationId
     * @return \Data_Uo_Compil
     * @throws \InvalidArgumentException
     */
    public function process($iOperationId = null)
    {

        if (!is_integer($iOperationId) && $iOperationId !== null) {
            throw new \InvalidArgumentException('Argument "$iOperationId" expects an integer or a null value, "' . (is_object($iOperationId) ? get_class($iOperationId) : gettype($iOperationId)) . '" given');
        }

        // 33369 Action also available for "solde" operation status
        $sSqlQuery = '
            SELECT operation_prestations.op_r_prest_id,operations.op_id, operation_primes.op_prime_numero,op_prest_code_comptable
			FROM operation_prestations
            JOIN operations on operation_prestations.op_id=operations.op_id
			LEFT JOIN operation_primes on operation_primes.op_prime_id=operation_prestations.op_prest_prime_id
			WHERE operations.op_status_id IN (' . Operations::STATUS_ACCEPTE . ', ' . Operations::STATUS_SOLDE . ')
            AND operation_prestations.op_prest_is_maj_from_compiluo=1
        ';

        if ($this->hasLogger()) {
            $oLogger = $this->getLogger();
        } else {
            $oLogger = null;
        }

        if ($iOperationId) {
            $sSqlQuery.= ' AND operations.op_id=:op_id';
            if ($oLogger) {
                $oLogger->log('For operation op_id:' . $iOperationId);
            }
        }

        // Retrieve Phoenix adapter
        $oPhoenixAdapter = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter();
        // Retrieve Compiluo adapter
        $oCompiluoAdapter = Phoenix_Db_Adapters::getInstance()->getCompiluoAdapter();
        if ($oLogger) {
            $oLogger->log('Retrieve prestations' . ($iOperationId ? ' for operation "' . $iOperationId . '"' : ''));
        }
        $oStmt = $oPhoenixAdapter->prepare($sSqlQuery);

        if (isset($iOperationId)) {
            $oStmt->bindValue(':op_id', $iOperationId);
        }
        $oStmt->execute();
        $aVolumeOperationPrimeIds = array();
        $iNumber = 0;
        if ($oLogger) {
            $oLogger->log('Start processing operations prestations');
        }
        $iIterator = 0;
        while (($aPrestation = $oStmt->fetch(PDO::FETCH_ASSOC)) !== false) {
            $iIterator++;
            if ($oLogger && ($iIterator % 1000) === 0) {
                $oLogger->log($iIterator . ' operations prestations processed');
            }
            $sQuery = '
                SELECT presta_id, op_id,filtres as prime, sum(valeur) AS volume, sum(montant) AS montant
                FROM uo
                WHERE actif = 1
                AND presta_id = ' . $aPrestation['op_r_prest_id'] . '
                AND op_id = ' . $aPrestation['op_id'] . '
                AND filtres' . ($aPrestation['op_prime_numero'] === null ? ' IS NULL' : ' = ' . $aPrestation['op_prime_numero']) . '
                GROUP BY presta_id, op_id, filtres
            ';

            $oVolumeStmt = $oCompiluoAdapter->query($sQuery);
            while (($aVolume = $oVolumeStmt->fetch(PDO::FETCH_ASSOC))) {
                $sUpdateSqlQuery = '
                    UPDATE operation_prestations
					SET op_prest_qreel = "' . ceil($aVolume['volume']) . '"
                ';

                if (!empty($aVolume['montant']) && (preg_match('/^467/', $aPrestation['op_prest_code_comptable']) == 1)) {
                    // force le montant dans phoenix si la prestation est un remboursement
                    $sUpdateSqlQuery .= ',op_prest_mreel=' . ($aVolume['montant'] / 100);
                } else {
                    $sUpdateSqlQuery .= ',op_prest_mreel=' . ceil($aVolume['volume']) . ' * op_prest_pv';
                }

                $sUpdateSqlQuery .= ' WHERE op_r_prest_id=' . $aVolume['presta_id'] . ' AND op_id = ' . $aVolume['op_id'];

                if (!empty($aVolume['prime'])) {
                    if (isset($aVolumeOperationPrimeIds[$aVolume['prime']])) {
                        $aOperationPrimeIds = $aVolumeOperationPrimeIds[$aVolume['prime']];
                    } else {
                        $aVolumeOperationPrimeIds[$aVolume['prime']] = $aOperationPrimeIds = array_values($oPhoenixAdapter->query('
                            SELECT DISTINCT(op_prime_id)
                            FROM operation_primes
                            JOIN operation_prestations ON operation_primes.op_prime_id=operation_prestations.op_prest_prime_id
                            WHERE op_prime_numero=\'' . $aVolume['prime'] . '\'
                        ')->fetchAll(PDO::FETCH_COLUMN));
                    }
                    $sUpdateSqlQuery .= ' AND op_prest_prime_id IN (' . implode(' , ', $aOperationPrimeIds) . ')';
                } else {
                    $sUpdateSqlQuery .= ' AND (op_prest_prime_id IS NULL OR op_prest_prime_id=\'\' OR op_prest_prime_id=0)';
                }
                $iNumber += $oPhoenixAdapter->query($sUpdateSqlQuery)->rowCount();
            }
        }

        if ($oLogger) {
            $oLogger->log($iNumber . ' operations prestations updated');
        }
        return $this;
    }

    /**
     * Update of the flag of the prosetations updated via the CompilUO database (reference table + prestations of the operations)
     *
     * @return \Data_Uo_Compil
     */
    public function flagPrestationsToUpdate()
    {
        if ($this->hasLogger()) {
            $oLogger = $this->getLogger();
        } else {
            $oLogger = null;
        }

        if ($oLogger) {
            $oLogger->log('Select prestations in CompilUO');
        }
        $aPrestaId = Phoenix_Db_Adapters::getInstance()->getCompiluoAdapter()->query('SELECT DISTINCT presta_id FROM uo')->fetchAll(PDO::FETCH_COLUMN);

        if ($oLogger) {
            $oLogger->log('Update reference table');
        }
        $oAdapterPhoenix = Phoenix_Db_Adapters::getInstance()->getPhoenixAdapter();
        $iNbUpdated = $oAdapterPhoenix->update('r_prestations', array('r_p_is_maj_from_compiluo' => 1), array('r_prestation_id in (?)' => $aPrestaId));
        if ($oLogger) {
            $oLogger->log($iNbUpdated . ' references updated');
        }

        if ($oLogger) {
            $oLogger->log('Update prestations');
        }
        $oAdapterPhoenix->update('operation_prestations', array('op_prest_is_maj_from_compiluo' => 1), array('op_r_prest_id in (?)' => $aPrestaId));
        return $this;
    }


    /**
     * @return \Phoenix_Log
     * @throws \LogicException
     */
    public function getLogger()
    {
        if ($this->logger instanceof \Phoenix_Log) {
            return $this->logger;
        }
        throw new \LogicException('Property "logger" expects an instance of "\Phoenix_Log", "' . (is_object($this->logger) ? get_class($this->logger) : gettype($this->logger)) . '" defined');
    }

    /**
     * @return boolean
     */
    public function hasLogger()
    {
        return $this->logger instanceof \Phoenix_Log;
    }

    /**
     * @param \Phoenix_Log $oLogger
     * @return \Data_Uo_Compil
     */
    public function setLogger(\Phoenix_Log $oLogger)
    {
        $this->logger = $oLogger;
        return $this;
    }
}
