<html>

<?php



$id = $_GET['id'];


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
    <meta charset="UTF-8">
  
<title><?php echo $eventname ?> - Students</title> 


<!--JQuery Add-->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    
<!--Normalize CSS Add-->
<link rel="stylesheet" href="../css/normalize.css">

<link rel="shortcut icon" type="image/png" href="https://pbs.twimg.com/profile_images/655077375881773056/CQsVe9B8.png"/>

<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Fredoka+One" rel="stylesheet">


  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          


<!--Google Font - Open Sans - Add -->
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

<!--Bootstrap Add-->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

<!--My CSS Add-->





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


#welcomes{

font-size:3em;
font-family: 'Baloo Thambi', cursive;

}


.person{
font-family: 'Baloo Thambi', cursive;
font-size: 2em;
color:white;
text-align: center;

}

#delete{
margin-left:36%;
margin-right:36%;

}

#deletefo{

font-family: 'Baloo Thambi', cursive;
font-size:1.6em;


}

#namehere{
font-size:1.3em;
text-align:center;
color:white;
font-family: 'Open Sans', cursive;

}

#dobut{

background-color:green;
position:absolute;
width:19%;
margin-left:40.5%;
margin-top:-3.7em;    


}

input{

color:white;
font-family: 'Baloo Thambi', cursive;


}

#button1{
margin-left:40%;
margin-right:40%;
}

#deletenametext{
text-align:left;
}

#deletediv{
width:40%;
margin-left:30%;
}

</style>    
    

   
    
  </head>




  <body>

<a href="/clipboard.php?id=<?php echo $id ?>">Click here to visit your clipboard (BETA, in development)</a>

<p id="welcome"><?php echo $eventname?></p>
<form onsubmit="return confirm('Are you sure you want to delete this offering?');" action="deleteid.php" method="POST"> <input type="hidden" name="id" value="<?php echo $id ?>">   <button class="btn waves-effect waves-light" type="submit" name="action" id="dobut">Delete Offering</button> </form>
<br>


<p id="welcomes">Attendees:</p>
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


$sql="SELECT * FROM `rostero` WHERE `id` = '{$id}' ORDER BY name";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){



?>

<li class="person"><?php echo $eventnow['name']?></li>

<?php





} //end of while time


?>

    </ul>
 
 
 <br>
 <br>
 <br><br><br>
 

        <div class="m6" id="deletediv">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Remove From Offering</span>
              <p id="deletenametext">Enter Name Here:</p>
              <form action="deleterostername.php" method="POST">
              
              <input type="text" name="name" id="nameid">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <button class="btn waves-effect waves-light" type="submit" name="action">Remove</button>
              
              </form>
            </div>
         
          </div>
        </div>
        
        
   <div class="m6" id="deletediv">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Add To Offering</span>
              <p id="deletenametext">Enter Name Here:</p>
              <form action="insertroster.php" method="POST">
			<input type="text" name="name" id="nameid">
			<input type="hidden" name="over" value="yes">
			<input type="hidden" name="id" value="<?php echo $id ?>">


              <button class="btn waves-effect waves-light" type="submit" name="action">Add</button>
              
              </form>
            </div>
         
          </div>
        </div>     

  </body>


</html>