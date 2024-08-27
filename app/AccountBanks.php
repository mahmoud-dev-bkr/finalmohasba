<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountBanks extends Model
{
    protected $table = 'account_banks';
    protected $fillable = [
     'site_id',
     'name',
     'name_account',
     'country',
     'currency',
     'number_statement',
     'number_account',
     'code',
     'address',
     'type',
     'company_id',
    ];
}
