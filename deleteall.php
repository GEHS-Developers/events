<head>

<meta http-equiv="refresh" content="0; URL='manage.php'" />



</head>




<?php




function deleteall($all){
	include("dbsetup.php");

if($all == "yes"){

	
	

		$sql = "DELETE * FROM `rostero` WHERE 1"; // much shorter :D
		$dbconnection->query($sql);	
 // using a string because post requests dont support booleans
	

}

else{

	echo "Don't worry! Nothing was deleted!";
}

}


deleteall($_POST['all']);

?>