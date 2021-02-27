<?php
	
	$login= $_POST['login'];
	$haslo= $_POST['haslo'];
	if($login=="admin" && $haslo=="admin")
	{
		header('Location: galeria.php');
	}
	else
	{
		echo 'nieprawidłowe dane!<br>';
		echo '<a href="stronka2.php">powrót do logowania</a>';
	}
?>