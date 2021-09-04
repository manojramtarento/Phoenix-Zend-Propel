<?php

/**
 * Description of Engine
 * Classe pour intégrer des critères de recherche et de tri sur une requête symbolysée par une instance de Zend_Db_Select
 *
 * @author info20
 */
class My_Search_Engine
{

    /**
     * @var Zend_Db_Select
     */
    protected $select;

    /**
     * @var array
     */
    protected $searchData;


    public function __construct(Zend_Db_Select $oSelect)
    {
        $this->select = $oSelect;
    }

    public function setSearchData(array $aData)
    {
        $this->searchData = $aData;
        return $this;
    }

    public function getSearchData($sKey = null, $sDefault = null)
    {
        if ($this->searchData === null) {
            $this->searchData = Zend_Controller_Front::getInstance()->getRequest()->getParams();
        }
        return $sKey === null ? $this->searchData : $this->searchData[$sKey]??$sDefault;
    }

    /**
     * Orders the list according to the received parameters (order, sense)
     */
    public function makeOrderBy()
    {
        $sOrder = $this->getSearchData('order', null);
        $sWay = $this->getSearchData('sense', null);
        if ($sOrder && $sWay) {
            $aOrder = $this->select->getPart(Zend_Db_Select::ORDER);
            $this->select->reset(Zend_Db_Select::ORDER);
            if (! empty($aOrder)) {
                if ($sOrder != $aOrder[0][0]) {
                    $this->select->order($sOrder . ' ' . $sWay)->order($aOrder[0][0] . ' ' . $aOrder[0][1]);
                } else {
                    $this->select->order($aOrder[0][0] . ' ' . $sWay);
                }
            } else {
                $this->select->order($sOrder . ' ' . $sWay);
            }
        }
    }

    /**
     * Defines the fields on which a word is searched
     * @param array $aFind [$fieldname => ['operator'=>(eql|like)] ] : the fields on which the word is searched
     * @param string $sParam name of the search parameter
     */
    public function findWordOn($aFind, $sParam = 'findword')
    {
        $sFind = $this->getSearchData($sParam);
        $sFind = trim($sFind);

        if ($sFind) {
            // Protect quotes manually because we can't call where() at this time
            $sFind = str_replace("'", "''", $sFind);

            $aCriteria = array();
            foreach ($aFind as $sField => $aValue) {
                switch ($aValue['operator']) {
                    case '=':
                    case 'eql':
                        $aCriteria[] = $sField . " = '" . mb_strtoupper($sFind, 'utf8') . "'";
                        $aCriteria[] = $sField . " = '" . mb_strtolower($sFind, 'utf8') . "'";
                        break;
                    case 'like':
                        $aCriteria[] = $sField . " LIKE '%" . mb_strtoupper($sFind, 'utf8') . "%'";
                        $aCriteria[] = $sField . " LIKE '%" . mb_strtolower($sFind, 'utf8') . "%'";
                        break;
                }
            }

            if ($aCriteria) {
                // We build the condition manually because we need to add a condition like : 'AND (X OR Y OR Z)' and not 'X OR Y OR Z'
                $this->select->where(implode(' OR ', $aCriteria));
            }
        }
    }

