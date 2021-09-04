<?php

class Phoenix_Data_Convert
{

    /**
     * @param string $sDate (20120906 00:00:00)
     * @return string
     */
    public static function formatDateForSqlServer($sDate)
    {
        if ($sDate) {
            $sDay = substr($sDate, 0, 2);
            $sMonth = substr($sDate, 3, 2);
            $sYear = substr($sDate, 6, 4);

            // check date
            $sDate = ($sYear . $sMonth . $sDay . ' 00:00:00');
            $iTimestamp = strtotime($sDate);

            if ($iTimestamp !== false) {
                return $sDate;
            }
        }

        // Don't return null
        return '';
    }

    /**
     * Convert a date from a date form (06/09/2012)
     *
     * @param  string $sDate (2012-09-06 00:00:00)
     * @return string
     */
    public static function FormatDateForMysql($sDate)
    {
        if (! empty($sDate)) {
            $sDay = substr($sDate, 0, 2);
            $sMonth = substr($sDate, 3, 2);
            $sYear = substr($sDate, 6, 4);

            // Check date
            $sDate = ($sYear . '-' . $sMonth . '-' . $sDay . ' 00:00:00');
            $iTimestamp = strtotime($sDate);

            if ($iTimestamp !== false) {
                return $sDate;
            }
        }

        // Don't return null
        return '';
    }

    /**
     * Convert a date from a date form (06/09/2012)
     *
     * @param string $sDate (2012-09-06 00:00:00)
     * @return string
     */
    public static function FormatDateForSql2($sDate)
    {
        if (! empty($sDate)) {
            $sDay = substr($sDate, 0, 2);
            $sMonth = substr($sDate, 3, 2);
            $sYear = substr($sDate, 6, 4);

            // Check date
            $sDate = ($sYear . $sMonth . $sDay);
            $iTimestamp = strtotime($sDate);

            if ($iTimestamp !== false) {
                return $sDate;
            }
        }

        // Don't return null
        return '';
    }

    /**
     * Formate la date pour Mysql , en ajoutant l'heure/min/sec
     * En fonction du type de date : date début ou date de fin.
     *
     * @param string $sDate
     * @param boolean $bIsStartDate
     * @return string
     */
    public static function FormatDateForMysqlWithDetails($sDate, $bIsStartDate = true)
    {
        if ($sDate) {
            $sDay = substr($sDate, 0, 2);
            $sMonth = substr($sDate, 3, 2);
            $sYear = substr($sDate, 6, 4);

            // Construction de la date: si c'est la date de début alors on ajoute 00:00:00, sinon 23:59:59
            $sDate = ($sYear . '-' . $sMonth . '-' . $sDay);
            $sDate .= $bIsStartDate ? ' 00:00:00' : ' 23:59:59';
            $iTimestamp = strtotime($sDate);

            if ($iTimestamp !== false) {
                return $sDate;
            }
        }

        return '';
    }

    /**
     * Convert a date from a sql date string (2012-09-06 00:00:00)
     *
     * @param string $sDate (06/09/2012)
     * @param string|null $sLanguage
     * @return string|null
     */
    public static function formatdateFromSqlServer($sDate, $sLanguage = RLanguages::LANG_FRA)
    {
        if ($sDate) {
            $sDay = substr($sDate, 8, 2);
            $sMonth = substr($sDate, 5, 2);
            $sYear = substr($sDate, 0, 4);

            if ($sLanguage == RLanguages::LANG_ENG) {
                return ($sMonth . '/' . $sDay . '/' . $sYear);
            } else {
                return ($sDay . '/' . $sMonth . '/' . $sYear);
            }
        }

        return null;
    }

    /**
     * Convert date to text format: July 03rd, 1980
     *
     * @param string $sDate from a date string (20120906 00:00:00)
     * @param string|null $sLanguage
     * @return string
     */
    public static function formatDateFromSqlServerToTextuel($sDate, $sLanguage = RLanguages::LANG_FRA) : string
    {
        if (! $sDate) {
            return '';
        }
        $oZendDate = new Zend_Date($sDate);
        switch ($sLanguage) {
            case RLanguages::LANG_ENG:
                $oZendDate->setLocale('en');
                return $oZendDate->toString('MMMM d' . Zend_Date::DAY_SUFFIX . ', Y');
            default:
                return $oZendDate->toString('d MMMM Y');
        }
    }

