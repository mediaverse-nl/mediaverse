<?php

function minToHours($min)
{
    $seconds = $min ;
    $hours = floor($seconds / 3600);
    $seconds -= $hours * 3600;
    $minutes = floor($seconds / 60);
    $seconds -= $minutes * 60;

    $hours = $hours == 0 ? '00' : $hours;
    $seconds = $seconds == 0 ? '00' : ($seconds < 9 ? '0'.$seconds : $seconds );
    $minutes = $minutes == 0 ? '00' : ($minutes < 9 ? '0'.$minutes : $minutes);

    return "$hours:$minutes:$seconds";
}
