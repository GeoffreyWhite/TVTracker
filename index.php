<?php
$title = "TV Tracker Prototype";

$test = "test";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Challenge 4 : TV Tracker Prototype</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
		<div class="container">
			<div class="row">			
				<div class="col-sm-12">
					<h2><?= $title ?></h2>
				</div>
			</div> <!-- End header -->

			<div class="row">
				<div class="col-sm-12">
					<form class="form-horizontal" action="report.php" method="post">
						<h4>Tell us a bit about yourself...</h4>

						<div class="form-group">
							<label for="txtFirstName" class="col-sm-2 control-label">First Name</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="What's your first name?">
							</div>
						</div><!-- End first name input -->

						<div class="form-group">
							<label for="txtLastName" class="col-sm-2 control-label">Last Name</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="What's your last name?">
							</div>
						</div><!-- End last name input -->

						<div class="form-group">
							<label for="txtYearBorn" class="col-sm-2 control-label">Year of Birth</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="txtYearBorn" name="txtYearBorn" placeholder="What year were you born?">
							</div>
						</div><!-- End year of birth input -->

						<div class="form-group">
							<label for="txtSchoolYear" class="col-sm-2 control-label">Current School Year</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="txtSchoolYear" name="txtSchoolYear" placeholder="What grade are you in?">
							</div>
						</div><!-- End current school year input -->

						<div class="form-group">
							<label for="txtSiblings" class="col-sm-2 control-label">Number of Siblings</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="txtSiblings" name="txtSiblings" placeholder="How many brothers and sisters do you have?">
							</div>
						</div><!-- End number of siblings input -->

						<br />
						<h4>On average, how much time each day do you spend on the following?</h4>

						<div class="form-group">
							<label for="txtBedTime" class="col-sm-2 control-label">Time to Bed</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtBedTime" name="txtBedTime" placeholder="Hour">							
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">PM</label>
						</div><!-- End time to bed input -->

						<div class="form-group">
							<label for="txtWakeTime" class="col-sm-2 control-label">Wake Up Time</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtWakeTime" name="txtWakeTime" placeholder="Hour">
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">AM</label>
						</div><!-- End wake up time input -->

						<div class="form-group">
							<label for="txtHomeworkTime" class="col-sm-2 control-label">Time Spent on Homework</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtHomeworkTime" name="txtHomeworkTime" placeholder="Hours">
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">Hours</label>
						</div><!-- End time on homework input -->

						<div class="form-group">
							<label for="txtTVTime" class="col-sm-2 control-label">Time Spent Watching TV</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtTVTime" name="txtTVTime" placeholder="Hours">
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">Hours</label>
						</div><!-- End time watching tv input -->

						<div class="form-group">
							<label for="txtComputerTime" class="col-sm-2 control-label">Time Spent on Computer/Games</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtComputerTime" name="txtComputerTime" placeholder="Hours">
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">Hours</label>
						</div><!-- End time on computer/games input -->

						<div class="form-group">
							<label for="txtFamily" class="col-sm-2 control-label">Time Spent with Family</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtFamily" name="txtFamily" placeholder="Hours">
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">Hours</label>
						</div><!-- End time with family input -->

						<div class="form-group">
							<label for="txtFriends" class="col-sm-2 control-label">Time Spent with Friends</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="txtFriends" name="txtFriends" placeholder="Hours">
							</div>
							<label for="txtBedTime" class="col-sm-1 control-label" style="text-align:left">Hours</label>
						</div><!-- End time with friends input -->					

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-3">
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>

				</div>
			</div>		
		</div>		

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>