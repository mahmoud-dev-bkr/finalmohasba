<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManutOrder extends Model
{
    protected $table = "manu_orders";
    protected $fillable = [
        'Date', 'id_location',
        'id_Account','Des',
        'company_id',

    ];
    protected $hidden = [
    'updated_at	','	created_at',
    ];
}
