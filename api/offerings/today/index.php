<?php

$name = $_GET['name'];

date_default_timezone_set("America/Los_Angeles");
$offeringIds = array();
$offerings = array();
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

$sql="SELECT * FROM `rostero` WHERE `name` = '{$name}'";

$records=mysqli_query($connection, $sql);

while($event=mysqli_fetch_assoc($records)){

array_push($offeringIds, $event['id']);

}//end of while records

foreach ($offeringIds as $item){

$sql="SELECT * FROM `events` WHERE `id` = '{$item}'";

$records=mysqli_query($connection, $sql);

while($event=mysqli_fetch_assoc($records)){

if ($event['date'] == $date) {
$newEntry = array(
  "name" => $event['eventname'],
  "starttime" => $event['starttime'],
  "endtime" => $event['endtime'],
  "location" => $event['description'],
  "host" => $event['members']
);

array_push($offerings, $newEntry);
}

}//end of while records
}

header('Content-Type: application/json');
echo json_encode($offerings);
?>