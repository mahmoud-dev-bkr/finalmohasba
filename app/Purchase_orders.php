<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_orders extends Model
{
    protected $fillable = [
       'code', 'id_supplers','Date_start','Date_end','Date_Groce_Period','Note','Reviews','Attachments', 'id_Project', 'payment_terms','site_id','total', 'total_with_tax', 'tax_value', 'status','comapny_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
