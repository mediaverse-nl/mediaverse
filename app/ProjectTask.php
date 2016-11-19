<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    protected $table = 'project_task';

    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
