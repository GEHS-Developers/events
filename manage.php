<!DOCTYPE html>
<html>

<head>



<title>Manage Events</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<style>

p{
    font-family: 'Roboto';
}

#manage{
    font-size:5em;
    text-align: center;
    margin-top: 0px;

}

#bta{
     position: relative;
    left: 41%;
}



</style>

<script>

$(document).ready(){


$("#button").click(function(){


var taskdata = {};
taskdata["all"] = $("allid").val();



// Post function is here too
$.post(
    "/deleteall.php",  // URL to send request to
    taskdata,  // Data to send
    function(r) { if (r.status === 'error') {alert(r.message) } // callback which will display an alert if something goes wrong
});


$("#button2").click(function(){


var taskdata = {};
taskdata["id"] = $("idid").val();



// Post function is here too
$.post(
    "/deleteid.php",  // URL to send request to
    taskdata,  // Data to send
    function(r) { if (r.status === 'error') {alert(r.message) } // callback which will display an alert if something goes wrong
});


$("#button3").click(function(){


var taskdata = {};
taskdata["date"] = $("dateid").val();



// Post function is here too
$.post(
    "/deletedate.php",  // URL to send request to
    taskdata,  // Data to send
    function(r) { if (r.status === 'error') {alert(r.message) } // callback which will display an alert if something goes wrong
});





})



}







</script>


</head>


<!-- Compiled and minified CSS Materalize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript Materalize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          


<body>


<p id ="manage">Manage Events</p>

<ul class="collapsible popout" data-collapsible="accordion">
<li>
<div class="collapsible-header">Show All Events (may crash browser)</div>  <div class="collapsible-body">
<table class="striped">
<tr>

<td><b>ID</b></td>
<td><b>Creator</b></td>
<td><b>Advisor</b></td>
<td><b>Date</b></td>
<td><b>Start Time</b></td>
<td><b>End Time</b></td>
<td><b>Event Name</b></td>
<td><b>Location</b></td>
<td><b>Material</b></td>
<td><b>Color</b></td>
<td><b>Students</b></td>



</tr>

<?php
$servername = "localhost";
$username = "josfei6_ge";
$password = "gibsonek";
$dbname = "josfei6_ge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `events` WHERE `id` > 2 ORDER BY date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>".$row['id']."<td>".$row['members']."</td><td>".$row['advisor']."</td><td>".$row['date']."</td><td>".$row['starttime']."</td><td>".$row['endtime']."</td><td>".$row['eventname']."</td><td>".$row['description']."</td><td>".$row['material']."</td><td>".$row['color']."</td><td>".$row['limit']."</td></tr>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</table>
</div>
</li>
<li>
 <div class="collapsible-header">Delete By Id</div>  <div class="collapsible-body">
<form action="deleteid.php" method="POST">

ID:
<input type="text" name="id" id="idid">

<button id="#button2">Delete</button>

</form>
</div>
</li>


<li> 
 <div class="collapsible-header">Delete All Events</div>  <div class="collapsible-body">
<form action="deleteall.php" method="POST">

Type "yes" to confirm you want to delete all events

<input type="text" name="all" id="allid">

<button id="#button3">Delete</button>

</form>
</div>
</li>



<li> 
 <div class="collapsible-header">Delete Events Before Date</div>  <div class="collapsible-body">
<form action="deletedate.php" method="POST">


<input type="date" name="date" id="dateid">

<input type="submit">

</form>
</div>
</li>



</ul>

<a href="ad.html"><button id="bta" class="btn waves-effect waves-light">Back To Add</button></a>
</body>
</html>