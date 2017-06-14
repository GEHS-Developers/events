<html>

<?php


$loc = $_GET['loc'];

$lname = "Schedule";

switch($loc) {

case "200":
$lname = "Room 200";
break;


case "201":
$lname = "Room 201";
break;


case "203":
$lname = "Room 203";
break;


case "204":
$lname = "Room 204";
break;


case "art":
$lname = "Art Space";
break;


case "commons":
$lname = "Commons";
break;


case "conference":
$lname = "Conference Room";
break;


case "kitchen":
$lname = "Kitchen";
break;


case "office":
$lname = "Main Office";
break;

case "studio":
$lname = "Recording Studio";
break;

case "science":
$lname = "Science Space";
break;

case "stage":
$lname = "Stage";
break;

case "tech":
$lname = "Tech Space";
break;

case "wood":
$lname = "Wood Shop";
break;

}



?>


  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
<title><?php echo $lname ?> Schedule</title>


<!--JQuery Add-->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!--My JS Add-->
<script src="../script.js"></script>
    
<!--Normalize CSS Add-->
<link rel="stylesheet" href="../css/normalize.css">

<link rel="shortcut icon" type="image/png" href="https://pbs.twimg.com/profile_images/655077375881773056/CQsVe9B8.png"/>



<!--Google Font - Open Sans - Add -->
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

<!--Bootstrap Add-->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

<!--My CSS Add-->
<link rel="stylesheet" type="text/css" href="../style2.css">

    
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86389001-1', 'auto');
  ga('send', 'pageview');



</script>
 
 
<meta http-equiv="refresh" content="60" >   
    
    
  </head>




  <body>

<div id ="all">
<span>
<div id="now">


</div>
</span>

    <div class="container">
  <a href="http://events.gibsonek.org/signin.php?loc=<?php echo $loc?>"><div class="navbar">
    <span>Gibson Ek Schedule: <?php echo $lname ?></span>
  </div>
  
  <div class="header">
    <div class="color-overlay">
      <div class="day-number"></div>

      <div class="date-right">
        <div class="day-name"></div>
        <div class="month"></div>
        <span><img id="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=315x315&data=events.gibsonek.org/Rooms/new/new.php?loc=<?php echo $loc ?>"></span>
      </div>
    </div>
  
  </div></a>
  
  <div class="timeline">
    <ul id = "l">

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


$sql="SELECT * FROM `events` WHERE `description` = '{$loc}' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);

$currentdate = date("Y-m-d");



while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];



$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));



$length = (strtotime($date2) - strtotime($date))/60;







if(date("H:i:s",strtotime("-$length minutes"))<$eventnow['starttime']&&$today==$currentdate){










?>

     <li>
        <div class="bullet <?php echo $eventnow['color'] ?>"></div>
        <div class="time"><?php echo $stimedisplay ?></div>
        <div class="desc">
          <h3><?php echo $eventnow['eventname'] ?></h3>
          <h4>This event ends at <?php echo $stimedisplay2?></h4>
        </div> 
      </li>

<?php

}// end if if time



} //end of while time


?>

    </ul>
  </div>  
</div>


</div>

    
  </body>


</html>