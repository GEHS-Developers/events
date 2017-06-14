<?php

$name = $_GET['name'];
$people = array();
$offerings = array();
$advisors = array();
$times = array();
$rooms = array();

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

while($eventnow=mysqli_fetch_assoc($records)){

array_push($offerings,$eventnow['id']);
$currentid = $eventnow['id'];

$sql2="SELECT * FROM `rostero` WHERE `id` = '{$currentid}' AND `name` != '{$name}'";

$records2=mysqli_query($connection, $sql2);

while($new=mysqli_fetch_assoc($records2)){
  array_push($people,$new['name']);
}//end of while cycling through people

}//end of while cycling through signups

foreach($offerings as $value){

  $sql="SELECT * FROM `events` WHERE `id` = '{$value}'";

  $records=mysqli_query($connection, $sql);

  while($eventnow=mysqli_fetch_assoc($records)){
    array_push($advisors, $eventnow['members']);
    array_push($times,$eventnow['starttime']);
    array_push($rooms,$eventnow['description']);
  }//end of second while


}; //end of foreach

//Most common person
$p1 = array_count_values($people);
$p2 = array_search(max($p1), $p1);

//Most common advisor
$ad1 = array_count_values($advisors);
$ad2 = array_search(max($ad1), $ad1);

//Most common start time
$st1 = array_count_values($times);
$st2 = array_search(max($st1), $st1);

//Most common room
$r1 = array_count_values($rooms);
$r2 = array_search(max($r1), $r1);


?>

<head>
  <title>Most Common Advisor</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

</head>

<style>

.most{
  text-align: center;
}
</style>


<body>
  <h2 class = "most">You are most likely to be in an offering with <?php echo $p2 ?>.</h2>
  <h2 class = "most">Your most common advisor is <?php echo $ad2 ?>.</h2>
  <h2 class = "most">Your most common start time is <?php echo $st2 ?>.</h2>
  <h2 class = "most">Your most common room is <?php echo $r2?>.</h2>
</body>