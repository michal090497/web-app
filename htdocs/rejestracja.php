<?php

	session_start();
	
	if (isset($_POST['login']))
	{

		$wszystko_OK=true;
		
		$login = $_POST['login'];
		
		if ((strlen($login)<3) || (strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="login musi posiadać od 3 do 20 znaków!";
			header('Location: stronka3.php');
		}
		
		if (ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="login może składać się tylko z liter i cyfr (bez polskich znaków)";
			header('Location: stronka3.php');
		}
		
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<4) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 4 do 20 znaków!";
			header('Location: stronka3.php');
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła są inne!";
			header('Location: stronka3.php');
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		$koszykarz= $_POST['koszykarz'];
		
		$_SESSION['fr_nick'] = $login;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		$_SESSION['fr_koszykarz'] = $koszykarz;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
	
				$rezultat = $polaczenie->query("SELECT id FROM users WHERE login='$login'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Taki login już istnieje!";
					header('Location: stronka3.php');
				}
				
				if ($wszystko_OK==true)
				{
					
					if ($polaczenie->query("INSERT INTO users VALUES (NULL, '$login', '$haslo1', '$koszykarz')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: zarejestrowany.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Coś poszło nie tak!</span>';
		}
		
	}
	
	
?>
