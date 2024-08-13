<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    // table = role_user
    protected $table = 'role_user';
    // fillable in this table 
    protected $fillable = ['role_id', 'user_id', 'user_type', 'comapny_id'];
}
