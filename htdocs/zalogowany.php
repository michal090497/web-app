<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: stronka3.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Stronka</title>
</head>

<body>
	
<?php
	echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<br /><b>Twój ulubiony koszykarz to:</b> ".$_SESSION['koszykarz']."</p>";
	
?>

<br>
Zmiana koszykarza:
<form method="post">
	Nowy ulubiony koszykarz: <input type="text" name="zmiana"><br>
	<input type="submit" value="Zmień!">
</form>

<?php
	
	require_once "connect.php";

	if(isset($_POST['zmiana']))
	{
		$log=$_SESSION['login'];
		$zmiana=$_POST['zmiana'];
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		$polaczenie->query("UPDATE users SET koszykarz='$zmiana' WHERE login='$log'");
		$_SESSION['koszykarz']=$zmiana;
		header('Location: zalogowany.php');
	}

?>

</body>
</html>