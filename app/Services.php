<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'code', 'id_supplers','Date_start','Date_end','Date_Groce_Period','Note','Reviews','Attachments', 'id_Project', 'payment_terms',
        'tax_value', 'total', 'total_with_tax', 'type', 'descount_with_premotion', 'site_id', 'done', 'old_balance', 'returns_id', 'total_b','company_id',
     ];
    protected $hidden = [
        'updated_at','	created_at',
    ];
}
