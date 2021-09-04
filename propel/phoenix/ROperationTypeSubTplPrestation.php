<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_type_sub_tpl_prestation' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeSubTplPrestation extends BaseROperationTypeSubTplPrestation
{

    /**
     * Update position of rubric presration
     *
     * @param  integer $iNewOrder
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function updatePosition($iNewOrder)
    {
        if (!is_int($iNewOrder)) {
            throw new \InvalidArgumentException('Argument "$iNewOrder" expects an integer, "' . (is_object($iNewOrder) ? get_class($iNewOrder) : gettype($iNewOrder)) . '" given');
        }
        $iOldOrder = $this->getOstTplPrestationOrder();

        if ($iOldOrder !== $iNewOrder) {
            $oConnection = $this->getConnection();
            $oConnection->beginTransaction();
            try {
                $this->setOstTplPrestationOrder(-1);
                $this->save();

                if ($iOldOrder < $iNewOrder) {
                    $sOperator = '-';
                    $sConditionBetween = $iOldOrder . ' AND ' . $iNewOrder;
                    $sOrder = 'ASC';
                } else {
                    $sOperator = '+';
                    $sConditionBetween = $iNewOrder . ' AND ' . $iOldOrder;
                    $sOrder = 'DESC';
                }

                $sQuery = 'UPDATE r_operation_type_sub_tpl_prestation
                        SET ost_tpl_prestation_order =  ost_tpl_prestation_order ' . $sOperator . ' 1
                     WHERE ost_tpl_prestation_order BETWEEN ' . $sConditionBetween . ' AND ost_tpl_rubrique_id = ' . $this->getOstTplRubriqueId() . ' ORDER BY ost_tpl_prestation_order ' . $sOrder;
                $oConnection->exec($sQuery);

                $this->setOstTplPrestationOrder($iNewOrder);
                $this->save();

                $oConnection->commit();
            } catch (\Exception $oException) {
                $oConnection->rollBack();
                $this->addValidationFailed($oException->getMessage());
                \CSErrorHandler::getInstance()->handleException($oException);
                return false;
            }
        }
        return true;
    }

    function delete(\PropelPDO $con = null)
    {
        parent::delete($con);

        // dépilage des préstations
        $con = $this->getConnection();
        $sql = "update r_operation_type_sub_tpl_prestation
				set ost_tpl_prestation_order=ost_tpl_prestation_order-1
				where ost_tpl_prestation_order > '" . $this->getOstTplPrestationOrder() . "'
					AND ost_tpl_rubrique_id='" . $this->getOstTplRubriqueId() . "'";

        $con->exec($sql);
    }

    function preSave(\PropelPDO $con = null)
    {
        // incrementation ordre
        if ($this->isNew()) {
            $iMax = ROperationTypeSubTplPrestationQuery::create()->select('OstTplPrestationOrder')
                    ->filterByOstTplRubriqueId($this->getOstTplRubriqueId())
                    ->filterByOstTplId($this->getOstTplId())->orderByOstTplPrestationOrder(Criteria::DESC)
                    ->findOne();

            $this->setOstTplPrestationOrder(++$iMax);
        }
        return parent::preSave($con);
    }
}
