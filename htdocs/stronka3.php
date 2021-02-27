<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: zalogowany.php');
		exit();
	}

?>

<!DOCTYPE html>
<html lang="pl">
 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stronka3.css" title="Arkusz stylów CSS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>stronka</title>

</head>

<body>
	
	
	<h1>stronka niezła</h1>
	<h2>taka o</h2>

	<div>
	<ul>
	  <li><a href="index.php">Strona domowa</a></li>
	  <li><a href="stronka1.php">strona 1</a></li>
	  <li><a href="stronka2.php">strona 2</a></li>
	  <li><a class="active" href="stronka3.php">strona 3</a></li>
	  <li><a href="stronka4.php">strona 4</a></li>
	</ul>
		<br></br>
	</div>

	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-md-6">
		  <h3>Logowanie:</h3>
		  <form action="logowanie.php" method="post">
			Login: <input type="text" name="login"><br>
			Hasło: <input type="password" name="haslo"><br>
			<input type="submit" value="zaloguj!">
		  </form>
		</div>
		<div class="col-xs-12 col-md-6">
		  <h3>Rejestracja:</h3>
		  <form action="rejestracja.php" method="post">
		  Login: <input type="text" name="login"><br>
		  Hasło: <input type="password" name="haslo1"><br>
		  Powtórz hasło: <input type="password" name="haslo2"><br>
		  Ulubiony koszykarz: <input type="text" name="koszykarz"><br>
		  <input type="submit" value="zarejestruj!">
		  </form>
		</div>
	  </div>
	</div>
	

<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
	if (isset($_SESSION['e_nick']))
		{
			echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
			unset($_SESSION['e_nick']);
		}
	if (isset($_SESSION['e_haslo']))
		{
			echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
			unset($_SESSION['e_haslo']);
		}
?>



</body>

<footer>
		<div class="content">
			<div id="emailsignup">
				<a href="stronka.html" class="footer-logo">Proxibid</a>
				<p>Stronka stworzona na przedmiot aplikacje internetowe :)<br style="margin: 0 0 12px 0;"><a href="stronka1.html">tutaj też stronka, ale inna</a></p>
				<p><a href="stronka2.html" class="btn" style="display:inline-block;">a tu jeszcze inna</a></p>
			</div>
			<div id="helpfullinks">
				<div>
					<p class="category"><a href="stronka.html">stronka główna</a></p>
					<ul>
						<li><a href="stronka1.html">stronka 1</a></li>
						<li><a href="stronka2.html">stronka 2</a></li>
						<li><a href="stronka3.html">stronka 3</a></li>
						<li><a href="stronka4.html">stronka 4</a></li>
					</ul>
				</div>
				<div>
					<p class="category"><a href="http://nba.com">najważniejsza stronka</a></p>
					<ul>
						<li><a href="http://youtube.com">troche mniej ważna</a></li>
						<li><a href="http://facebook.com">a ta nawet jeszcze mniej</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div id="poweredby">
				<p>Michał Kliczkowski.com</p>
			</div>
			<div class="clear"></div>
			<div id="social">
				<div class="clear"></div>
			</div>
			
		</div>
	</footer>

</html>