    /**
     * Convert a date from a date string (20120906 00:00:00)
     *
     * @param string $sDate (06/09/2012)
     * @return string|null
     */
    public static function formatdateFromString($sDate)
    {
        if ($sDate) {
            $sDay = substr($sDate, 6, 2);
            $sMonth = substr($sDate, 4, 2);
            $sYear = substr($sDate, 0, 4);

            return $sDay . '/' . $sMonth . '/' . $sYear;
        }

        return null;
    }

    /**
     * Convert a date from a date string (Jan 01 2012 12:00AM)
     *
     * @param string $sDate (06/09/2012)
     * @return string|null
     */
    public static function formatDateFromSqlServer2($sDate)
    {
        if ($sDate) {
            $oDateTime = new DateTime($sDate);
            return $oDateTime->format("d/m/Y");
        }

        return null;
    }

    /**
     * @param string $sDate : the date to format
     * @param string $sFormat :  format datetime
     * @return string|null
     * @throws \InvalidArgumentException
     */
    public static function formatDate($sDate, $sFormat = 'd/m/Y')
    {
        if (preg_match('/^(([1-2]\d|0[1-9]|[3][0-1])\/([0][1-9]|[1][0-2])\/[2][0-9]\d{2})$/', $sDate)) {
            return \DateTime::createFromFormat($sDate, 'd/m/Y')->format($sFormat);
        }
        if ($sDate) {
            if ($sDate instanceof \DateTime) {
                 return $sDate->format($sFormat);
            }
            if (strtotime($sDate) === false) {
                throw new \InvalidArgumentException('Argument date "'.$sDate.'" is not a valid string date');
            }
            $oDatetime = new \DateTime($sDate);
            return $oDatetime->format($sFormat);
        }

        return null;
    }

    /**
     * Convert a duree from minutes to specific time
     *
     * @param string $iDurationMinutes
     * @return string
     */
    public static function formatDuree($iDurationMinutes)
    {
        if ($iDurationMinutes > 0) {
            if ($iDurationMinutes < 30) {
                return "< 30min";
            } elseif ($iDurationMinutes == 30) {
                return "0.5h";
            } elseif ($iDurationMinutes < 60) {
                return "30-60min";
            } else {
                return ($iDurationMinutes / 60) . "h";
            }
        }

        return null;
    }

    /**
     * Retourne les {$iMaxChars} premiers caractères de la chaîne complétés par '...'
     *
     * @param string $sString
     * @param int $iMaxChars
     * @return string
     */
    public static function getShortString($sString, $iMaxChars)
    {
        if (strlen($sString) > $iMaxChars) {
            return substr($sString, 0, $iMaxChars) . '...';
        }

        return $sString;
    }

    /**
     * Retourne le nombre spécifiée sous forme d'un format monétaire
     * Si le second paramètre vaut False, une valeur vide sera interprétée comme zéro.
     * Sinon la valeur vide sera interprétée comme incorrecte (et donc vide).
     *
     * @param float $fNumber
     * @param  bool $bRequired
     * @param  bool $bNowrap
     * @param  bool $bCurrency
     * @return string
     */
    public static function formatMoney($fNumber, $bRequired = false, $bNowrap = true, $bCurrency = true)
    {

        if (empty($fNumber)) {
            $fNumber = 0;
        }

        if (is_numeric($fNumber) || (empty($fNumber) && ! $bRequired)) {
            $fNumber = str_replace('€', '', $fNumber);
            $fNumber = (float) $fNumber;
            $fNumber = number_format($fNumber, 2, '.', ' ');
        }
        if ($bCurrency) {
            $fNumber = $fNumber . ' €';
        }
        if ($bNowrap) {
            $fNumber = '<span style="white-space: nowrap;text-align : right;display:inline-block;width:100%">' . $fNumber . '</span>';
        }

        return $fNumber;
    }

