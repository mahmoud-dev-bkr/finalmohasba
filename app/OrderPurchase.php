<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPurchase extends Model
{
    protected $table = "order_purchase";
    protected $fillable = [
        'id_invoice','id_supplerce','Qun','id_product','company_id',
    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}

