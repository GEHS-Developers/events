<html>

<head>
<title>Full Student View</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<script>

$(document).ready(function(){

 $('#table1').DataTable({
 paging: false
 
 
 }
 
 );
 
 $("table").addClass("animated bounceInRight");

})


</script>


<style>

@import url('https://fonts.googleapis.com/css?family=Roboto');

#table1_filter{

margin-right:44%;

}

#table1{

margin-left:5%;
margin-right:5%;
width:90%;

}

td{

font-family: 'Roboto', sans-serif;

}

#headerTitle{

font-family: 'Roboto', sans-serif;
text-align:center;
font-size:3em;

}

</style>

</head>

<body>



<p id="headerTitle">Offerings: All Students on <?php echo $_GET['date'];
?> </p>



<table class="pure-table pure-table-bordered pure-table-striped" id="table1">
<thead>
<tr>

<th>Student Name</th>
<th>Offering Name</th>
<th>Host</th>
<th>Starting Time</th>
<th>Location</th>


</tr>

</thead>
<?php

$dates = $_GET['date'];


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


$sql="SELECT * FROM `rostero` ORDER BY name";

$records=mysqli_query($connection, $sql);

while($eventnow=mysqli_fetch_assoc($records)){

$sql2="SELECT * FROM `events` WHERE `date` = '{$dates}' AND `id` = '{$eventnow['id']}'";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){

$twelvehour = date('h:i a', strtotime($now['starttime']));

?>

<tr>

<td><?php echo $eventnow['name']?></td>
<td><?php echo $now['eventname']?></td>
<td><?php echo $now['members']?></td>
<td><?php echo $twelvehour ?></td>
<td><?php echo $now['description']?></td>


</tr>

<?php





}



}



?>



</table>


</body>


</html>