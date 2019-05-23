<?php
	$v1 = $_POST['val1'];
	$v2 = $_POST['val2'];

	echo $v1 + $v2."<br>";
	echo $v1 - $v2."<br>";
	echo $v1 * $v2."<br>";
	if($v2 == 0)
		echo "Nie wolno dzielić przez 0!";
	else 
		echo $v1 / $v2;
?>