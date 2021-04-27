<?php
echo "<h1 style='font-size:100px; text-align: center;'>Иди своей дорогой, сталкер</h1>";
?>
<?php 								// Запросы
	/*if (!empty($_REQUEST['city'])){
		$city = $_REQUEST['city'];
		echo "Ваш город: ".$city;
	}*/
	/*if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		echo 'Привет, '.$name;
	}*/
	/*if (!empty($_REQUEST['name']) && !empty($_REQUEST['age'])) {
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		echo 'Привет, '.$name.' я так полагаю, что тебе '.$age." лет";
	}*/
?>
<?php
/*
			<!DOCTYPE html>			#Регистрация
<html>
<head>
	<title>Титл</title>
</head>
<body>
	<div>
		<?php
			$login = "Null";
			$password = "Null";
			if (isset($_POST['login'])) {
				$login = $_POST['login'];
			}
			if (isset($_POST['password'])){
				$password = $_POST['password'];
			}
		
			echo "Ваш логин: ".$login."<br>"."Ваш пароль: ".$password;
		?>
	</div>
	<h3>Вход на сайт</h3>
	<form action="login.php" method="POST">
		Логин: <input type="text" name="login">
		<br>
		Пароль: <input type="password" name="password">
		<br>
		<input type="submit" value="Войти">
	</form>
</body>
</html>
*/
?>
<?php 
/*<h1>Введи имя и возраст</h1>			//Форма
	<input type="text" name="name"><br>
	<input type="text" name="age">
	<input type="submit">

	Логин
	<br>
	<input type="text" name="login">
	Пароль
	<br>
	<input type="password" name="password">
	<br>
	<input type="checkbox" name="chek">Запомнить
	<br>
	<input type="submit" name="enter">
	*/
	/*$a = 10;				#1
	if ($a == 10) {
		echo'Верно';
	}
	else{
		echo'Неверно';
	}*/
	/*$min = 60;			#2
	if (0 <$min && $min < 59) {

		if (0<$min&&$min<15) {
			echo'Первая';
		}
		elseif (15<$min&&$min<30) {
			echo'Вторая';
		}
		elseif (30<$min&&$min<45) {
			echo "Третья";
		}
		else{
			echo "Четвертая";
		}
	}
	else{
		echo "Неверный формат ввода";
	}*/
	/*$lang = 'ru';			#3
	if ($lang == 'ru') {
		$arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
		for ($i=0; $i < 7; $i++) { 
			$s = $arr[$i];
			echo $s.'<br>';	
			}
		}
	elseif ($lang == 'en') {
		$arr = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		for ($i=0; $i < 7; $i++) { 
			$s = $arr[$i];
			echo $s.'<br>';	
			}
		}*/
	/*$a = array(1, 0, -3);	#4
	for ($i=0; $i < 3; $i++) { 
		$b = $a[$i];
			if ($b >= 0) {
				echo 'Верно'.'<br>';
			}
			else{
				echo 'Неверно'.'<br>';
			}
	}*/
	/*$a = array(1, 0, -3);	#5
	for ($i=0; $i < 3; $i++) { 
		$b = $a[$i];
			if ($b != 0) {
				echo 'Верно'.'<br>';
			}
			else{
				echo 'Неверно'.'<br>';
			}
		}*/
	/*$a = array('test', 'тест', 3); #6
	for ($i=0; $i < 3; $i++) { 
		$b = $a[$i];
			if ($b == 'test') {
				echo 'Верно'.'<br>';
			}
			else{
				echo 'Неверно'.'<br>';
			}
	}*/
	/*aa = 1;				#7
	$a1 = 1;
	if ($aa === $a1) {
		echo "Верно <br>";
	}
	else {
		echo "Неверно <br>";
	}*/
	
	/*$a = 10;				#8
	$f = ($a % 2 == 0)? "Четное <br>" : "Нечетное <br>";
	echo $f;*/
	
	/*$a = -10;				#9
	if ($a < 0) {
		$a = $a *(-1);
	}
	echo $a;*/

	/*$lang = 'ru';		#1
	
	switch ($lang) {
		case 'ru':
			$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
			for ($i=0; $i < 7; $i++) { 
			$s = $arr[$i];
			echo $s.'<br>';	
			}
		break;
		case 'en':
			$arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
			for ($i=0; $i < 7; $i++) { 
			$s = $arr[$i];
			echo $s.'<br>';	
			}
		break;
	}*/

	/*$lang = 'ru';
	
	$arr = [
		'ru'=>['пн', 'вт', 'ср','чт', 'пт', 'сб', 'вс'],
		'en'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
	];
	var_dump($arr[$lang]);*/

	/*$num = 2;
	switch ($num) {
		case 1:
			echo 'Winter';
			break;
		case 2:
			echo 'Spring';
			break;
		case 3:
			echo 'Summer';
			break;
		case 4:
			echo 'Autumn';
			break;
		
		default:
			
			break;
	}*/
	/*$b = array(1, 3, -3, 0, null, true, '', '0');
		for ($i=0; $i < 8; $i++) { 
			$a = $b[$i];
				if (empty($a)) {
					echo "Верно<br>";
				}
				else{
					echo "Неверно<br>";
				}	
			}*/
	/*$d = 15;
	if ($d < 11 and $d > 0) {
		echo "Первая";
	}
	elseif ($d > 11 and d < 21){
		echo "Вторая";
	}
	else
		echo "Третья";*/
	/*$month = (rand(1, 12)) % 12;
	$season = null;
	
	if ($month >= 0 && $month <= 2) {
	    $season = 'Зима';
	} elseif ($month >= 3 && $month <= 5) {
	    $season = 'Весна';
	} elseif ($month >= 6 && $month <= 8) {
	    $season = 'Лето';
	} else {
	    $season = 'Осень';
	}
	
	echo $season;*/
	/*$y = rand(1, 9999);
	if ($y%4==0&&$y%100!=0) {
		echo $y." Високосный";
	}
	elseif($y%400==0){
		echo $y." Високосный";
	}
	else
		echo $y." Не високосный";*/
	/*$str = 'abcde';
	if ($str[0] ==='a') {
		echo "Yes";
	}
	else
		echo "No";*/
	/*$strNum = '12345';

	$res = ($strNum[0] == 1 || $strNum[0] == 2 || $strNum[0] == 3) ? 'Да' : 'Нет';
		echo $res;*/
	/*$strNumber = '589';
	$sum = 0;
	for ($i = 0; $i < strlen($strNumber); $i++) {
	    $sum += (int) $strNumber[$i];
	}
	echo $sum;*/
	/*$s = '123456';
	if ((int) $s[0]+(int) $s[1]+(int) $s[2] == (int) $s[3]+(int) $s[4]+(int) $s[5]) {
		echo "Yes";
	}
	else
		echo "No";*/
	/*for ($i=1; $i < 101; $i++) { 
		echo $i."<br>";
	}*/
	/*for ($i=11; $i < 34; $i++) { 
		echo $i."<br>";
	}*/
	/*for ($i=0; $i < 101; $i++) { 
		if ($i%2==0) {
			echo $i."<br>";
		}	
	}*/ 
	/* $arr=['html','css','php','is','iq']; //18
	foreach($arr as $elem)
	{
		echo $elem.'<br>';
	}
	$arr = [10, 20, 15, 17, 24, 35];//20
	
		$result = 0;
		foreach ($arr as $elem) {
			$result = $result + $elem;
		}
		echo $result;
	
	$arr=[1,2,3,4,5];//27
	$result=0;
	foreach($arr as $elem)
	{
		$result+=$elem;
	}
	echo $result;
	
	$arr=[1,2,3,4,5];//28
	$result=0;
	foreach($arr as $elem)
	{
		$result=$result +($elem*$elem);
	}
	echo $result;
	*/
	/*$arr=['green'=>'зелёный','red'=>'красный','blue'=>'голубой'];//29
	$en=[];
	$ru=[];
	foreach($arr as $iEn=>$iRu)
	{
		$en[]=$iEn;
		$ru[]=$iRu;
	}
	
	echo 'Английские слова<br>';
	print_r($en);
	echo '<br>';
	echo 'Russian слова<br>';
	print_r($ru);
	echo '<br>';*/
	
	/*$n =1000;//31
	$count = 0;
	
	while ($n>=50) {
		$n /=2;
		$count++;
	}
	$n*=2;
	$count--;
	echo $n." ".$count;*/
	
	/*$n=1000;
	$count = 0;
	for($i=0;$n>50;$i++)
	{
		$n /=2; 
		$count = $i;
	}
	$n *=2;
	echo $n." ".$count;*/
	/*$a = 423789;				#6
	$i = $a;
	for ($i; $i>0;$i--){
		if ($a%$i == 0)
			echo $i." ";
	}*/
	/*$a = 423786;				#7
	$b =5467;
	while($a*$b>0){
		if($a>$b){
			$a = $a%$b;
		}
		else
			$b = $b % $a;	
	}
	echo $b;*/					#8
	/*$a = 123;
	$b = 354;
	$ot = $a+$b;
	while ($ot % $a !=0 or $ot % $b !=0) {
		$ot+=1;
	}
	echo $ot;*/
	/*$a="437";					#9		
	$b = strlen($a);
	echo $b;*/
	#1
	/*<?php
	for($i=1;$i<21;$i++)
	{
		echo $i.'дюймы : '.$i*2.54.'cm'.'<br>';
	}
	?>
	#2
	<?php
		echo 'Чётные числа: <br>';
		for($i=2;$i<101;$i++)
		{
			if($i%2 == 0)
			{
				echo $i.'<br>';
			}
		}
	?>
	#3
	<?php
		$sum = 0;
		for($i=0;$i<200;$i++)
		{
			$sum = $i*$i+$sum;
		}
		echo $sum;
	?>
	#4
	<?php
		$sum=0;
		for($i=1;$i<100;$i++)
		{
			if($i%2 == 1)
			{
				$sum=$sum+$i;
			}
		}
		echo $sum;
	?>
	#5
	<?php
		echo "Введи пароль<br>";
		$password = 111;
		for($i=0;$i<5;$i++)
		{
			if ($password == 111)
			{
				for($j=0;$j<10000;$j++)
				{
					echo "Молодец ";
				}
			}
			else
			{
				echo "Пароль неверный <br>";
			}
		}
		return 0;		
	?>
	#10
	<?php
		$arr = [1=>14,45,56,645,34,32,756,3456776,1234134,1234123];
		$max = 0;
		for($i=1;$i<10;$i++)
		{
			if($arr[$i] > $max)
			{
				$max = $arr[$i];
			}
		}
		echo $max;
	?>*/
			
?>