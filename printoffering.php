<html>

<head>

<title>Print Offerings</title>

<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<script>

window.print();


</script>


<style>

.qr{
width:85%;


}

#eventname{

font-size:1.7em;
font-family: 'Montserrat', sans-serif;

}

#weekof{

font-family: 'Montserrat', sans-serif;
text-align:center;

}

.timeslot{

text-align:center;
font-family: 'Montserrat', sans-serif;
font-size:2em;
margin-top:1.1em;

}

</style>


</head>




<body>
<p id="weekof">Offerings for week of <?php

date_default_timezone_set("America/Los_Angeles");


$currentdate = $_GET['date'];

echo date("F jS, Y", strtotime($currentdate));

?>:</p>
<ul>

<?php

function getOfferings($times,$name,$dateto){

date_default_timezone_set("America/Los_Angeles");

?>

<p class="timeslot"><?php echo $name ?>:</p>

<?php


$currentdate = $_GET['date'];


if($currentdate=="today"){

$currentdate = date("Y-m-d");


}




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





$sql="SELECT * FROM `events` WHERE `offering` = 'yes' AND `starttime` = '{$times}' AND `date` = '{$dateto}' ORDER BY starttime;";

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



if($date=="today"){

$currentdate = date("Y-m-d");


}






$starttime = date('h:i a', strtotime($date));




?>

     <li>
      <div class="row">
      <div class="col s8">
        <p id ="eventname"><?php echo $eventnow['eventname']?></p>
        <p id="bio"><?php echo $eventnow['bio']?></p>
        <p id ="desc">Hosted by <b><?php echo $eventnow['members']?></b> in <b><?php echo $eventnow['description'] ?>.</b> Starts at <b><?php echo $starttime?>.</b> </p>
        </div>
        <div class="col s4">
        <a href="http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"><img class="qr" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://events.gibsonek.org/signup.php?id=<?php echo $eventnow['id']?>"></a>
        </div>
        </div>
      </li>
      <hr>

<?php




} //end of while time


}

getOfferings("09:00:00","9am",$_GET['date']);
getOfferings("10:00:00","10am",$_GET['date']);
getOfferings("11:00:00","11am",$_GET['date']);

$currentdate = $_GET['date'];

$dayofweek = date('w', strtotime($currentdate));


if($dayofweek=="1"){

getOfferings("13:35:00","Monday/Friday: Afternoon:",$_GET['date']);


getOfferings("13:35:00","Tuesday/Thursday: Afternoon:",date('Y-m-d', strtotime($_GET['date']. ' + 1 days')));

}

if($dayofweek=="2"){

getOfferings("13:35:00","Tuesday/Thursday: Afternoon:",$_GET['date']);


}

if($dayofweek=="4"){

getOfferings("13:35:00","Tuesday/Thursday: Afternoon:",$_GET['date']);


}

if($dayofweek=="5"){

getOfferings("13:35:00","Monday/Friday: Afternoon:",$_GET['date']);


}



?>





</ul>






</body>




</html>