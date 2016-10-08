<?php
session_start();
if (!isset($_SESSION['wins']) || !isset($_SESSION['losses'])){
	$_SESSION['wins'] = 0;
	$_SESSION['losses'] = 0;
}
//$_SESSION['wins']+=2;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>
<title>Project 2</title>
</head>

<body>

<div id="container">

	<div class="left" id="main_left">

		<div id="header">Let's play Hang Man!</div>
			
		<div class="right" id="main">

			<div class="padded">

				<h1>HANGY</h1>
				
				<div class="content_separator"></div>
				
				
				<div class="clearer">&nbsp;</div>

				<div class="content_separator"></div>

				<h2>insert game here</h2>

				<div class="success">You win!</div>

				<div class="error">Loser</div>

				<div class="content_separator"></div>

							
			</div>

		</div>

		<div class="left" id="subnav">

			<h1>Choose a topic!</h1>
			<ul>
			<li><a href="test.php?topic=languages">Programming Languages</a></li>
				<li><a href="test.php?topic=professors">Cool Professors</a></li>
				<li><a href="test.php?topic=buildings">GSU Buildings</a></li>
				<li><a href="test.php?topic=legends">Legends</a></li>
				<li><a href = "test.php?topic=majors"> Unprofitable Majors</a></li>
			</ul>

		</div>
		<div class="right" id="main_right">

		<div class="padded">
			
			<h4>SCORE</h4>
			<h5>Wins:</h5>
			<p><?php echo $_SESSION['wins'];?></p>
			
			<h5>Losses:</h5>
			<p><?php echo $_SESSION['losses'];?></p>
		</div>
<p> Template credit: http://creativecommons.org/licenses/by/2.5/
Website: http://arcsin.se/ <p>
	</div>
	
		<div class="clearer">&nbsp;</div>

	</div>

	<div class="right" id="main_right">

		<div class="padded">
			
			
		</div>

	</div>

	<div class="clearer">&nbsp;</div>


</div>

</body>

</html>