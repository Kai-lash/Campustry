<!DOCTYPE html>

<html lang="en">
<head>
	<title>Campustry | Edit Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="./scripts/dropzone.js"></script>
	<link rel="stylesheet" href="/css/typeahead.css">
	<script src="/scripts/typeahead.min.js"></script>

	<script type="text/javascript" charset="utf-8">
  	// assigning the JavaScript variable userId to the current user's ID using localStorage[]
  	$(document).ready(function() {
  		var userId = localStorage['userId'];
  		$("#userId").val(userId);

  		$("#changeAvatar").click(function(){
  			$( "#uploadAvatar" ).trigger( "click" );
  		});

  		$("#saveAvatar").click(function(){
  			$( "#submitAvatar" ).trigger( "click" );
  		});

  		$("#uploadAvatar").change(function () {
  			if ($("#uploadAvatar").val() == "") {
  				return;
  			}

  			var fileInputContent = $("#uploadAvatar").val();

  			//alert("submit value of the file input field=" + fileInputContent);
  			var filename = fileInputContent.replace(/^.*[\\\/]/, '')
  			$("#selectedImage").text(filename);

  			//$("#uploadAvatar").replaceWith('<input type="file" name="uploadAvatar" id="uploadAvatar" />');
  		});

  	});
  </script>

