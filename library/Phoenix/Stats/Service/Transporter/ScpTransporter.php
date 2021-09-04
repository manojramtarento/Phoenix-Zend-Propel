<?php

/**
 * This class handles file transfert process from local server to remote server
 * @author BIYA Reda <mbiya@neo-data.ma>
 */
class Phoenix_Stats_Service_Transporter_ScpTransporter implements Phoenix_Stats_Service_Transporter_TransporterInterface
{

    /**
     * @var \phpseclib\Net\SCP
     */
    protected $netScp;

    /**
     * @var string
     */
    protected $serverHostName;

    /**
     * @var string
     */
    protected $serverLogin;

    /**
     * @var string
     */
    protected $privateKeyFilePath;

    /**
     * @var \phpseclib\Crypt\RSA
     */
    protected $cryptRsa;

    /**
     * @return \phpseclib\Crypt\RSA
     * @throws \RuntimeException
     * @throws \LogicException
     */
    public function getCryptRsa()
    {
        // Lazy load Crypt_RSA if undefined
        if ($this->cryptRsa === null) {
            $this->cryptRsa = new \phpseclib\Crypt\RSA();

            $sPrivateKeyFilePath = $this->getPrivateKeyFilePath();

            if (!file_exists($sPrivateKeyFilePath)) {
                throw new \RuntimeException('Private key file "' . $sPrivateKeyFilePath . '" does not exist');
            }
            if (!is_readable($sPrivateKeyFilePath)) {
                throw new \RuntimeException('Private key file "' . $sPrivateKeyFilePath . '" is not readable');
            }
            if (!$this->cryptRsa->loadKey(file_get_contents($sPrivateKeyFilePath, \phpseclib\Crypt\RSA::PUBLIC_FORMAT_OPENSSH))) {
                throw new \RuntimeException('Unable to load private key "' . $sPrivateKeyFilePath . '"');
            }
        }
        if ($this->cryptRsa instanceof \phpseclib\Crypt\RSA) {
            return $this->cryptRsa;
        }
        throw new \LogicException('Property "cryptRsa" expects an instance of "\phpseclib\Crypt\RSA", "' . (is_object($this->cryptRsa) ? get_class($this->cryptRsa) : gettype($this->cryptRsa)) . '" defined');
    }

    /**
     * @param \phpseclib\Crypt\RSA $oCryptRsa
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     */
    public function setCryptRsa(\phpseclib\Crypt\RSA $oCryptRsa)
    {
        $this->cryptRsa = $oCryptRsa;
        return $this;
    }

    /**
     * @return \phpseclib\Net\SCP
     * @throws \LogicException
     */
    public function getNetScp()
    {
        // Lazy load Net_SCP if undefined
        if ($this->netScp === null) {
            $sServerLogin = $this->getServerLogin();
            $sServerHostName = $this->getServerHostName();
            $oSsh = new \phpseclib\Net\SSH2($sServerHostName);

            // Connection SSH
            if (!$oSsh->login($sServerLogin, $this->getCryptRsa())) {
                $aErrors = $oSsh->getErrors();
                throw new \RuntimeException('Unable to login to "' . $sServerLogin . '@' . $sServerHostName . '" through SSH : ' . ($aErrors ? join(' ; ', $aErrors) : 'unknown error'));
            }
            $this->netScp = new \phpseclib\Net\SCP($oSsh);
        }

        if ($this->netScp instanceof \phpseclib\Net\SCP) {
            return $this->netScp;
        }
        throw new \LogicException('Property "netScp" expects an instance of "\phpseclib\Net\SCP", "' . (is_object($this->netScp) ? get_class($this->netScp) : gettype($this->netScp)) . '" defined');
    }

