<?php

	$students =[ 
		[
			"NISN"=>"1008",
			"Nama"=>"Karina",
			"Alamat"=>"Cimerta",
			"Kelas"=>"XI RPL",
			"JK"=>"Perempuan",
			"foto"=>"1.jpg",
		],
		[
			"NISN"=>"1078",
			"Nama"=>"Mingyu",
			"Alamat"=>"Cigadung",
			"Kelas"=>"XI RPL",
			"JK"=>"Laki-Laki",
			"foto"=>"2.jpg",
		],
		[
			"NISN"=>"1098",
			"Nama"=>"Udin",
			"Alamat"=>"Cijambe",
			"Kelas"=>"XI RPL",
			"JK"=>"Laki-Laki",
			"foto"=>"3.jpg",
		],
		[
			"NISN"=>"1087",
			"Nama"=>"Edoh",
			"Alamat"=>"Cimerta",
			"Kelas"=>"XI RPL",
			"JK"=>"Perempuan",
			"foto"=>"4.jpg",
		],
		[
			"NISN"=>"1907",
			"Nama"=>"Aurel",
			"Alamat"=>"Cibogo",
			"Kelas"=>"XI RPL",
			"JK"=>"Perempuan",
			"foto"=>"1.jpg",
		],

	
      ];
      //cara menampikan array multidimensi
      //var_dump($siswa);
	 ?>
<!DOCTYPE html>
<html>
<head>z
	<title>Array Multidimensi</title>
</head>
<body>
	<?php foreach ($students as $students) : ?>
		<ul>
			<li><img src="../foto/<?php echo $students['Foto']?>"></li>
			<li><?php echo $students['NISN']?></li>
			<li><?php echo $students['Nama']?></li>
			<li><?php echo $students['Kelas']?></li>
			<li><?php echo $students['Alamat']?></li>
			<li><?php echo $students['Gender']?></li>

		</ul>
	<?php endforeach?>
	

</body>
</html>