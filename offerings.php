<html>

<head>

<title>Offerings Today</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
          
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Baloo+Bhaina|Montserrat|Open+Sans|Raleway:400,700" rel="stylesheet">

<script>

$(document).ready(function(){

$("li").addClass("animated bounceInUp");


function gothere(){

window.location.href = "http://events.gibsonek.org/printoffering.php?date=<?php echo  $_GET['date']; ?> ";

  

}

});


</script>


<style>

#todayo{
  text-align: center;
  font-size: 3em;
}

.title{
  text-align:center;
  font-size:3.3em;
  font-family: 'Baloo Bhai', cursive;
  margin-top: 28%;
  margin-bottom: -0.5em;
}

#eventname{
  font-family: 'Montserrat', sans-serif;
  font-size: 1.4em;
  text-align: left;
  display:relative;
  right:6em;
}

#desc{
  font-family: 'Raleway', sans-serif;
  margin-top:-1em;
  text-align: left;
}


.qr{
  width: 12em;
  float: right;
position:relative;
  bottom:-1.5em;
}


#bio{
font-family: 'Raleway', sans-serif;
font-size:1.3em;

}

#logo{

width:90%;
margin-bottom:4%;
display: block;

}

#header{

position:fixed;
background-color:rgba(255,255,255,0.9);
width:100%;
height:14%;
 z-index: 999;
}


hr{

margin-bottom:5%;
margin-top:3%;

}

#print{

margin-top:15%;

}

#whichweek{

  font-family: 'Baloo Bhai', cursive;
  font-size:2em;
  text-algin:center;

}

</style>


</head>



<body>

<div id="header">

<div class="row">

<div class="col s5">

<img id="logo" src="http://i65.tinypic.com/15n9fk3.jpg">

</div>

<div class="col s2">

<a href="http://events.gibsonek.org/printoffering.php?date=<?php echo $_GET['date']?>" class="waves-effect waves-light btn" id="print" onClick="gothere()">PRINT</a>

</div>

  

<div class="col s5">

<p id="whichweek">Week of <?php

date_default_timezone_set("America/Los_Angeles");


$currentdate = $_GET['date'];

echo date("F jS, Y", strtotime($currentdate));

?>  </p>

</div>

</div>

</div>



<div class="row">

<div class="col s4">
<p class="title">9am</p> 

<ul class="events">
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


$sql="SELECT * FROM `events` WHERE `offering` = 'yes' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];


$sunux1 = $eventnow['sunix']; 
$eunix1 = $eventnow['eunix']; 






$length = (strtotime($date2) - strtotime($date))/60;


$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));


$currentdate = $_GET['date'];

if($currentdate=="today"){

$currentdate = date("Y-m-d");


}



if("09:00:00"==$eventnow['starttime']&&$today==$currentdate){




?>
<li>
      <div class="row">
      <div class="col s5">
        <p id ="eventname"><?php echo $eventnow['eventname']?></p>
        <p id ="desc">Hosted by <b><?php echo $eventnow['members']?></b> in <b><?php echo $eventnow['description'] ?></b> </p>
        </div>
        <div class="col s7">
          <a href="http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"></a>
        </div>
        </div>
      </li>

<?php

}// end if if time



} //end of while time


?>


</ul>





</div>




<div class="col s4">
<p class="title">10am</p> 

<ul class="events">
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


$sql="SELECT * FROM `events` WHERE `offering` = 'yes' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];


$sunux1 = $eventnow['sunix']; 
$eunix1 = $eventnow['eunix']; 






$length = (strtotime($date2) - strtotime($date))/60;


$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));


$currentdate = $_GET['date'];

if($currentdate=="today"){

$currentdate = date("Y-m-d");


}



if("10:00:00"==$eventnow['starttime']&&$today==$currentdate){




?>
<li>
      <div class="row">
      <div class="col s5">
        <p id ="eventname"><?php echo $eventnow['eventname']?></p>
        <p id ="desc">Hosted by <b><?php echo $eventnow['members']?></b> in <b><?php echo $eventnow['description'] ?></b> </p>
        </div>
        <div class="col s7">
          <a href="http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"></a>
        </div>
        </div>
      </li>

<?php

}// end if if time



} //end of while time


