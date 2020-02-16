<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Clock_Hand_Angle_2</title>

</head>
<body>
<div class='container'>
    <h1 class="text-center">У дома часовник трака с лъскави стрелкички</h1>
    <img src="images/clock.png" class="rounded mx-auto d-block img-responsive" alt="image">
    <h3 class="text-center">I.Calculate the angle between minute and hour hands on a clock by entering a time
        below. </h3>
    <p>Please enter time as hour:minutes:seconds. ie: 12:30:00</p>
    <form method="get" action='index.php' id="form1">
        <div class='form-group'>
            <label for='time'>Let's count to:
                <input type="text" name="time" class="form-control-md">
            </label>
        </div>
        <button type="submit" name="submit" value="submit" class="btn-success" form="form1">Calculate angle!</button>
    </form>
    <h4 class="text-center">II.Calculate the time by entering an angle and time below. </h4>

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
</div>