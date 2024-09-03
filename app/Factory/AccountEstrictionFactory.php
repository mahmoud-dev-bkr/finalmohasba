<?php

namespace App\Factory;

use App\enum\InvoiceKey;
use App\Repositories\AccountEstrictionRepositorySales_invoices;

class AccountEstrictionFactory
{

    /**
     * @return array
     */
    public static function dailyEntry($key)
    {

        switch ($key) {

            case InvoiceKey::SALESINVOICE               : return new AccountEstrictionRepositorySales_invoices();
            case InvoiceKey::PURCHASEINVOICE            : return new AccountEstrictionRepositorySales_invoices();
            case InvoiceKey::RETURNSPURCHASEINVOICE     : return "";
            case InvoiceKey::RETURNSALESINVOICE         : return "";
            case InvoiceKey::QUOTATION                  : return "";
            case InvoiceKey::ORDER                      : return "";

        }

    }
}
