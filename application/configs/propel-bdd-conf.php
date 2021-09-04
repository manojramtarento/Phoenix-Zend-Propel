<?php

// Retrieve db params from config
$oDatabaseParams = My_Env::getInstance()->getConfig()->resources->db->params;
return array(
    'datasources' => array(
        'phoenix' => array(
            'adapter' => $oDatabaseParams->pdoType,
            'connection' => array(
                'dsn' => 'mysql:host=' . $oDatabaseParams->host . ';dbname=' . $oDatabaseParams->dbname,
                'user' => $oDatabaseParams->username,
                'password' => $oDatabaseParams->password,

                'settings' => array(
                    'charset' => array('value' => $oDatabaseParams->charset),
                ),
            ),
        ),
        'default' => 'phoenix',
    ),
    'generator_version' => '1.7.1',
);
