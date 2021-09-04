<?php

abstract class Phoenix_Stats_Service_Pdf_AbstractEngine implements Phoenix_Stats_Service_Pdf_EngineInterface
{

    /**
     * @var string
     */
    protected $basePath;

    /**
     * @return string
     * @throws \RuntimeException
     * @throws \LogicException
     */
    public function getBasePath()
    {
        if (is_string($this->basePath)) {
            if (is_dir($this->basePath)) {
                return $this->basePath;
            }
            throw new \RuntimeException('Base path ' . $this->basePath . 'does not exist');
        }
        throw new \LogicException('Property "basePath" expects a string, "' . gettype($this->basePath) . '" defined');
    }

    /**
     * @param string $sBasePath
     * @return \CS\ZF2\Core\Pdf\AbstractEngine
     * @throws \InvalidArgumentException
     */
    public function setBasePath($sBasePath)
    {
        if (is_string($sBasePath)) {
            if (is_dir($sBasePath)) {
                $this->basePath = $sBasePath;
                return $this;
            }
            throw new \InvalidArgumentException('Base path "' . $sBasePath . '" does not point to an existing directory');
        }
        throw new \InvalidArgumentException('Argument "$sBasePath" expects an string, "' . gettype($sBasePath) . '" given');
    }

    /**
     * @param string $sContent
     * @return string
     * @throws \InvalidArgumentException
     */
    public function urlRewrite($sContent)
    {
        if (is_string($sContent)) {
            $sBasePath = $this->getBasePath();
            return preg_replace_callback(
                '/url\(([^\)]+)\)/',
                function ($aMatches) use ($sBasePath) {
                        return $sBasePath . '/' . $aMatches[1];
                },
                $sContent
            );
        }throw new \InvalidArgumentException('Argument "$sContent" expects an string, "' . gettype($sContent) . '" given');
    }
}
