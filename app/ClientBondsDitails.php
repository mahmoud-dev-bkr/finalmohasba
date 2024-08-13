<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientBondsDitails extends Model
{
    protected $table = "client_bonds_ditails";
    protected $fillable = [
        'code', 'id_customers','Date','id_Account','type','Note','Amount', 'PurchaseInvoices_id', 'clientbons_id', 'type_returns','company_id',
     ];
     protected $hidden = [
     'updated_at	','	created_at',
     ];
}
