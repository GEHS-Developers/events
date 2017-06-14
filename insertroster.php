<?php

function insert($id,$name,$advisor){

if($_POST['over']=="yes"){



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

$sql = "INSERT INTO `rostero` (`id`,`name`) VALUES ('$id','$name')";
$connection->query($sql);



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Booked!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
       <?php echo $name ?> added.
    </div>

    <div class="subtitle">
        This student has been added to your offering.

   
</div>
    
    
    
    
    
  </body>
</html>

<?php

die;


}


if($name==""){

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mmm.</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Hmmm.
    </div>

    <div class="subtitle">
        We did not get a name. Try again.

   
</div>
    
    
    
    
    
  </body>
</html>


<?php

die;


}



$students = 0;


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


$sql="SELECT * FROM `rostero` WHERE `id` = '$id';";

$records=mysqli_query($connection, $sql);





while($now=mysqli_fetch_assoc($records)){




if($now['name']==$name){

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Booked!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        You're added.
    </div>

    <div class="subtitle">
        You're signed up for this offering. Enjoy.

   
</div>
    
    
    
    
    
  </body>
</html>


<?php

die;


}



$students = $students + 1;






} // end of inside while records





$sql="SELECT * FROM `events` WHERE `id` = '$id'";

$records=mysqli_query($connection, $sql);


$limit = 0;

while($eventnow=mysqli_fetch_assoc($records)){

$limit = $eventnow['limit'];

$whocreated = $eventnow['members'];


}// end of while records outside


if($limit <= $students){

if($limit==0){

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Booked!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Go speak with <?php echo $whocreated ?> to sign up for this offering.
    </div>

    <div class="subtitle">
        What are you waiting for?

   
</div>
    
    
    
    
    
  </body>
  
  </html>


<?php

die;

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Booked!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Offering Full!
    </div>

    <div class="subtitle">
        Sorry. Try another. This one is full. 

   
</div>
    
    
    
    
    
  </body>
  
  </html>




<?php

die;

}




$sql = "INSERT INTO `rostero` (`id`,`name`,`advisor`) VALUES ('$id','$name','$advisor')";
$connection->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Booked!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        You're added!
    </div>

    <div class="subtitle">
        You're signed up for this offering. Enjoy!

   
</div>
    
    
    
    
    
  </body>
</html>


<?php

} // end of insert kid function





insert($_POST['id'],$_POST['name'],$_POST['advisor']);




?>