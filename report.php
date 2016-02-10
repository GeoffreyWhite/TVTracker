<?php

$title = "Survey Results";

// check for missing input and redirect to main page
if (($_POST['txtFirstName'] == "") || ($_POST['txtLastName'] == "") ||
	  ($_POST['txtYearBorn'] == "") || ($_POST['txtSchoolYear'] == "") ||
	  ($_POST['txtSiblings'] == "") || ($_POST['txtBedTime'] == "") ||
	  ($_POST['txtWakeTime'] == "") || ($_POST['txtHomeworkTime'] == "") ||
	  ($_POST['txtTVTime'] == "") || ($_POST['txtComputerTime'] == "") ||
	  ($_POST['txtFamily'] == "") || ($_POST['txtFriends'] == "")) {
	header("location: index.php");
	exit;
}

// get the input values
$firstName = $_POST['txtFirstName'];
$lastName = $_POST['txtLastName'];
$yearBorn = $_POST['txtYearBorn'];
$schoolYear = $_POST['txtSchoolYear'];
$siblings = $_POST['txtSiblings'];
$bedTime = $_POST['txtBedTime'];
$wakeTime = $_POST['txtWakeTime'];
$homeworkTime = $_POST['txtHomeworkTime'];
$tvTime = $_POST['txtTVTime'];
$computerTime = $_POST['txtComputerTime'];
$family = $_POST['txtFamily'];
$friends = $_POST['txtFriends'];

// Calculate time left in school
// Full years remaining - assume graduation upon completetion of grade 12
$yrs = 12 - $schoolYear;

// Calculate total homework time
$totalHomeworkHrs = $homeworkTime * 365 * $yrs;

// Calculate total screen time
$totalScreenHrs = ($tvTime + $computerTime) * 365 * $yrs;

// Calculate total screen time as a percent of awake time
// awake time - assumes they wake up in the AM and go to bed in the PM
$awake = (12 - $wakeTime) + $bedTime; 
$totalScreenPercent = (($tvTime + $computerTime) / $awake) * 100;


// build the email body
$msg = "<table class='table'><tr><th>Category</th><th>Response</th></tr>";
$msg .= "<tr><td>Name</td><td>$firstName $lastName</td></tr>";
$msg .= "<tr><td>Year of Birth</td><td>$yearBorn</td></tr>";
$msg .= "<tr><td>School Year</td><td>$schoolYear</td></tr>";
$msg .= "<tr><td>Siblings</td><td>$siblings</td></tr>";
$msg .= "<tr><td>Bed Time</td><td>$bedTime</td></tr>";
$msg .= "<tr><td>Time Up</td><td>$wakeTime</td></tr>";
$msg .= "<tr><td>Time on Homework</td><td>$homeworkTime</td></tr>";
$msg .= "<tr><td>Time on TV</td><td>$tvTime</td></tr>";
$msg .= "<tr><td>Time on Computer/Games</td><td>$computerTime</td></tr>";
$msg .= "<tr><td>Time with Family</td><td>$family</td></tr>";
$msg .= "<tr><td>Time with Friends</td><td>$friends</td></tr>";
$msg .= "<tr><td>Years left in school</td><td>$yrs</td></tr>";
$msg .= "<tr><td>Hours to be Spent on Homework</td><td>$totalHomeworkHrs</td></tr>";
$msg .= "<tr><td>Hours to be spent in front of a screen</td><td>$totalScreenHrs</td></tr>";
$msg .= "<tr><td>Percent of time awake in front of a screen</td><td>$totalScreenPercent</td></tr>";
$msg .= "</table>";

// other email settings
$to = "geoffwhite83@gmail.com";

$subject = "$firstName $lastName's Survey Results";

$mailheaders = "From: TV Tracker <test@example.com>\n";
$mailheaders .= "Reply-To: test@example.com";
$mailheaders .= "MIME-Version: 1.0\r\n";
$mailheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// send the email
mail($to, $subject, $msg, $mailheaders);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Challenge 4 : TV Tracker Report</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2><?= $title ?></h2>
				</div>
			</div><!-- End header -->

			<div class="row">
				<div class="col-md-12">
					<p>Great! Thanks <?= $firstName ?> for responding to our survey.</p>
					<ul>
						<li>Name: <?= "$firstName $lastName" ?></li>
						<li>Birth Year: <?= $yearBorn ?></li>
						<li>Current School Year: <?= $schoolYear ?></li>
						<li>No. of Sublings: <?= $siblings ?></li>
					</ul>				
					<h3><?= "Now, here's your report!" ?></h3>
					<ul>
						<li>You have <?= $yrs ?> full years left in school.</li>
						<li>You will spend approximately <?= $totalHomeworkHrs ?> hours doing homework.</li>
						<li>You will spend approximately <?= $totalScreenHrs ?> hours, or <?= $totalScreenPercent ?>% of your awake time in front of a tv or computer screen.</li>					
					</ul>
				</div><!-- End report -->								
			</div>
		</div>    
			
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Email - test ouput:</h3>
					<?= $msg ?>
				</div>
			</div>				
		</div><!-- End email -->			

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>