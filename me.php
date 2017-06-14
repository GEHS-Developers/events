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


  <head>
  
  
  
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  
    <meta charset="UTF-8">
  
<title><?php echo ucfirst($name)?>'s Events</title>


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


  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          


<style>

td{
color:white;
}

th{
color:white;
}

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

#welcome:hover{

color:orange;

}


.person{
font-family: 'Baloo Thambi', cursive;
font-size: 2em;
color:white;
text-align: center;

}

#today{

margin-left: 5%;
width:90%;
margin-right:5%;

}

#todayp{
text-align:center;



}



//here comes all the new cool stuff

@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400,700);
body {
  font-family: 'Roboto Slab', serif;
  background: radial-gradient(#FFFFFF 0%, #e0d6cc 60%) no-repeat;
}
.agenda {
  width: 90%;
  margin: 20px auto;
  border-radius: 10px;
  background: rgba(255,255,255,.7);
  overflow: hidden;
  box-shadow: 0 0 8px rgba(0,0,0,.1);
}
.agenda dt {
  padding: 10px 15px;
  text-align: center;
  font-weight: bold;
  font-size: 22px;
}
.agenda dd {
  margin: 0;
  padding: 10px 15px;
  color: #FFFFFF;
  overflow: hidden;
  
  
}


#clipboardgo{

color: #E0E0E0;

}
.agenda dd:hover {
  background: #666 !important;
}
.agenda dd span {
  position: absolute;
}
.agenda ul {
  float: left;
  margin: 0 0 0 50px;
  padding: 0;
  list-style: none;
  width: 100%;
  border-left: 1px solid rgba(255,255,255,.4);
}
.agenda li {
  border-bottom: 1px solid rgba(255,255,255,.4);
  padding: 0 0 5px 10px;
  margin-bottom: 5px;
}
.agenda li:last-child {
  padding-bottom: 0;
  margin: 0;
  border: 0;
}
.agenda dd:nth-child(2) {
  background: #48c1ca;
}
.agenda dd:nth-child(3) {
  background: #107181;
}
.agenda dd:nth-child(4) {
  background: #43b12c;
}
.agenda dd:nth-child(5) {
  background: #bdd82b;
}
.agenda dd:nth-child(6) {
  background: #f9d424;
}
.agenda dd:nth-child(7) {
  background: #f15910;
}
.agenda dd:nth-child(8) {
  background: #e82f73;
}
.agenda dd:nth-child(9) {
  background: #ea2f75;
}
.agenda dd:nth-child(10) {
  background: #88215f;
}

#lastone{
background-color: #7f2891;
}

#lastcheckin{

width:50%;
margin-left:25%;

}

//end of all the cool new stuff


</style>    

<script>

$(document).ready(function(){


$("li").hover(function(){

$(this).addClass("animated bounce")

})

})


</script>  
    
  </head>




  <body>


<a href = "/whichMost.php?name=<?php echo $name?>"><p id="welcome"><?php echo ucfirst($name)?>'s Events</p></a>



 <div class="row">
        <div class="col s6 offset-s3">
          <div class="card blue-grey darken-1 animated lightSpeedIn">
            <div class="card-content white-text">
                          <a href="http://events.gibsonek.org/where.php?name=<?php echo $_GET['name'] ?>"><img id="lastcheckin" src="http://oi65.tinypic.com/28tknkn.jpg"></a>
              <dl class="agenda">

  <dt><?php echo ucfirst($name)?>'s schedule today:</dt>
  <dd>
    <span>8:15</span>
    <ul>
        <li>Advisory</li>
      </ul> 
  </dd>
   <!--THIS IS WHERE THE 9 OCLOCK EVENTS GO !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
 <dd></span>9:00</span>
 <ul>
 <li><?php
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


$sql2="SELECT * FROM `events` WHERE `id` = '{$eventnow['id']}'";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){

if(date("Y-m-d")==$now['date']&&$now['starttime']=="09:00:00"){

echo "Offering: " . $now['eventname'] . " in " . $now['description'] ;

$rightnow = 1;
}



}



}

if($rightnow==0){

echo "Independent Work Time";


}

?></li>
 </ul>
 
 </dd>
 <!--THIS IS WHERE THE 10 OCLOCK EVENTS GO !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
 <dd></span>10:00</span>
 <ul>
 <li><?php
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


