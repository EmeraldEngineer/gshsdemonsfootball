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
					aspectRatio: 2.5,
					defaultView: 'list',
					header: false,
					views: {
						list: {
							duration: { days: 7},
							listDayAltFormat: 'dddd'
						}
					},

					googleCalendarApiKey: 'AIzaSyC5NS9ELt7FVnjiUeylmK4keWJjDdhIP1g',
					events: {
						googleCalendarId: 'gshsfootballcalendar@gmail.com'
					}


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
					<p style="margin:0">Glenwood Springs High School Demons Football 2017</p>
				</div>
			</div>
			<!-- End Banner -->
		</header>
		<div id="naviBar">
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
		</div>

		<div class="playAlertTitle">
			<p>Homecoming Week</p>
		</div>
		<div class="playAlertText">
			<p>Homecoming week runs from Monday, October 9th through Friday, October 13th. See calendar page for events (TBD).</p>
		</div>

		<div class="playAlertTitle">
			<p>Demon Football Spirit Gear</p>
		</div>
		<div class="playAlertText">
			<p>Glenwood Springs Demons Football branded clothing is now available. A PDF with instructions for order can be found <a href="forms.php">here</a>. Or you can browse the store directly <a href="https://glenwoodfb2017.itemorder.com">here</a>. </p>
		</div>


		<div class="playAlertTitle">
			<p>Demon Fight Song</p>
		</div>
		<div class="playAlertText">
			<p>Send Glenwood down the field, Glenwood will win. Fight, fight, for victory, Glenwood knows no defeat. So roll out the mighty score, never give in. Shoulder to shoulder, we will fight, fight, fight!</p>
		</div>
	</body>
</html>