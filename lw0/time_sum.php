<?php
function sumTime(string $oneTime, string $twoTime): string
{
    if ((strtotime($oneTime) === false) || (strtotime($twoTime) === false)) {
        return 'incorrect input';
    }
    $sumTimeString = date('H:i:s', strtotime($oneTime) + strtotime($twoTime));
    return $sumTimeString;
}
echo sumTime('15:15:15', '10:20:30');
