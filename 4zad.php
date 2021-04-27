<?php
	$logadm = "Я - МАКС!!!";
	$passadm = "Даша - топ";
?>
	<form action="" method="post">
	    <input type="text" name="login" placeholder="Введите логин">
	    <br>
	    <input type="password" name="password" placeholder="Введите пароль">
	    <br>
	    <input type="submit">
	</form>
<?php
	if (isset($_POST['login']) and isset($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		if ($login == $logadm and $password == $passadm) {
			echo "Взлом случився";
		}
		else 
			echo "Взлом не случився" ;
	}
?>