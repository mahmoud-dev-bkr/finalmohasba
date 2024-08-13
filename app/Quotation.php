<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
       'code', 'id_supplers','Date_start','Date_end','Date_Groce_Period','Note','Reviews','Attachments', 'id_Project', 'payment_terms','site_id','total', 'total_with_tax', 'tax_value', 'status','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
