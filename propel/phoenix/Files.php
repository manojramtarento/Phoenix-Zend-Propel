<?php

class Files extends BaseFiles
{

    public function _validateIsFileExtentionValid()
    {
        $aAuthorizedMime = array(
            'image/png', // .pdf
            'image/jpg', // .pdf
            'image/jpeg', // .pdf
            'application/pdf', // .pdf
            'application/msword', // .doc
            'application/msexcel', // excel
            'application/vnd.ms-excel', // excel
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // excel .xlsx
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // .docx
            'application/vnd.oasis.opendocument.text', // .odt
            'application/vnd.ms-powerpoint', // .ppt
            'application/vnd.openxmlformats-officedocument.presentationml.presentation', // .pptx
            'text/plain', // .txt
            'text/html', // .txt
            'application/zip', // .txt
            'text/rtf', // .rtf
        );

        // We used 'old' filepath because the file isn't saved yet
        $sMime = mime_content_type($this->getOldFilePath());

        if (! in_array($sMime, $aAuthorizedMime)) {
            $this->addValidationFailed('Erreur lors de l\'upload : le mime-type de fichier "'.$this->getOldFilePath().'" - "'.$sMime.'" n\'est pas acceptée.');

            // Delete the uploaded file
            $this->remove();
        }
    }

    /**
     * Deletes the reference in bdd and the associated file
     * @param \PropelPDO $oConnection
     */
    public function delete(\PropelPDO $oConnection = null)
    {
        parent::delete($oConnection);

        if ($this->isDeleted()) {
            // Version number decrementing
            $oConnection = $this->getConnection();
            $oConnection->exec('
                UPDATE files
                SET file_version = file_version-1
                WHERE file_version > "' . $this->getFileVersion() . '"
                AND file_category_id = "' . $this->getFileCategoryId() . '"
                AND file_entity_name = "' . $this->getFileEntityName() . '"
                AND file_entity_id= "' . $this->getFileEntityId() . '"
            ');

            // File deletion
            $this->remove();
        }
    }

    /**
     * Delete file
     */
    private function remove()
    {
        if (file_exists($this->getFilePath())) {
            unlink($this->getFilePath());
        }
        if (file_exists($this->getOldFilePath())) {
            unlink($this->getOldFilePath());
        }
    }

    /**
     * @param \PropelPDO $oConnection
     */
    public function save(\PropelPDO $oConnection = null)
    {

        // Move the file to the correct directory : [upload]/[type fichier]/[typeEntity]/[idEntity]/fichier
        $sOldPath = $this->getOldFilePath();
        if (! file_exists($sOldPath)) {
            throw new \InvalidArgumentException('Uploaded file "' . $sOldPath . '" does not exist');
        }
        $sNewPath = $this->getFilePath();

        // Create the destination folder, if it does not exist
        $sNewDir = dirname($sNewPath);
        if (! is_dir($sNewDir)) {
            mkdir($sNewDir, 0775, true);
        }

        // Move the file
        rename($sOldPath, $sNewPath);

        // Version number increment
        if ($this->isNew()) {
            $oFile = FilesQuery::create()->filterByFileCategoryId($this->getFileCategoryId())
                    ->filterByFileEntityName($this->getFileEntityName())
                    ->filterByFileEntityId($this->getFileEntityId())
                    ->orderByFileVersion(Criteria::DESC)
                    ->findOne();
            if ($oFile != null) {
                $iVersion = $oFile->getFileVersion();
                $iVersion++;
            } else {
                $iVersion = 1;
            }
            $this->setFileVersion($iVersion);
        }

        return parent::save($oConnection);
    }

    /**
     * @return string
     */
    public function getFilePath() : string
    {
        return Zend_Registry::get('config')->my->fileupload->directory . '/' . $this->getRFileCategories()->getRFcaName() . '/' . $this->getFileEntityName() . '/' . $this->getFileEntityId() . '/' . $this->getFileName();
    }

    /**
     * @return string
     * @throws \LogicException
     */
    public function getFileContent() : string
    {
        $sFilePath = $this->getFilePath();
        if (! file_exists($sFilePath)) {
            throw new \LogicException('File "'.$sFilePath.'" (id '.$this->getFileId().') does not exist');
        }
        $rFileHandle = fopen($this->getFilePath(), "r");
        $sContent = fread($rFileHandle, filesize($this->getFilePath()));
        fclose($rFileHandle);

        return $sContent;
    }

    /**
     * Returns the new filename while keeping the same extension
     * @param string $sNewName
     * @return string : new filename
     */
    public function getRenamedFilename(string $sNewName) : string
    {
        return $sNewName . '.' . substr(strrchr($this->getFileName(), '.'), 1);
    }

    /**
     * @return string
     */
    public function getOldFilePath() : string
    {
        return Zend_Registry::get('config')->my->fileupload->directory . '/' . $this->getFileName();
    }

    /**
     * @return string
     */
    public function getMimeType() : string
    {
        if (file_exists($this->getOldFilePath())) {
            return mime_content_type($this->getOldFilePath());
        }
        return mime_content_type($this->getFilePath());
    }
}
