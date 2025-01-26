<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleInvoiceSetting extends Model
{
    protected $table = "setting_sale_invoic";

    protected $fillable = [
        'numbering_sales_invoices',
        'code',
        'starting_sequence_number',
        'description',
        'terms_conditions',
        'day_pay_before_due_date',
        'automatic_email',
        'services_and_non_stocked',
        'good_execution_guarantee',
        'print_settings',
        'print_settings_details',
    ];
}
