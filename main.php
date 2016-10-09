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
		<h1>HANGMAN!</h2>
		<h2>Choose a topic</h2>
		<table id = "topics">
			<tr><td>Programming Languages</td></tr>
			<tr><td>Cool Professors</td></tr>
			<tr><td>GSU Buildings</td></tr>
			<tr><td>Unprofitable Majors</td></tr>
			<tr><td>Legends</td></tr>
		</table>
		
		<div id = "score">
			<h4>Wins:</h4>
			<p><?php echo $_SESSION['wins'];?></p>
			<h4>Losses:</h4>
			<p><?php echo $_SESSION['losses'];?></p>
		</div>
	</div>
</body>




</html>