<?php



date_default_timezone_set("America/Los_Angeles");


function newtask($dates,$startingtime,$endingtime,$nam,$desc,$mat,$members,$offering){


$advisor = "none";

switch($members){

case "Madison Anderson":
$advisor = "hillary";
break;

case "Balin Andrews":
$advisor = "colin";
break;

case "Arun Chennuru":
$advisor = "hillary";
break;

case "Robert Ashby":
$advisor = "hillary";
break;

case "Nathan Asistin":
$advisor = "colin";
break;

case "Seth Battaglia":
$advisor = "mitra";
break;

case "James Battistoni":
$advisor = "tonja";
break;

case "Brookylyn Bauman":
$advisor = "ben";
break;

case "Karly Bauman":
$advisor = "colin";
break;

case "Jonah Beeman":
$advisor = "andy";
break;

case "David Bernado":
$advisor = "ben";
break;

case "Alaina Bland":
$advisor = "karin";
break;


case "Riley Bracelin":
$advisor = "andy";
break;


case "Kattaleya Bradford":
$advisor = "andy";
break;

case "Eleanor Brecht":
$advisor = "mitra";
break;

case "Kathryn Burton":
$advisor = "hillary";
break;


case "Jaime Cao":
$advisor = "karin";
break;


case "Arun Chennuru":
$advisor = "hillary";
break;


case "Miryam Christensen":
$advisor = "andy";
break;


case "Claire Church":
$advisor = "tonja";
break;

case "Chiana Clements":
$advisor = "colin";
break;

case "Payton Cominski":
$advisor = "mitra";
break;

case "John Curdi":
$advisor = "karin";
break;

case "Riley Daggett-Greczanik":
$advisor = "karin";
break;

case "Emily Dahm":
$advisor = "hillary";
break;

case "Henry Davis":
$advisor = "tonja";
break;

case "May Davis":
$advisor = "hillary";
break;


case "Dana Dewitt":
$advisor = "tonja";
break;

case "Henry Davis":
$advisor = "tonja";
break;

case "Emily Joy Dunkelberger":
$advisor = "tonja";
break;

case "Kelsea Edwards":
$advisor = "karin";
break;

case "Andrew Evers":
$advisor = "ben";
break;

case "Josh Feinsilber":
$advisor = "hillary";
break;

case "Matthew Fogg":
$advisor = "andy";
break;

case "Tyler Fry":
$advisor = "hillary";
break;

case "Claire Fuller":
$advisor = "ben";
break;

case "Charlie Ganz":
$advisor = "hillary";
break;

case "Kieran Goforth":
$advisor = "mitra";
break;

case "Nathan Graham":
$advisor = "karin";
break;

case "Genser Gutierrez Cruz":
$advisor = "mitra";
break;

case "Averie Hasselbalch":
$advisor = "andy";
break;

case "Matilda Haynes":
$advisor = "tonja";
break;

case "Gabriella Hofer":
$advisor = "karin";
break;

case "Garrett Hoffman":
$advisor = "ben";
break;

case "Mariah Hurd":
$advisor = "hillary";
break;

case "Ian Hutchinson":
$advisor = "colin";
break;

case "Blake Johnson":
$advisor = "mitra";
break;

case "Chloe Johnston Borboa":
$advisor = "andy";
break;

case "Mariam Johnson":
$advisor = "andy";
break;

case "Anna Kaczmarek":
$advisor = "tonja";
break;

case "Jamie Kaspers":
$advisor = "colin";
break;

case "Coben Kaveny":
$advisor = "colin";
break;

case "Madeline King":
$advisor = "karin";
break;

case "Benjamin Kord":
$advisor = "colin";
break;


case "Meghan Krohn":
$advisor = "ben";
break;

case "Dmitry Kudriavtsev":
$advisor = "ben";
break;

case "Robert Laitman":
$advisor = "andy";
break;

case "Hannah Lam":
$advisor = "ben";
break;

case "Nicholas Langrock":
$advisor = "hillary";
break;

case "Melissa Lew":
$advisor = "colin";
break;

case "Jack Lincoln":
$advisor = "tonja";
break;

case "Evon Manesh":
$advisor = "tonja";
break;

case "Megan Maloney":
$advisor = "ben";
break;

case "Maya Mandyam":
$advisor = "ben";
break;

case "Jakob McInerney":
$advisor = "mitra";
break;

case "Maria Meadows":
$advisor = "hillary";
break;


case "Sebastian Mendoza":
$advisor = "karin";
break;

case "Gabrielle Michelson":
$advisor = "andy";
break;

case "Sophia Milan":
$advisor = "tonja";
break;

case "Roxy Minerva":
$advisor = "karin";
break;


case "Mohammed Mohideen Abdul Kader":
$advisor = "andy";
break;

case "Jarrod Morgan":
$advisor = "tonja";
break;

case "Julia Morgan":
$advisor = "ben";
break;

case "Luke Morrison":
$advisor = "hillary";
break;

case "Natalie Munson":
$advisor = "hillary";
break;

case "Caden Nelson":
$advisor = "mitra";
break;

case "Samantha Nelson":
$advisor = "mitra";
break;

case "Samantha Nemiroff":
$advisor = "andy";
break;

case "Grace Noland-Randle":
$advisor = "karin";
break;

case "Michael Oshima":
$advisor = "andy";
break;

case "Sydney Ostrander":
$advisor = "andy";
break;

case "Samantha Papp":
$advisor = "mitra";
break;

case "Elianna Pelton":
$advisor = "colin";
break;

case "Noah Perrin":
$advisor = "colin";
break;

case "Colby Peterson":
$advisor = "karin";
break;

case "Gabrielle Possing":
$advisor = "tonja";
break;

case "Kaitlin Ragland":
$advisor = "mitra";
break;

case "Mary Ray":
$advisor = "ben";
break;

case "Meghan Richins":
$advisor = "hillary";
break;

case "Benjamin Royce":
$advisor = "ben";
break;

case "Marcus Rueber":
$advisor = "mitra";
break;

case "Isabella Sampson-Radloff":
$advisor = "mitra";
break;

case "Keisuke Sano":
$advisor = "karin";
break;

case "Justin Scoggins":
$advisor = "colin";
break;

case "Michaela Sebring":
$advisor = "mitra";
break;

case "Teagan Servais":
$advisor = "tonja";
break;

case "Mira Sickinger":
$advisor = "tonja";
break;

case "Eliana Spain":
$advisor = "karin";
break;

case "Eva Spokoiny":
$advisor = "mitra";
break;

case "Drea Stills":
$advisor = "tonja";
break;

case "Soren Stoverud-Myers":
$advisor = "ben";
break;

case "Reilly Sullivan":
$advisor = "karin";
break;

case "Serena Turney":
$advisor = "ben";
break;

case "Samantha Vandemolegraaf":
$advisor = "ben";
break;

case "Edwin Velasco":
$advisor = "hillary";
break;

case "Andrea Webb":
$advisor = "mitra";
break;

case "Alexander Weights":
$advisor = "andy";
break;

case "Lauren Williams":
$advisor = "mitra";
break;

case "Andrew Xiao":
$advisor = "tonja";
break;

case "Tjaden Yanchar":
$advisor = "karin";
break;

case "Elena Yerges":
$advisor = "colin";
break;

case "Amy Yuan":
$advisor = "hillary";
break;


case "Austin Zimmerman":
$advisor = "colin";
break;

case "Nalu Zou":
$advisor = "ben";
break;

case "Natalie Zurcher":
$advisor = "colin";
break;

}

$name = str_replace("'", "", $nam);


if($desc ==""){
$desc = "all";
}


if(strlen($mat)==0){

$material=rand();

}

else{
	$material=$mat;
}

$startingunix = strtotime($dates . " " . $startingtime); //
$endingunix = strtotime($dates . " " . $endingtime);

$servername = "localhost";
$username = "josfei6_ge";
$password = "gibsonek";
$dbname = "josfei6_ge";


// Create connection
$connection = mysqli_connect($servername, $username, $password,      $dbname);

// Check connection
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set("America/Los_Angeles");

global $mysqli;

$sql="SELECT * FROM `events` WHERE `description` = '$desc' ORDER BY    starttime;";

$records=mysqli_query($connection, $sql);

$numberofevents = 0;

$okay = 0;





while($eventnow=mysqli_fetch_assoc($records)){



if($startingunix==$eventnow['sunix']&&$endingunix==$eventnow['eunix']){


//LOCATION////////////

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Location Taken!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Location taken!
    </div>

    <div class="subtitle">
        Try a different time or a different location. 
    </div>
<br>
    <div class="buttons">
        <a class="button" href="http://events.gibsonek.org/Rooms/new/new">Try it again</a>
    </div>
</div>
    
    
    
    
    
  </body>
</html>



<?php

die;

//END LOCATION


}


else{
$numberofevents++;


if(($startingunix<=$eventnow['sunix']&&$endingunix<=$eventnow['eunix'])||($startingunix>=$eventnow['sunix']&&$endingunix>=$eventnow['eunix'])){

$okay++;

}


else{


$username = $eventnow['members'];
$endtimeerror = date("g:i a", strtotime($eventnow['endtime']));



}





}// end of big else statement



	
	
} // end of the while records statement

if($okay<$numberofevents){

// LOCATION


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Location Taken!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Location taken!
    </div>

    <div class="subtitle">
        Taken by <?php echo $username ?>. It will be available at <?php echo $endtimeerror ?>.
    </div>
<br>
    <div class="buttons">
        <a class="button" href="http://events.gibsonek.org/Rooms/new/new">Try it again</a>
    </div>
</div>
    
    
    
    
    
  </body>
</html>





<?php

die;

////END LOCATION

} // end of if



if($okay==$numberofevents){

$sql="SELECT * FROM `events` WHERE `material` = '$material' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);

$numberofevents = 0;

$okay = 0;

while($eventnow=mysqli_fetch_assoc($records)){

if($startingunix==$eventnow['sunix']&&$endingunix==$eventnow['eunix']){


//MATERIAL////

	?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Material Taken!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Material taken!
    </div>

    <div class="subtitle">
        Try a different time or a different material. 
    </div>
<br>
    <div class="buttons">
        <a class="button" href="http://events.gibsonek.org/Rooms/new/new">Try it again</a>
    </div>
</div>
    
    
    
    
    
  </body>
</html>





	<?php

die;

	////END MATERIAL/////
}

else{


$numberofevents = $numberofevents + 1;

$startingunix = strtotime($dates . " " . $startingtime); //
$endingunix = strtotime($dates . " " . $endingtime);

if(($startingunix<=$eventnow['sunix']&&$endingunix<=$eventnow['eunix'])||($startingunix>=$eventnow['sunix']&&$endingunix>=$eventnow['eunix'])){

$okay++;

}

else{


$username = $eventnow['members'];
$endtimeerror = date("g:i a", strtotime($eventnow['endtime']));



}


} //end of big else statement	
	
} // end of the while records statement


	
} // end of if stage 1 works	

if($okay<$numberofevents){

	///MATERIAL/////
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Material Taken!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Material taken!
    </div>

    <div class="subtitle">
         Taken by <?php echo $username ?>. It will be available at <?php echo $endtimeerror ?>.
    </div>
<br>
    <div class="buttons">
        <a class="button" href="http://events.gibsonek.org/Rooms/new/new">Try it again</a>
    </div>
</div>
    
    
    
    
    
  </body>
</html>




<?php

die;




	///END MATERIAL////
}


if($okay==$numberofevents){
	$random = rand();

if($startingtime>0){


$colorchoice = array("orange","green","pink");

$color = $colorchoice[array_rand($colorchoice)];;


$sql = "INSERT INTO `events` (`id`,`date`,`starttime`, `endtime`, `eventname`, `description`, `material`, `color`, `members`, `advisor`, `sunix`, `eunix`, `offering`) VALUES ('$random','$dates','$startingtime', '$endingtime', '$name','$desc','$material','$color', '$members', '$advisor', '$startingunix','$endingunix', '$offering')";

	//WORKS
	
	

$dateCalendar = str_replace('-', '', $dates);
$startTimeCalendar= str_replace(':', '', $startingtime);
$endTimeCalendar= str_replace(':', '', $endingtime);
$locationCalendar = preg_replace('/\s+/', '+', $desc);
$nameCalendar = str_replace('/\s+/', '+', $name);



$calendarURL = "https://calendar.google.com/calendar/render?action=TEMPLATE&text=" . $nameCalendar . "&dates=" . $dateCalendar . "T" . $startTimeCalendar . "00%2F" . $dateCalendar . "T" . $endTimeCalendar . "00&amp;location=" . $locationCalendar;



?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Event Added!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Event Added!
    </div>

    <div class="subtitle">
        It's on the schedule. You're booked! 
<br>
    <div class="buttons">
        <a class="button" href="<?php echo $calendarURL?>">Add to Google Calendar</a>
    </div>
</div>
    
    
    
    
    
  </body>
</html>



<?php


$connection->query($sql);
	
	
		

die;

}




else{
	echo "You can't leave a field blank! Try again!";
}






////WORKS/////	
} // end of if stage 2 works



} //end of newtask function

newtask($_POST['dates'],$_POST['startingtime'],$_POST['endingtime'],$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

?>