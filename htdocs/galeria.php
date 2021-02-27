<!DOCTYPE html>
<html lang="pl">
 
<head>
	<meta charset="utf-8"/>
	<title>stronka</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		body
		{
			background-color:#107780;
		}
		div.gallery {
		  background-color:#bbb;
		  margin: 15px;
		  border: 1px solid #ccc;
		  float: left;
		  width: 180px;
		}

		div.gallery:hover {
		  border: 1px solid #777;
		}

		div.gallery img {
		  width: 100%;
		  height: auto;
		}

		div.desc {
		  padding: 15px;
		  text-align: center;
		}
		#tekst
		{
			text-align:center;
		}
	</style>
</head>

<body>

	<br>
	<center><h1>Galeria zdjęć:</h1></center>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="pociag.jpg">
					<img src="pociag.jpg" alt="Pociąg" width="600" height="400">
				  </a>
				  <div class="desc">Parowóz (ładny)</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="brama.jpg">
					<img src="brama.jpg" alt="Brama" width="600" height="400">
				  </a>
				  <div class="desc">Brama (Indie)</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="zachod.jpg">
					<img src="zachod.jpg" alt="Zachód" width="600" height="400">
				  </a>
				  <div class="desc">Zachód (słońca)</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="zamek.jpg">
					<img src="zamek.jpg" alt="Zamek" width="600" height="400">
				  </a>
				  <div class="desc">Zamek (budowla)</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="zwierzeta.jpg">
					<img src="zwierzeta.jpg" alt="zwierzeta" width="600" height="400">
				  </a>
				  <div class="desc">Zwierzęta (w wodzie)</div>
				</div>	
			</div>
					
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="kajak.png">
					<img src="kajak.png" alt="kajak" width="600" height="400">
				  </a>
				  <div class="desc">Rybak (łowi)</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="budynek.jpg">
					<img src="budynek.jpg" alt="budynek" width="600" height="400">
				  </a>
				  <div class="desc">Bydynek (niemiecki)</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-lg-3 text-center">
				<div class="gallery">
				  <a target="_blank" href="miasto.jpg">
					<img src="miasto.jpg" alt="Miasto" width="600" height="400">
				  </a>
				  <div class="desc">Miasto (nowoczesne)</div>
				</div>
			</div>
				
		</div>
	</div>
	<br>
	<div id="tekst">
		<a href="stronka2.php">Powrót do strony logowania</a>
	</div>

</body>

</html>