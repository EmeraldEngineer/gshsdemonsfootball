<!DOCTYPE html>

<html lang="en">
	<!-- Created by Taylor McCarthy, background pattern "grey wash wall" from "toptal.com/designers/subtlepatterns/" -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- jquery scripts -->
		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">


		<!-- moment.js scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<!-- FullCalendar scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
		<!--<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css">-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/gcal.js"></script>

		<link rel="stylesheet" type="text/css" href="css/style.css">

 <!--TODO Fix upcoming events list-->
		<script type='text/javascript'>

			$(document).ready(function() {

				$('#calendar').fullCalendar({
					aspectRatio: 2.5,
					defaultView: 'list',
					header: false,
					views: {
						list: {
							duration: { days: 90},
							listDayAltFormat: 'dddd'
						}
					},

					googleCalendarApiKey: 'AIzaSyAlc7zJWBH4IV3qXTv_XUQwJCUHZPMS4wI',
					events: {
						googleCalendarId: 'h469sf6pp54j90dieounarv9vk@group.calendar.google.com'
					}


				});
			});

		</script>

	</head>
	<body>
		<header>
			<!-- Banner -->
			<div class="headerdiv">

				<img id="headerlogo" src="images/gshsdemonslogo-cropped.png">
				<div id="headertext">
					<p style="margin:0">Glenwood Springs High School Demons Football </p>
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
					<li class="luxbar-item"><a href="#">Home</a></li>
					<li class="luxbar-item"><a href="#">Schedules</a></li>
					<li class="luxbar-item dropdown"><a href="#">Rosters</a>
						<ul>
							<li class="luxbar-item"><a href="#">Varsity</a></li>
							<li class="luxbar-item"><a href="#">Junior Varsity</a></li>
							<li class="luxbar-item"><a href="#">Freshman</a></li>
							<li class="luxbar-item"><a href="#">Managers</a></li>
							<li class="luxbar-item"><a href="#">Coaching Staff</a></li>
						</ul>
					</li>
					<li class="luxbar-item"><a href="#">Forms</a></li>
					<li class="luxbar-item"><a href="calendar.php">Calendar</a></li>
					<li class="luxbar-item"><a href="#">Contact</a></li>
				</ul>
			</div>
		</header>
		<!-- TODO re-enable after fixing list view -->
		<div class="upEventTitle"><p>Upcoming Events</p></div>
			<div class="upEvent">
				<div id="calendar"></div>
			</div>

	</body>
</html>