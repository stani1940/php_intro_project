<?php
include('header.php');
    if (isset($_GET['submit']) && !empty($_GET['time'])) {
        $time = trim($_GET['time']);
        //validate time input
        if (preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $time)) {

            echo "The angle between hands is " . clockHandAngle($time) . " degrees<br>";
            //echo clockHandAngle("3:00:00");
        }else{
            echo "Please enter valid time format";
        }
    }
function clockHandAngle($time) {
    $time = explode(':', $time);
    $hours = $time[0];
    $minutes = $time[1];
    $seconds = $time[2];
    
if($hours > 12) {
        $hours -= 12;
    }
    // Formula for finding angle
    $angle = abs(30 * $hours + 0.5 * $minutes + ($seconds / 120) - (6 * $minutes + 0.1 * $seconds));
    // Return the smaller angle
    return min($angle, 360 - $angle);
}


function clockHandAngle2($angle, $timeNow) {
    $timeNow = explode(':', $timeNow);
    $hours = $timeNow[0];
    $minutes = $timeNow[1];
    $seconds = $timeNow[2];

    $e = 0.09;
    while (abs(clockHandAngle($hours . ':' . $minutes . ':' . $seconds) - $angle) > $e) {
        $seconds += 1;
        if($seconds >= 60) {
            $seconds = 0;
            $minutes += 1;
        }
        if($minutes >= 60) {
            $minutes = 0;
            $hours += 1;
        }
        // Check if hours are greater than 12, so the function can work with 24-hour clock
        if($hours > 12) {
            $hours -= 12;
        }
    }
    // Format the time
    $time = strtotime($hours . ':' . $minutes . ':' . $seconds);

    return date('g:i:s', $time);
        
      
    }
//echo clockHandAngle2(0, "12:00:00");
include('footer.php');