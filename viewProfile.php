<!DOCTYPE html>
<html lang="en">
<head>
	<title>Campustry | Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/css/typeahead.css">
	<script src="/scripts/typeahead.min.js"></script>

	<script type="text/javascript" charset="utf-8">
  	// assigning the JavaScript variable userId to the current user's ID using localStorage[]
  	$(document).ready(function() {
  		var userId = localStorage['userId'];
  		$("#userId").val(userId);
  	});
  </script>

</head>
<body background="images/bg7.jpg">

	<?php
	require 'includes/header.php';
	require 'db_conn.php';
	$userid = $_GET['userId'];
		// $userId = $_SESSION['userId'];

    /*
      Getting FirstName, LastName, EMail and About_Me from our database and assigning them to the
      variables $FirstName, $LastName, $Email and $About_Me, respectively
    */
    //$userid = $_SESSION['userId'];
      $sql = "Select u.FirstName, u.LastName, u.EMail, up.Image, up.Contact, up.Course, up.Skill, 
      up.Research, up.Project, up.Hobby, up.FacebookUrl, up.LinkedinUrl, up.TwitterUrl
      from Users u, UsersProfile up WHERE u.UserID=$userid and u.UserID=up.UserID";
      $retval = mysql_query( $sql, $conn );
      if(! $retval )
      {
      	die('Could not get data: ' . mysql_error());
      }
      while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
      {
      	$firstname = $row['FirstName'];
      	$lastname = $row['LastName'];
      	$email = $row['EMail'];
      	$image = $row['Image'];
      	$contact = $row['Contact'];
      	$course = $row['Course'];
      	$skill = $row['Skill'];
      	$research = $row['Research'];
      	$project = $row['Project'];
      	$hobby = $row['Hobby'];
      	$facebookurl = $row['FacebookUrl'];
      	$linkedinurl = $row['LinkedinUrl'];
      	$twitterurl = $row['TwitterUrl'];
      }
      ?>

      <br><br><br><br>

      <div class="container">

      	<!-- input field to hold userId -->
      	<input id="userId" name="userId" type="hidden"></input>

      	<div class="panel panel-default">
      		<div class="panel-body">
      			<div class="row">
      				<div class="col-sm-12">
      					<div class="row">
      						<div class="col-sm-3">
      							<img src="<?php echo $image; ?>" class="img-circle" alt="Cinque Terre" width="210" height="185">
      						</div>
      						<div class="col-sm-6"><a href="#"><h3><span id="firstname"><?php echo $firstname; ?></span>&nbsp;<span id="lastname"><?php echo $lastname; ?></span></h3></a><!-- First year, Undergraduate, Computer Science --><br><br>
      							<span class="label label-primary">Email Address</span> : <span id="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span><br><br>
      							<span class="label label-primary">Contact</span> : <?php echo $contact; ?><br><br>
      							<span class="label label-primary">Courses</span> : <?php echo $course; ?><br><br>
      							<span class="label label-primary">Skills</span> : <?php echo $skill; ?><br><br>
      							<span class="label label-primary">Research Interests</span> : <?php echo $research; ?><br><br>
      							<span class="label label-primary">Project/s</span> : <?php echo $project; ?><br><br>
      							<span class="label label-primary">Hobbies</span> : <?php echo $hobby; ?><br><br>
      						</div>
      						<div class="col-sm-3"><br>
      							<!--<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Send message</button><br>-->
      							<div class="panel panel-default">
      								<div class="panel-heading" align="center">Connect with <b><?php echo $firstname; ?></b></div>
      								<div class="panel-body" align="center">
      									<a href="<?php echo $facebookurl; ?>"><img src="images/facebook.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
      									<a href="<?php echo $linkedinurl; ?>"><img src="images/linkedin.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
      									<a href="<?php echo $twitterurl; ?>"><img src="images/twitter.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      		<div class="panel-footer">
      			<ul class="pager">
      				<li ><a href="search.php">Back to Search</a></li>
      			</ul>
      		</div>
      	</div>
      </div>
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
      	<div class="modal-dialog">
      		<!-- Modal content-->
      		<div class="modal-content">
      			<div class="modal-header">
      				<button type="button" class="close" data-dismiss="modal">&times;</button>
      				<h4 class="modal-title">To: Alan Pitch</h4>
      			</div>
      			<div class="modal-body">
      				<p>Hello Alan, I would like to meet you to discuss my project. </p>
      			</div>
      			<div class="modal-footer">
      				<button type="button" class="btn btn-default" data-dismiss="modal">Send</button>
      			</div>
      		</div>
      	</div>
      </div>
  </body>
  </html>
