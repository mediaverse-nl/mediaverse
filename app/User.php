<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public $timestamps = true;

    public function userRole()
    {
        return $this->hasMany('App\UserRole', 'user_id', 'id');
    }

    public function projectUser()
    {
        return $this->hasMany('App\ProjectUser', 'user_id', 'id');
    }

    public function hasRole($role)
    {
        $role_id = Role::where('status', $role)->first();

        $status = Auth()->user()->userRole()->where('role_id', $role_id->id)->exists();

        if($status){
            return true;
        };

        return false;
    }

}
