<?php
$month = date("F"); //taking the mount in text form
$daysInMount = date("t"); //taking the numbers of days in the mount
$year = date("Y"); //taking the year - four digit

//loop from first to last day in the current month
for($i = 1; $i <= $daysInMount; $i++) {
    //Unix timestamp of the date
    $date = strtotime("$i $month $year");
    //checking if the day is Sunday - "l" is the day of the week in text format
    if(date("l", $date) === "Sunday") {
        echo date("jS F, Y", $date) . "\n"; //"j" takes the day in number, "S" prints the suffix for the "j"
    }
}