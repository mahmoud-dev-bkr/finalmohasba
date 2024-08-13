<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplierbond extends Model
{
    protected $table = "suppliers_bonds";
    protected $fillable = [
        'code', 'id_supplers','Date','id_Account','type','Note','Amount', 'PurchaseInvoices_id', 'type', 'multi', 'status','company_id',
     ];
     protected $hidden = [
     '	updated_at	','	created_at',
     ];
}