?>


</ul>





</div>

<div class="col s4">
<p class="title">11am</p>  

<ul class="events">
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


$sql="SELECT * FROM `events` WHERE `offering` = 'yes' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);




while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];


$sunux1 = $eventnow['sunix']; 
$eunix1 = $eventnow['eunix']; 






$length = (strtotime($date2) - strtotime($date))/60;


$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));

$currentdate = $_GET['date'];

if($currentdate=="today"){

$currentdate = date("Y-m-d");


}



if("11:00:00"==$eventnow['starttime']&&$today==$currentdate){




?>
<li>
      <div class="row">
      <div class="col s5">
        <p id ="eventname"><?php echo $eventnow['eventname']?></p>
        <p id ="desc">Hosted by <b><?php echo $eventnow['members']?></b> in <b><?php echo $eventnow['description'] ?></b> </p>
        </div>
        <div class="col s7">
          <a href="http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"></a>
        </div>
        </div>
      </li>

<?php

}// end if if time



} //end of while time


?>



</div>

</div>

<div class="row">
<hr>

<?php

function getWeekday($date) {
    return date('w', strtotime($date));
}


if(getWeekday($_GET['date'])==1){

?>

<div class="col s6">

<p class="title">Monday/Friday</p> 

<ul class="events">

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


$sql="SELECT * FROM `events` WHERE `offering` = 'yes' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);




while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];


$sunux1 = $eventnow['sunix']; 
$eunix1 = $eventnow['eunix']; 






$length = (strtotime($date2) - strtotime($date))/60;


$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));

$currentdate = $_GET['date'];

if($currentdate=="today"){

$currentdate = date("Y-m-d");


}



if("13:35:00"==$eventnow['starttime']&&$today==$currentdate){




?>
<li>
      <div class="row">
      <div class="col s6">
        <p id ="eventname"><?php echo $eventnow['eventname']?></p>
        <p id ="desc">Hosted by <b><?php echo $eventnow['members']?></b> in <b><?php echo $eventnow['description'] ?></b> </p>
        <p id ="bio"><?php echo $eventnow['bio']?></p>
        </div>
        <div class="col s5">
          <a href="http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"></a>
        </div>
        </div>
      </li>

<?php

}// end if if time



} //end of while time


?>




</ul>

</div>


<div class = "col s6">
<p class="title">Tuesday/Thursday</p> 
<ul class="events">

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


$sql="SELECT * FROM `events` WHERE `offering` = 'yes' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);




while($eventnow=mysqli_fetch_assoc($records)){

$date = $eventnow['starttime']; 
$date2 = $eventnow['endtime']; 

$today = $eventnow['date'];


$sunux1 = $eventnow['sunix']; 
$eunix1 = $eventnow['eunix']; 






$length = (strtotime($date2) - strtotime($date))/60;


$stimedisplay = date('h:i a', strtotime($date));
$stimedisplay2 = date('h:i a', strtotime($date2));

$currentdates = $_GET['date'];

if($currentdates=="today"){

$currentdates = date("Y-m-d"); 



}


$currentdate = date('Y-m-d', strtotime('+1 days', strtotime($currentdates)));



if("13:35:00"==$eventnow['starttime']&&$today==$currentdate){




?>
<li>
      <div class="row">
      <div class="col s7">
        <p id ="eventname"><?php echo $eventnow['eventname']?></p>
        <p id ="desc">Hosted by <b><?php echo $eventnow['members']?></b> in <b><?php echo $eventnow['description'] ?></b> </p>
        <p id ="bio"><?php echo $eventnow['bio']?></p>
        </div>
        <div class="col s5">
          <a href="http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"></a>
        </div>
        </div>
      </li>

<?php

}// end if if time



} //end of while time


?>





</ul>

</div>


</div> 

<?php

}//end of if today is monday

?>

</body>



</html>