<!DOCTYPE html>

<html lang="en">
	<!-- Created by Taylor McCarthy, background pattern "grey wash wall" from "toptal.com/designers/subtlepatterns/" -->
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
							duration: { days: 90},
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
		<div class="playAlertTitle">
			<p>Freshman Roster</p>
		</div>
		<div class="formsText">
			<form method="get" action="downloads/Freshman%20Roster%202017-2018.pdf">
				<button type="submit">PDF</button>
			</form>
		</div>
		<div class="playAlertTitle">
		<p>Football Picture Order Form</p>
		</div>
		<div class="formsText">
			<form method="get" action="downloads/demon-football-photo-order-form.pdf">
				<button type="submit">PDF</button>
			</form>
		</div>

		<div class="playAlertTitle">
			<p>Glenwood Springs Demons Clothing Order Form</p>
		</div>
		<div class="formsText">
			<form method="get" action="downloads/2017%20GSHS%20FOOTBALL%20FLYER.pdf">
				<button type="submit">PDF</button>
			</form>
		</div>

		<div class="playAlertTitle">
			<p>Youth Football Camp 2017</p>
		</div>
		<div class="formsText">

			<form method="get" action="downloads/YOUTH-FOOTBALL-CAMP-2017.pdf">
				<button type="submit">PDF</button>
			</form>
		</div>
		<br>
		<div class="playAlertTitle">
			<p>Fall Fit Camp 2017</p>
		</div>
		<!-- Fall Fit Camp Form, saved for later -->
		<!--<div class="formsText">

			<form method="get" action="downloads/FALL%20FIT%20FB%20CAMP%202017.pdf">
				<button type="submit">PDF</button>
			</form>
			<form method="get" action="downloads/FALL%20FIT%20FB%20CAMP%202017.doc">
				<button type="submit">MS Word</button>
			</form>
		</div>-->
	</body>
</html>