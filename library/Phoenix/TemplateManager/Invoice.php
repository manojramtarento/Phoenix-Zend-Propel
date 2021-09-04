<?php

class Phoenix_TemplateManager_Invoice extends Phoenix_TemplateManager_AbstractOperation
{
    /**
     * Invoice to use for rendering
     *
     * @var \Factures
     */
    protected $invoice;

    protected function initializeView() : Zend_View
    {
        $oView = parent::initializeView();

        // Retrieves current invoice
        $oInvoice = $this->getInvoice();

        $oView->assign('invoice_display_name', $oInvoice->getInvoiceDisplayFileName());
        $oView->assign('signature', $oInvoice->getInvoiceServiceSignature());

        // Retrieves current operation
        $oOperation = $this->getOperation();
        if ($oContact = $oOperation->getContactFacturation()) {
            $oView->assign('invoice_contact_name', $oContact->getCtNomPrenom());
        }
        return $oView;
    }

    /**
     * Return current invoice
     *
     * @return \Factures
     */
    public function getInvoice() : \Factures
    {
        return $this->invoice;
    }

    /**
     * Set invoice to use for rendering
     *
     * @param \Factures $oInvoice
     * @return Phoenix_TemplateManager_Invoice
     */
    public function setInvoice(\Factures $oInvoice) : Phoenix_TemplateManager_Invoice
    {
        $this->invoice = $oInvoice;
        return $this;
    }
}
