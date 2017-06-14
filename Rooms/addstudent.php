<?php

function insert($name,$advisor){



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




$sql = "INSERT INTO `students` (`name`,`advisor`) VALUES ('$name','$advisor')";
$connection->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Posted!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Posted!
    </div>

    <div class="subtitle">
        The clip has been added!
</div>

 <div class="buttons">
        <a class="button" href="http://events.gibsonek.org/clipboard.php?id=<?php echo $id?>">Go Back</a>
    </div>
   
</div>
    
    
    
    
    
  </body>
</html>


<?php

} // end of insert kid function





insert($_POST['name'],$_POST['advisor']);




?>