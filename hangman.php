<?php
session_start();
	
$topic = $_GET['topic'];
switch ($topic){
	case "languages":
		$topicName = "Programming Languages";
		$phrase = "JAVASCRIPT";
		break;
	case "professors":
		$topicName = "Cool Professors";
		$phrase = "LOUIS HENRY";
		break;
	case "buildings":
		$topicName = "GSU Buildings";
		$phrase = "PETIT SCIENCE CENTER";
		break;
	case "legends":
		$topicName = "Legends";
		$phrase = "HARAMBE";
		break;
	case "majors":
		$topicName = "Unprofitable Majors";
		$phrase = "ART HISTORY";
		break;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Project 2</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div id = "body2">
	<h2><?php echo $topicName; ?></h2>
	<img src = "images/Hangman-6.png"/>
	<div id = "score">
			<p>Wins:
			<div class = "bold"><?php echo $_SESSION['wins'];?></div></p>
			<p>Losses:
			<div class = "bold"><?php echo $_SESSION['losses'];?></div></p>
	</div>
	<div id = "phrase"><h2>___ BA__ _____</h2></div>
</div>




</body>

</html>