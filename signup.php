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


$sql="SELECT * FROM `events` WHERE `id` = '$id'";
$records=mysqli_query($connection, $sql);

while($eventnow=mysqli_fetch_assoc($records)){

$offeringname = $eventnow['eventname'];
$host = $eventnow['members'];
$location = $eventnow['description'];
$bio = $eventnow['bio'];

}


?>


<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Montserrat|Raleway" rel="stylesheet">


<script>

$(document).ready(function(){


    $('select').material_select();

$('input.autocomplete').autocomplete({
    data: {

       "Madison Anderson": null,



 "Balin Andrews": null,



 "Arun Chennuru": null,



 "Robert Ashby": null,



 "Nathan Asistin": null,



 "Seth Battaglia": null,



 "James Battistoni": null,



 "Brookylyn Bauman": null,



 "Karly Bauman": null,



 "Jonah Beeman": null,



 "David Bernado": null,



 "Alaina Bland": null,




 "Riley Bracelin": null,




 "Kattaleya Bradford": null,



 "Eleanor Brecht": null,



 "Kathryn Burton": null,




 "Jaime Cao": null,




 "Arun Chennuru": null,




 "Miryam Christensen": null,




 "Claire Church": null,



 "Chiana Clements": null,



 "Payton Cominski": null,



 "John Curdi": null,



 "Riley Daggett-Greczanik": null,



 "Emily Dahm": null,



 "Henry Davis": null,



 "May Davis": null,




 "Dana Dewitt": null,



 "Henry Davis": null,



 "Emily Joy Dunkelberger": null,



 "Kelsea Edwards": null,



 "Andrew Evers": null,



 "Josh Feinsilber": null,



 "Matthew Fogg": null,



 "Tyler Fry": null,



 "Claire Fuller": null,



 "Charlie Ganz": null,



 "Kieran Goforth": null,



 "Nathan Graham": null,



 "Genser Gutierrez Cruz": null,



 "Averie Hasselbalch": null,



 "Matilda Haynes": null,



 "Gabriella Hofer": null,



 "Garrett Hoffman": null,



 "Mariah Hurd": null,



 "Ian Hutchinson": null,



 "Blake Johnson": null,



 "Chloe Johnston Borboa": null,



 "Mariam Johnson": null,



 "Anna Kaczmarek": null,



 "Jamie Kaspers": null,



 "Coben Kaveny": null,



 "Madeline King": null,



 "Benjamin Kord": null,




 "Meghan Krohn": null,



 "Dmitry Kudriavtsev": null,



 "Robert Laitman": null,



 "Hannah Lam": null,



 "Nicholas Langrock": null,



 "Melissa Lew": null,



 "Jack Lincoln": null,



 "Evon Manesh": null,



 "Megan Maloney": null,



 "Maya Mandyam": null,



 "Jakob McInerney": null,



 "Maria Meadows": null,




 "Sebastian Mendoza": null,



 "Gabrielle Michelson": null,



 "Sophia Milan": null,



 "Roxy Minerva": null,




 "Mohammed Mohideen Abdul Kader": null,



 "Jarrod Morgan": null,



 "Julia Morgan": null,



 "Luke Morrison": null,



 "Natalie Munson": null,



 "Caden Nelson": null,



 "Samantha Nelson": null,



 "Samantha Nemiroff": null,



 "Grace Noland-Randle": null,



 "Michael Oshima": null,



 "Sydney Ostrander": null,



 "Samantha Papp": null,



 "Elianna Pelton": null,



 "Noah Perrin": null,



 "Colby Peterson": null,



 "Gabrielle Possing": null,



 "Kaitlin Ragland": null,



 "Mary Ray": null,



 "Meghan Richins": null,



 "Benjamin Royce": null,



 "Marcus Rueber": null,



 "Isabella Sampson-Radloff": null,



 "Keisuke Sano": null,



 "Justin Scoggins": null,



 "Michaela Sebring": null,



 "Teagan Servais": null,



 "Mira Sickinger": null,



 "Eliana Spain": null,



 "Eva Spokoiny": null,



 "Drea Stills": null,



 "Soren Stoverud-Myers": null,



 "Reilly Sullivan": null,



 "Serena Turney": null,



 "Samantha Vandemolegraaf": null,



 "Edwin Velasco": null,



 "Andrea Webb": null,



 "Alexander Weights": null,



 "Lauren Williams": null,



 "Andrew Xiao": null,



 "Tjaden Yanchar": null,



 "Elena Yerges": null,



 "Amy Yuan": null,




 "Austin Zimmerman": null,



 "Nalu Zou": null,



 "Natalie Zurcher": null,




    }
  });





});




</script>


<style>

.name{
text-align:center;
font-weight:bold;

}


button{
width:50%;
margin-left:25%;
}

#sign{
	font-size:4em;
	text-align: center;
	font-family: 'Baloo Bhai', cursive;
	margin-bottom: -0.4em;
}

#host{
text-align: center;
font-family: 'Raleway', sans-serif;
font-size:1.3em;



}


#bio{
text-align: center;
font-family: 'Baloo Bhai', sans-serif;
font-size:1.3em;
margin-left:1em;
margin-right:1em;


span{
	font-family: 'Baloo Bhai', cursive;
	font-size:1.4em;
}

form{
margin: 0 auto;
text-align: center;
margin-left:1em;
margin-right:1em;
}



</style>

<title>Sign Up!</title>

</head>




<body>
<div class="container">

<p id="sign"><?php echo $offeringname ?></p>
<p id="host">Hosted by <span><?php echo $host ?></span>.
Meets in <span><?php echo $location ?></span>.</p>



<p id = "bio"> <?php echo $bio ?> </p>

<div id="form">

<form action="insertroster.php" method="POST" autocomplete="off">

<input type="hidden" name="id" value="<?php echo $id ?>">

<br>

<p class="name">Your Full Name (Name on Student ID):</p>

  <div class="input-field">
          <input type="text" id="autocomplete-input" class="autocomplete" name="name" required>
          
   </div>
   
           <div class="input-field"> 
<p class="name">Your Advisor:</p>
       <select name="advisor" required>
       <option value="" disabled selected>Choose your option</option>
         <option value="hillary">Hillary</option>
         <option value="ben">Ben</option>
         <option value="mitra">Mitra</option>
         <option value="karin">Karin</option>
         <option value="andy">Andy</option>
         <option value="colin">Colin</option>
         <option value="tonja">Tonja</option>
</select>

</div>

<br>

  <button class="btn waves-effect waves-light" type="submit">Sign Up
  </button>

</form>

</div>

</div>

</body>




</html>