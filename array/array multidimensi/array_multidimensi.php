<?php

	$students =[ 
		["1008", "Karina", "XI RPL", "Kopti Raya", "Perempuan", "1.jpg"],
	    ["0034", "Mingyu", "XI RPL", "Cigadung", "Laki-Laki", "2.jpg"], 
	    ["0009", "Sunghoon", "XI RPL", "Cijambe", "Laki-Laki", "3.jpg"],
	    ["0709", "Lili", "XI RPL", "Cimerta", "Laki-Laki", "4.jpg"],
	    ["0067", "Wonyoung", "XI RPL", "Cijambe", "Perempuan","1.jpg"]

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
			<li><img src="../foto/<?php echo $students['5']?>"></li>
			<li><?php echo $students['0']?></li>
			<li><?php echo $students['1']?></li>
			<li><?php echo $students['2']?></li>
			<li><?php echo $students['3']?></li>
			<li><?php echo $students['4']?></li>

		</ul>
	<?php endforeach?>
	

</body>
</html>