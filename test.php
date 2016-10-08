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
	
	$_SESSION['hangs'] = 0;
	$_SESSION['current_phrase'] = "";
	for ($i = 0; $i < strlen($phrase); $i++){
		if (strcmp(substr($phrase,$i,1)," ") == 0){
			$_SESSION['current_phrase'] .= " ";
		}
		else{
			$_SESSION['current_phrase'] .= "_";
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

<img src="images/Hangman-<?php echo $_SESSION['hangs'];?>" alt="Smiley face"><br>
<?php

unset($_SESSION['hangs']);		//remove

echo $phrase . "<br>"; 
echo $_SESSION['current_phrase'];

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

</body>
</html>