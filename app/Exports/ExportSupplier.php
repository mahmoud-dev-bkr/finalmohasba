<?php

namespace App\Exports;

use App\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportSupplier implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplier::select('name','email', 'Tex_Number', 'Facility')->get();
    }
    public function headings(): array
    {
        return [
            'name',
            'email',
            'Tex_Number',
            'Facility',
        ];
    }
}
