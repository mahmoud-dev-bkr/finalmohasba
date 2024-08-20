<?php

namespace App;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Model;

class InventoryDetails extends Model
{
    use CreatedUpdatedBy;
    protected $table = 'inventory_details';

    protected $fillable = ['inventory_id', 'site_id', 'product_id', 'current_qty', 'actual_qty', 'troupes', 'median_value', 'created_by', 'updated_by'];
}
