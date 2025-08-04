<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSite extends Model
{
    protected $fillable = [
        'user_id',
        'site_id',
    ];
    protected $hidden = [
        'updated_at	',
        'created_at',
    ];

    public function site()
    {
        return $this->belongsTo('App\Site');
    }
}