    /**
     * @param float $fNumber
     * @param bool $bRequired
     * @param bool $bNowrap
     * @return string
     */
    public static function formatNumber($fNumber, $bRequired = false, $bNowrap = true)
    {

        $fNumber = (float) $fNumber;

        if (floor($fNumber) != $fNumber) {
            $fNumber = number_format($fNumber, 2, '.', ' ');
        } else {
            $fNumber = number_format($fNumber, 0, '.', ' ');
        }

        if ($bNowrap) {
            $fNumber = '<span style="white-space: nowrap;text-align : right;display:inline-block;width:90%">' . $fNumber . '</span>';
        }

        return $fNumber;
    }

    /**
     * @param float|integer $fNumber
     * @return string
     */
    public static function formatNumberForCsv($fNumber)
    {

        $fNumber = (float) $fNumber;

        if (floor($fNumber) != $fNumber) {
            $fNumber = number_format($fNumber, 2, ',', ' ');
        } else {
            $fNumber = number_format($fNumber, 0, ',', ' ');
        }
        return $fNumber;
    }

    /**
     * Replace Dot By omma in amount type
     *
     * @param string $fAmount
     * @param string $sDecPoint
     * @return string
     */
    public static function formatAmountNumber($fAmount, string $sDecPoint = ',') : string
    {
        return str_replace('.', $sDecPoint, $fAmount);
    }

    /**
     * Return a well formatted float value with percent char
     *
     * @param float $fValue
     * @param bool $bDouble
     * @return string
     */
    public static function formatPercent($fValue, bool $bDouble = true)
    {
        if ($fValue === '') {
            return '';
        }

        if (is_numeric($fValue)) {
            $fValue = number_format((double) $fValue, $bDouble?2:0, ',', ' ') . ' %';
        }

        return $fValue;
    }

    /**
     * Cette fonction permet d'arrondir le chiffre $sNumber à une précision $iPrecision donnée
     *
     * @param string $sNumber
     * @param int $iPrecision
     * @return float
     */
    public static function roundNumber(string $sNumber, int $iPrecision = 2) : float
    {
        return round($sNumber, $iPrecision);
    }

    /**
     * Cette fonction convertie l'encodage d'une chaine donnée en UTF-8, si
     * l'élement passé est un integer, aucune converstion ne sera effectuée
     *
     * @param  string $sInputString
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function getUtf8EncodedString($sInputString)
    {
        if (! is_string($sInputString)) {
            throw new \InvalidArgumentException('getUtf8EncodedString Error : The given Input string is Invalid : "' . $sInputString . '", string expected');
        }

        if (false === mb_detect_encoding($sInputString, 'UTF-8', true)) {
            // 29228 Si la chaine n'est pas à 100% en UTF-8, alors on la convertie à UTF-8
            // Cette convertion permet d'avoir des caractères affiché correctement. En plus elle rend
            // le fichier XML généré valide, puisque ce dernier ne supporte pas d'autre encodage hors UTF-8
            $sInputString = mb_convert_encoding($sInputString, 'UTF-8');
        }

        return $sInputString;
    }

    /**
     * #30994
     * Cette fonction applique la fonction urlencode à l'enssemble des element
     * du tableau $aParams.
     *
     * @param  array $aParams
     * @return array
     * @throws \LogicException
     */
    public static function getEncodedUrl(array $aParams)
    {
        $aEncodedElements = array();

        foreach ($aParams as $sKey => $aElement) {
            if (is_array($aElement)) {
                 $aEncodedElements[$sKey] = self::getEncodedUrl($aElement);
            } elseif (is_string($aElement)) {
                $aEncodedElements[$sKey] = urlencode($aElement);
            }
        }

        return $aEncodedElements;
    }
    /*
     * Traitement spécifique pour propel-SQLServer qui n'accèpte pas les caractères
     * de type smart right quotes ou double right curly quotes ”
     * cette fonction les remplaceent avec 2 caractères simple right curly quotes
     * Même traitement effectuée pour le smart left left quotes pour que l'affichage
     * des left et right quotes soient homogène
     * @param string $sInputString
     * @return string
     * @throws \InvalidArgumentException
     */

