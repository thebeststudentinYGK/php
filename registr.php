<?php
	if (isset($_POST['surname'])) {
		$surname = $_POST['surname'];
	}
	if (isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if (isset($_POST['patr'])) {
		$patr = $_POST['patr'];
	}
	if (isset($_POST['pass'])){
		$password = $_POST['pass'];
	}
	if (isset($_POST['date'])) {
		$date = $_POST['date'];
	}
	echo "Поздравляю!"."<br>".$surname." ".$name." ".$patr."<br>"."<img src='LuRy.gif'>";
?>