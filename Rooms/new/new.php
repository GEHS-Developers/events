<html>

<head>

<title>Add Event</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--My CSS Add-->
<link rel="stylesheet" type="text/css" href="make.css">


<!--My JS Add-->

<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">



 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<script>



$(document).ready(function(){

  $(document).ready(function() {
    $('select').material_select();
  });
      
   


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
       


   $("#descid").val("<?php echo $_GET['loc'];?>");       

});


      
      
</script>





<style>



</style>


</head>



<body>






<!--CLOUDS ENDS HERE-->


<div id="formarea">



<div id="formcontent">

<p>New Event</p>

<form action="../../insertagain.php" method="POST" autocomplete="on">

<input type="hidden" name="offering" value="no"; id="offeringid">

<div class="row">

<div class="s4">
<b>Date:</b><br>
<input type="date" id="datepicker" name="dates"/>
</div>

<div class="s4">
  <b>Starting Time:</b>
<input type="time" name="startingtime" id="startingtimeid">
</div>

<div class="s4">
  <b>Ending Time:</b>
<input type="time" name="endingtime" id="endingtimeid">
</div>




</div>  


<div class="row">
 <!-- Name of event:<br> -->
 <div class="s4">
   <b>Event Name:</b>
  <div class="input-fiel">
  <input type="text" name="name" id="nameid">

  </div> 
 </div>
  <!-- Description/Location:<br> -->
  <div class="s6">
   <b>Location:</b>
  <div class="input-fiel">
  <select id="descid" name="desc">
   <option value="200">Room 200</option>
    <option value="200">Room 200</option>
    <option value="201">Room 201</option>
    <option value="203">Room 203</option>
    <option value="204">Room 204</option>
    <option value="art">Art Space</option>
    <option value="commons">Commons</option>
     <option value="conference">Conference Room</option>
      <option value="kitchen">Kitchen</option>
       <option value="office">Main Office</option>
        <option value="studio">Recording Studio</option>
         <option value="science">Science Space</option>
          <option value="stage">Stage</option>
           <option value="tech">Tech Space</option>
            <option value="wood">Wood-Shop</option>

            </select>
            
  </div> 
  </div>
  
  </div>

  <div class ="row">


	 
	 <input type = "hidden" name = "material" value = "">


<div class="input-field">
 <b>Creator:</b>
    <input type="text" id="autocomplete-input" class="autocomplete" name="members" required></div>
      



 
 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button>


</form>

</div>



</body>


</html>