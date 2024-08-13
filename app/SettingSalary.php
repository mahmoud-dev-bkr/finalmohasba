<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingSalary extends Model
{
    protected $table = "setting_salaries";
    protected $fillable = [
        'day', 'last_date','company_id',
    ];
    protected $hidden = [
    '	updated_at	','	created_at',
    ];
}
