<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>News Panel</title>
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="index.php">News Panel</a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<a class="nav-link" href="index.php"><span class="fa fa-home"></span>Home</a>
		  </li>
		  <li class="nav-item active">
			<a class="nav-link" href="strona.php"><span class="fa fa-server"></span>Add news</a>
		  </li>
		</ul>
	  </div>
	</nav>
<section class="dodej_notke">
	<div class="container">
		<h1>Add news</h1>
		<form method="post">
			<div class="form-group">
				<label for="name" class="control-label">Title</label>
				<input class="form-control" id="name" type="text" name="tytul">
			</div>
			<div class="form-group">
				<label for="wpis" class="control-label">News</label>
				<textarea class="form-control" id="wpis" name="wpis"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Send</button>
		</form>
	</div>
</section>

<?php
require('config.php');
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars($_POST, true);
    echo '</pre>';
}
$wpis=$_POST['wpis'];
$tytul=$_POST['tytul'];
//$data = datetime('now');
$mydate=getdate(date("U"));
$datatime="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
$addnotka = $asd->query("INSERT INTO asd (tytul, tekst, data) VALUES('$tytul','$wpis','$datatime');");
$asd->close();
?>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
