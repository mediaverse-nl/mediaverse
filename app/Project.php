<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
////        'name', 'customer', 'price',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
////        'password', 'remember_token',
//    ];

    protected $table = 'project';

    public $timestamps = true;

    public function projectUser()
    {
        return $this->hasMany('App\ProjectUser', 'project_id', 'id');
    }

    public function projectTask()
    {
        return $this->hasMany('App\ProjectTask', 'project_id', 'id');
    }

}
