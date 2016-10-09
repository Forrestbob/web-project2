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

if(!isset($_SESSION['hangs'])){
	
	$_SESSION['hangs'] = 0;
	$_SESSION['current_phrase'] = "";
	$_SESSION['alphabet'] = array("Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M");
	for ($i = 0; $i < strlen($phrase); $i++){
		if (strcmp(substr($phrase,$i,1)," ") == 0){
			$_SESSION['current_phrase'] .= " ";
		}
		else{
			$_SESSION['current_phrase'] .= "_";
		}
	}
	$_SESSION['current_arr'] = str_split($_SESSION['current_phrase']);
}else{
	
	$letter = $_GET['letter'];
	$contains = false;
	
	for ($i = 0; $i < count($_SESSION['alphabet']); $i++){
		if (strcmp($letter,$_SESSION['alphabet'][$i]) == 0){
			$_SESSION['alphabet'][$i] = "&nbsp;";
		}
	}
	
	for ($i = 0; $i < strlen($phrase); $i++){
		if (strcmp(substr($phrase,$i,1),$letter) == 0){
			$contains = true;
			$_SESSION['current_arr'][$i] = $letter;
		}
	}
	
	if(strcmp($phrase,implode($_SESSION['current_arr'])) == 0){
		$_SESSION['wins']++;
		$win = true;
		//echo "<a href='main.php'>You win! Play again?</a>";
	}
	
	if ($contains == false){
		$_SESSION['hangs']++;
		if ($_SESSION['hangs'] == 6){
			$_SESSION['losses']++;
			$lose = true;
			//echo "<a href='main.php'>Tough luck. Play again?</a>";
		}
	}
	
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
	<img src = "images/Hangman-<?php echo min(6, $_SESSION['hangs']);?>.png"/>
	<div id = "score">
			<p>Wins:
			<div class = "bold"><?php echo $_SESSION['wins'];?></div></p>
			<p>Losses:
			<div class = "bold"><?php echo $_SESSION['losses'];?></div></p>
			<a href="main.php?loss=loss"><button id = "forfeit">Forfeit</button></a>
	</div>
	<div id = "phrase">
	<?php 
	if (isset($lose)){
		echo $phrase; 
	}else {
		echo implode($_SESSION['current_arr']);
	}
	?>
	</div>
	
	<table id = "keyboard">
		<tr>
		<?php 
		if (!isset($win) && !isset($lose)){
			for ($i = 0; $i < 10; $i++){
				echo "<td><a href='?topic=" . $topic . "&letter=". $_SESSION['alphabet'][$i] ."'>" . $_SESSION['alphabet'][$i] . "</a></td> ";
			} 
			echo "</tr><tr>";
			for ($i = 10; $i < 19; $i++){
				echo "<td><a href='?topic=" . $topic . "&letter=". $_SESSION['alphabet'][$i] ."'>" . $_SESSION['alphabet'][$i] . "</a></td> ";
			} 
			echo "</tr><tr>";
			for ($i = 19; $i < 26; $i++){
				echo "<td><a href='?topic=" . $topic . "&letter=". $_SESSION['alphabet'][$i] ."'>" . $_SESSION['alphabet'][$i] . "</a></td> ";
			} 
		}
		else if (isset($win)) {
			echo "<a href='main.php'><button class = 'replay'>Congratulations! Play again?</button></a>";
		}
		else if (isset($lose)) {
			echo "<a href='main.php'><button class = 'replay'>Tough luck. Play again?</button></a>";
		}
		?>
		</tr>
	</table>
	
	
</div>




</body>

</html>