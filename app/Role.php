<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    public $timestamps = true;

    public function userRole()
    {
        return $this->hasMany('App\UserRole', 'role_id', 'id');
    }
}
