<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
test:<input type="text" name="a">
student:<input type="text" name="b">
<input type="submit">
</form>
<button>Boy</button>
<button>Girl</button>
<?php 
$test=isset($_GET['a']) ? $_GET['a'] : 6;
$student=isset($_GET['b']) ? $_GET['b'] : 6;
$g=1;
//$test = 12; 


if($test >= 90)
{

    echo "Оценка 5";
	echo"<br/>";
}


elseif ($test < 89 && $test >=80) 
{
    echo "Оценка 4";
	echo"<br/>";
}
elseif ($test < 79 && $test >= 30) 
{
    echo "Оценка 3";
	echo"<br/>";
}

elseif ($test < 30 && $test >=0)

{
	if ($student == "Boy")
{	
	echo "На завод<br/>или";
	$g=0;
	echo"<br/>";
}
	if ($student == "Girl")
{	
	echo "Night Buterfly";
	$g=0;
	echo"<br/>";
}
    echo "Надо бы ещё раз написать тест...";
}
echo"<br/>";
if($student == "Boy" && $g==1)
{
	echo"На работу";
}
if($student == "Girl" && $g==1)
{
	echo"На кухню <br/> или";
}
?>