    /**
     * Recherche par champs en provencance d'un formulaire de recherche
     * Les noms des champs recherchés dans le formulaire doivent être préfixés par find_
     * Nom du champs sur lequel est eefectué la recherche => [
     * 'operator'=>(like,inf,sup,eql,infeql,supeql,null,notnull,in)],
     * 'value' => $valeur,
     * 'field' => $fieldName (doit être préfixé par find)
     * 'clause' => ajoute une clause pour la recherche (pour where)
     * ]
     * @param array $aFind
     * @param boolean $bIsMysqlAdapter
     * @return Zend_Db_Select
     * @throws \InvalidArgumentException
     */
    public function findByFields($aFind, $bIsMysqlAdapter = true)
    {
        if (! is_bool($bIsMysqlAdapter)) {
            throw new \InvalidArgumentException('Parameter "$bIsMysqlAdapter" expects a boolean, "' . gettype($bIsMysqlAdapter) . '" given');
        }

        $aParams = $this->getSearchData();

        foreach ($aFind as $sField => $aRow) {
            unset($aTmpRow);
            if (! isset($aRow[0])) {
                $aTmpRow[0] = $aRow;
            } else {
                $aTmpRow = $aRow;
            }
            $sTmpField = $sField;

            foreach ($aTmpRow as $aValue) {
                // cas spécifique null/notnull
                if (isset($aValue['value']) && $aValue['value'] == "null") {
                    $this->select->where($sField . " is NULL");
                } elseif (isset($aValue['value']) && $aValue['value'] == "notnull") {
                    $this->select->where($sField . " is not NULL");
                } elseif ($aValue['operator'] == "null") {
                    $this->select->where($sField . " is NULL");
                } elseif ($aValue['operator'] == "notnull") {
                    $this->select->where($sField . " is not NULL");
                } else {
                    // Autres cas
                    $sValue = null;
                    if (isset($aValue['value']) && ( is_array($aValue['value']) || strlen(trim($aValue['value'])) > 0 )) {
                        $sValue = $aValue['value'];
                    } elseif (isset($aValue['field']) && ! empty($aParams['find_' . $aValue['field']])) {
                        $sValue = $aParams['find_' . $aValue['field']];
                    } elseif (isset($aParams['find_' . $sField]) && ! is_array($aParams['find_' . $sField]) && strlen(trim($aParams['find_' . $sField])) > 0) {
                        $sValue = $aParams['find_' . $sField];
                    } elseif (isset($aParams['find_' . $sField]) && is_array($aParams['find_' . $sField])) {
                        $sValue = $aParams['find_' . $sField];
                    }

                    //formattage si champs date
                    $aValue['date_format'] = (isset($aValue['date_format']) ? $aValue['date_format'] : false);
                    if ($aValue['date_format'] == true && ! empty($sValue)
                    ) {
                        $sField = ($sField != $sTmpField) ? $sTmpField : $sField;

                        // Factorisation code ticket (35066)
                        $sValue = Phoenix_Data_Convert::FormatDateForSql2($sValue);
                        // 32655 : Migration phoenix/migration des modules
                        $sField = ($bIsMysqlAdapter) ? 'DATE_FORMAT( ' . $sField . ' , \'%Y%m%d\')' : 'CONVERT(nvarchar, ' . $sField . ', 112)';
                    }

                    if (isset($sValue) && isset($aValue['operator'])) {
                        switch ($aValue['operator']) {
                            case 'eql':
                                $this->select->where($sField . " = ?", $sValue);
                                //}
                                break;
                            case 'like':
                                $this->select->where($sField . " like ?", '%' . $sValue . '%');
                                break;
                            case 'inf':
                                $this->select->where($sField . " < ?", $sValue);
                                break;
                            case 'sup':
                                $this->select->where($sField . " > ?", $sValue);
                                break;
                            case 'infeql':
                                $this->select->where($sField . " <= ?", $sValue);
                                break;
                            case 'supeql':
                                $this->select->where($sField . " >= ?", $sValue);
                                break;
                            case 'in':
                                $this->select->where($sField . " in (?)", $sValue);
                                break;
                        }

                        //spécification de la clause supplémentaire
                        if (isset($aValue['clause'])) {
                            $this->select->where($aValue['clause']);
                        }
                    }
                }
            }
        }
        return $this->select;
    }

    /**
     * Adds a WHERE condition to the query by AND.
     *
     * If a value is passed as the second param, it will be quoted
     * and replaced into the condition wherever a question-mark
     * appears. Array values are quoted and comma-separated.
     *
     * <code>
     * // simplest but non-secure
     * $select->where("id = $id");
     *
     * // secure (ID is quoted but matched anyway)
     * $select->where('id = ?', $id);
     *
     * // alternatively, with named binding
     * $select->where('id = :id');
     * </code>
     *
     * Note that it is more correct to use named bindings in your
     * queries for values other than strings. When you use named
     * bindings, don't forget to pass the values when actually
     * making a query:
     *
     * <code>
     * $db->fetchAll($select, array('id' => 5));
     * </code>
     *
     * @param string   $sCond  The WHERE condition.
     * @param mixed    $sValue OPTIONAL The value to quote into the condition.
     * @param int      $iType  OPTIONAL The type of the given value
     * @return Zend_Db_Select This Zend_Db_Select object.
     */
    public function where($sCond, $sValue = null, $iType = null)
    {
        $this->select->where($sCond, $sValue, $iType);
    }

    /**
     *
     * @return Zend_Db_Select
     */
    public function getSelect()
    {
        return $this->select;
    }
}
