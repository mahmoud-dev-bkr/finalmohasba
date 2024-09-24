<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
        'uint_id'
    ];

    // append SumPrice
    protected $appends = ['sum_price'];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    // get sum price
    public function getSumPrice()
    {
        return $this->price * $this->quantity;
    }
}
