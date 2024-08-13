<?php

namespace App;
use App\Uint;
use Illuminate\Database\Eloquent\Model;

class ProductUint extends Model
{
    protected $fillable = [
        'id_unit','price_buy','is_buy_tex','price_sell','is_sell_text','barcode', 'id_product', 'counter_of_unit','company_id',
    ];


    public function unitproductUnit()
    {
        return $this->belongsTo(Uint::class, 'id_unit');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }


}
