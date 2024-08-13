<?php

namespace App\Exports;

use App\Employe;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEmploye implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employe::select('name_en','name_ar', 'Job_Number', 'Salary_Value')->get();
    }
    public function headings(): array
    {
        return [
            '#',
            'name en',
            'name ar',
            'Job Number',
            'Salary Value'
        ];
    }
}
