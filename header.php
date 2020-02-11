<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Clock_Hand_Angle_2</title>

</head>
<body>
	<div class='container'>
	 	<h1 class="text-center">У дома часовник трака с лъскави стрелкички</h1>
        <h3 class="text-center">Calculate the angle between minute and hour hands on a clock by entering a time below. </h2>
        <p>Please enter time as hour:minutes:seconds. ie: 12:30:00</p>
        <form method="get" action='index.php'>
            <div class='form-group'>
              <label for='time'>Let's count to:</label>
              <input  type="text" name="time" class="form-control-md" >
            </div>
            <button type="submit" name="submit" value="submit" class="btn-success">Calculate angle!</button>
        </form>