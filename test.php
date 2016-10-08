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
		$phrase = "URBAN LIFE";
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
	
	$_SESSION['hangs'] = 0;				//unset this
	$_SESSION['current_phrase'] = "";	//unset this
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
	
	for ($i = 0; $i < strlen($phrase); $i++){
		if (strcmp(substr($phrase,$i,1),$letter) == 0){
			$contains = true;
			$_SESSION['current_arr'][$i] = $letter;
		}
	}
	
	if ($contains == false){
		$_SESSION['hangs']++;
		if ($_SESSION['hangs'] == 6){
			$_SESSION['losses']++;
		}
	}
	
	
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Test page</title>
</head>
<body>

<h1><?php echo $topicName; ?></h1>


Wins:
<?php echo $_SESSION['wins'];?><br>
			
Losses:
<?php echo $_SESSION['losses'];?><br>

<a href="main.php?loss=loss">Forfeit (loss)</a><br>

<img src="images/Hangman-<?php echo $_SESSION['hangs'];?>" alt="hangman"><br>
<?php

//unset($_SESSION['hangs']);		//remove

echo $phrase . "<br>"; 
echo implode($_SESSION['current_arr']);

//echo $_GET['letter'];
//echo "test";
?>
<br>
<a href="?topic=<?php echo $topic; ?>&letter=A">A</a>
<a href="?topic=<?php echo $topic; ?>&letter=B">B</a>
<a href="?topic=<?php echo $topic; ?>&letter=C">C</a>
<a href="?topic=<?php echo $topic; ?>&letter=D">D</a>
<a href="?topic=<?php echo $topic; ?>&letter=E">E</a>
<a href="?topic=<?php echo $topic; ?>&letter=F">F</a>
<a href="?topic=<?php echo $topic; ?>&letter=G">G</a>
<a href="?topic=<?php echo $topic; ?>&letter=H">H</a>
<a href="?topic=<?php echo $topic; ?>&letter=I">I</a>

</body>
</html>