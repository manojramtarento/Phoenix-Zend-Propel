<?php

class Zend_View_Helper_TextManager extends Zend_View_Helper_Abstract
{

    /**
     * @return \My_View_Helper_TextManager
     */
    public function TextManager()
    {
        return $this;
    }

    /**
     * Truncate text
     *
     * @param  string $sText
     * @param  integer $iLength
     * @param  array $aOptions
     * @return string
     * @throws \InvalidArgumentException
     */
    public function truncate($sText, $iLength = 100, array $aOptions = array())
    {
        if (!is_string($sText)) {
            throw new \InvalidArgumentException('Argument "$sText" expects a string, "' . (is_object($sText) ? get_class($sText) : gettype($sText)) . '" given');
        }
        if (!is_int($iLength)) {
            throw new \InvalidArgumentException('Argument "$iLength" expects an integer, "' . (is_object($iLength) ? get_class($iLength) : gettype($iLength)) . '" given');
        }

        $aDefault = array(
            'ending' => '...', 'exact' => false
        );
        $aOptions = array_merge($aDefault, $aOptions);

        if (strlen($sText) <= $iLength) {
            return $sText;
        }

        $sTruncate = substr($sText, 0, $iLength);

        // Truncate the last word if is not completed
        if (!$aOptions['exact']) {
            $iSpacepos = strrpos($sTruncate, ' ');
            if (isset($iSpacepos) && substr($sText, $iLength, 1) != ' ') {
                $sTruncate = substr($sTruncate, 0, $iSpacepos);
            }
        }
        $sTruncate .= ' ' . $aOptions['ending'];
        return $sTruncate;
    }
}
