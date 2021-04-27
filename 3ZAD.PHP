<?php
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
<?php endif; ?>