    public static function formatSmartRightDoubleQuotes($sInputString)
    {
        if ($sInputString && ! is_string($sInputString)) {
            throw new \InvalidArgumentException('formatSmartRightDoubleQuotesz Error : The given Input string is Invalid : "' . $sInputString . '", string expected');
        }
        $sInputString = str_replace('“', '‘‘', $sInputString);
        return str_replace('”', '’’', $sInputString);
    }

    /**
     * Remplace les caractère de retour à la ligne pas des espaces, celà empêche d'avoir des lignes CSV parasites.
     *
     * @param string $sInputString
     * @param string $sReplacingString
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function replaceColumnTextLineBreaks($sInputString, $sReplacingString = ' ')
    {
        if (! is_string($sInputString)) {
            throw new \InvalidArgumentException('replaceColumnTextLineBreaks Error : sInputString expects string, "' . gettype($sInputString) . '" given');
        }

        return str_replace(array("\n", "\r", "\r\n", "\n\r"), $sReplacingString, $sInputString);
    }

    /**
     * Supprime les caractère de controle des contenue XML.
     * Ceci permet d'éviter les erreur lié aux terminisons des sections CDATA
     *
     * @param string $sInputString
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function removeControlCharacters($sInputString)
    {
        if (! is_string($sInputString)) {
            throw new \InvalidArgumentException('removerControlCharacters Error : sInputString expects string, "' . gettype($sInputString) . '" given');
        }

        return str_replace(array(
            chr(0), chr(1), chr(2), chr(3), chr(4),
            chr(5), chr(6), chr(7), chr(8),
            chr(11), chr(13), chr(12), chr(14), chr(15), chr(16), chr(17),
            chr(18), chr(19), chr(20), chr(21), chr(22), chr(23), chr(24),
            chr(25), chr(26), chr(27), chr(28), chr(29), chr(30), chr(31)
                ), '', $sInputString);
    }

    /**
     * Check weither the given date is a valid georgian date
     * Example : 29/02/2015 is not a valid date, hence the function will return false
     *
     * @param  string $sDate
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public static function checkGeorgianDate($sDate)
    {
        if (! is_string($sDate)) {
            throw new \InvalidArgumentException('Argument $sDate expects a string value, "' . (is_object($sDate) ? get_class($sDate) : gettype($sDate)) . '" given');
        }

        if (! $oDate = DateTime::createFromFormat('d/m/Y', $sDate)) {
            return false;
        }

        $sDay = substr($sDate, 0, 2);
        $sMonth = substr($sDate, 3, 2);
        $sYear = substr($sDate, 6, 4);

        return (strlen($sDay) === 2 && strlen($sMonth) === 2 && strlen($sYear) === 4) && checkdate((int) $sMonth, (int) $sDay, (int) $sYear);
    }

    /**
     * Encodes given data to given encoding
     * @param string|array|\Traversable $sData
     * @param string $sToEncoding
     * @return string|array|\Traversable
     * @throws \InvalidArgumentException
     */
    public static function encodeData($sData, string $sToEncoding)
    {
        // Check destination encoding
        if (empty($sToEncoding)) {
            throw new \InvalidArgumentException('To encoding is empty');
        }

        if (is_string($sData)) {
            // Retrieve data encoding
            $sDataEncoding = self::getDataEncoding($sData, 'UTF-8,ISO-8859-1,WINDOWS-1252');

            if (! $sDataEncoding) {
                // Blind converting
                return mb_convert_encoding($sData, $sToEncoding);
            }

            // Check encoding
            if (mb_check_encoding($sData, $sDataEncoding)) {
                if ($sDataEncoding === $sToEncoding || $sDataEncoding === 'ASCII') {
                    return $sData;
                }
                if ($sDataEncoding === 'UTF-8' && $sToEncoding === 'ISO-8859-1') {
                    return utf8_decode(utf8_encode($sData));
                }
                if ($sDataEncoding === 'ISO-8859-1' && $sToEncoding === 'UTF-8') {
                    return utf8_encode(utf8_decode($sData));
                }
            }

            // Prevents incomplete multibyte character in input string
            $sData = self::fixBrokenUtf8($sData);
            $sData = iconv($sDataEncoding, $sToEncoding . '//TRANSLIT', $sData);
        } elseif (is_array($sData) || $sData instanceof \Traversable) {
            $aDataEncoded = array();
            foreach ($sData as $sKey => $sTmpData) {
                $aDataEncoded[self::encodeData($sKey, $sToEncoding)] = self::encodeData($sTmpData, $sToEncoding);
            }
            return $aDataEncoded;
        }
        return $sData;
    }

