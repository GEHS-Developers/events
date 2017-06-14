<?php

function insert($newsql){




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




$sql = $newsql;
$connection->query($sql);

?>

<!DOCTYPE html>
<html>

<body>

<p>Changes made</p>

</body>

</html>


<?php

} // end of insert kid function





insert($_POST['sql']);




?>