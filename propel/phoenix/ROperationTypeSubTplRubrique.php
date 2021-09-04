<?php

/**
 * Skeleton subclass for representing a row from the 'r_operation_type_sub_tpl_rubrique' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class ROperationTypeSubTplRubrique extends BaseROperationTypeSubTplRubrique
{

    /**
     * maj du rang de la rubrique
     * @param type $newNumero
     */
    public function updatePosition($newNumero)
    {

        $this->getConnection()->beginTransaction();
        try {
            $oldNumero = $this->getOstTplRubriqueOrder();
            $this->setOstTplRubriqueOrder(0);
            $this->save();

            $con = $this->getConnection();

            if ($oldNumero > $newNumero) {
                $sql = "update r_operation_type_sub_tpl_rubrique
				set ost_tpl_rubrique_order=ost_tpl_rubrique_order+1
				where ost_tpl_rubrique_order between '" . $newNumero . "' and '" . $oldNumero . "'
					and ost_tpl_id='" . $this->getOstTplId() . "'";
                $con->exec($sql);
            }
            if ($oldNumero < $newNumero) {
                $sql = "update r_operation_type_sub_tpl_rubrique
				set ost_tpl_rubrique_order=ost_tpl_rubrique_order-1
				where ost_tpl_rubrique_order between '" . $oldNumero . "' and '" . $newNumero . "'
					and ost_tpl_id='" . $this->getOstTplId() . "'";
                $con->exec($sql);
            }

            $this->setOstTplRubriqueOrder($newNumero);
            $this->save();
            $this->getConnection()->commit();
            return true;
        } catch (Exception $e) {
            $this->addValidationFailed($e->getMessage());
            $this->getConnection()->rollBack();
            return false;
        }
    }

    function delete(\PropelPDO $con = null)
    {
        
        $this->getConnection()->beginTransaction();
        try {
            // 32655 : Ajustement de l'ordre de supression des données pour
            // Supprimer les données de la table fille en premier avant
            // La supression de la rubriques
            ROperationTypeSubTplPrestationQuery::create()->filterByOstTplRubriqueId($this->getOstTplRubriqueId())->delete();
            
            parent::delete($con);
            //dépilage des rubriques
            $con = $this->getConnection();
            $sql = "update r_operation_type_sub_tpl_rubrique
				set ost_tpl_rubrique_order=ost_tpl_rubrique_order-1
				where ost_tpl_rubrique_order > '" . $this->getOstTplRubriqueOrder() . "'
					AND ost_tpl_id='" . $this->getOstTplId() . "'";

            $con->exec($sql);
            $this->getConnection()->commit();
        } catch (Exception $e) {
            $this->getConnection()->rollBack();
            throw $e;
        }
    }

    function preSave(\PropelPDO $con = null)
    {
        //incrementation ordre
        if ($this->isNew()) {
            $count = ROperationTypeSubTplRubriqueQuery::create()->filterByOstTplId($this->getOstTplId())->count();
            $this->setOstTplRubriqueOrder(++$count);
        }
        return parent::preSave($con);
    }

}

// ROperationTypeSubTplRubrique
