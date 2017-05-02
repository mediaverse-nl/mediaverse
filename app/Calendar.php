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
            ['status' => 'rooster', 'color' => '#66b3ff'],
            ['status' => 'afspraak', 'color' => '#66ff66'],
            ['status' => 'project', 'color' => '#ffb366'],
            ['status' => 'ziek', 'color' => '#ffff66'],
            ['status' => 'afwezig', 'color' => '#ff66ff'],
        ]);
    }
}
