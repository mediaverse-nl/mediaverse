<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    protected $table = 'project_images';

    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo('App\ProjectImages');
    }
}
