<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManuProductOrder extends Model
{
    protected $table = "manu_product_orders";
    protected $fillable = [
        'id_product', 'id_Manu_order',
        'Qun','company_id',
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
