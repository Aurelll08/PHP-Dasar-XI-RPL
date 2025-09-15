<?php
  
	//ketika button di klik
  	if (isset($_POST['buat'])) {
  		//nama dari inputan
  		$namaKue=$_POST['kue'];
  		//membuat cookie
  		setcookie('kue', $namaKue, time () + 3600);

  		header("Location:cookie.php");
  	}

  	//ketika button hapus di klik
  	if (isset($_POST['hapus'])) {

  		//menghapus cookie
  		setcookie('kue', "" , time () - 3600);

  		header("Location:cookie.php");
  	}


  	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<h1>Nnati cokie muncul dibawah!!</h1>
	<?php if (isset($_COOKIE['kue'])): ?>
	<h4>Sekarang makan kue <?= $_COOKIE['kue']?></h4>
	<?php endif ?>
	<form method="post" action="">
		<input type="text" name="kue">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>

	</form>

</body>
</html>