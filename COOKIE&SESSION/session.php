<?php 
	session_start();

	// ketika buttton buat di klik
	if (isset($_POST['buat'])) {
		// nama inputan
		$namasession=$_POST['session'];
		// membuat kue
	$_SESSION['isi']= $namasession;

	header("location:session.php");

	}

	// ketika buttton buat di klik
	if (isset($_POST['hapus'])) {
		// menghapus cookie
	session_unset();

	header("location:session.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>session</title>
</head>
<body>
 
	<h1>nanti session muncul di bawah !</h1>
	<?php 	if (isset($_SESSION['isi'])): ?>
	<h4> sekarang makan kue <?= $_SESSION['isi'] ?></h4>
    <?php 	endif ?>
 	<form method="post" action="">
		<input type="text" name="session">
		<button type="submit" name="buat">buat</button>
		<button type="submit" name="hapus">hapus</button>
	</form>
</body>
</html>