<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          

<script>

$(document).ready(function(){

$(".autocomplete").autocomplete({
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

<title>Sign In</title>

<style>

#button{

text-align:center;

}

#head{

font-family: 'Rubik', sans-serif;
text-align:center;
font-size:3em;
margin-top:10%;

}




</style>


</head>
<?php

$loc = $_GET['loc'];

?>


<body>

<p id="head">Signing In: <?php echo $loc ?></p>

<form action ="/adding.php" autocomplete="off"  method="POST">

<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">

          <input type="text" id="autocomplete-input" name="nameofperson" class="autocomplete">
          <label for="autocomplete-input">Your name</label>
        </div>
      </div>
    </div>
  </div>

<input type = "hidden"  name="where" value="<?php echo $loc ?>">
<div class="row">

<div id="button">
  <button  class="btn waves-effect waves-light" type="submit" name="action">Sign In
  </button>
</div>
</body>





</html>