    /**
     * @param string $sData
     * @param string|array $sEncodingList : list of character encoding. Encoding order may be specified by array or comma separated list string.
     * @return string
     */
    protected static function getDataEncoding(string $sData, $sEncodingList = null) : string
    {
        // Retrieve data encoding
        $sDataEncoding = null;
        if ($sEncodingList) {
            $sDataEncoding = mb_detect_encoding($sData, $sEncodingList, true);
        }
        if (! $sDataEncoding) {
            $sDataEncoding = mb_detect_encoding($sData, mb_detect_order(), true);
        }

        if (! $sDataEncoding) {
            // Check if data is utf8
            if (preg_match('%(?:
                    [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
                    |\xE0[\xA0-\xBF][\x80-\xBF]        # excluding overlongs
                    |[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} # straight 3-byte
                    |\xED[\x80-\x9F][\x80-\xBF]        # excluding surrogates
                    |\xF0[\x90-\xBF][\x80-\xBF]{2}     # planes 1-3
                    |[\xF1-\xF3][\x80-\xBF]{3}         # planes 4-15
                    |\xF4[\x80-\x8F][\x80-\xBF]{2}     # plane 16
                    )+%xs', $sData)) {
                $sDataEncoding = 'UTF-8';
            }
        }
        return $sDataEncoding;
    }

    /**
     * @param string $sData
     * @return string
     */
    protected static function fixBrokenUtf8(string $sData) : string
    {

        $sReplacement = chr(0xEF) . chr(0xBF) . chr(0xBD);
        $bExpectingNewChar = true;
        $iExpectedLength = 0;
        $iExpectedIndex = 0;
        $iIndex = 0;
        $sFixedData = "";
        while ($iIndex < strlen($sData)) {
            $iByte = ord($sData[$iIndex]);
            // Start of a new character?
            if ($bExpectingNewChar) {
                // 1-byte ASCII chars, append to output
                if ($iByte < 0x80) {
                    $sFixedData .= $sData[$iIndex];
                } // First byte >= 0xF0 means a 4-byte char
                elseif ($iByte >= 0xF0) {
                    $bExpectingNewChar = false;
                    $iExpectedLength = 4;
                    $iExpectedIndex = 2;
                } // First byte >= 0xE0 means a 3-byte char
                elseif ($iByte >= 0xE0) {
                    $bExpectingNewChar = false;
                    $iExpectedLength = 3;
                    $iExpectedIndex = 2;
                } // First byte >= 0xC0 means a 2-byte char
                elseif ($iByte >= 0xC0) {
                    $bExpectingNewChar = false;
                    $iExpectedLength = 2;
                    $iExpectedIndex = 2;
                }
            } // Not the start of a new char, but expecting one of the bytes in a multibyte char
            else {
                // Subsequent bytes in a multibyte char have to be between 0x80 and 0xC0. If it's not then something is corrupt, so add the replacement char to the output and look for a new char
                if (! (($iByte >= 0x80) && ($iByte < 0xC0))) {
                    $sFixedData .= $sReplacement;
                    $bExpectingNewChar = true;
                    // This prevents $iIndex++ at the end of the loop, since this "corrupt" byte could be the start of a new character
                    continue;
                } else {
                    // A valid byte, but we haven't gotten as many bytes for this char yet as we need
                    if ($iExpectedIndex < $iExpectedLength) {
                        $iExpectedIndex++;
                    } // Gotten all the bytes for the valid multibyte char, put them in the output and expect a new character next.
                    else {
                        $sFixedData .= substr($sData, $iIndex - $iExpectedLength + 1, $iExpectedLength);
                        $bExpectingNewChar = true;
                    }
                }
            }
            // Advance to the next byte
            $iIndex++;
        }
        return $sFixedData;
    }
}
