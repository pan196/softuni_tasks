<?php
$date = getdate();

//getting the day of the year
$days = $date['yday'];

//checking if the year is leap
$yearDays = 365;
if (date('L') == 1){
    $yearDays = 366;
}

//checking if daylight saving time
$dayHours = 24;
if (date('I') == 1){
    $dayHours = 23;
}

//take how many days have until new year
$leftDays = $yearDays - $days;

//taking the hours, minutes and seconds of te current datetime
$leftHoursInDay = $dayHours - $date['hours'];
$leftMinutesInDay = 60 - $date['minutes'];
$leftSecondsInDay = 60  - $date['seconds'];



//sum of the hours, minutes and seconds until new year
$hours = $leftDays * $dayHours + $leftHoursInDay; //left days multiplied with 24 plus left hours of the current date
$minutes = ($leftDays * $dayHours) * 60 + (($dayHours - $date['hours']) * 60) + (60 - $date['minutes']);//same as hours but converting in minutes
$seconds = (($leftDays * $dayHours) * 60) * 60 + (((24 - $date['hours']) * 60) * 60) + ((60 - $date['minutes']) * 60) + (60 - $date['seconds']);//in seconds

//days:hours:minutes:seconds until new year
$DHMS = $leftDays . ":" . $leftHoursInDay . ":" . $leftMinutesInDay . ":" . $leftSecondsInDay;

echo "Hours until new year : " . $hours . "\n";
echo "Minutes until new year : " . $minutes . "\n";
echo "Seconds until new year : " . $seconds . "\n";
echo "Days:Hours:Minutes:Seconds " . $DHMS . "\n";
