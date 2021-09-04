<?php

interface Phoenix_Stats_Service_Transporter_TransporterInterface
{

    /**
     * Transfer file to another sevrer
     * @param string $sSourcePath
     * @param string $sDestinationPath
     * @return \Phoenix_Stats_Service_Transporter_TransporterInterface
     */
    public function transportFile($sSourcePath, $sDestinationPath);
}
