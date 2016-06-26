<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campustry | Recent Searches</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    require 'includes/header.php';
  ?>

  <br><br><br><br>

  <div class="container">
    <ul class="nav nav-tabs">
      <li ><a href="search.php">Basic</a></li>
      <li ><a href="advancedSearch.php">Advanced</a></li>
      <li class="active"><a href="recentSearch.php">Recent</a></li>
    </ul><br><br>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-heading" align="center">Search history</div>
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">
                <a href="viewProfile.php"><h4>Alan Pitch</h4></a>
              </li>
              <li class="list-group-item">
                <a href="#"><h4>Robert peter</h4></a>
              </li>
              <li class="list-group-item">
                <a href="#"><h4>Ian streak</h4></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </body>
  </html>
