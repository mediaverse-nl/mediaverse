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

    public function userSkill()
    {
        return $this->hasMany('App\UserSkill', 'user_id', 'id');
    }

    public function projectUser()
    {
        return $this->hasMany('App\ProjectUser', 'user_id', 'id');
    }

    public function projectTask()
    {
        return $this->hasMany('App\ProjectTask', 'user_id', 'id');
    }

    public function calendar()
    {
        return $this->hasMany('App\Calendar', 'user_id', 'id');
    }

    public function hasRole($role)
    {
        //reset value to array
        $role = collect($role)->toArray();

        //user roles
        $hasItem = collect(Auth()->user()->userRole()->pluck('role_id'))->toArray();

        //check if roles contains the access
        foreach ($role as $rol => $value){
            $role_id = Role::where('status', $value)->first();

            $status = in_array($role_id->id, $hasItem);

            if($status){
                return true;
            }
        }

        return false;
    }

}
