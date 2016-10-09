<?php
session_start();
if (!isset($_SESSION['wins']) || !isset($_SESSION['losses'])){
	$_SESSION['wins'] = 0;
	$_SESSION['losses'] = 0;
}
if (isset($_GET['loss'])){
	$_SESSION['losses']++;
}

unset($_SESSION['hangs']);
unset($_SESSION['current_phrase']);
unset($_SESSION['alphabet']);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Title of document</title>
</head>

<body>
  some content 
</body>

</html>