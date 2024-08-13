<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    
    protected $fillable = ['organization_name', 'organization_creator', 'organization_industry', 'organization_size'];

}
