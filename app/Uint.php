<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uint extends Model
{
    protected $fillable = [
        'name','description','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_unit');
    }

    public function productUnits()
    {
        return $this->hasMany(ProductUint::class, 'id_unit');
    }
}
