<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnsPurchaseInvoiceDetails extends Model
{
    protected $fillable = [
        'product_id',
        'purchase_invoice_id',
        'qun',
        'withDescunt',
        'descunt',
        'price_after',
        'price_before',
        'tax',
        'type',
        'tax_value','type_descount', 'price_unit', 'unit_id', 'price_unit_id','company_id',
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function salesInvoice()
    {
        return $this->belongsTo(Sales_invoices::class, 'purchase_invoice_id');
    }

}
