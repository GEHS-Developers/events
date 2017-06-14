<html>

<?php


$adv = $_GET['adv'];

$lname = "Schedule";
date_default_timezone_set('America/Los_Angeles');
$hour = date('H', time());

if( $hour <= 11) {
  $timename = "Good Morning";
}
else if($hour > 11 && $hour <= 16) {
  $timename = "Good Afternoon";
}
else if($hour > 16 && $hour <= 24) {
  $timename = "Good Evening";
}



?>


  <head>
    <meta charset="UTF-8">
  
<title><?php echo $adv ?></title>


<!--JQuery Add-->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    
<!--Normalize CSS Add-->
<link rel="stylesheet" href="../css/normalize.css">

<link rel="shortcut icon" type="image/png" href="https://pbs.twimg.com/profile_images/655077375881773056/CQsVe9B8.png"/>

<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Fredoka+One" rel="stylesheet">


<!--Google Font - Open Sans - Add -->
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

<!--Bootstrap Add-->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

<!--My CSS Add-->


<style>

html {
  background-color: #333333;

}



p{

font-size:1.2em;
color:white;
font-family: 'Open Sans', cursive;
text-align:center;

}

#welcome{

font-size:4em;

}

#name{

font-family: 'Fredoka One', cursive;
font-size: 1.4em;

}

#event{

font-family: 'Fredoka One', cursive;
font-size: 1.4em;
}

#date{

font-family: 'Fredoka One', cursive;
font-size: 1.4em;
}

#time{

font-family: 'Fredoka One', cursive;
font-size: 1.4em;
}

#room{

font-family: 'Fredoka One', cursive;
font-size: 1.4em;
}



</style>    
    
    
  </head>




  <body>

<p id="welcome"><?php echo $timename." ".ucfirst($adv)?>.
<ul style="list-style-type:none">
<?php
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


$sql="SELECT * FROM `events` WHERE `advisor` = '{$adv}' ORDER BY sunix;";

$records=mysqli_query($connection, $sql);

$currentdate = date("Y-m-d");



while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];









$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));


if($today>=$currentdate){









?>

<li><p><span id="name"><?php echo $eventnow['members']?></span> booked <span id="event"><?php echo $eventnow['eventname']?></span> on <span id ="date"><?php echo $eventnow['date']?></span> from <span id="time"><?php echo $stimedisplay?></span> to <span id="time"><?php echo $stimedisplay2?></span> in <span id="room"><?php echo $eventnow['description']?></span> <p></li>

<?php

}// end if if time



} //end of while time


?>

    </ul>
 



    
  </body>


</html>