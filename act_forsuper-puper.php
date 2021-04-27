<?php
	/*if (isset($_POST['name']) and isset($_POST['age']) and isset($_POST['text'])){	
			$name = $_POST['name'];
			$age = $_POST['age'];
			$text = $_POST['text'];
		}
	echo "Привет ".$name.", "." тебе ".$age.' лет '.'<br>'."Твое сообщение: ".$text;*/
	if (isset($_POST['age'])) {
	    $age = $_POST['age'];
	    echo $age;
	}
	 
	if (!isset($_POST['age'])):
	    ?>
	    <form action="" method="POST">
	        <input name="age" placeholder="Введите ваш возраст">
	        <input type="submit">
	    </form>
?>
