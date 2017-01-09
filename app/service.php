<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    public $timestamps = false;

    public function projectService()
    {
        return $this->hasMany('App\ProjectService', 'service_id', 'id');
    }
}
