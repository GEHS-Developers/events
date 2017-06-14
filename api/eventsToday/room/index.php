<?php

$room = $_GET['room'];

date_default_timezone_set("America/Los_Angeles");
$events = array();
$date = date('Y-m-d');

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

$sql="SELECT * FROM `events` WHERE `date` = '{$date}' AND `description` = '{$room}'";

$records=mysqli_query($connection, $sql);

while($event=mysqli_fetch_assoc($records)){

$newEntry = array(
  "date" => $event['date'],
  "name" => $event['eventname'],
  "starttime" => $event['starttime'],
  "endtime" => $event['endtime'],
  "location" => $event['description'],
  "creator" => $event['members']
);

array_push($events, $newEntry);

}//end of while records
header('Content-Type: application/json');
echo json_encode($events);
?>