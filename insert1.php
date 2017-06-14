<?php



date_default_timezone_set("America/Los_Angeles");




function newtask($random,$dates,$startingtime,$endingtime,$name,$des,$mat,$members,$offering){


$limit = $_POST['limit'];


$bio = $_POST['bio'];


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

</div>
    
    
    
    
    
  </body>
</html>




<?php

die;




  ///END MATERIAL////
}


if($okay==$numberofevents){


if($startingtime>0){


$colorchoice = array("orange","green","pink");

$color = $colorchoice[array_rand($colorchoice)];

$descr= str_replace("'", "''", $des);
$namex= str_replace("'", "''", $name);
$biox= str_replace("'", "''", $bio);

$sql = "INSERT INTO `events` (`id`,`bio`,`date`,`starttime`, `endtime`, `eventname`, `description`, `material`, `color`, `members`, `advisor`, `sunix`, `eunix`, `limit`, `offering`) VALUES ('$random','$biox','$dates','$startingtime', '$endingtime', '$namex','$descr','$material','$color', '$members', '$advisor', '$startingunix','$endingunix', '$limit', '$offering')";

  //WORKS

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Offering Added!</title>
    
    
    
    
        <link rel="stylesheet" href="newevent.css">

    
    
    
  </head>

  <body>

    <div class="text-wrapper">
    <div class="title" data-content="404">
        Offering Added!
    </div>


</div>
    
    
    
    
    
  </body>
</html>



<?php


$connection->query($sql);
  
  
    



}




else{
  echo "You can't leave a field blank! Try again!";
}






////WORKS/////  
} // end of if stage 2 works



} //end of witch($session){




function whichsession($session){

$idd = rand();
$eventdate = $_POST['dates'];

switch($session){






case "A":



newtask($idd,$eventdate,"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+4 days")),"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);



break;


case "B":

newtask($idd,$eventdate,"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+4 days")),"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


break;



case "C":

newtask($idd,$eventdate,"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+4 days")),"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


break;

case "D":

newtask($idd,$eventdate,"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+4 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+7 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+11 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+14 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+18 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


break;

case "E":

newtask($idd,$eventdate,"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+7 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+9 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


newtask($idd,date('Y-m-d',strtotime($eventdate . "+14 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);

newtask($idd,date('Y-m-d',strtotime($eventdate . "+16 days")),"13:35:00","14:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);


break;

case "TBA":
newtask($idd,$eventdate,"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;

case "TBB":
newtask($idd,$eventdate,"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;

case "TBC":
newtask($idd,$eventdate,"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;

case "MW9":
newtask($idd,$eventdate,"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;


case "MW10":
newtask($idd,$eventdate,"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;

case "MW11":
newtask($idd,$eventdate,"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
newtask($idd,date('Y-m-d',strtotime($eventdate . "+2 days")),"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;


case "holiday":
$idd = rand();
newtask($idd,$eventdate,"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
$idd = rand();
newtask($idd,$eventdate,"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
$idd = rand();
newtask($idd,$eventdate,"11:00:00","11:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],$_POST['offering']);
break;


case "radvisory":
newtask($idd,$eventdate,"14:45:00","15:15:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],"no");

$left = 0;

while($left<200){
$left=$left +1;



newtask($idd,date('Y-m-d',strtotime($eventdate . "+$left days")),"14:45:00","15:15:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],"no");

}
break;

case "andy":
$weeks=0;
while($weeks<9.1){
$idd = rand();
$daysnow = $weeks*7;
$daysnow2 = ($weeks*7)+2;
newtask($idd,date('Y-m-d',strtotime($eventdate . "+$daysnow days")),"09:00:00","09:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],"yes");
newtask($idd,date('Y-m-d',strtotime($eventdate . "+$daysnow days")),"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],"yes");
newtask($idd,date('Y-m-d',strtotime($eventdate . "+$daysnow2 days")),"10:00:00","10:45:00",$_POST['name'],$_POST['desc'],$_POST['material'],$_POST['members'],"yes");
$weeks++;
}
break;


}



}


whichsession($_POST['session']);

?>