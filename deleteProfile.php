<!DOCTYPE html>
<html lang="en">
<head>
	<title>Campustry | Delete Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/css/typeahead.css">
	<script src="/scripts/typeahead.min.js"></script>
</head>
<body background="images/bg7.jpg">

	<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require 'includes/header.php';

    // Processing Form Submission
	if(isset($_POST['yes']))
	{
		require_once 'db_conn.php';

		$update_sql = "UPDATE UsersProfile
		SET Active=0
		WHERE UserID=".$_SESSION['userId'];

		$update_result = mysql_query($update_sql, $conn);
		if ($update_result === TRUE) {
			header("Location: ./index.php");
		} else {
			die('Could not enter data: ' . mysql_error());
		}
	}
	if(isset($_POST['no']))
	{
		header("Location: ./viewProfile.php?userId=".$_SESSION['userId']);
	}

	?>

	<br><br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">Delete Your Campustry</div>
					<div class="panel-body text-center">
						<br>
						<br>
						<p>
							We'd hate to see you go.  Are you sure you would like to delete your Campustry profile?
						</p>
						<br>
						<br>
					</div>
					<div class="panel-footer">
						<form method="post">
							<ul class="pager">
								<button type="submit" name="yes" class="btn btn-default">Yes</button>
								<button type="submit" name="no" class="btn btn-default">&nbsp;No&nbsp;</button>
							</ul>
						</form>
					</div> <!--  end panel-footer -->
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</body>
	</html>
