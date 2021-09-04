<?php

/**
 * View Helpers that generates select lists
 */
class Phoenix_View_Helper_Html_Select extends Phoenix_View_Helper_Html
{

    /**
     * @param array $aAttr attributs html
     * @return string
     */
    public static function selectOperationActivity($aAttr)
    {
        return Phoenix_View_Helper_Html::selectFromTable('r_custom_activites', $aAttr, array('value' => 'act_id', 'name' => 'act_libelle'), array('default_label' => 'Choisir...', 'clause_where' => 'actif=1', 'clause_order' => 'ord ASC'));
    }

    /**
     * @param array $aAttr attributs html
     * @return string
     */
    public static function selectOperationType($aAttr)
    {
        return Phoenix_View_Helper_Html::selectFromTable('r_operation_type', $aAttr, array('value' => 'ot_id', 'name' => 'ot_libelle', 'class' => 'act_id'), array('default_label' => 'Choisir...', 'clause_where' => 'actif=1', 'clause_order' => 'ord ASC'));
    }

    /**
     * @param array $aAttr : attributs html
     * @return string
     */
    public static function selectOperationSubType($aAttr)
    {
        return Phoenix_View_Helper_Html::selectFromTable('r_operation_type_sub', $aAttr, array('value' => 'ost_id', 'name' => 'ost_libelle', 'class' => 'ost_ot_id'), array('default_label' => 'Choisir...', 'clause_where' => 'actif=1', 'clause_order' => 'ord ASC'));
    }

    /**
     * @param array $aAttibutes html attributes
     * @return string
     */
    public static function selectIndicatifTel(array $aAttibutes)
    {
        return Phoenix_View_Helper_Html::select($aAttibutes, RCountriesCallingCodesQuery::create()->getRCountriesCallingCodesWithAssociatedCountryName(), array('default_label' => 'Choisir...'));
    }

    /**
     * Affiche un sélecteur d'utilisateurs
     *
     * @param array $aAttr : liste des attributs du select
     * @param array|string $aUserTypes : type des utilisateurs à afficher (peut être une liste)
     * @return type
     */
    public static function selectUsers($aAttr, $aUserTypes = null)
    {
        // Convert as array if needed
        if ($aUserTypes != null && ! is_array($aUserTypes)) {
            $aUserTypes = array($aUserTypes);
        }

        // Build the where clause
        $sClauseWhere = '1=1';
        if (is_array($aUserTypes)) {
            $aCriteria = array();
            foreach ($aUserTypes as $sUserType) {
                $aCriteria[] .= "user_type='" . $sUserType . "'";
            }
            $sClauseWhere = implode(' OR ', $aCriteria);
        }

        // 32655 : Migration phoenix/migration des modules
        return self::selectFromTable('users', $aAttr, array('name' => "CONCAT(COALESCE(user_nom,'') , ' ' , COALESCE(user_prenom,''))",
                    'value' => 'user_id'), array('clause_where' => $sClauseWhere,
                    'default_label' => 'Choisir...'));
    }

    /**
     *
     * @param array $aAttr : html attributes
     * @return string
     */
    public static function selectComparateur($aAttr)
    {
        return self::select($aAttr, array('>' => array('value' => 'sup'), '<' => array('value' => 'inf'), '=' => array('value' => 'eql')), array('default_label' => ''));
    }

    /**
     * Select yes/no
     *
     * @param array $aAttr : html attributes
     * @return string
     */
    public static function selectOuiNon($aAttr)
    {
        return self::select($aAttr, array('Oui' => array('value' => '1'), 'Non' => array('value' => '0')), array('default_label' => ''));
    }

    /**
     * Builds a select list of users, having a given user type
     *
     * @param int $iUserType
     * @param array $aAtrributes
     * @param array $aParamaters
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function selectUsersByuserType($iUserType, array $aAtrributes, array $aParamaters, array $aAdditionalUsers = null)
    {
        if (! is_int($iUserType)) {
            throw new \InvalidArgumentException('Argument "$iUserType" expects an integer , "' . (is_object($iUserType) ? get_class($iUserType) : gettype($iUserType)) . '" given');
        }

        return self::select($aAtrributes, UsersQuery::create()->getUsersByRUserTypeId($iUserType, $aAdditionalUsers), $aParamaters);
    }
}
