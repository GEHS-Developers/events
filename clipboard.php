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
  
<title>Clipboard: <?php echo $eventname ?></title> 


<!--JQuery Add-->    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
    
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


#new{

margin-left:30%;


}

button{

margin-top: 2%;
margin-left:20%;

}


p{

font-size:1.4em;
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

hr{

margin-top:-2em;

}

.person{

font-size: 1.4em;
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
font-family: 'Open Sans', cursive;

}

#dobut{

background-color:green;
position:absolute;
left:45%;
margin-top:-3.7em;    


}



#button1{
margin-left:40%;
margin-right:40%;
}



</style>    
    

   
    
  </head>




  <body>

<p id="welcome">Clipboard: <?php echo $eventname?></p>

<hr>


<ul>
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


$sql="SELECT * FROM `clipboard` WHERE `id` = '{$id}'";

$records=mysqli_query($connection, $sql);





while($eventnow=mysqli_fetch_assoc($records)){



?>

<li class="person"><p><?php echo $eventnow['message']?></p></li>

<?php





} //end of while time


?>

    </ul>
 
<div id= "new">
    <form action="insertclip.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
<textarea style="width: 40em; height: 10em;"  id="textarea" name="message">Insert your clip here!</textarea>
       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
  </button>
    </form>

  </div>
  
 

  </body>


</html>