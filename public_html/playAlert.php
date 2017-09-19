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
			<p>Varsity Travel</p>
		</div>
		<div class="playAlertText">
			<p>Harrison Varsity travel bus leaves at 10am on Friday September 22nd.</p>
		</div>
		<div class="playAlertTitle">
			<p>Football Picture Order Form</p>
		</div>
		<div class="playAlertText">
			<p>The order form for pictures is now available <a href="forms.php">here</a>. </p>
		</div>
		<!-- Fall Fit Camp Alert -->
		<!--<div class="playAlertTitle">
			<p>Glenwood Fall Fitness Camp 2017</p>
		</div>
		<div class="playAlertText">
				Download registration form <a href="forms.php">here</a>.
				<br>
				Bring registration form and $30 to registration on Monday 8-7-17 at 2:30.
				<br>
				See form on "What to Bring".
		</div></-->
		<br>
		<br>
		<br>
		<div class="playAlertTitle">
			<p>Register for Fall Sports 2017</p>
		</div>
		<div class="playAlertText">
			<p>Players must be registered by Friday 8-11-17 to be eligible for the first day of practice on Monday 8-14-17.
				<br>
				<br>
				You can register <a href="http://www.roaringfork.portal.rschooltoday.com/">here</a>.
				<br>
				<br>
				Or by going to <a href="http://www.rfsd.org">www.rfsd.org</a> and selecting "Online Athletic Registration" under the "Parents" menu.
				<br>
				<br>
			</p>
				<p class="emphText">Please ensure you complete all 9 steps on the online athletic registration page, you will only be registered after all 9 steps are completed.
				</p>
		</div>

		<div class="playAlertTitle">
			<p>Player Equipment Needs</p>
		</div>
		<div class="playAlertText">
			<p>This is a list of equipment you may want to order or purchase before the first practice on 8-14-17</p>
			<p>Football Cleats - Player Provides</p>
			<p>Football Girdle - Player Provides</p>
			<p>Football Gloves - Optional</p>
			<p>Mouth Guard - Player Provides</p>
		</div>

	</body>
</html>