<!DOCTYPE html>
<html>
<head>
	<title>Nilai 2</title>
</head>
<body>
	<?php
	$nilai= 70;
	if ($nilai >= 80) {
		echo "Nilai Anda $nilai, Anda Lulus";
	} elseif ($nilai >= 60) {
		echo "Nilai Anda $nilai, Anda Remedial";
	} else {
		echo "Nilai Anda $nilai, Anda Tidak Lulus";
	}


	 ?>

</body>
</html>