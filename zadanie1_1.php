<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php
	$sur = "Null";
	$name = "Null";
	$otchestv = "Null";
	$work = "Null";
	$number = "Null";
	$mail = "Null";
	if (isset($_POST['sur'])) {
		$sur = $_POST['sur'];
	}
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_POST['otchestv'])) {
		$otchestv = $_POST['otchestv'];
	}
	if (isset($_POST['work'])) {
		$work = $_POST['work'];
	}
	if (isset($_POST['number'])) {
		$number = $_POST['number'];
	}
	if (isset($_POST['E-mail'])) {
		$mail = $_POST['E-mail'];
	}
	echo "Ты доверил левому сайту следующее про себя: "."<br>"."Фамилия: ".$sur."<br>"."Имя: ".$name."<br>"."Отчество: ".$otchestv."<br>"."Место работы: ".$work."<br>"."Номер телефона: ".$number."<br>"."E-mail: ".$mail;
	?>
	</div>
	<h2>Для продолжения работы на SCUM GANG, пройдите регистрацию</h2>
	<form action="login_zadanie1.php" method="POST">
		Фамилия:
		<br>
		<input type="text" name="sur">
		<br>
		Имя
		<br>
		<input type="text" name="name">
		<br>
		Отчество
		<br>
		<input type="text" name="otchestv">
		<br>
		Место работы
		<br>
		<input type="text" name="work">
		<br>
		Номер мобильного телефона
		<br>
		<input type="text" name="number">
		<br>
		E-mail
		<br>
		<input type="text" name="E-mail">
		<br>
		<input type="submit" value="Отправить">
	</form>
</body>
</html>