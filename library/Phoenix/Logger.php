<?php


class Phoenix_Logger
{
    /**
     * @var array
     */
    protected static $loggers = array();

    /**
     * @param string $sName : returns or creates a log instance defined by $sName. ex: cron/invoicing
     * @return Phoenix_Log
     */
    public static function getInstance($sName = '')
    {
        if (! isset(self::$loggers[$sName])) {
            self::$loggers[$sName] = new Phoenix_Log($sName, Phoenix_Log::OUTPUT_FILE);
        }
        return self::$loggers[$sName];
    }

    /**
     * CS Error Handler
     * @return \CSErrorHandler
     */
    public static function getInstanceErreur() : \CSErrorHandler
    {
        return \CSErrorHandler::getInstance();
    }

    /**
     * Log for invoice reminders
     * @return Phoenix_Log
     */
    public static function getInstanceCronRelancesFacturation() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('relances');
    }

    /**
     * Log for the invoice generation cron
     * @return Phoenix_Log
     */
    public static function getInstanceCronGenfactures() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('facturation');
    }

    /**
     * Log for the cron for sending stats to the client
     * @return Phoenix_Log
     */
    public static function getInstanceCronSendOperationsStat() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('operationstats');
    }

    /**
     * Log for the data archiving cron
     * @return Phoenix_Log
     */
    public static function getInstanceCronAlertArchivage() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('alertarchivage');
    }

    /**
     * Log for the contract renewal cron
     * @return Phoenix_Log
     */
    public static function getInstanceCronReconductionContrat() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('reconductioncontrat');
    }
    /**
     * Log for operation export cron
     * @return Phoenix_Log
     */
    public static function getInstanceExportOperations() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('exportoperations');
    }

    /**
     * Logger for AD
     * @return Phoenix_Log
     */
    public static function getInstanceAuthentication() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('AD');
    }

    /**
     * Log for the volume compilation cron
     * @return Phoenix_Log
     */
    public static function getInstanceCompilVolumes() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('compilvolumes');
    }

    /**
     * Log for invoice notification
     * @return Phoenix_Log
     */
    public static function getInstanceNotificationFactures() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('notificationfacturesolde');
    }

    /**
     * Logger for flag services to update from UO
     * @return Phoenix_Log
     */
    public static function getInstanceFlagPrestationsToUpdatefromuo() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('flagprestationfromuo');
    }

    /**
     * Logger for Gedelog
     * @return Phoenix_Log
     */
    public static function getInstanceGedelog() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('gedelog');
    }

    /**
     * Log for the Operation Status Recap cron
     * @return Phoenix_Log
     */
    public static function getInstanceOperationStatutRecap() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('operationstatutrecap');
    }

    /**
     * Log for the Operation RecapOperationFirstAcceptedQuotation cron
     * @return Phoenix_Log
     */
    public static function getInstanceRecapOperationFirstAcceptedQuotation() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('recapoperationfirstacceptedquotation');
    }

    /**
     * Log for the reporting cron
     * @return Phoenix_Log
     */
    public static function getInstanceTaskReporting() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('taskreporting');
    }

    /**
     * Log for Operations For Automatic Closure
     * @return Phoenix_Log
     */
    public static function getInstanceOperationsForAutomaticClosure() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('operationsforautomaticclosure');
    }

    /**
     * Log for the user cron
     * @return Phoenix_Log
     */
    public static function getInstanceCronUser() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('user');
    }

    /**
     * Log for the sending an email 1 month before the end date of management
     * @return Phoenix_Log
     */
    public static function getInstanceOperationManagementEndNotification() : Phoenix_Log
    {
        return Phoenix_Logger::getInstance('operationmanagementendnotification');
    }
}
