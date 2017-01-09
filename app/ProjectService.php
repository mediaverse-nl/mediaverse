<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectService extends Model
{
    protected $table = 'project_service';

    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
