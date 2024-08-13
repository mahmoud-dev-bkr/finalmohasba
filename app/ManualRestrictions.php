<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ManualRestrictions extends Model
{
    use Notifiable;
    protected $table = "manual_restrictions";
    protected $fillable = [
        'note', 'date','site_id','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];



}
