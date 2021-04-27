<!DOCTYPE html>
<html>
<head>
	<title>Титл</title>
</head>
<body>
	<h2 style="text-align:center">NEON team</h2>
	<form method="POST" style="text-align: center">
		Логин:
		<input type="text" name="login">
		<br>
		Пароль:
		<input type="password" name="password">
		<br>
		<input type="submit" name="" value="Войти">
		<?php	
		$la = 'Matvey';
		$pa = 'Matvey2006';
		$login = '0';
		$password = '0';
		if (isset($_POST['login'])){	
			$login = $_POST['login'];
		} 
		if(isset($_POST['password'])) {
			$password = $_POST['password'];
		}
		if($login == $la){
			if($password == $pa)
				echo "<br>"."Привет, ".$login;
		}
		else 
			echo "<br>"."<a href='reg.php'>"."Регистрация"."</a>";
	?>
	</form>
</body>
</html>