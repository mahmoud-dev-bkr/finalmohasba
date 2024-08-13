<?php

namespace App\Exports;

use App\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportClients implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Client::select('name','email', 'Tex_Number', 'Facility')->get();
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
