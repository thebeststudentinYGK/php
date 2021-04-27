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