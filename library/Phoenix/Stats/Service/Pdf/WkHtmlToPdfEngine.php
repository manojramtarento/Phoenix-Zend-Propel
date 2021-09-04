<?php

class Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine extends \Phoenix_Stats_Service_Pdf_AbstractEngine
{

    /**
     * Regular expression to detect HTML strings
     */
    const REGEX_HTML = '/<html/i';

    /**
     * @var string
     */
    protected $binPath;

    /**
     * @var string
     */
    protected $binName = 'wkhtmltopdf';

    /**
     *
     * @var boolean
     */
    protected $enableEscaping = true;

    /**
     * @var boolean
     */
    protected $version9 = false;

    /**
     *
     * @var array
     */
    protected $options = array();

    /**
     * @var array
     */
    protected $pageOptions = array();

    /**
     * @var array
     */
    protected $objects = array();

    /**
     * @var string
     */
    protected $tmp;

    /**
     * @var string
     */
    protected $tmpFile;

    /**
     * @var array
     */
    protected $tmpFiles = array();

    /**
     * @var string
     */
    protected $procEnv;

    /**
     * @var boolean
     */
    protected $isWindows;

    /**
     *
     * @var boolean
     */
    protected $enableXvfb = true;

    /**
     * @var string
     */
    protected $xvfbRunBin;

    /**
     * @var string
     */
    protected $xvfbRunOptions = ' -a --server-args="-screen 0, 1024x768x24" ';

    /**
     * @var array
     */
    protected $localOptions = array(
        'binName',
        'binPath',
        'tmp',
        'enableEscaping',
        'version9',
        'procEnv',
        'enableXvfb',
        'xvfbRunBin',
        'xvfbRunOptions',
    );

    /**
     * @var array
     */
    protected $allowedOptions = array(
        'input',
        //General Options
        'allow', 'book', 'collate', 'cookie', 'cookie-jar', 'copies', 'cover',
        'custom-header', 'debug-javascript', 'default-header', 'disable-external-links', 'disable-internal-links', 'disable-javascript',
        'disable-pdf-compression', 'disable-smart-shrinking', 'disallow-local-file-access', 'dpi', 'enable-plugins',
        'encoding', 'extended-help', 'forms', 'grayscale', 'help', 'htmldoc', 'ignore-load-errors', 'lowquality', 'manpage',
        'margin-bottom', 'margin-left', 'margin-right', 'margin-top', 'minimum-font-size', 'no-background',
        'orientation', 'page-height', 'page-offset', 'page-size', 'page-width', 'password',
        'post', 'post-file', 'print-media-type', 'proxy', 'quiet', 'read-args-from-stdin',
        'readme', 'redirect-delay', 'replace', 'stop-slow-scripts', 'title',
        'toc', 'use-xserver', 'user-style-sheet', 'username', 'version', 'zoom',
        //Headers And Footer Options
        'footer-center', 'footer-font-name', 'footer-font-size', 'footer-html', 'footer-left', 'footer-line', 'footer-right', 'footer-spacing',
        'header-center', 'header-font-name', 'header-font-size', 'header-html', 'header-left', 'header-line', 'header-right', 'header-spacing',
        'dpi', 'enable-plugins', 'encoding', 'extended-help', 'forms', 'grayscale', 'help', 'htmldoc', 'ignore-load-errors', 'lowquality', 'manpage',
        'margin-bottom', 'margin-left', 'margin-right', 'margin-top', 'minimum-font-size', 'no-background', 'orientation', 'page-height',
        'page-offset', 'page-size', 'page-width', 'password', 'post', 'post-file', 'print-media-type', 'proxy', 'quiet', 'read-args-from-stdin',
        'readme', 'redirect-delay', 'replace', 'stop-slow-scripts', 'title', 'toc', 'use-xserver', 'user-style-sheet', 'username', 'version', 'zoom',
        //Table Of Content Options
        'toc-depth', 'toc-disable-back-links', 'toc-disable-links', 'toc-font-name', 'toc-header-font-name', 'toc-header-font-size', 'toc-header-text', 'toc-l1-font-size',
        'toc-l1-indentation', 'toc-l2-font-size', 'toc-l2-indentation', 'toc-l3-font-size', 'toc-l3-indentation', 'toc-l4-font-size', 'toc-l4-indentation', 'toc-l5-font-size',
        'toc-l5-indentation', 'toc-l6-font-size', 'toc-l6-indentation', 'toc-l7-font-size', 'toc-l7-indentation', 'toc-no-dots'
    );

