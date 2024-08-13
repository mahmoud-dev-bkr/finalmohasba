<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\CompanyScope;
class Sales_invoices extends Model
{
    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);

        static::creating(function ($model) {
            if (auth()->check()) {
                $model->company_id = auth()->user()->company_id;
            }
        });
    }
    protected $table = "SalesInvoices";
    protected $fillable = [
        'code', 'id_supplers','Date_start','Date_end','Date_Groce_Period','Note','Reviews','Attachments', 'id_Project', 'payment_terms',
        'tax_value', 'total', 'total_with_tax', 'type', 'descount_with_premotion', 'site_id', 'done', 'old_balance', 'returns_id', 'total_b','company_id',
     ];
    protected $hidden = [
        'updated_at','	created_at',
    ];

    public function purchaseInvoiceDetails()
    {
        return $this->hasMany(PurchaseInvoiceDetails::class, 'purchase_invoice_id');
    }


}
