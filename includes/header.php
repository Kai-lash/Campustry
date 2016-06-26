<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Commented out to restore AJAX functionality on search.php-->
	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
</head>
<body>

	<script type="text/javascript">
		
		<?php if(!(isset($_SESSION["userId"])) && isset($_COOKIE["userId"]) && isset($_COOKIE["userName"]) ) {
			$_SESSION['userId'] = $_COOKIE["user_Id"];
			$_SESSION['userName'] = $_COOKIE["user_Name"];
			$_SESSION['userImage'] = $_COOKIE["userImage"];
		} ?>

		function logout(){
			document.cookie = "userId=; Path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			document.cookie = "userName=; Path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC";
			window.location.href = './index.php';
		}
	</script>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/search.php">Campustry</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li ><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-user"></span> Profile
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="viewProfile.php?userId=<?php echo $_SESSION['userId']; ?>">View</a></li>
							<li><a href="editProfile.php">Edit</a></li>
						</ul>
					</li>
					<!--<li><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages<span class="badge">2</span> </a></li>-->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="viewProfile.php?userId=<?php echo $_SESSION['userId']; ?>"><div style="float:left"><img src="<?php echo $_SESSION['userImage']; ?>" class="img-circle" alt="image" width="25" height="25"> </div>
						<div style="float:left; padding-left : 5px;" id="currentUser"><?php echo $_SESSION['userName']; ?></div></a></li>
						<li><a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-cog"></span> Settings
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="deleteProfile.php">Delete Campustry Profile</a></li>
							</ul>
						</li>
						<li><a href="#logout" onclick="logout();"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</body>
	</html>
