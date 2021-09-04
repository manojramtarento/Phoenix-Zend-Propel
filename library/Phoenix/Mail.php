<?php

class Phoenix_Mail extends Zend_Mail
{

    /**
     * @var Zend_View
     */
    protected $viewSubject = null;

    /**
     * @var Zend_View
     */
    protected $viewBody = null;

       /**
     * @var Zend_View
     */
    protected $viewBodyHtml = null;
       /**
     * @var string
     */
    protected $scriptSubject;
       /**
     * @var string
     */
    protected $scriptBody;
       /**
     * @var string
     */
    protected $scriptBodyHtml;

       /**
     * @var string
     */
    protected $contentHtml;
       /**
     * @var string
     */
    protected $contentText;

    /**
     * @param type Zend_View
     */
    public function addViewSubject($sViewScript)
    {
        $this->viewSubject = clone Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();;
        $this->viewSubject->setScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
        $this->scriptSubject = $sViewScript;
        return $this;
    }

    public function setBodyHtml($sHtml, $sCharset = null, $sEncoding = Zend_Mime::ENCODING_QUOTEDPRINTABLE)
    {
        parent::setBodyHtml($sHtml, $sCharset, $sEncoding);
        $this->contentHtml = $sHtml;
        return $this;
    }

    /**
     * Sets the text body for the message.
     *
     * @param string $sText
     * @param string $sCharset
     * @param string $sEncoding
     * @return Zend_Mail Provides fluent interface
    */
    public function setBodyText($sText, $sCharset = null, $sEncoding = Zend_Mime::ENCODING_QUOTEDPRINTABLE)
    {
        parent::setBodyText($sText, $sCharset, $sEncoding);
        $this->contentText = $sText;
        return $this;
    }

    public function addViewBody($sViewScript)
    {
        $this->viewBody = clone Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();;
        $this->viewBody->setScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
        $this->scriptBody = $sViewScript;
        return $this;
    }

    public function getViewBody()
    {
        return $this->viewBody;
    }

    public function addViewBodyHtml($sViewScript)
    {
        $this->viewBodyHtml = clone Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();;
        $this->viewBodyHtml->setScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
        $this->scriptBodyHtml = $sViewScript;
        return $this;
    }

    /**
     * @return Zend_View
     */
    public function getViewSubject()
    {
        return $this->viewSubject;
    }

    /**
     * @return Zend_View
     */
    public function getViewBodyHtml()
    {
        return $this->viewBodyHtml;
    }

    /**
     * Add environment to subject on redirection
     */
    public function setSubject($sSubject)
    {
        // Distinction between subject email redirected to dev and prod
        if (in_array($sEnvName = My_Env::getInstance()->getName(), array('dev', 'stg', 'preprod'))) {
            $sSubject = 'Phoenix[' . $sEnvName . '] ' . $sSubject;
        }
        return parent::setSubject($sSubject);
    }

    public function send($oTransport = null)
    {
        $this->beforeSend();
        parent::send($oTransport);
    }

    protected function beforeSend()
    {
        if ($this->getViewSubject() != null) {
            $this->setSubject($this->getViewSubject()->render($this->scriptSubject));
        }

        if ($this->getViewBody() != null) {
            $this->setBody($this->getViewBody()->render($this->scriptBody));
        }

        if ($this->getViewBodyHtml() != null) {
            $sBodyHtml = $this->getViewBodyHtml()->render($this->scriptBodyHtml);
            $this->setBodyHtml($sBodyHtml);
        }

        // Redirection of messages to users connected in a dev, stg or preprod environment
        if (in_array($sEnvName = My_Env::getInstance()->getName(), array('dev', 'stg', 'preprod'))) {
            $aRecipientsOld = $this->getRecipients();

            $this->clearRecipients();

            if (Phoenix_Auth_User::getInstance() != null) {
                $this->addTo(Phoenix_Auth_User::getInstance()->getMail());
            }

            // Add custom solution mails if stg or preprod environment
            if (in_array($sEnvName, array('stg', 'preprod'))) {
                foreach ($aRecipientsOld as $sRecipient) {
                    if (strpos($sRecipient, '@customsolutions.fr') !== false) {
                        $this->addTo($sRecipient);
                    }
                }
            }

            $sPrepend = '****** Email de ' . $sEnvName . ' redirigé vers ' . implode(', ', $this->getRecipients()) . ', destiné à : ' . implode(', ', $aRecipientsOld) . ' ******';

            if ($this->getBodyText() !== false) {
                $this->setBodyText($sPrepend . PHP_EOL . PHP_EOL . $this->contentText);
            }

            if ($this->getBodyHtml() !== false) {
                $this->setBodyHtml($sPrepend . '<br><br>' . $this->contentHtml);
            }
        }

        // Handle imgages
        if ($this->contentHtml) {
            $this->setType(Zend_Mime::MULTIPART_RELATED);
            $sBodyHtml = $this->contentHtml;
            $oMail = $this;
            $sBodyHtml = preg_replace_callback('/<img.*?src=[\'"]([^\'"]+)/is', function ($aMatch) use ($oMail) {
                $sSrcContent = $aMatch[1];
                $oAttachment = null;
                if (file_exists($sSrcContent)) {
                    $oAttachment = $oMail->createAttachment(file_get_contents($sSrcContent));

                    // Retrieve file extension_loaded
                    $sExtension = pathinfo($sSrcContent, PATHINFO_EXTENSION);
                    switch ($sExtension) {
                        case 'gif':
                            $oAttachment->type = 'image/gif';
                            break;
                        case 'jpg':
                        case 'jpeg':
                            $oAttachment->type = 'image/jpg';
                            break;
                        case 'png':
                            $oAttachment->type = 'image/png';
                            break;
                        default:
                            $oAttachment->type = 'application/octet-stream';
                    }
                    $oAttachment->id = 'cid_' . md5_file($sSrcContent);
                } else {
                    $aMatches = null;
                    if (preg_match('/data:image\/([a-z]+);base64,(.+)/', $sSrcContent, $aMatches)) {
                        $oAttachment = $oMail->createAttachment(base64_decode($aMatches[2]));
                        $oAttachment->type = $aMatches[1];
                        $oAttachment->id = 'cid_' . md5($sSrcContent);
                    }
                }

                if ($oAttachment) {
                    $oAttachment->disposition = Zend_Mime::DISPOSITION_INLINE;
                    $oAttachment->encoding = Zend_Mime::ENCODING_BASE64;
                    return str_replace($sSrcContent, 'cid:' . $oAttachment->id, $aMatch[0]);
                }
                return $aMatch[0];
            }, $sBodyHtml);
            $this->setBodyHtml($sBodyHtml);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultSignature(){
        // Render singature with company data
        $oViewSignature = Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();
        $oViewSignature->setScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
        $oViewSignature->assign('user_name',$this->getDefaultFromName());
        $oViewSignature->assign('user_mail',$this->getDefaultFromEmail());
        $oViewSignature->assign('user_phone',Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_PHONE_NUMBER));
        return $oViewSignature->render('signature.phtml');
    }

    /**
     * @return string
     */
    public function getDefaultFromEmail(){
        return Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_APPLICATION);
    }

    /**
     * @return string
     */
    public function getDefaultFromName(){
        return Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME);
    }
}
