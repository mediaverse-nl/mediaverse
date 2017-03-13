<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
