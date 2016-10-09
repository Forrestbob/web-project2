<?php
session_start();
if (!isset($_SESSION['wins']) || !isset($_SESSION['losses'])){
	$_SESSION['wins'] = 0;
	$_SESSION['losses'] = 0;
}

unset($_SESSION['hangs']);
unset($_SESSION['current_phrase']);
unset($_SESSION['alphabet']);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Project 2</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div id = "body">
		<h1>H A N G M A N !</h2>
		<h2>Choose a topic</h2>
		<table id = "topics">
			<tr><td><a href="hangman.php?topic=languages">Programming Languages</a></td></tr>
			<tr><td><a href="#">Cool Professors</a></td></tr>
			<tr><td><a href="#">GSU Buildings</a></td></tr>
			<tr><td><a href="#">Unprofitable Majors</a></td></tr>
			<tr><td><a href="#">Legends</a></td></tr>
		</table>
		
		<div id = "score">
			<p>Wins:
			<div class = "bold"><?php echo $_SESSION['wins'];?></div></p>
			<p>Losses:
			<div class = "bold"><?php echo $_SESSION['losses'];?></div></p>
		</div>
	</div>
</body>




</html>