    /**
     * @param \phpseclib\Net\SCP $oNetScp
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     */
    public function setNetScp(\phpseclib\Net\SCP $oNetScp)
    {
        $this->netScp = $oNetScp;
        return $this;
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getServerHostName()
    {
        if (is_string($this->serverHostName)) {
            return $this->serverHostName;
        }
        throw new \LogicException('Property "serverHostName" expects a string, "' . gettype($this->serverHostName) . '" defined');
    }

    /**
     * @param string $sServerHostName
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     * @throws \InvalidArgumentException
     */
    public function setServerHostName($sServerHostName)
    {
        if (is_string($sServerHostName)) {
            $this->serverHostName = $sServerHostName;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sServerHostName" expects an string, "' . gettype($sServerHostName) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getPrivateKeyFilePath()
    {
        if (is_string($this->privateKeyFilePath)) {
            return $this->privateKeyFilePath;
        }
        throw new \LogicException('Property "privateKeyFilePath" expects a string, "' . gettype($this->privateKeyFilePath) . '" defined');
    }

    /**
     * @param string $sPrivateKeyFilePath
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     * @throws \InvalidArgumentException
     */
    public function setPrivateKeyFilePath($sPrivateKeyFilePath)
    {
        if (is_string($sPrivateKeyFilePath)) {
            $this->privateKeyFilePath = $sPrivateKeyFilePath;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sPrivateKeyFilePath" expects an string, "' . gettype($sPrivateKeyFilePath) . '" given');
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getServerLogin()
    {
        if (is_string($this->serverLogin)) {
            return $this->serverLogin;
        }
        throw new \LogicException('Property "serverLogin" expects a string, "' . gettype($this->serverLogin) . '" defined');
    }

    /**
     * @param string $sServerLogin
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     * @throws \InvalidArgumentException
     */
    public function setServerLogin($sServerLogin)
    {
        if (is_string($sServerLogin)) {
            $this->serverLogin = $sServerLogin;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "$sServerLogin" expects an string, "' . gettype($sServerLogin) . '" given');
    }

    /**
     * Transport file to destination in another sevrer
     * @param string $sSourcePath
     * @param string $sDestinationPath
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function transportFile($sSourcePath, $sDestinationPath)
    {
        if (!is_string($sSourcePath)) {
            throw new \InvalidArgumentException('Argument "$sSourcePath" expects an string, "' . gettype($sSourcePath) . '" given');
        }
        if (!is_string($sDestinationPath)) {
            throw new \InvalidArgumentException('Argument "$sDestinationPath" expects an string, "' . gettype($sDestinationPath) . '" given');
        }
        if (!file_exists($sSourcePath)) {
            throw new \RuntimeException('Source locale file "' . $sSourcePath . '" does not exist');
        }
        if (!is_readable($sSourcePath)) {
            throw new \RuntimeException('Source locale file "' . $sSourcePath . '" is not readable');
        }

        // Copy file to destination through SCP
        if (!$this->getNetScp()->put($sDestinationPath, $sSourcePath, \phpseclib\Net\SCP::SOURCE_LOCAL_FILE)) {
            throw new \RuntimeException('An error occured while transfering file "' . $sSourcePath . '" to destination "' . $sDestinationPath . '"');
        }
        return $this;
    }

    /**
     * @param string $sRemoteDriectory
     * @return \Phoenix_Stats_Service_Transporter_ScpTransporter
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function createDirIfNotExist($sRemoteDriectory)
    {
        if (!is_string($sRemoteDriectory)) {
            throw new \InvalidArgumentException('Argument "$sRemoteDriectory" expects an string, "' . gettype($sRemoteDriectory) . '" given');
        }

        $oSsh2 = $this->getNetScp()->ssh;
        if (!$oSsh2->exec('if test -d "' . $sRemoteDriectory . '"; then echo 1; fi')) {
            if (!$oSsh2->exec('if mkdir -m 0775 -p ' . $sRemoteDriectory . '; then echo 1; fi')) {
                $aErrors = $oSsh2->getErrors();
                throw new \RuntimeException('Error occurred creating directory "' . $sRemoteDriectory . '" : ' . ($aErrors ? join(' ; ', $aErrors) : 'unknown error'));
            }
        }
        return $this;
    }
}
