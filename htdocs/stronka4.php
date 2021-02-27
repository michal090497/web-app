<!DOCTYPE html>
<html lang="pl">
 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stronka4.css" title="Arkusz stylów CSS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script>
	function allowDrop(ev) {
	  ev.preventDefault();
	}

	function drag(ev) {
	  ev.dataTransfer.setData("text", ev.target.id);
	}

	function drop(ev) {
	  ev.preventDefault();
	  var data = ev.dataTransfer.getData("text");
	  ev.target.appendChild(document.getElementById(data));
	  alert("brawo!");
	}
	</script>
	<title>stronka</title>
</head>

<body">
	<h1>stronka niezła</h1>
	<h2>taka o</h2>

	<div>
	<ul>
	  <li><a href="index.php">Strona domowa</a></li>
	  <li><a href="stronka1.php">strona 1</a></li>
	  <li><a href="stronka2.php">strona 2</a></li>
	  <li><a href="stronka3.php">strona 3</a></li>
	  <li><a class="active" href="stronka4.php">strona 4</a></li>
	</ul>
		<br></br>
	</div>
	
	<center>
	<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
	</iframe>
	<br>
	<audio controls>
	  <source src="muzyka.mp3" type="audio/mpeg">
	</audio>
	<br><br>
	Przesuń jabłko na górę:
	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
	<img id="drag1" src="pic.png" draggable="true" ondragstart="drag(event)" width="298" height="288">
	</center>

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