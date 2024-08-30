<?php 

namespace App\Services;

use App\Repositories\AccountEstrictionRepositorySales_invoices;
use App\Repositories\InvoicesRepository;
use App\Sales_invoices;
use MyCLabs\Enum\Enum;

class InvoicesSaveAccountEstriction
{
    protected $InvoicesRepository;
    protected $InvoiceCategory;
    const Enum = [
        'SalesInvoice',
        'PurchaseInvoice',
        'ReturnsPurchaseInvoice',
        'ReturnsSalesInvoice',
        'Quotation',
        'Order'
    ];
    public function __construct($model)
    {
        $this->InvoiceCategory = $model;
    }

    public function storeFirstInvoiceAccountEstriction($invoice)
    {
        $this->InvoicesRepository = $this->getServiceInvoiceByName();
        $this->InvoicesRepository->storeFirstInvoiceAccountEstriction($invoice);
        return true;
    }

    public function storeSecoundInvoiceAccountEstriction($invoice, $index)
    {
        $this->InvoicesRepository = $this->getServiceInvoiceByName();
        $this->InvoicesRepository->storeSecoundInvoiceAccountEstriction($invoice, $index);
        return true;
    }
    
    public function getServiceInvoiceByName()
    {
        switch ($this->InvoiceCategory) {
            case "SalesInvoice":
                return new AccountEstrictionRepositorySales_invoices();
            case "PurchaseInvoice":
                // return  new AccountEstrictionRepositorySales_invoices();
                // return new AccountEstrictionRepositoryPurchase_invoices();
            case "ReturnsPurchaseInvoice":
                // return new AccountEstrictionRepositoryReturnsPurchase_invoices();
            case "Order":
                // return new AccountEstrictionRepositoryOrders();
            case "ReturnsSalesInvoice":
                // return new AccountEstrictionRepositoryReturnsSales_invoices();
            case "Quotation":
                // return new AccountEstrictionRepositoryQuotations();
            default:
                throw new \Exception("Invalid Invoice Category");
        }
    }
    
}

