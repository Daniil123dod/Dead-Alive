<?php
function sumTime(string $oneTime, string $twoTime): string
{
    $sumTimeString = date('H:i:s', strtotime($oneTime) + strtotime($twoTime));
    return $sumTimeString;
}

echo sumTime('15:20:30', '10:20:30');
