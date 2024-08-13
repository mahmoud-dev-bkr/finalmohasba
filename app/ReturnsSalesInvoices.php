<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnsSalesInvoices extends Model
{
    protected $tables = "returns_salesinvoices";
    protected $fillable = [
        'code', 'id_supplers','Date_start','Date_end','Date_Groce_Period','Note','Reviews','Attachments', 'id_Project', 'payment_terms',
        'tax_value', 'total', 'total_with_tax', 'type', 'discount', 'site_id', 'done', 'old_balance', 'purchase_invoice_id','company_id',
     ];
    protected $hidden = [
        'updated_at','	created_at',
    ];
}
