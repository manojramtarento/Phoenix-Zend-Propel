<?php

/**
 * Through an instance of this class, data can be formatted to correspond
 * to a specific number or text format.
 *
 * To use it, just instanciate the class, and call for add method to
 * add as many fields needed to be formatted as wished, the preceision of
 * formatting type is required example : 'amount'.
 *
 * Finally, you just have to call fomat method to format the fields values if
 * they exist in the fieldsList.
 *
 * @author Ahmed El Attar aelattar@neo-data.ma
 */
class My_Data_Formatter
{

    /**
     * Fields list to format with their names as keys and formatting types as values
     * @var array
     */
    protected $fieldsList;

    /**
     *  Init fieldsList by add method with field name $sFieldName and its formatting type as argument $sFieldType
     * @param string $sFieldName
     * @param string $sFieldType
     * @throws \InvalidArgumentException
     */
    public function add($sFieldName, $sFieldType)
    {
        if (! is_string($sFieldName)) {
            throw new \InvalidArgumentException('$sFieldName expects string, ' . gettype($sFieldName) . ' given');
        }
        if (! is_string($sFieldType)) {
            throw new \InvalidArgumentException('$sFieldName expects string, ' . gettype($sFieldType) . ' given');
        }

        $this->fieldsList[$sFieldName][] = $sFieldType;
    }

    /**
     * Format field value by format method with field name $sFieldName and its value $sFieldValue
     * @param string $sFieldName
     * @param scalar $sFieldValue
     * @return string
     * @throws InvalidArgumentException
     */
    public function format($sFieldName, $sFieldValue)
    {
        if (! is_string($sFieldName)) {
            throw new \InvalidArgumentException('$sFieldName expects string, "' . gettype($sFieldName) . '" given');
        }

        if (! is_scalar($sFieldValue)) {
            throw new \InvalidArgumentException('$sFieldValue expects a scalar, "' . (is_object($sFieldValue) ? get_class($sFieldValue) . ' instance' : gettype($sFieldValue)) . '" given');
        }

        if (! isset($this->fieldsList[$sFieldName])) {
            return $sFieldValue;
        }

        $sFormattedString = $sFieldValue;

        // Ajout de la possibilité d'associer plusieurs fonctions de formattage à un seule nom de champs
        foreach ($this->fieldsList[$sFieldName] as $sFormatFunction) {
            switch ($sFormatFunction) {
                case 'amount':
                    $sFormattedString = Phoenix_Data_Convert::formatAmountNumber($sFormattedString);
                    break;
                case 'linebreaks':
                    $sFormattedString = Phoenix_Data_Convert::replaceColumnTextLineBreaks($sFormattedString);
                    break;
                case 'roundnumber':
                    $sFormattedString = Phoenix_Data_Convert::roundNumber($sFormattedString);
            }
        }

        return $sFormattedString;
    }
}