    /**
     * @param array $aOptions global options for wkhtmltopdf (optional)
     */
    public function __construct(array $aOptions = array())
    {
        if ($aOptions) {
            $this->setOptions($aOptions);
        }
    }

    /**
     * Remove temporary PDF file and pages when script completes
     * @throws \RuntimeException
     */
    public function __destruct()
    {
        if ($this->tmpFile !== null && unlink($this->tmpFile) === false) {
            throw new \RuntimeException('An error occured while delete tmp file "' . $this->tmpFile . '"');
        }

        foreach ($this->tmpFiles as $sTmpFile) {
            if (unlink($sTmpFile) === false) {
                throw new \RuntimeException('An error occured while delete tmp file "' . $sTmpFile . '"');
            }
        }
    }

    /**
     * Add a page object to the output
     * @param string $sInput
     * @param array $aOptions
     * @throws \InvalidArgumentException
     */
    public function addPage($sInput, array $aOptions = array())
    {
        if (!is_string($sInput)) {
            throw new \InvalidArgumentException('Argument "$sInput" expects an string, "' . gettype($sInput) . '" given');
        }
        $aOptions['input'] = preg_match(self::REGEX_HTML, $sInput) ? $this->createTmpFile($sInput) : $sInput;
        $this->objects[] = array_merge($this->pageOptions, array_intersect_key($this->processOptions($aOptions), array_flip($this->allowedOptions)));
    }

    /**
     * Add a cover page object to the output
     * @param string $sInput
     * @param array $aOptions
     * @throws \InvalidArgumentException
     */
    public function addCover($sInput, array $aOptions = array())
    {
        if (!is_string($sInput)) {
            throw new \InvalidArgumentException('Argument "$sInput" expects an string, "' . gettype($sInput) . '" given');
        }
        $aOptions['input'] = ($this->version9 ? '--' : '') . 'cover ' . $sInput;
        $this->objects[] = array_merge($this->pageOptions, array_intersect_key($aOptions, array_flip($this->allowedOptions)));
    }

    /**
     * Add a table of content object to the output
     * @param array $aOptions : (optional) options for the table of contents
     */
    public function addToc(array $aOptions = array())
    {
        $aOptions['input'] = ($this->version9 ? '--' : '') . 'toc';
        $this->objects[] = $aOptions;
    }

    /**
     * Retrieve pdf content
     * @return string
     * @throws \LogicException
     */
    public function getContents()
    {
        $sPdfFile = $this->getPdfFilename();
        if (($sFileContent = file_get_contents($sPdfFile)) === false) {
            throw new \RuntimeException('An error occured while get contents from pdf file "' . $sPdfFile . '"');
        }
        return $sFileContent;
    }

    /**
     * Set global option(s)
     * @param array $aOptions : list of global options to set as name/value pairs
     * @return \Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine
     */
    public function setOptions(array $aOptions = array())
    {
        $aOptions = $this->processOptions($aOptions);
        foreach ($aOptions as $sKey => $sValue) {
            if (in_array($sKey, $this->localOptions, true)) {
                $this->$sKey = $sValue;
            } elseif (is_int($sKey)) {
                $this->options[] = $sValue;
            } elseif (in_array($sKey, $this->allowedOptions)) {
                $this->options[$sKey] = $sValue;
            }
        }
        return $this;
    }

    /**
     * @param array $aOptions : that should be applied to all pages as name/value pairs
     * @return \Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine
     */
    public function setPageOptions(array $aOptions = array())
    {
        $this->pageOptions = $this->processOptions($aOptions);
        return $this;
    }

