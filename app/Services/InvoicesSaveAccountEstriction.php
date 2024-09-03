<?php

namespace App\Services;

use App\enum\InvoiceKey;
use App\Factory\AccountEstrictionFactory;
use App\Repositories\AccountEstrictionRepositorySales_invoices;
use App\Repositories\InvoicesRepository;
use App\Sales_invoices;
use MyCLabs\Enum\Enum;

class InvoicesSaveAccountEstriction
{
    protected $InvoicesRepository;
    protected $InvoiceCategory;

    public function __construct($InvoiceKey)
    {
        $this->InvoiceCategory = $InvoiceKey;
    }

    public function storeFirstInvoiceAccountEstriction($invoice)
    {
        $InvoicesRepository = AccountEstrictionFactory::dailyEntry($this->InvoiceCategory);
        $InvoicesRepository->storeFirstInvoiceAccountEstriction($invoice);
        return true;
    }

    public function storeSecoundInvoiceAccountEstriction($invoice, $index)
    {
        $InvoicesRepository = AccountEstrictionFactory::dailyEntry($this->InvoiceCategory);
        $InvoicesRepository->storeSecoundInvoiceAccountEstriction($invoice, $index);
        return true;
    }



}

