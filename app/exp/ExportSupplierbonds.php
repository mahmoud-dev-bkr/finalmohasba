<?php

namespace App\Exports;

use App\Supplierbond;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSupplierbonds implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplierbond::select('code', 'id_supplers','Date','id_Account','type','Amount','PurchaseInvoices_id')->get();
    }
    public function headings(): array
    {
        return [
            '#',
            'code',

             'id_supplers',
             'Date',
             'id_Account',
             'type',
             'Amount',
             'PurchaseInvoices_id',
        ];
    }
}
