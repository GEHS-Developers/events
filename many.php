<!DOCTYPE html>
<html >
  <head>

  <meta http-equiv="refresh" content="20" />
    <meta charset="UTF-8">
    <title>4 Space Calendar</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          

<script>

$(document).ready(function() {
  // page is ready
  $('#calendar').fullCalendar({
      // emphasizes business hours
businessHours: true,
// event dragging & resizing
editable: true,
// header
header: {
  left: 'prev,next today',
  center: 'title',
  right: 'month,agendaWeek,agendaDay'
},events: [

<?php



?>
  // all day event
  {
    title  : 'Meeting',
    start  : '2015-11-12'
  },
  // long-term event 
  {
    title  : 'Conference',
    start  : '2015-11-13',
    end    : '2015-11-15'
  },
  // short term event 
  {
    title  : 'Dentist',
    start  : '2015-11-09T11:30:00',
    end  : '2015-11-09T012:30:00',
    allDay : false 
  }
]
  })
});



</script>




  </head>



 
 <body>
 
 <div id='calendar'></div>
 
 
 
 
 
 
 
 
 </body>