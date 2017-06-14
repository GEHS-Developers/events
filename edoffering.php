<?php

function insert($id,$nam,$bi,$member){


$name= str_replace("'", "''", $nam);
$bio= str_replace("'", "''", $bi);
$members= str_replace("'", "''", $member);

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

global $mysqli;

echo $id;
echo $name;
echo $bio;
echo $members;


$sql = "UPDATE `events` SET `eventname` = '{$name}',`bio` = '{$bio}',`members` = '{$members}' WHERE `id` = '{$id}' ";


$connection->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Updated!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Offering updated
    </div>

    <div class="subtitle">
        Your offering has been updated. 
</div>


   
</div>
    
    
    
    
    
  </body>
</html>


<?php

} // end of insert kid function





insert($_POST['id'],$_POST['name'],$_POST['bio'],$_POST['members']);




?>