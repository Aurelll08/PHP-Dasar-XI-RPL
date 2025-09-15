<!DOCTYPE html>
<html>
<head>
	<title>Tugas nilai 3 Percabangan</title>
</head>
<body>
	<?php
	$na = 90;
	if ($na >= 110){
		echo ("Keterangan : Nilai Tidak Valid");
		echo "<br>";
		echo ("Predikat : Nilai Tidak Valid");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
		echo "<br>";
	}else if ($na >= 90){
		echo ("keterangan : Lulus");
		echo "<br>";
		echo ("Predikat : A");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
		echo "<br>";
	}else if ($na >= 80){
		echo ("Keterangan : Lulus");
		echo "<br>";
		echo ("Predikat : B");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
		echo "<br>";
	}else if ($na >= 70){
		echo ("Keterangan : Lulus");
		echo "<br>";
		echo ("Predikat : C");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
		echo "<br>";
	}else if ($na >= 60){
		echo ("Keterangan : Tidak Lulus");
		echo "<br>";
		echo ("Predikat : D");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
		echo "<br>";
	}else if ($na >= 59){
		echo ("Keterangan : Tidak Lulus");
		echo "<br>";
		echo ("Predikat : E");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
		echo "<br>";
	}else if ($na >= 0){
		echo ("Keterangan : Nilai Tidak Lulus");
		echo "<br>";
		echo ("Predikat : Nilai Tidak Valid");
		echo "<br>";
		echo ("Nilai Akhir : ". $na);
	}



	 ?>

</body>
</html>