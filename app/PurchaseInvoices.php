<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseInvoices extends Model
{
    protected $table = "purchase_invoices";
    protected $fillable = [
        'code', 'id_supplers','Date_start','Date_end','Date_Groce_Period','Note','Reviews','Attachments', 'id_Project', 'payment_terms',
        'tax_value', 'total', 'total_with_tax', 'type', 'discount', 'site_id', 'done', 'old_balance', 'returns_id', 'descount_with_premotion', 'total_b',
        'company_id',
     ];
    protected $hidden = [
    'updated_at','	created_at',
    ];
}
