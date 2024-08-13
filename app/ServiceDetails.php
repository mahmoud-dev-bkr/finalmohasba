<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $table = 'service_details';
    protected $fillable = [
        'service_id',
        'price_unit_id',
        'withDescunt'  ,
        'price_before' ,
        'tax'          ,
        'tax_value'    ,
        'price_after'  ,
        'service_name',
        'type' => 0
    ];
}
