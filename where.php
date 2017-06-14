<html>

<head>



<title>Where</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<style>


@import url('https://fonts.googleapis.com/css?family=Rubik');

body{


font-family: 'Rubik', sans-serif;
background:black;
color:white;

}

#name{

text-align:center;
font-size:3em;
margin-top:0.4em;
margin-bottom:-4.6em;

}

#loc{

text-align:center;
font-size:17em;


}

#tstamp{
margin-top:-5em;
text-align:center;
font-size:3em;

}


</style>


<script>

$(document).ready(function(){
$("#loc").addClass("animated infinite pulse");






})


</script>

</head>




<body>


<?php

?>


<p id ="name"><?php echo $_GET['name']?> is in:</p>

<?php

date_default_timezone_set('America/Los_Angeles');

function checkOfferings($st,$name){



$servername = "localhost";
$username = "josfei6_ge";
$password = "gibsonek";
$dbname = "josfei6_ge";

$offeringOrNot = 0;

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$todaydate=date("Y-m-d");

$sql="SELECT * FROM `rostero` WHERE `name` = '{$name}'";

$records=mysqli_query($connection, $sql);

while($rostero=mysqli_fetch_assoc($records)){

$offeringOrNot++;

$sql2="SELECT * FROM `events` WHERE `id` = '{$rostero['id']}' AND `date` = '{$todaydate}'";

$records2=mysqli_query($connection, $sql2);

while($events=mysqli_fetch_assoc($records2)){

if($events['starttime']=$st){


?>

<p id="loc"><?php echo $events['description']?></p>
<p id="tstamp">Currently in offering: <?php echo $events['eventname']?></p>

<?php

die;

} // end of if time 



if($offeringOrNot>0){

where($_GET['name']);


}//end of if offeringorNot



} //end of while 2


} //end of while 1

} // end of checkofferings function


function offering($name){

date_default_timezone_set('America/Los_Angeles');


if(date('H:i')>"08:59" && date('H:i')<"09:45" ){

checkOfferings("09:00:00",$name);

}

if(date('H:i')>"10:00" && date('H:i')<"11:00"){

checkOfferings("10:00:00",$name);

}

if(date('H:i')>"10:59" && date('H:i')<"11:46" ){

checkOfferings("11:00:00",$name);

}


if(date('H:i')>"13:34" && date('H:i')<"14:46" ){


checkOfferings("13:35:00",$name);

}


if(date('H:i')>"8:14" && date('H:i')<"09:01" ){

?>

<p id="loc">Advisory</p>
<p id="tstamp">Started at 9am.</p>

<?php

die;

}

if(date('H:i')>"11:44" && date('H:i')<"12:21" ){

?>

<p id="loc">Lunch</p>
<p id="tstamp">Started at 11:45pm.</p>

<?php

die;

}


if(date('H:i')>"12:20" && date('H:i')<"13:33" ){

?>

<p id="loc">Advisory</p>
<p id="tstamp">Started at 12:20pm.</p>

<?php

die;

}

if(date('H:i')>"14:47" && date('H:i')<"15:14" ){

?>

<p id="loc">Advisory</p>
<p id="tstamp">Started at 2:45pm. </p>

<?php

}

else{

where($_GET['name']);


}




} //end of offering function



function where($name){








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



$sql="SELECT * FROM `personal` WHERE `name` = '{$name}' ORDER BY timestamp DESC LIMIT 1";

$records=mysqli_query($connection, $sql);


function timeAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}





while($eventnow=mysqli_fetch_assoc($records)){






$newtime = timeAgo($eventnow['timestamp']);






?>

<p id="loc"><?php echo $eventnow['location']?></p>
<p id="tstamp">Checked in <?php echo $newtime ?>.</p>


<?php





}


}
offering($_GET['name']);

?>



</body>



</html>