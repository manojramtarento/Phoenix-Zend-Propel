<?php

/**
 * Skeleton subclass for representing a row from the 'r_p_axe2' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class RPAxe2 extends BaseRPAxe2
{

    /**
     *
     * @param PropelPDO $con
     */
    public function delete(PropelPDO $con = null)
    {

        if (RPrestationsQuery::create()->filterByRPAxe2($this->getRPAxe2Id())->count()) {
            $this->addValidationFailed('L\'axe ne peut pas être supprimé, par ce qu\'il est lié à une ou plusieurs préstations du référentiel');
            return false;
        } else {
            parent::delete($con);
            return true;
        }
    }
}

// RPAxe2
