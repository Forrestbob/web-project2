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
	
	echo "not set"; //remove
	
	$_SESSION['hangs'] = 0;
	$_SESSION['current_phrase'] = "";
	$_SESSION['alphabet'] = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
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
		$winlose = true;
		echo "<a href='main.php'>You win! Play again?</a>";
	}
	
	if ($contains == false){
		$_SESSION['hangs']++;
		if ($_SESSION['hangs'] == 6){
			$_SESSION['losses']++;
			$winlose = true;
			echo "<a href='main.php'>Tough luck. Play again?</a>";
		}
	}
	
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Test page</title>
<style>
*{
	font-family: "Lucida Console", Monaco, monospace;
}
</style>
</head>
<body>

<h1><?php echo $topicName; ?></h1>


Wins:
<?php echo $_SESSION['wins'];?><br>
			
Losses:
<?php echo $_SESSION['losses'];?><br>

<a href="main.php?loss=loss">Forfeit (loss)</a><br>

<img src="images/Hangman-<?php echo min(6, $_SESSION['hangs']);?>" alt="hangman"><br>
<?php

//unset($_SESSION['hangs']);		//remove

echo $phrase . "<br>"; 
echo implode($_SESSION['current_arr']);

//echo $_GET['letter'];
//echo "test";
echo "<br>";

if (!isset($winlose)){
	for ($i = 0; $i < count($_SESSION['alphabet']); $i++){
		echo "<a href='?topic=" . $topic . "&letter=". $_SESSION['alphabet'][$i] ."'>" . $_SESSION['alphabet'][$i] . "</a> ";
	}
}

?>

</body>
</html>