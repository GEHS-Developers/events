<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Advisor</title>

    <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<style>

#advisor{

font-size:5em;
text-align:center;


}


</style>

  </head>


  <body>
  
  <p id="advisor"><?php echo ucfirst($_GET['advisor']);?>'s Advisory</p>

<table class="striped">

<tr>

<th>Name</th>
<th>9:00am</th>
<th>10:00am</th>
<th>11:00am</th>
<th>MF Afternoon</th>
<th>TT Afternoon</th>

</tr>

<?php

$advisor = $_GET['advisor'];
$dates= $_GET['date'];
$stud = array();


global $stud;

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



$sql="SELECT * FROM `rostero` WHERE `advisor` = '{$advisor}' AND `added` > '2017-04-12 19:54:59'";

$records=mysqli_query($connection, $sql);



while($ad=mysqli_fetch_assoc($records)){

$nameOfPersonToEnter = $ad['name'];

array_push($stud,$nameOfPersonToEnter);



}

$stud1 = array_unique($stud);

sort($stud1);


function checkOfferings($name,$time,$date1){


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


$sql="SELECT * FROM `rostero` WHERE `name` = '{$name}'";

$records=mysqli_query($connection, $sql);

$rightnow = 0;


while($eventnow=mysqli_fetch_assoc($records)){



$sql2="SELECT * FROM `events` WHERE id = '{$eventnow['id']}' AND starttime = '{$time}' AND date = '{$date1}'";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){



echo "Offering: " . $now['eventname'] . " in " . $now['description'] ;

$rightnow++;




}



}

if($rightnow<1){

echo "";


}





} // end of Check offerings function

$peopleToCount = count($stud1);

for($i=0; $i<$peopleToCount; $i++){


if($stud1[$i]!=""){

?>


<tr>
<td><b><?php echo $stud1[$i]?></b></td>
<td><?php checkOfferings($stud1[$i],"09:00:00",$dates);?></td>
<td><?php checkOfferings($stud1[$i],"10:00:00",$dates);?></td>
<td><?php checkOfferings($stud1[$i],"11:00:00",$dates);?></td>
<td><?php checkOfferings($stud1[$i],"13:35:00",$dates);?></td>
<td><?php checkOfferings($stud1[$i],"13:35:00",date('Y-m-d',strtotime($dates . "+1 days")));?></td>
</tr>

<?php

}

}



?>




</table>


  </body>
</html>