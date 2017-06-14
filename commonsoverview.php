<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="300;url=/commonsoverview.php" />
<title>Today at Gibson Ek</title>
<meta charset='utf-8' />
<link href='lib/fullcalendar.min.css' rel='stylesheet' />
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<link href='lib/fullcalendar.print.css' rel='stylesheet' media='print' />
<link href='scheduler.min.css' rel='stylesheet' />
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='lib/fullcalendar.min.js'></script>
<script src='scheduler.min.js'></script>
<script>

	$(function() { // document ready



		$('#calendar1').fullCalendar({
		schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
			defaultView: 'agendaDay',
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
					type: 'agenda',
					duration: { days: 2 },

					// views that are more than a day will NOT do this behavior by default
					// so, we need to explicitly enable it
					groupByResource: true

					//// uncomment this line to group by day FIRST with resources underneath
					//groupByDateAndResource: true
				}
			},

			//// uncomment this line to hide the all-day slot
			//allDaySlot: false,

			resources: [
				{ id: '200', title: 'Room 200' },
				{ id: '201', title: 'Room 201'},
				{ id: '203', title: 'Room 203'},
				{ id: '204', title: 'Room 204' },
				{ id: 'art', title: 'Art Space' },
				{ id: 'commons', title: 'Commons' },
				{ id: 'conference', title: 'Conference Room' },
				{ id: 'science', title: 'Science Space' },
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


$sql="SELECT * FROM `events` ORDER BY starttime;";

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
    height: 30px;
}

	.fc-toolbar{
	display: none;
	}


	body {
		margin: 0;
		padding: 0;
		font-family: "Rubik",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 95%;
		margin: 50px auto;
		height: 95%;
	}

</style>
</head>
<body>

	<div id='calendar1'></div>

</body>
</html>