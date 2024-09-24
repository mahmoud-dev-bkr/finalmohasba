<?php

namespace App;
use App\PurchaseInvoiceDetails;
use App\Uint;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name_ar', 'name_en',
        'id_unit','id_des',
        'type','barCode',
        'price_of_sell',
        'serial_number','Tex_Number',
         'is_sell', 'is_buy',
         'is_store', 'Note', 'buy', 'sel','account_buy','account_sel','get_product_units','archive','company_id',
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];

    public function purchaseInvoiceDetails()
    {
        return $this->hasMany(PurchaseInvoiceDetails::class, 'product_id');
    }

    public function unit()
    {
        return $this->belongsTo(Uint::class, 'id_unit');
    }

    // protected $appends = ['unit_name'];

    // public function getUnitNameAttribute()
    // {
    //     return $this->unit->name;
    // }

    public function productUnits()
    {
        return $this->hasMany(ProductUint::class, 'id_product');
    }

    public function prices()
    {
        if (auth()->user()->site_id == 10) {
            return $this->hasMany(ProductUintPrices::class, 'product_id', 'id');
        }
        return $this->hasMany(ProductUintPrices::class, 'product_id', 'id')
            ->where('site_id', auth()->user()->site_id); // Filter prices by site_id
    }

    public function midBuy() {
        $qun        =  purchaseInvoiceDetails::where('product_id', $this->id)->where('type', 1)->sum('qun');
        $totalPrice =  purchaseInvoiceDetails::where('product_id', $this->id)->where('type', 1)->sum('price_after');
        return  $totalPrice / ($qun == 0 ? 1 : $qun);
    }
    public function midReturnsPurchaseInvoice() {
        $qun        =  ReturnsPurchaseInvoiceDetails::where('product_id', $this->id)->where('type', 1)->sum('qun');
        $totalPrice =  ReturnsPurchaseInvoiceDetails::where('product_id', $this->id)->where('type', 1)->sum('price_after');
        return  $totalPrice / ($qun == 0 ? 1 : $qun);
    }

    public function  purchaseInvoiceQtn ()
    {
        return purchaseInvoiceDetails::where('product_id', $this->id)->where('type', 1)->sum('qun');
    }

    /**
     * Get the total quantity of the product in the ReturnsPurchaseInvoiceDetails table.
     *
     * @return int The total quantity of the product.
     */
    public function ReturnsPurchaseInvoiceQtn()
    {
        // Sum up the quantities of the product in the ReturnsPurchaseInvoiceDetails table
        // where the product_id is equal to the product id of this product and the type is 1.
        return ReturnsPurchaseInvoiceDetails::where('product_id', $this->id)
            ->where('type', 1)
            ->sum('qun');
    }

    public function getTotalPurchaseInvoice()
    {
        return purchaseInvoiceDetails::where('product_id', $this->id)->where('type', 1)->sum('price_after');
    }
}
