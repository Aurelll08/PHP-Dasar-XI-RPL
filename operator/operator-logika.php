<!DOCTYPE html>
<html>
<head>
	<title>Operator Logika</title>
</head>
<body>
	<?php
	$n = true;
	$i = false;

	echo "=====Operator Logika AND====";
	echo "<br>";
	echo "N && I : ";
	var_dump($n && $i);
	echo "<br>";
	echo "I && I : "; 
	var_dump($i && $i);
	echo "<br>";
	echo "N && N : ";
	 var_dump($n && $n);
	echo "<br>";
	echo "I && N : "; 
	var_dump($i && $n);
	echo "<br>";
	echo "<br>";

	echo "=====Operator logika OR=====";
	echo "<br>";
	echo "N || I : "; 
	var_dump($n || $i);
	echo "<br>";
	echo "I || I : "; 
	var_dump($i || $i);
	echo "<br>";
	echo "N || N :"; 
	var_dump($n || $n);
	echo "<br>";
	echo "I || N : ";
	 var_dump($i || $n);
	echo "<br>";
	echo "<br>";

	echo "=====Operator Logika Nagasi===== ";
	echo "<br>";
	echo "! I : "; 
	var_dump(! $i);
	echo "<br>";
	echo "! N : "; 
	var_dump(! $n);





	 ?>

</body>
</html>