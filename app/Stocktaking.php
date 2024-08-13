<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocktaking extends Model
{
    protected $table = 'stocktakings';
    protected $fillable = [
        'date',
        'description',
        'cost_calculation',
        'revenue_account',
        'company_id',
     ];
    protected $hidden = [
        'updated_at','	created_at',
    ];
}

