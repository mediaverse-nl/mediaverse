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

    public static function calendarEventColors(){
        return $EventColors = collect([
            ['status' => 'rooster', 'color' => '#ff9966'],
            ['status' => 'project', 'color' => '#66ccff'],
            ['status' => 'ziek', 'color' => '#333'],
            ['status' => 'afwezig', 'color' => '#333'],
            ['status' => 'afspraak' ,'color' => '#333'],
        ]);
    }
}
