<?php

class FilesQuery extends BaseFilesQuery
{

    /**
     * @param int $iCategoryId
     * @param string $sEntityName
     * @param int $iEntityId
     * @return array
     */
    public function findByCategoryAndEntity(int $iCategoryId, string $sEntityName, int $iEntityId)
    {
        return FilesQuery::create()->filterByFileCategoryId($iCategoryId)
            ->filterByFileEntityName($sEntityName)
            ->filterByFileEntityId($iEntityId)
            ->find();
    }

    /**
     * @param int $iCategoryId
     * @param string $sEntityName
     * @param int $iEntityId
     * @return \Files
     */
    public function findLastVersionByCategoryAndEntity(int $iCategoryId, string $sEntityName, int $iEntityId) : ?Files
    {
        return FilesQuery::create()->filterByFileCategoryId($iCategoryId)
            ->filterByFileEntityName($sEntityName)
            ->filterByFileEntityId($iEntityId)
            ->orderByFileVersion('DESC')
            ->findOne();
    }

}
