<?php

class Contacts extends BaseContacts
{
    /**
     * Exécutée automatiquement lors de la validation
     */
    protected function _validateIsClientCorrect()
    {
        $oTranslate = $this->getZendTranslate();

        if ($this->getClId() <= 0) {
            $this->addValidationFailed($oTranslate->translate('Un contact doit être associé à un client'), 'contacts.cl_id');
        }

        if (($this->getCtNewsletter() || $this->getCtReceiveFactByEmail()) && ! $this->getCtEmail()) {
            $this->addValidationFailed($oTranslate->translate('L\'adresse e-mail du contact doit être renseignée'), 'contacts.ct_email');
        }
    }

    protected function _validateIsContactUnic()
    {

        $oContactsQuery = ContactsQuery::create()->filterByCtEmail($this->getCtEmail())->filterByCtLastname($this->getCtLastname())
                ->filterByClId($this->getClId());

        $iContactId = $this->getCtId();
        if ($iContactId) {
            $oContactsQuery->filterByCtId($iContactId, Criteria::ALT_NOT_EQUAL);
        }

        if ($oContactsQuery->count()) {
            $oTranslate = $this->getZendTranslate();
            $this->addValidationFailed($oTranslate->translate('Un contact avec le même nom et le même email existe déjà sur ce compte client'), 'error');
        }
    }

    public function getCtNomPrenom()
    {
        return ucfirst($this->getCtFirstname()) . ' ' . ucfirst($this->getCtLastname());
    }


    /**
     * Create a new entity of client site from given data
     *
     * @param Clients $oClient
     * @param array $aData
     * @return Contacts|array
     */
    public static function createContactFromEmail(Clients $oClient, ClientSites $oClientSite, string $sEmail)
    {
        if (! filter_var($sEmail, FILTER_VALIDATE_EMAIL)) {
            return array(
                'emails' => array(
                    sprintf(Zend_Registry::get('Zend_Translate')->translate('error_email_not_valid'), $sEmail)
                ),
            );
        }
        $aData = array(
            'cl_id' => $oClient->getClId(),
            'ct_email' => $sEmail,
        );

        $aEmailsPart = explode('.', explode('@', $sEmail)[0]);
        if (count($aEmailsPart) < 2) {
            $aData['ct_firstname'] = ' ';
            $aData['ct_lastname'] = $aEmailsPart[0];
        } else {
            $aData['ct_firstname'] = array_shift($aEmailsPart);
            $aData['ct_lastname'] = join(' ', $aEmailsPart);
        }

        // Add client site
        if ($oClientSite) {
            $aData['cl_site_id'] = $oClientSite->getClSiteId();
        }

        $oContact = new Contacts();
        $oContact->fromArray($aData, BasePeer::TYPE_FIELDNAME);

        if (! $oContact->validate()) {
            return $oContact->getValidationFailures();
        }
        $oContact->save();
        return $oContact;
    }
    
   /**
    * Get Zend Translate
    *
    * @return \Zend_Registry
    * @throws \LogicExcpetion
    */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicException('Zend Translate object is undefined');
    }

}
