<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- jquery scripts -->
		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>



		<link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">


		<!-- moment.js scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<!-- FullCalendar scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
		<!--<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css">-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.js"></script>

		<link rel="stylesheet" type="text/css" href="css/style.css">



		<script type='text/javascript'>

			$(document).ready(function() {

				$('#calendar').fullCalendar({
					timezone: 'America/Denver',
					aspectRatio: 2.5,
					height: parent,
					header: {
						left: 'prev, today',
						center: 'title',
						right: 'next'
					},


					googleCalendarApiKey: 'AIzaSyC5NS9ELt7FVnjiUeylmK4keWJjDdhIP1g',
					eventSources: [
						{
							googleCalendarId: 'gshsfootballcalendar@gmail.com',
							color: 'blue'
						},
						{
							googleCalendarId: 'tj3oorkmiuj3nhc366ebl85h1c@group.calendar.google.com',
							color: 'purple'
						},
						{
							googleCalendarId: '959jn2t6fufau9h8obs46qrpto@group.calendar.google.com',
							color: 'orange'
						},
						{
							googleCalendarId: 'k77j5h0vja0bkjdh9kidp2r2s8@group.calendar.google.com',
							color: 'red'
						},
						{
							googleCalendarId: '85efvd58d3p8svf8n4tl2frqdc@group.calendar.google.com',
							color: 'green'
						}
					]
				});
			});

		</script>
	</head>
	<body>
		<header>
			<!-- Banner -->
			<div class="headerdiv">

				<img id="headerlogo" src="images/glenwood-springs-co.gif">
				<div id="headertext">
					<p style="margin:0">Glenwood Springs High School <br> Demons Football </p>
				</div>
			</div>
			<!-- End Banner -->
		</header>
		<header id="luxbar" class="luxbar-default">
			<input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
			<div class="luxbar-menu luxbar-menu-left luxbar-menu-dark">
				<ul class="luxbar-navigation">
					<li class="luxbar-header">
						<label class="luxbar-hamburger luxbar-hamburger-doublespin"
								 id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
					</li>
					<li class="luxbar-item"><a href="index.php">Home</a></li>
					<li class="luxbar-item"><a href="playAlert.php">Player Alerts</a></li>
					<li class="luxbar-item"><a href="demHappen.php">Demon Happenings</a></li>
					<li class="luxbar-item dropdown"><a href="#">Game Schedules</a>
						<ul>
							<li class="luxbar-item"><a href="varSched.php">Varsity</a></li>
							<li class="luxbar-item"><a href="jvSched.php">Junior Varsity</a></li>
							<li class="luxbar-item"><a href="freshSched.php">Freshman</a></li>
						</ul>
					</li>
					<li class="luxbar-item dropdown"><a href="#">Rosters</a>
						<ul>
							<li class="luxbar-item"><a href="#">Varsity</a></li>
							<li class="luxbar-item"><a href="#">Junior Varsity</a></li>
							<li class="luxbar-item"><a href="freshRoster.php">Freshman</a></li>
							<li class="luxbar-item"><a href="#">Managers</a></li>
							<li class="luxbar-item"><a href="#">Coaching Staff</a></li>
						</ul>
					</li>
					<li class="luxbar-item"><a href="forms.php">Forms</a></li>
					<li class="luxbar-item"><a href="calendar.php">Calendar</a></li>
					<li class="luxbar-item"><a href="#">Links</a></li>
					<li class="luxbar-item"><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</header>
			<div id="calbox">
		<div id="calendar"></div>
			</div>
	</body>
</html>