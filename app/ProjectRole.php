<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectRole extends Model
{
    protected $table = 'project_role';

    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
