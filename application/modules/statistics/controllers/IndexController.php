<?php

class Statistics_IndexController extends My_Controller_Action
{

    /**
     * Generates the stats Html render, from which a Pdf document is generated
     * And sent to the user
     */
    public function downloadstatisticspdfAction()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout->disableLayout();
        $iFileId = (int) $this->_request->getParam('file_id');

        $oStatisticRendrer = new Phoenix_Stats_Service_HtmlRenderer($iFileId, $this->view, new Zend_Layout());
        $oPdfRenderer = new Phoenix_Stats_Service_PdfRenderer(new Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine(), $oStatisticRendrer->render());
        $oPdfRenderer->downloadPdfDocument();
    }
}
