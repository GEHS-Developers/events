<?php

date_default_timezone_set("America/Los_Angeles");

function roomTaken($name, $time){
  //Make the time look all pretty
  $formatTime = date("g:i a", strtotime($time));

// And now display that HTML!
  ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Room Taken!</title>
	<link href="newevent.css" rel="stylesheet">
</head>
<body>
	<div class="text-wrapper">
		<div class="title" data-content="404">
			Room taken!
		</div>
		<div class="subtitle">
			Taken by <?php echo $name ?>. It will be available at <?php echo date('H:ia', $time); ?>.
		</div><br>
		<div class="buttons">
			<a class="button" href="javascript:history.go(-1)">Try it again</a>
		</div>
	</div>
</body>
</html>

<?php
}

function eventMade($url){
  ?>
  <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Event Added!</title>
	<link href="newevent.css" rel="stylesheet">
</head>
<body>
	<div class="text-wrapper">
		<div class="title" data-content="404">
			Event Added!
		</div>
		<div class="subtitle">
			It's on the schedule. You're booked!<br>
			<div class="buttons">
				<a class="button" href="<?php echo $url?>">Add to Google Calendar</a>
			</div>
		</div>
	</div>
</body>
</html>
  <?php
}


function newEvent($date, $startingTime, $endingTime, $name, $room, $material, $members, $offering){

//Make sure we don't get any SQL errors
$room = str_replace("'", "", $room);
$material = str_replace("'", "", $material);
$name = str_replace("'", "", $name);

//If no room, which shouldn't happen...but just in case
if($room == "") {
  $room = "None";
}

//If no material is inputed, which nobody does anyway ;)
if(strlen($material)==0){
  $material = rand();
}

//Convert the event's time into UNIX time, for checking availability
$startingTimeUNIX = strtotime($date . " " . $startingTime);
$endingTimeUNIX = strtotime($date . " " . $endingTime);

//Let's get that juicy server information in here!
$servername = "localhost";
$username = "josfei6_ge";
$password = "gibsonek";
$dbname = "josfei6_ge";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}

//Allow SQL commands...anywhere!
global $mysqli;

//What we want to pick out
$sql= "SELECT * FROM `events` WHERE `description` = '$room' AND `date` = '$date';";
$records=mysqli_query($connection, $sql);


//While we circulate through all the records
while($event=mysqli_fetch_assoc($records)){

  //Another event being checked!
  $eventsChecked = $eventsChecked + 1;

//if new event has same start and ending time as existing event
if($startingTimeUNIX==$event['sunix'] && $endingTimeUNIX==$event['eunix']){
  roomTaken($event['members'],$event['eunix']);
  die;
 }


//if a new event is before an existing one
if($startingTimeUNIX<=$event['sunix'] && $startingTimeUNIX<=$event['eunix'] && $endingTimeUNIX<=$event['sunix'] && $endingTimeUNIX<=$event['eunix']){
  //This one is all good!
}

//if a new event is after an existing one
elseif($startingTimeUNIX>=$event['sunix'] && $startingTimeUNIX>=$event['eunix'] && $endingTimeUNIX>=$event['sunix'] && $endingTimeUNIX>=$event['eunix']){
  //This one is all good!
}


else{
  roomTaken($event['members'],$event['eunix']);
  die;
}


} //end of while browsing the records

//This code will excecute if there are no errors!


//Make the event ID:
$eventID = rand();

//The big old SQL statement if the event passes
$sql = "INSERT INTO `events` (`id`,`date`,`starttime`, `endtime`, `eventname`, `description`, `material`, `color`, `members`, `advisor`, `sunix`, `eunix`, `offering`)
VALUES ('$eventID','$date','$startingTime', '$endingTime', '$name','$room','$material', 'orange', '$members', '$advisor', '$startingTimeUNIX','$endingTimeUNIX', '$offering')";

//Add the event to the server
$connection->query($sql);

//Create the Google Calendar Link
$dateCalendar = str_replace('-', '', $date);
$startTimeCalendar= str_replace(':', '', $startingTime);
$endTimeCalendar= str_replace(':', '', $endingTime);
$locationCalendar = preg_replace('/\s+/', '+', $room);
$nameCalendar = str_replace('/\s+/', '+', $name);

$calendarURL = "https://calendar.google.com/calendar/render?action=TEMPLATE&text=" . $nameCalendar . "&dates=" . $dateCalendar . "T" . $startTimeCalendar . "00%2F" . $dateCalendar . "T" . $endTimeCalendar . "00&amp;location=" . $locationCalendar;


eventMade($calendarURL);


} //end of newEvent function

newEvent($_POST['dates'],$_POST['startingtime'],$_POST['endingtime'],$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


?>