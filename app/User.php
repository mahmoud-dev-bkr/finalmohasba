<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;

    use Notifiable;
    protected $table = "users";
    protected $fillable = [
        'name_en', 'email', 'address', 'Tel_1', 'branch_id', 'role_id','site_id', 'pos', 'descount_limit','password', 'account_id', 'created_at', 'updated_at','company_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class)->first();
    }

    public function hasRole($role)
    {
        // dd($role);
        if(is_string($role)) {
            return $this->role->contains('name' , $role);
        }

        return !! $role->intersect($this->role)->count();
    }
    public static function canPerission($permission)
    {
        $role_user = RoleUser::where('user_id', auth()->user()->id)->first();
        $role = Role::where('id', $role_user->role_id)->first();
        $permations =  $role->permission()->where('name', $permission)->first();
        if ($permations) {
            return true;
        }
        return false;
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    // public function sites()
    // {
    //     $sites = UserSite::where('user_id', $this->id)->get()->pluck('site_id')->toArray();
    //     return Site::whereIn('id', $sites)->get();
    // }
}
