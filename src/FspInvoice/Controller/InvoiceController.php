<?php
namespace FspInvoice\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use FspInvoice\Model\Invoice;
#use FspInvoice\Form\InvoiceForm;


class InvoiceController extends AbstractActionController {
    protected $invoiceTable;

    public function getInvoiceTable() {
        if (!$this->invoiceTable) {
            $sm = $this->getServiceLocator();
            $this->invoiceTable = $sm->get('FspInvoice\Model\InvoiceTable');
        }
        return $this->invoiceTable;
    }

    public function indexAction() {
        return new ViewModel(array(
            'invoices' => $this->getInvoiceTable()->fetchAll(),
        ));
    }
}
