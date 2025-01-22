<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";

    protected $fillable = [
        'logo',
        'company_name',
        'company_email',
        'company_phone',
        'company_street',
        'company_city',
        'company_state',        
        'company_zip',
        'company_country',
        'company_area',
        'company_website',
        'company_tax_number',
        'currency',
        'due_date_tax',
        'account_closing_date',
        'day_fiscal_year_start',
        'month_fiscal_year_start',
    ];
}
