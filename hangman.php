<?php
	session_start();

//$_SESSION['wins']+=2;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<link rel="stylesheet" type="text/css" href="styles.css" media="screen"/>
<title>HANGMAN</title>
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