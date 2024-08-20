<?php

namespace App;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

    use CreatedUpdatedBy;

     protected $fillable = [
        'site_id',
        'account_id_plus',
        'account_id_minus',
        'date',
        'Note',
        'company_id',
        'created_by',
        'updated_by',
    ];



    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function account_plus()
    {
        return $this->belongsTo(Account::class, 'account_id_plus');
    }

    public function account_minus()
    {
        return $this->belongsTo(Account::class, 'account_id_minus');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updated_by()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function InventoryDetails ()
    {
        return $this->hasMany(InventoryDetails::class);
    }

    
}
