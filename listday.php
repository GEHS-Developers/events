<!DOCTYPE html>
<html >
  <head>

    <meta charset="UTF-8">
    <title> Full Calendar</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          


  </head>



  <body




    <div id='calendar1'></div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js'></script>




</body>

    
    
    
  </body>



  <script>

$(document).ready(function() {

var dt = new Date();
var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();



    // page is now ready, initialize the calendar...

    $('#calendar1').fullCalendar({


    scrollTime: time,
       height: "auto",
      eventColor: '#6699ff',
      header: {
        left:   'month, agendaWeek, agendaDay',
        center: 'title',
        right:  'today prev,next'
      },
view: 'listDay',
      defaultView: 'day',
     
      allDaySlot: false,
      minTime: '7:00:00',
      maxTime: '24:00:00',
      slotDuration: '00:15:00',
      weekends: false,
      defaultTimedEventDuration: '00:15:00',
      events: [

<?php

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


$sql="SELECT * FROM `events` ORDER BY starttime;";

$records=mysqli_query($connection, $sql);




while($eventnow=mysqli_fetch_assoc($records)){

?>

{
            title  : '<?php echo ucfirst($eventnow['description']).": ".$eventnow['eventname']?>',
            //start  : moment().subtract(1, 'hours')
          start: '<?php echo $eventnow['date']?>T<?php echo $eventnow['starttime']  ?>',
          end: '<?php echo $eventnow['date'] ?>T<?php echo $eventnow['endtime'] ?>'
        },




<?php




}


?>

    ]



    });
  
//  $('.or').append('<i class="fa fa-car fa-lg"></i>');
//  $('.or').css('display', 'flex');



    

});


  </script>

<style>

#calendar1{
  font-size:0.9em;
  font-family: 'Open Sans';

}

.fc-event{
    font-size: 1.3em;
    overflow: hidden;
    font-family: 'Open Sans';

}

h2{
  display: none;
}




.title{
  font-size: 1.6em;
  text-align: center;
}


</style>

</html>