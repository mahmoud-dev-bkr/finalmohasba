<?php

namespace App\Exports;

use App\Account;
use App\Client;
use App\Clientbond;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportClientbonds implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $Clientbonds = Clientbond::all();
        foreach ($Clientbonds as $Clientbond) {
            $ClientName = Client::where('id',  $Clientbond->id_customers)->first();
            $account    = Account::where('id', $Clientbond->id_Account  )->first();
            $Clientbond->id_customers = $ClientName->name;
            $Clientbond->id_Account   = $account->name;
            $Clientbond->type         = $Clientbond->type == 1 ? 'قبض' : 'صرف';
        }
        return $Clientbonds;
    }
    public function headings(): array
    {
        return [
            '#',
            'code',
            'customers',
            'Date',
            'Account',
            'type',
            'Note',
            'Amount',
            'Created At',
            'Updated At',
            '',
        ];
    }
}
