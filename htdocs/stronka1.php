<!DOCTYPE html>
<html lang="pl">
 
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stronka1.css" title="Arkusz stylów CSS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>stronka</title>
	<script type="application/javascript">
function clock() {
	  var now = new Date();
	  var ctx = document.getElementById('canvas').getContext('2d');
	  ctx.save();
	  ctx.clearRect(0, 0, 150, 150);
	  ctx.translate(75, 75);
	  ctx.scale(0.4, 0.4);
	  ctx.rotate(-Math.PI / 2);
	  ctx.strokeStyle = 'black';
	  ctx.fillStyle = 'white';
	  ctx.lineWidth = 8;
	  ctx.lineCap = 'round';

	  // Hour marks
	  ctx.save();
	  for (var i = 0; i < 12; i++) {
		ctx.beginPath();
		ctx.rotate(Math.PI / 6);
		ctx.moveTo(100, 0);
		ctx.lineTo(120, 0);
		ctx.stroke();
	  }
	  ctx.restore();

	  // Minute marks
	  ctx.save();
	  ctx.lineWidth = 5;
	  for (i = 0; i < 60; i++) {
		if (i % 5!= 0) {
		  ctx.beginPath();
		  ctx.moveTo(117, 0);
		  ctx.lineTo(120, 0);
		  ctx.stroke();
		}
		ctx.rotate(Math.PI / 30);
	  }
	  ctx.restore();
	 
	  var sec = now.getSeconds();
	  var min = now.getMinutes();
	  var hr  = now.getHours();
	  hr = hr >= 12 ? hr - 12 : hr;

	  ctx.fillStyle = 'black';

	  // write Hours
	  ctx.save();
	  ctx.rotate(hr * (Math.PI / 6) + (Math.PI / 360) * min + (Math.PI / 21600) *sec);
	  ctx.lineWidth = 14;
	  ctx.beginPath();
	  ctx.moveTo(-20, 0);
	  ctx.lineTo(80, 0);
	  ctx.stroke();
	  ctx.restore();

	  // write Minutes
	  ctx.save();
	  ctx.rotate((Math.PI / 30) * min + (Math.PI / 1800) * sec);
	  ctx.lineWidth = 10;
	  ctx.beginPath();
	  ctx.moveTo(-28, 0);
	  ctx.lineTo(112, 0);
	  ctx.stroke();
	  ctx.restore();
	 
	  // Write seconds
	  ctx.save();
	  ctx.rotate(sec * Math.PI / 30);
	  ctx.strokeStyle = '#D40000';
	  ctx.fillStyle = '#D40000';
	  ctx.lineWidth = 6;
	  ctx.beginPath();
	  ctx.moveTo(-30, 0);
	  ctx.lineTo(83, 0);
	  ctx.stroke();
	  ctx.beginPath();
	  ctx.arc(0, 0, 10, 0, Math.PI * 2, true);
	  ctx.fill();
	  ctx.beginPath();
	  ctx.arc(95, 0, 10, 0, Math.PI * 2, true);
	  ctx.stroke();
	  ctx.fillStyle = 'rgba(0, 0, 0, 0)';
	  ctx.arc(0, 0, 3, 0, Math.PI * 2, true);
	  ctx.fill();
	  ctx.restore();

	  ctx.beginPath();
	  ctx.lineWidth = 14;
	  ctx.strokeStyle = '#325FA2';
	  ctx.arc(0, 0, 142, 0, Math.PI * 2, true);
	  ctx.stroke();

	  ctx.restore();

	  window.requestAnimationFrame(clock);
	}

	window.requestAnimationFrame(clock);
    </script>
</head>

<body onload="clock();">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
	<h1>stronka niezła</h1>
	<h2>taka o</h2>

	<div>
	<ul>
	  <li><a href="index.php">Strona domowa</a></li>
	  <li><a class="active"  href="stronka1.php">strona 1</a></li>
	  <li><a href="stronka2.php">strona 2</a></li>
	  <li><a href="stronka3.php">strona 3</a></li>
	  <li><a href="stronka4.php">strona 4</a></li>
	</ul>
		<br></br>
	</div>
	
	<div id="can">
		<canvas id="canvas" width="150" height="150"></canvas>
	</div>
	
	<div id="wykresik">
		<svg version="1.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="graph" aria-labelledby="title" role="img">
		  <title id="title">wykres cenki</title>
		<g class="grid x-grid" id="xGrid">
		  <line x1="90" x2="90" y1="5" y2="371"></line>
		</g>
		<g class="grid y-grid" id="yGrid">
		  <line x1="90" x2="705" y1="370" y2="370"></line>
		</g>
		  <g class="labels x-labels">
		  <text x="100" y="400">2014</text>
		  <text x="246" y="400">2015</text>
		  <text x="392" y="400">2016</text>
		  <text x="538" y="400">2017</text>
		  <text x="684" y="400">2018</text>
		  <text x="400" y="440" class="label-title">Rok</text>
		</g>
		<g class="labels y-labels">
		  <text x="80" y="15">15</text>
		  <text x="80" y="131">10</text>
		  <text x="80" y="248">5</text>
		  <text x="80" y="373">0</text>
		  <text x="50" y="200" class="label-title">Cena</text>
		</g>
		<g class="data" data-setname="Our first data set">
		  <circle cx="90" cy="192" data-value="7.2" r="4"></circle>
		  <circle cx="240" cy="141" data-value="8.1" r="4"></circle>
		  <circle cx="388" cy="179" data-value="7.7" r="4"></circle>
		  <circle cx="531" cy="200" data-value="6.8" r="4"></circle>
		  <circle cx="677" cy="104" data-value="6.7" r="4"></circle>
		</g>
		</svg>
	</div>
	
	<!--<div id="wykresik">
	<svg viewBox="0 0 500 100" class="chart">
	  
	  <polyline
		 fill="none"
		 stroke="#0074d9"
		 stroke-width="2"
		 points="
		   20,120
		   40,80
		   60,20
		   80,80
		   100,80
		   120,60
		   140,100
		   160,90
		   180,80
		   200, 110
		   220, 10
		   240, 70
		   260, 100
		   280, 100
		   300, 40
		   320, 0
		   340, 100
		   360, 100
		   380, 120
		   400, 60
		   420, 70
		   440, 80
		   460, 100
		   480, 90
		   500, 40
		 "
	   />
	  
	</svg>
	</div>-->
	<center><b>Według drugiego prawa Kirchhoffa bilans napięć w obwodzie wynosi:</b></center> 
	<div id="wzorki">
		$$E-\sum_{i=0}^n I*R_i = 0$$
	</div>
	
	<center>
	<div class="fb-page" data-href="https://www.facebook.com/nba/" data-tabs="timeline" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
		<blockquote cite="https://www.facebook.com/nba/" class="fb-xfbml-parse-ignore">
		<a href="https://www.facebook.com/nba/">NBA</a></blockquote>
	</div>
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