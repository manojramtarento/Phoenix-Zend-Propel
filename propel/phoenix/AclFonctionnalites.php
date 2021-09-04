<?php

/**
 * Skeleton subclass for representing a row from the 'acl_fonctionnalites' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class AclFonctionnalites extends BaseAclFonctionnalites
{

    // Fonctionalities for cost validation
    const COUTS_SANS_RESTRICTIONS = 89;
    const VALIDATION_COUTS_OP_CLOTURE = 113;
    const VALIDATION_COUTS_OP_SOLDE = 212;

    // Fonctionalities for reporting module
    const REPORTING_PILOTAGE_INDICATEUR_CA = 115;
    const REPORTING_PILOTAGE_INDICATEUR_1_1 = 200;
    const REPORTING_PILOTAGE_INDICATEUR_17 = 201;

    // Fonctionalities for client module
    const CLIENT_STATISTICS = 242;
    const INVOICE_FUND_RAISING_REF = 269;

    // Fonctionalities for operation / invoicing module
    const REQUEST_FOR_FUNDS = 243;
    const STATUS_OF_THE_COSTS = 244;
    const INVOICE_DISPLAY_OPERATION_DATA = 332;
    const INVOICE_DISPLAY_CLIENT_CONTACT_DATA = 333;

    // Fonctionalities for operation / description module
    const PROCESSING_MAIL_DELAY = 245;
    const PRODUCTION_LOGISTICS_BRIEFING = 246;
    const END_POSTE_DATE = 266;
    const END_ARCHIVING_DATE = 267;
    const CONSUMERING_DATES = 287;
    const END_DATE = 331;
    const PROJECT_MANAGER = 268;
    const MANAGER_MANDATORY = 284;
    const PROJECT_TYPE_MANDATORY = 285;
    const CLASSIFICATION_MANDATORY = 334;
    const CHANGE_OPERATION_STATUS_TO_CLOSED = 335;

    /**
     * Deletes the current AcLFonctionnalites from acl_fonctionalites and lnk_acl_groups_fonctionnalites
     *
     * @param \PropelPDO $con
     */
    public function delete(\PropelPDO $oConnection = null)
    {
        parent::delete($oConnection);

        LnkAclGroupsFonctionnalitesQuery::create()->filterByLnkAclGroupsFonctionnaliteFoncId($this->getFoncId())->delete();
    }
}
