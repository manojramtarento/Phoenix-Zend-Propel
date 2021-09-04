<?php

class ClientContratOptions extends BaseClientContratOptions
{

    public function hasDataArchivage()
    {
        return ! empty($this->cl_ct_archivage_duree) && ! empty($this->cl_ct_archivage_unit);
    }

    private function _processArchivageData()
    {
        foreach (OperationsQuery::create()->filterByOpClId($this->getClId())->filterByOpStatusId(Operations::STATUS_EN_COURS)->find() as $operation) {
            $operation->addPrestationArhivage();
        }
    }

    public function save(\PropelPDO $oConnection = null)
    {
        $aModifiedColumns = $this->getModifiedColumns();
        parent::save($oConnection);

        foreach ($aModifiedColumns as $modifiedColumns) {
            switch ($modifiedColumns) {
                case 'client_contrat_options.cl_ct_archivage_duree':
                case 'client_contrat_options.cl_ct_archivage_unit':
                    $this->_processArchivageData();
            }
        }
    }

}
