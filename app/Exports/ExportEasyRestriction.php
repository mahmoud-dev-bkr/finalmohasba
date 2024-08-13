<?php

namespace App\Exports;

use App\EasyRestriction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportEasyRestriction implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EasyRestriction::select('id_account_from','id_account_to', 'Des', 'date', 'amunt')->get();
    }
    public function headings(): array
    {
        return [
            'From','To', 'Note', 'Date', 'Amunt'
        ];
    }
}
