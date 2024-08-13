<?php

namespace App;
use App\Uint;
use Illuminate\Database\Eloquent\Model;

class ProductUintPrices extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function unit()
    {
        return $this->belongsTo(Uint::class, 'unit_id', 'id');
    }
    
    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id', 'id');
    }
    

}
