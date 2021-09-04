<?php

class Phoenix_Ajax_Components_Response
{

    const ACTION_DISPLAY_DATA = 0;
    const ACTION_DISPLAY_ERRORS = 1;
    const ACTION_CLOSE_POPUP = 2;
    const ACTION_REDIRECT = 3;
    const ACTION_RELOAD = 4;
    const ACTION_DISPLAY_WARNINGS = 5;
    const ACTION_DISPLAY_MESSAGE = 6;

    public $action;     // 0:do nothing/display data ; 1:show errors	; 2:close popup
    public $msg;            // data to display (render)  ; array of errors	; popup_id
    public $option;

    /**
     * Constructor
     * @param int $iAction
     * @param string|array $mMsg message de retour
     * @param array $aOption variables optionelles
     */
    public function __construct(int $iAction, $sMsg = '', $aOption = null)
    {
        $this->action = $iAction;
        $this->msg = $sMsg ? (array) $sMsg : null;
        $this->option = $aOption;
    }

    /**
     * Add message to current messages
     *
     * @param string|array $sMessage
     * @return Phoenix_Ajax_Components_Response
     */
    public function addMessage($sMessage) : Phoenix_Ajax_Components_Response
    {
        if (! $this->msg) {
            $this->msg = (array) $sMessage;
            return $this;
        }

        if (is_string($sMessage)) {
            $this->msg[] = $sMessage;
            return $this;
        }

        if (is_array($sMessage)) {
            $this->msg += $sMessage;
            return $this;
        }

        throw new \InvalidArgument('Arguement "$sMessage" expects a string or an array, "' . (is_object($sMessage) ? get_class($sMessage) : gettype($sMessage)) . '" given');
    }
}
