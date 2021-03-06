<!DOCTYPE html>
<html>
<head>
<title>Today at Gibson Ek</title>
<meta charset='utf-8' />
<link href='lib/fullcalendar.min.css' rel='stylesheet' />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href='lib/fullcalendar.print.css' rel='stylesheet' media='print' />
<link href='scheduler.min.css' rel='stylesheet' />
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='lib/fullcalendar.min.js'></script>
<script src='scheduler.min.js'></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script>

	$(function() { // document ready



		$('#calendar1').fullCalendar({
		schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
			defaultView: 'basicWeek',
			height: 355,
			eventLimit: true,
			allDaySlot: false,

			weekends: false,
      minTime: '7:00:00',
      maxTime: '16:00:00', // allow "more" link when too many events
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'agendaDay,agendaTwoDay,agendaWeek,month'
			},
			views: {
				agendaTwoDay: {
					type: 'basicWeek',
					duration: { days: 2 },

					// views that are more than a day will NOT do this behavior by default
					// so, we need to explicitly enable it
					groupByResource: false

					//// uncomment this line to group by day FIRST with resources underneath
					//groupByDateAndResource: true
				}
			},

			//// uncomment this line to hide the all-day slot
			//allDaySlot: false,

			resources: [
				{ id: 'all', title: 'General' },
				{ id: '200', title: 'Room 200' },
				{ id: '201', title: 'Room 201'},
				{ id: '203', title: 'Room 203'},
				{ id: '204', title: 'Room 204' },
				{ id: 'art', title: 'Art Space' },
				{ id: 'commons', title: 'Commons' },
				{ id: 'conference', title: 'Conference Room' },
				{ id: 'kitchen', title: 'Kitchen' },
				{ id: 'office', title: 'Main Office' },
				{ id: 'studio', title: 'Recording Studio' },
				{ id: 'science', title: 'Science Space' },
				{ id: 'stage', title: 'Stage' },
				{ id: 'tech', title: 'Tech Space' },
				{ id: 'wood', title: 'Wood Shop' }
			],
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


$sql="SELECT * FROM `events` WHERE `offering` = 'yes' OR `eventname` = 'Lunch' OR `eventname` = 'Advisory' AND `description` = '200' ORDER BY starttime;";

$records=mysqli_query($connection, $sql);




while($eventnow=mysqli_fetch_assoc($records)){

?>

{
            resourceId: '<?php echo $eventnow['description']?>', title  : '<?php echo $eventnow['eventname']?>',
            //start  : moment().subtract(1, 'hours')
          start: '<?php echo $eventnow['date']?>T<?php echo $eventnow['starttime']  ?>',
          end: '<?php echo $eventnow['date'] ?>T<?php echo $eventnow['endtime'] ?>'
        },




<?php




}


?>
			],



			select: function(start, end, jsEvent, view, resource) {
				console.log(
					'select',
					start.format(),
					end.format(),
					resource ? resource.id : '(no resource)'
				);
			},
			dayClick: function(date, jsEvent, view, resource) {
				console.log(
					'dayClick',
					date.format(),
					resource ? resource.id : '(no resource)'
				);
		
		
			}
			

		});

	
	
	});



</script>
<style>

.fc-agendaDay-view tr {
    height: 45px;
    font-family: sans-serif;
}




	body {
		margin: 0;
		padding: 0;
		font-size: 14px;
	}

	#calendar {
		max-width: 55%;
		margin: 50px auto;
		height: 50%; 
	}

body{
background:rgba(25,60,82,0.8);
font-family: 'Raleway', sans-serif;
height:50%;
color:white;

}

.fc-content{

font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>

	<div id='calendar1'></div>
	

</body>
</html>