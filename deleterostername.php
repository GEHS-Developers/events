<?php



function deleteevent($id,$name){
	include("dbsetup.php");
	
$url = "/roster.php?id=" . $id;


		$sql = "DELETE FROM `rostero` WHERE `id`='$id' AND `name` = '$name'"; // much shorter :D
		$dbconnection->query($sql);	
 // using a string because post requests dont support booleans

?>








<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Removed</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        <?php echo $name ?> 
    </div>

    <div class="subtitle">
         was removed from this offering.
    </div>
<br>
    <div class="buttons">
        <a class="button" href="<?php echo $url ?>">Go Back</a>
    </div>
</div>
    
    
    
    
    
  </body>
</html>

<?php	


}

deleteevent($_POST['id'],$_POST['name']);

?>