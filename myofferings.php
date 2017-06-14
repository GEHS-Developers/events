<html>

<?php


$name = $_GET['name'];


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


$sql="SELECT * FROM `events` WHERE `id` = '{$id}'";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){

$eventname = $eventnow['eventname'];

}


?>


  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          

  <head>
  
  
  
  
    <meta charset="UTF-8">
  
<title><?php echo ucfirst($name)?>'s Offerings</title>


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


.person{
font-family: 'Baloo Thambi', cursive;
font-size: 2em;
color:white;
text-align: center;

}


</style>    
    
    
  </head>




  <body>

<p id="welcome"><?php echo ucfirst($name)?>'s Offerings</p>
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


$sql="SELECT * FROM `events` WHERE `members` LIKE '%{$name}%' AND `offering` = 'yes' ORDER BY sunix";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){

if(date("Y-m-d")<=$eventnow['date']){

$newtime = date('h:i:s', strtotime($eventnow['starttime']));

?>
      <div class="row">
        <div class="col s4 offset-s4 hoverable">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $eventnow['eventname'] ?></span>
              <p>On <?php echo substr($eventnow['date'],-5)?> at <?php echo $newtime ?>. <br> <?php 
              
  $sql2="SELECT * FROM `rostero` WHERE `id` = '{$eventnow['id']}'";

$records2=mysqli_query($connection, $sql2);



$kids = 0;

while($now=mysqli_fetch_assoc($records2)){
            
             $kids++; 
              }
              echo $kids;
              ?> students signed up. </p>
            </div>
            <div class="card-action">
              <a href="http://events.gibsonek.org/roster.php?id=<?php echo $eventnow['id'] ?>">View Roster</a>
              <a href="http://events.gibsonek.org/editoffering.php?id=<?php echo $eventnow['id'] ?>">Edit Details</a>
            </div>
          </div>
        </div>
      </div>

<?php


} //end of if time


} //end of while time


?>

    </ul>
 



    
  </body>


</html>