</head>
<body background="images/bg7.jpg">

	<?php
	require 'includes/header.php';

    // Processing Form Submission
	if(isset($_POST['save']))
	{
		require 'db_conn.php';

		if(! get_magic_quotes_gpc() )
		{
			$userid = addslashes ($_POST['userId']);
			$firstName = addslashes ($_POST['FirstName']);
			$lastName = addslashes ($_POST['LastName']);
			$email = addslashes ($_POST['EMail']);
			$password = addslashes ($_POST['PWD']);
			$image = addslashes ($_POST['Image']);
			$contact = addslashes ($_POST['Contact']);
			$course = addslashes ($_POST['Course']);
			$skill = addslashes ($_POST['Skill']);
			$research = addslashes ($_POST['Research']);
			$project = addslashes ($_POST['Project']);
			$hobby = addslashes ($_POST['Hobby']);
			$facebookurl = addslashes ($_POST['FacebookUrl']);
			$linkedinurl = addslashes ($_POST['LinkedinUrl']);
			$twitterurl = addslashes ($_POST['TwitterUrl']);
		}
		else
		{
			$userid = $_POST['userId'];
			$firstName = $_POST['FirstName'];
			$lastName = $_POST['LastName'];
			$email = $_POST['EMail'];
			$password = $_POST['PWD'];
			$image = $_POST['Image'];
			$contact = $_POST['Contact'];
			$course = $_POST['Course'];
			$skill = $_POST['Skill'];
			$research = $_POST['Research'];
			$project = $_POST['Project'];
			$hobby = $_POST['Hobby'];
			$facebookurl = $_POST['FacebookUrl'];
			$linkedinurl = $_POST['LinkedinUrl'];
			$twitterurl = $_POST['TwitterUrl'];
		}
		$userid = $_SESSION['userId'];
		$sql = "Update Users SET FirstName='$firstName', LastName='$lastName', EMail='$email', PWD='$password' WHERE UserID=$userid";

		$retval = mysql_query( $sql, $conn );
		//$insertId = mysql_insert_id();
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}

		$sql = "Update UsersProfile SET Contact='$contact', Course='$course', Skill='$skill', Research='$research', 
		Project='$project', Hobby='$hobby', FacebookUrl='$facebookurl', LinkedinUrl='$linkedinurl', TwitterUrl='$twitterurl' WHERE UserID=$userid";

		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}

		mysql_close($conn);
		
		echo " <script> window.location = 'viewProfile.php?userId=$userid'</script> ";
		//header("Location: ./viewProfile.php?userId=$userid");

	} else 
	{
		require 'db_conn.php';

		$userid = $_SESSION['userId'];
		$sql = "Select u.FirstName, u.LastName, u.EMail, u.PWD, up.Image, up.Contact, up.Course, up.Skill, up.Research, 
		up.Project, up.Hobby, up.FacebookUrl, up.LinkedinUrl, up.TwitterUrl
		from Users u, UsersProfile up WHERE u.UserID=$userid and u.UserID=up.UserID";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}

		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			$firstname = $row['FirstName'];
			$lastname = $row['LastName'];
			$email = $row['EMail'];
			$password = $row['PWD'];
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

		mysql_close($conn);

		?>

		<br><br><br><br>

		<div class="container">
			<div class="panel panel-default">

				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-3"><br>
									<div class="panel panel-default">
										<div class="panel-body">
											<img src="<?php echo $image; ?>" id="profilePic" class="img-circle" alt="Cinque Terre" width="210" height="185">
										</div>
										<div class="panel-footer" align="center">
											<div id="selectedImage"></div>
											<button type="submit" name="changeAvatar" id="changeAvatar" class="btn btn-default">Change</button>
											<button type="submit" name="saveAvatar" id="saveAvatar" class="btn btn-default">Save</button>
										</div>
									</div>
								</div>

								<form method="POST">
									<div class="col-sm-6"><br>
										<div class="form-group">
											<input id="userId" name="userId" type="hidden" required></input>
											<input class="form-control inputdefault" id="FirstName" name="FirstName" type="text" placeholder = "Firstname" value = "<?php echo $firstname; ?>" required><br>
											<input class="form-control inputdefault" id="LastName" name="LastName" type="text" placeholder = "Lastname" value = "<?php echo $lastname; ?>" required><br>
											<input class="form-control inputdefault" id="EMail" name="EMail" type="text" placeholder = "Email" value = "<?php echo $email; ?>" required><br>
											<input class="form-control inputdefault" id="PWD" name="PWD" type="password" placeholder = "Password" value = "<?php echo $password; ?>" required><br>

											
											<input class="form-control inputdefault" id="Contact" name="Contact" type="text" placeholder = "Contact" value = "<?php echo $contact; ?>"><br>
											<input class="form-control inputdefault" id="Course" name="Course" type="text" placeholder = "Courses" value = "<?php echo $course; ?>"><br>
											<input class="form-control inputdefault" id="Skill" name="Skill" type="text" placeholder = "Skills" value = "<?php echo $skill; ?>"><br>
											<input class="form-control inputdefault" id="Research" name="Research" type="text" placeholder = "Research" value = "<?php echo $research; ?>"><br>
											<input class="form-control inputdefault" id="Project" name="Project" type="text" placeholder = "Project" value = "<?php echo $project; ?>"><br>
											<input class="form-control inputdefault" id="Hobby" name="Hobby" type="text" placeholder = "Hobby" value = "<?php echo $hobby; ?>"><br>
										</div> <!-- end form-group -->
									</div> <!-- end col-sm-8 -->


									<div class="col-sm-3"><br>
										<div class="panel panel-default">
											<div class="panel-heading" align="center">Social networking URL</div>
											<div class="panel-body" align="center">
												<a href="http://facebook.com"><img src="images/facebook.png" class="img-circle" alt="Cinque Terre" width="50" height="50" ></a>&nbsp;&nbsp;
												<input class="form-control input-lg" id="FacebookUrl" name="FacebookUrl" type="text" placeholder = "Facebook" value="<?php echo $facebookurl; ?>"><br>
												<a href="http://linkedin.com"><img src="images/linkedin.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
												<input class="form-control input-lg" id="LinkedinUrl" name="LinkedinUrl" type="text" placeholder = "Linkedin" value="<?php echo $linkedinurl; ?>"><br>
												<a href="http://twitter.com"><img src="images/twitter.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
												<input class="form-control input-lg" id="TwitterUrl" name="TwitterUrl" type="text" placeholder = "Twitter" value="<?php echo $twitterurl; ?>"><br>
											</div>
										</div>
									</div>
								</div>
								

							</div>
						</div>
					</div>
					<div class="panel-footer">
						<ul class="pager">
							<button type="submit" name="save" class="btn btn-default">Save</button>
							<button type="submit" name="Discard" class="btn btn-default">Discard</button>
						</ul>
					</div> <!--  end panel-footer -->
				</form>
			</div> <!-- end panel panel-default -->
		</div> <!-- end container -->
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<div style='height: 0px;width: 0px; overflow:hidden;'>
				<input type="file" name="uploadAvatar" id="uploadAvatar">
				<input type="submit" value="Upload Image" name="submitAvatar" id ="submitAvatar">
			</div>
		</form>
		<?php } ?>
	</body>
	</html>
