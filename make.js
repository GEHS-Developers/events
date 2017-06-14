$(document).ready(function(){

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
       



var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
    
var loc = getUrlParameter('loc');
$('#descid').val(loc);
console.log(loc);


	$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

$(function() {
  $('input.autocomplete').autocomplete({
    data: {
      "Laser Cutter": null,
      "3D Printer 1": null,
      "3D Printer 2": null,
      "3D Printer 3": null,
      "Saw": null,
      "Mac Pro": null,
      "Cameras": null,
      "Microphones": null,
      "Drum Set": null,
      "Guitar": null,
      "Oven": null,
      "Sink": null,
      "Stove": null,
      "Textiles": null,
       "Sewing Machine": null,
    }
  });
});

$('select').material_select();

$(function() {

    $("#datepicker").on("change",function(){
        var selected = $(this).val();


var hms1 = $("startingtimeid").val();  // your input string
var a1 = hms.split(':'); // split it at the colons

// minutes are worth 60 seconds. Hours are worth 60 minutes.
var seconds1 = (+a1[0]) * 60 * 60 + (+a1[1]) * 60 + (+a1[2]); 


var hms1 = $("endingtimeid").val();  // your input string
var a2 = hms.split(':'); // split it at the colons

// minutes are worth 60 seconds. Hours are worth 60 minutes.
var seconds2 = (+a2[0]) * 60 * 60 + (+a2[1]) * 60 + (+a2[2]); 

var newname = $("nameid").val();

var advisor = "none";

var member = $("#membersid").val();












    });
});





});