    /**
     * @param array $aOptions list of options as name/value pairs
     * @return array : options processed
     */
    public function processOptions(array $aOptions = array())
    {
        foreach ($aOptions as $sKey => $sValue) {
            if (preg_match('/^(header|footer)-html$/', $sKey) &&
                    !(is_file($sValue) || preg_match('/^(https?:)?\/\//i', $sValue) || $sValue === strip_tags($sValue))) {
                $aOptions[$sKey] = $this->createTmpFile($sValue);
            }
        }

        return $aOptions;
    }

    /**
     * @return string : the full path to the wkhtmltopdf binary.
     * @throws \RuntimeException
     * @throws \LogicException
     */
    public function getBinPath()
    {
        if ($this->binPath === null) {
            if ($this->getIsWindows()) {
                return '';
            } else {
                $this->binPath = trim(exec('which ' . $this->binName));
            }
            if (!$this->binPath) {
                throw new \RuntimeException('The bin name "' . $this->binName . '" was not found');
            }
        }
        if (is_string($this->binPath)) {
            return $this->binPath;
        }
        throw new \LogicException('Property "binPath" expects a string, "' . gettype($this->binPath) . '" defined');
    }

    /**
     * @return string the full path to the xvfb-run binary
     * @throws \LogicException
     */
    public function getXvfbRunBin()
    {
        if ($this->xvfbRunBin === null) {
            if ($this->getIsWindows()) {
                return null;
            } else {
                $this->xvfbRunBin = trim(exec('which xvfb-run'));
            }
        }
        if (is_string($this->xvfbRunBin)) {
            return $this->xvfbRunBin;
        }
        throw new \LogicException('Property "xvfbRunBin" expects a string, "' . gettype($this->xvfbRunBin) . '" defined');
    }

    /**
     * @return bool : whether we're on a Windows OS
     * @throws \LogicException
     */
    public function getIsWindows()
    {
        if (is_null($this->isWindows)) {
            $this->isWindows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        }
        if (is_bool($this->isWindows)) {
            return $this->isWindows;
        }
        throw new \LogicException('Property "isWindows" expects a boolean, "' . gettype($this->isWindows) . '" defined');
    }

    /**
     * @return string : path to temp directory
     * @throws \LogicException
     */
    public function getTmpDir()
    {
        if (is_null($this->tmp)) {
            $this->tmp = sys_get_temp_dir();
        }
        if (is_string($this->tmp)) {
            return $this->tmp;
        }
        throw new \LogicException('Property "tmp" expects a string, "' . gettype($this->tmp) . '" defined');
    }

    /**
     * @param string $sFilename : the filename of the output file
     * @return string : the wkhtmltopdf command string
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function getCommand($sFilename)
    {
        if (!is_string($sFilename)) {
            throw new \InvalidArgumentException('Argument "$sFilename" expects an string, "' . gettype($sFilename) . '" given');
        }
        $sCommand = ($this->enableEscaping ? escapeshellarg($this->getBinPath()) : $this->getBinPath()) . $this->renderOptions($this->options);

        foreach ($this->objects as $aObject) {
            if (!file_exists($aObject['input'])) {
                throw new \LogicException('Input file "' . $aObject['input'] . '" does not exist');
            }
            $sCommand .= ' ' . $aObject['input'];
            unset($aObject['input']);
            $sCommand .= $this->renderOptions($aObject);
        }

        return $sCommand . ' ' . $sFilename;
    }

    /**
     * Retrieve a temporary PDF filename
     * @return string
     * @throws \LogicException
     */
    public function getPdfFilename()
    {
        if ($this->tmpFile === null) {
            $sTmpFile = tempnam($this->getTmpDir(), 'tmp_WkHtmlToPdf_');
            $this->createPdf($sTmpFile);
            $this->tmpFile = $sTmpFile;
        }
        if (is_string($this->tmpFile)) {
            return $this->tmpFile;
        }
        throw new \LogicException('Property "tmpFile" expects a string, "' . gettype($this->tmpFile) . '" defined');
    }