$sql2="SELECT * FROM `events` WHERE `id` = '{$eventnow['id']}'";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){

if(date("Y-m-d")==$now['date']&&$now['starttime']=="10:00:00"){

echo "Offering: " . $now['eventname'] . " in " . $now['description'] ;

$rightnow = 1;
}



}



}

if($rightnow==0){

echo "Independent Work Time";


}

?></li>
 </ul>
 
 </dd> 
  <!--THIS IS WHERE THE 11 OCLOCK EVENTS GO !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
 <dd></span>11:00</span>
 <ul>
 <li><?php
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


$sql2="SELECT * FROM `events` WHERE `id` = '{$eventnow['id']}'";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){

if(date("Y-m-d")==$now['date']&&$now['starttime']=="11:00:00"){

echo "Offering: " . $now['eventname'] . " in " . $now['description'] ;

$rightnow = 1;
}



}



}

if($rightnow==0){

echo "Independent Work Time";


}

?></li>
 </ul>
 
 </dd> 
  <!--THIS IS WHERE THE LUNCH OCLOCK EVENTS GO !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <dd>
    <span>11:45</span>
    <ul>
        <li>Lunch</li>
      </ul> 
  </dd>
   <dd>
    <span>12:25</span>
    <ul>
        <li>Content Time</li>
      </ul> 
  </dd>
   <!--THIS IS WHERE THE 1 OCLOCK EVENTS GO !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
 <dd></span>1:35</span>
 <ul>
 <li><?php
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


$sql2="SELECT * FROM `events` WHERE `id` = '{$eventnow['id']}'";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){

if(date("Y-m-d")==$now['date']&&$now['starttime']=="13:35:00"){

echo "Offering: " . $now['eventname'] . " in " . $now['description'] ;

$rightnow = 1;
}



}



}

if($rightnow==0){

echo "Independent Work Time";


}

?></li>
 </ul>
 
 </dd>
   <dd id="lastone">
    <span>2:45</span>
    <ul>
        <li>Advisory</li>
      </ul> 
  </dd> 
</dl>  
  
  
  

              
              
            </div>
          
          </div>
        </div>
      </div>
      
 <p>My Offerings:</p>   
<div class="row">
<div class="col s6 offset-s3">
  
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


$sql="SELECT * FROM `rostero` WHERE `name` = '{$name}' ORDER BY 'sunix'";

$records=mysqli_query($connection, $sql);


while($eventnow=mysqli_fetch_assoc($records)){


$sql2="SELECT * FROM `events` WHERE `id` = '{$eventnow['id']}' ORDER BY date ASC";

$records2=mysqli_query($connection, $sql2);

while($now=mysqli_fetch_assoc($records2)){

$time1 = $now['starttime'];
$newtime = date('h:i:s', strtotime($time1));




?>

<div class="col s6">
          <div class="card cyan darken-1 hoverable">
            <div class="card-content black-text">
              <span class="card-title"><?php echo $now['eventname'];?></span>
              <p>On <?php echo $now['date']?> at <?php echo $newtime;?> in <?php echo $now['description'];?>. Hosted by <?php echo $now['members'];?>.  </p>
            </div>
            <div class="card-action">
              <a id="clipboardgo" href="clipboard.php?id=<?php echo $now['id'];?>">Clipboard</a>
            </div>
          </div>
        </div>




<?php


} //end of while records



}



?>

</div>
</div>      
      
      



<div class="row">
<div class="col s6 offset-s3">
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


$sql="SELECT * FROM `events` WHERE `members` = '{$name}' ORDER BY sunix";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){

if(date("Y-m-d")<=$eventnow['date']){

$time1 = $eventnow['starttime'];
$newtime = date('h:i:s', strtotime($time1));


$time2 = $eventnow['endtime'];
$newtime2 = date('h:i:s', strtotime($time2));


?>

   
        <div class="col s4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $eventnow['eventname']?></span>
              <p>From <?php echo $newtime ?> to <?php echo $newtime2 ?> in <?php echo $eventnow['description']?> </p>
            </div>
           
          </div>
        </div>
            



<?php


} //end of if time


} //end of while time

?>
 

</div>
</div>
 












    
  </body>


</html>