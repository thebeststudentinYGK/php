<!DOCTYPE html>
<html>
<head>
	<title>calc by vzl0m</title>
	<style type="text/css">
		body {
			background-color: black;
			color: #e3256b;
		}
		form{
			position: fixed;
			top: 40%;
			left: 45%;
		}
		.otv{
			position: fixed;
			top: 60%;
			left: 45%;
		}
		.otv1{
			position: fixed;
			top: 55%;
			left: 45%;
		}
	</style>
</head>
<body>
	<img src="LuRy.gif" width="40%" height="100%">
	<form method="POST" class="calc">
		<h1>Калькулятор by vzl0m_zh0py</h1>
		<input type="text" name="num1"> Первое число
		<br>
		<input type="text" name="num2"> Второе число
		<br>
		<select name="oper">
			<option value="plus">+</option>
			<option value="minus">-</option>
			<option value="um">*</option>
			<option value="del">/</option>
		</select>
		<br>
		<input type="submit" name="submit" value="Посчитать">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$n1 = $_POST['num1'];
		$n2 = $_POST['num2'];
		$oper = $_POST['oper'];
		if (!is_numeric($n1) || !is_numeric($n1)) {
			$err="Введеные значения не число";
		}
		else{
			switch ($oper) {
				case 'plus':
					$res = $n1 + $n2;
					$op = "+";
					break;
				case 'minus':
					$res = $n1 - $n2;
					$op = "-";
					break;
				case 'um':
					$res = $n1 * $n2;
					$op = "*";
					break;
				case 'del':
					if ($n2 != 0) {
						$res = $n1 / $n2;
						$op = "/";
					}
					else
						$err = "Делитель равен нулю";
					break;
				default:
					echo "<h1>Котеки</h1>";
					break;
			}
			if (isset($err)) {
				echo "Калькулятор завершил работу со следующей ошибкой: ".$err;
			}
			else
				echo "<h1 class='otv1'>".$n1.$op.$n2."</h1>";
				echo "<h1 class='otv'>"."Ответ: ".$res."</h1>";
		}
	}	
	?>
</body>
</html>