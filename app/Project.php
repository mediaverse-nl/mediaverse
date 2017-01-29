<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function projectService()
    {
        return $this->hasMany('App\ProjectService', 'project_id', 'id');
    }

    public function projectSkill()
    {
        return $this->hasMany('App\ProjectSkill', 'project_id', 'id');
    }

    public function projectTask()
    {
        return $this->hasMany('App\ProjectTask', 'project_id', 'id');
    }

    public function projectImage()
    {
        return $this->hasMany('App\ProjectImages', 'project_id', 'id');
    }

    public function projectRole()
    {
        return $this->hasMany('App\ProjectRole', 'project_id', 'id');
    }

    public function invoice()
    {
        return $this->hasOne('App\Invoice', 'project_id', 'id');
    }

    public static function taskTimer($timestamp, $oldstamp)
    {
        $startTime = Carbon::parse($timestamp);
        $finishTime = Carbon::now();
        $totalDuration = $finishTime->diffInSeconds($startTime);

        $diffrence = $oldstamp + $totalDuration;

        return $diffrence;
    }

}
