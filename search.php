<!DOCTYPE html>
<html lang="en">
<head>
	<title>Campustry | Search</title>
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
	require 'includes/header.php';
	?>

	<br><br><br><br>

	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a href="search.php">Basic</a></li>

</ul><br><br><br><br><br>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<form role="form" method="GET" action="searchResults.php">
					<div class="form-group">
						<!--                 <input class="form-control input-lg" id="inputlg" type="text" name="query" placeholder = "Name, Email, About Me"><br> -->
						<input class="typeahead tt-query" id="inputlg" type="text" name="typeahead" autocomplete="off" spellcheck="false" placeholder = "Name, Email, About Me"><br>
						<br>
						<button type="submit" class="btn btn-default btn-lg">
							<span class="glyphicon glyphicon-search"></span> Search
						</button>
						<!-- 		        <input type="text" name="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Type your Query"> -->
					</div>
				</form>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('input.typeahead').typeahead({
			name: 'typeahead',
			remote:'search-ajax.php?key=%QUERY',
			limit : 10
		});
	});
</script>
</body>
</html>
