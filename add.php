<!DOCTYPE html>
<html>
<head>
	<title>Титл</title>
</head>
<body>
	<form action="registr.php" method="POST" style="text-align: center">
		<input type="text" name="surname" placeholder="Фамилия">
		<br>
		<input type="text" name="name" placeholder="Имя">
		<br>
		<input type="text" name="patr" placeholder="Отчество">
		<br>
		<select>
			<option value="pass">Паспорт</option>
  			<option value="prava">Права</option>
		</select>
		<br>
		<input type="password" name="pass" placeholder="Серия и номер">
		<br>
		<input type="date" name="date" placeholder="Дата выдачи">
		<br>
		<input type="submit" name="" value="Отправить">
	</form>
</body>
</html>