    /**
     * Create the temporary PDF file
     * @return \Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    protected function createPdf($sFileName)
    {
        if (!is_string($sFileName)) {
            throw new \InvalidArgumentException('Argument "$sFileName" expects an string, "' . gettype($sFileName) . '" given');
        }
        $sCommand = $this->getCommand($sFileName);

        if ($this->enableXvfb) {
            $sCommand = $this->xvfbRunCommand($sCommand);
        }

        // We use proc_open with pipes to fetch error output
        $aDescriptors = array(2 => array('pipe', 'w'),);
        $aPipes = null;
        $rProcess = proc_open($sCommand, $aDescriptors, $aPipes, null, $this->procEnv, array('bypass_shell' => true));
        if (!is_resource($rProcess)) {
            throw new \RuntimeException('Could not run command ' . $sCommand);
        }
        $sStderr = stream_get_contents($aPipes[2]);
        fclose($aPipes[2]);
        if (proc_close($rProcess) !== 0) {
            throw new \RuntimeException('An error occured while creating the PDF with command "' . $sCommand . '" : ' . $sStderr);
        }

        return $this;
    }

    /**
     * Create a tmp file with given content
     * @param string $sContent : the file content
     * @return string : the path to the created file
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    protected function createTmpFile($sContent)
    {
        if (!is_string($sContent)) {
            throw new \InvalidArgumentException('Argument "$sContent" expects an string, "' . gettype($sContent) . '" given');
        }
        $sTmpFile = tempnam($this->getTmpDir(), 'tmp_WkHtmlToPdf_');
        if ($sTmpFile === false) {
            throw new \RuntimeException('An error occured while creating tmp file into tmp directory "' . $this->getTmpDir() . '"');
        }
        if (rename($sTmpFile, $sTmpFile .= '.html') === false) {
            throw new \RuntimeException('An error occured while renaming tmp file "' . $sTmpFile . '"');
        }

        $sContent = $this->urlRewrite($sContent);
        if (file_put_contents($sTmpFile, $sContent) === false) {
            throw new \RuntimeException('An error occured while writing into tmp file "' . $sTmpFile . '"');
        }

        $this->tmpFiles[] = $sTmpFile;

        return $sTmpFile;
    }

    /**
     * @param array $aOptions : for a wkhtml, either global or for an object
     * @return string : the string with options
     */
    protected function renderOptions(array $aOptions)
    {
        $sOut = '';
        foreach ($aOptions as $sKey => $sValue) {
            if (is_numeric($sKey)) {
                $sOut .= ' --' . $sValue;
            } elseif (is_array($sValue)) {
                foreach ($sValue as $sChildKey => $sChildValue) {
                    if (is_numeric($sChildKey)) {
                        $sOut .= ' --' . $sKey . ' ' . $this->escape($sChildValue);
                    } else {
                        $sOut .= ' --' . $sKey . ' ' . $this->escape($sChildKey) . ' ' . $this->escape($sChildValue);
                    }
                }
            } else {
                $sOut .= ' --' . $sKey . ' ' . $this->escape($sValue);
            }
        }

        return $sOut;
    }

    /**
     * @param mixed $sValue : value to escape
     * @return string : the escaped value if enableEscaping is set. Unchanged value otherwhise.
     * @throws \InvalidArgumentException
     */
    protected function escape($sValue)
    {
        if (!is_string($sValue)) {
            throw new \InvalidArgumentException('Argument "$sValue" expects an string, "' . gettype($sValue) . '" given');
        }
        return $this->enableEscaping ? escapeshellarg($sValue) : $sValue;
    }

    /**
     * Wrap the given command in a call to xvfb-run
     * @param string $sCommand : the command to wrap in xvfb-run
     * @return string : the command string with the xvfb-run call prepended
     * @throws \InvalidArgumentException
     */
    protected function xvfbRunCommand($sCommand)
    {
        if (!is_string($sCommand)) {
            throw new \InvalidArgumentException('Argument "$sCommand" expects an string, "' . gettype($sCommand) . '" given');
        }
        return ($sXvfbRun = $this->getXvfbRunBin()) ? $sXvfbRun . $this->xvfbRunOptions . $sCommand : $sCommand;
    }
}
