<!DOCTYPE html>
<html>
<head>
	<title>Титл</title>
</head>
<body>
	<form method="POST" style="text-align: center;">
		Введи номер пожелания (от 1 до 10)
		<br>
		<input type="text" name="pozh">
		<br>
		<input type="submit" name="" value="Запуск пожелалки">
	</form>
	<?php
		if (isset($_POST['pozh'])) {
		$pozh = $_POST['pozh'];
	}	
	switch ($pozh) {
		case '1':
			echo "Щастья";
			break;
		case '2':
			echo "Здоровья";
			break;
		case '3':
			echo "Долгой жизни";
			break;
		case '4':
			echo "Здоровых детей";
			break;
		case '5':
			echo "Железной печени";
			break;
		case '6':
			echo "Таблеточек вкусных";
			break;
		case '7':
			echo "Автомата за экзамен";
			break;
		case '8':
			echo "Цветных снов";
			break;
		case '9':
			echo "Фантазия сча кончится";
			break;
		case '10':
			echo "Здохни, мразь";
			break;
		default:
			echo "Задание читай";
			break;
	}
	?>
</body>
</html>