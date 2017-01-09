<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    protected $table = 'project_skill';

    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function skill()
    {
        return $this->belongsTo('App\Skill');
    }
}
