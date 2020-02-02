<?php 

include('header.php');

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
echo clockHandAngle("12:00:00")."<br>";
echo clockHandAngle("3:00:00");
include('footer.php');

 ?>