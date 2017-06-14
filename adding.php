<?php

function insert($name,$location){

date_default_timezone_set('America/Los_Angeles');


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

date_default_timezone_set("America/Los_Angeles");

global $mysqli;


$timestamp=date("Y-m-d H:i:s");


$sql = "INSERT INTO `personal` (`name`, `timestamp`, `location`) VALUES ('$name','$timestamp','$location')";
$connection->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Check In!</title>
    
    
   
    
<meta http-equiv="refresh" content="0; URL=' http://events.gibsonek.org/Rooms/view.php?loc=<?php echo $location?>'" />

    
    
  </head>


</html>


<?php

} // end of insert kid function





insert($_POST['nameofperson'],$_POST['where']);




?>