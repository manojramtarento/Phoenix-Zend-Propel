<?php

/**
 * Description of KpiFetcherInterface
 *
 * @author NABIL NIZAR
 */
interface Phoenix_Kpi_Fetcher_FetcherInterface
{

    /**
     * @param array $aConfig
     * @param array $aFilter
     * @return array
     * @throws \InvalidArgumentException
     */
    public function retrieveData(array $aConfig, array $aFilter);
}
