<html>

<head>

<title>Edit Offering</title>

<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<style>

#head{

font-family: 'Rubik', sans-serif;
font-size:6em;
text-align:center;
margin-bottom:-0.4em;
}

.header{

font-family: 'Rubik', sans-serif;
font-size:2em;
margin-bottom:-0.1em;

}

input{

height:400px;

}


#sub{

font-family: 'Rubik', sans-serif;
font-size:1.3em;
text-align:center;


}

</style>

</head>


<body>


<?php

$id= $_GET['id'];


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





$sql="SELECT * FROM `events` WHERE `id` = '{$id}' LIMIT 1;";

$records=mysqli_query($connection, $sql);



while($eventnow=mysqli_fetch_assoc($records)){




?>

<p id="head">edit offering</p>
<p id="sub">In order to change your location, materials, or time, you must delete your offering and make a new one</p>

<div class="row">
 <div class="col s10 offset-s1">
<form action = "edoffering.php" method="POST">

<input type="hidden" name="id" value="<?php echo $eventnow['id']?>">

<p class="header">Offering Name:</p>
<input type ="text" name="name" value="<?php echo $eventnow['eventname']?>">

<p class="header">Offering Description:</p>
<input type ="text" name="bio" value="<?php echo $eventnow['bio']?>">

<p class="header">Creator:</p>
<input type ="text" name="members" value="<?php echo $eventnow['members']?>">

<div class="row">
<div class="col s5 offset-s5">

<button class="btn waves-effect waves-light" type="submit" name="action">Submit
  </button>

</div>
</div>

</form>


</div>
</div>



<?php


}//end of while records 

?>

<body>


</html>