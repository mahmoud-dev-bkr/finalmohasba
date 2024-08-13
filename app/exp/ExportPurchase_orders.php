<?php

namespace App\Exports;

use App\Purchase_orders;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPurchase_orders implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Purchase_orders::select('Date_start','Date_end', 'Date_Groce_Period', 'payment_terms','Reviews','Attachments')->get();
    }
    public function headings(): array
    {
        return [
            '#',
           'Date_start',
           'Date_end',
           'Date_Groce_Period',
           'payment_terms',
           'Reviews',
           'Attachments',
        ];
    }
}
