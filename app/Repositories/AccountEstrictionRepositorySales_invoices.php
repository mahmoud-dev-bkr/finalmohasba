<?php

namespace App\Repositories;

use App\Account;
use App\CcountEstrictions;
use App\Repositories\Interfaces\AccountEstrictionRepositorySalesInterface as EstrictionSalesInterface;

class AccountEstrictionRepositorySales_invoices implements EstrictionSalesInterface
{
    protected $accountTax;
    protected $accountClaint;
    protected $accountSales;
    public function __construct()
    {
        $this->accountTax    = Account::where('code', '2105')->first();
        $this->accountClaint = Account::where('code', '1103')->first();
        $this->accountSales  = Account::where('code', '4101')->first();
    }

    public  function storeFirstInvoiceAccountEstriction ($invoice)
    {
        // dd($invoice);
        $CcountEstrictions = [
            'account_id' => $this->accountClaint->id,
            'type' => '2',
            'account_type' => $invoice->id,
            'ammount_from' => $invoice->total,
            'ammount_to'   => 0,
            'from_to'      => 0,
            'site_id'      => $invoice->site_id,
            'supplier_id'  => $invoice->id_supplers
        ];
        CcountEstrictions::create($CcountEstrictions);
        return true;

    }

    public  function storeSecoundInvoiceAccountEstriction($invoice, $index)
    {
        $CcountEstrictions = [
            'account_id' => $this->accountTax->id,
            'type' => '2',
            'account_type' => $invoice->id,
            'ammount_from' => 0,
            'ammount_to'   => $index[9],
            'from_to'      => 1,
            'site_id'      => $invoice->site_id,
            'supplier_id'  => $invoice->id_supplers
        ];
        CcountEstrictions::create($CcountEstrictions);

        $CcountEstrictions = [
            'account_id' => $this->accountSales->id,
            'type' => '2',
            'account_type' => $invoice->id,
            'ammount_from' => 0,
            'ammount_to'   => $index[7],
            'from_to'      => 1,
            'site_id'      => $invoice->site_id,
            'supplier_id'  => $invoice->id_supplers
        ];
        CcountEstrictions::create($CcountEstrictions);
        return true;
    }

}
