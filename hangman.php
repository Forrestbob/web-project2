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
			<a href="main.php?loss=loss"><button id = "forfeit">Forfeit</button></a>
	</div>
	<div id = "phrase">FOO BA__ ___R_</div>
	
	<table id = "keyboard">
		<tr>
			<td><a href="?topic=<?php echo $topic; ?>&letter=A">A</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=B">B</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=C">C</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=D">D</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=E">E</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=F">F</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=G">G</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=H">H</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=I">I</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=J">J</a></td>
		</tr>
		<tr>
			<td><a href="?topic=<?php echo $topic; ?>&letter=K">K</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=L">L</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=M">M</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=N">N</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=O">O</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=P">P</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=Q">Q</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=R">R</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=S">S</a></td>
		</tr>
		<tr>
			<td><a href="?topic=<?php echo $topic; ?>&letter=T">T</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=U">U</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=V">V</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=W">W</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=X">X</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=Y">Y</a></td>
			<td><a href="?topic=<?php echo $topic; ?>&letter=Z">Z</a></td>
		</tr>
	</table>
	
	
</div>




</body>

</html>