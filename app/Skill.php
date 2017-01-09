<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';

    public $timestamps = false;

    public function projectSkill()
    {
        return $this->hasMany('App\ProjectSkill', 'skill_id', 'id');
    }

}
