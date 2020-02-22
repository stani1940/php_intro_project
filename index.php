<?php
include('header.php');
?>
    <form method="get" action="" id="form1">
        <div class='form-group'>
            <label for='time'>Let's count to:
                <input type="text" name="time" class="form-control-md">
            </label>
        </div>
        <button type="submit" name="submit" value="submit" class="btn-success" form="form1">Calculate angle!</button>
    </form>
<?php
if (isset($_GET['submit']) && !empty($_GET['time'])) {
    $time = strip_tags(htmlspecialchars(trim($_GET['time'])));
    //validate time input
    if (preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $time)) {
        echo "The angle between hands is " . clockHandAngle($time) . " degrees<br>";
    } else {
        echo "Please enter valid time format";
    }
}
function clockHandAngle($time)
{
    $time = explode(':', $time);
    $hours = $time[0];
    $minutes = $time[1];
    $seconds = $time[2];

    if ($hours > 12) {
        $hours -= 12;
    }
    // Formula for finding angle
    $angle = abs(30 * $hours + 0.5 * $minutes + ($seconds / 120) - (6 * $minutes + 0.1 * $seconds));
    // Return the smaller angle
    return min($angle, 360 - $angle);
}

?>
    <h4>II.Calculate the time by entering an angle and time below. </h4>

    <form method="get" action='functions.php' id="form2">
        <div class='form-group'>
            <label for='Angle'>Enter angle:
                <input type="text" name="angle" class="form-control-md">
            </label>
            <label for='timeNow'>Enter timeNow:
                <input type="text" name="timeNow" class="form-control-md">
            </label>
        </div>
        <button type="submit" name="submit_2" value="submit" class="btn-success" form="form2">Calculate the time
        </button>
    </form>
<?php


//TESTS
//For angle = 0 and timeNow = "12:00:00", the output should be clockHandAngle2(angle, timeNow) = "12:00:00".

//The clock starts at an angle of 0 degrees, at 12:00:00.


//For angle = 0 and timeNow = "12:00:01", the output should be clockHandAngle2(angle, timeNow) = "1:05:27".

//After 12:00:00, the hands won't reach a 0 degree angle until the next hour, at 1:05:27.


//For angle = 30 and timeNow = "12:54:17", the output should be clockHandAngle2(angle, timeNow) = "1:00:00".

include('footer.php');
?>