<head>

<meta http-equiv="refresh" content="0; URL='manage.php'" />

</head>




<?php



function deleteevent($id){
	include("dbsetup.php");
	

		$sql = "DELETE FROM `events` WHERE `id`='$id'"; // much shorter :D
		$dbconnection->query($sql);	
 // using a string because post requests dont support booleans
	

}

deleteevent($_POST['id']);

?>