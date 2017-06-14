<html>
  <head>
    <meta charset="UTF-8">
    <title>Gibson Ek Schedule</title>

<!--JQuery Add-->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!--My JS Add-->
<script src="script.js"></script>
    


<link rel="shortcut icon" type="image/png" href="https://pbs.twimg.com/profile_images/655077375881773056/CQsVe9B8.png"/>



<!--Google Font - Open Sans - Add -->
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

<!--Bootstrap Add-->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

<!--My CSS Add-->
<link rel="stylesheet" type="text/css" href="style.css">

    
    
    
  </head>



  <body>

<div id ="all">
<span>
<div id="now">


</div>
</span>

    <div class="container">
  <div class="navbar">
    <span>Gibson Ek Schedule</span>
  </div>
  
  <div class="header">
    <div class="color-overlay">
      <div class="day-number"></div>
      <div class="date-right">
        <div class="day-name"></div>
        <div class="month"></div>
      </div>
    </div>
  
  </div>
  
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


$sql="SELECT * FROM `events` WHERE `description` = 'all' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);

$currentdate = date("Y-m-d");



while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];


$sunux1 = $eventnow['sunix']; 
$eunix1 = $eventnow['eunix']; 






$length = (strtotime($date2) - strtotime($date))/60;


$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));


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