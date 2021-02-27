<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: stronka3.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_koszykarz'])) unset($_SESSION['fr_koszykarz']);
	
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Stronka</title>
</head>

<body>
	
	Witamy w gronie użytkowników portalu stronka!<br /><br />
	
	<a href="stronka3.php">Zaloguj się na swoje konto!</a>
	<br /><br />

</body>
</html>