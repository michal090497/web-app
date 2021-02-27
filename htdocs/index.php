<!DOCTYPE html>
<html lang="pl">
 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stronka.css" title="Arkusz stylów CSS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>stronka</title>

</head>

<body onload="play_game();">
	<h1>stronka niezła</h1>
	<h2>taka o</h2>

	<div>
	<ul>
	  <li><a class="active" href="stronka.html">Strona domowa</a></li>
	  <li><a href="stronka1.php">strona 1</a></li>
	  <li><a href="stronka2.php">strona 2</a></li>
	  <li><a href="stronka3.php">strona 3</a></li>
	  <li><a href="stronka4.php">strona 4</a></li>
	</ul>
		<br></br>
	</div>

	
<div class="tytul text-center">
  <h1>Strona internetowa</h1>
  <p>stworzona jako projekt zaliczeniowy</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>kolumna 1</h3>
      <p>element stworzony w bootstrapie</p>
      <p>i składa się z 3 kolumn</p>
    </div>
    <div class="col-sm-4">
      <h3>kolumna 2</h3>
      <p>to jest druga kolumna</p>
      <p>tego elementu</p>
    </div>
    <div class="col-sm-4">
      <h3>kolumna 3</h3>        
      <p>a to ostatnia kolumna</p>
      <p>tego bootstrapowego elementu</p>
    </div>
  </div>
</div>
	
	<div class="formularze">
		<center>Wybierz ulubione jedzenie:</center><br>
		<form>
		  <input type="radio" name="jedzenie" value="pizza" checked> pizza<br>
		  <input type="radio" name="jedzenie" value="burrito"> burrito<br>
		  <input type="radio" name="jedzenie" value="lasagne"> lasagne<br>
		  <input type="radio" name="jedzenie" value="sushi"> sushi<br>
		  <input type="radio" name="jedzenie" value="kotlet"> kotlet<br><br>
		  <input type="submit" value="jedzonko">
		</form>
	</div>
	<div class="formularze">
		  hasło:<br>
		  <form>
		  <input type="password" name="haslo"><br><br>
		  <input type="submit" value="potwierdzam hasło">
		</form>
	</div>
	<div class="formularze">
		  data urodzenia:<br>
		  <form>
		  <input type="date" name="data"><br><br>
		  <input type="submit" value="ok">
		</form>
	</div>
	<div class="formularze">
		  Świetna giera:<br>
		  <form>
		  <input type="button" onclick="window.location.href = 'gra.php';" value="Gramy!">
		</form>
	</div>

	<!--<tr>
		 <td colspan="2">
		 <p id="tytul">Aktualności:</p>
		 <p id="skoki">skoki narciarskie: wygrana</p>
		 <p class="wyscigi">wyścigi: </p>
		 <p><a href="stronka1.html">boks: znowu wygrał! </a></p>
		 <p>aktualnosci z regionu: K o n i n </p>
		 </td>
	 </tr>-->

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