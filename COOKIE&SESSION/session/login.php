<?php
	session_start();

	if (isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:dashboard.php");
	}

	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		if ($username=="aurel" && $password=="0808") {
			$_SESSION['username']= $username;
			$_SESSION['password']= $password;
			

			header("Location:dashboard.php");
		}else{
	$pesan="
	<div class='alert alert-danger mt-4' role='alert'>Username dan Password Salah!</div>
	

	";
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Cookie</title>
	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<!-- JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height: 100vh">
		<div class="card p-5 text-center">
		<h1>LOGIN</h1>
		<?php 
			if (isset($pesan)) {
				echo $pesan;
				}	

		 ?>
		<form method="post" action="">
			<input type="text" name="username" class="form-control my-3" placeholder="Input Username">
			<input type="password" name="password" class="form-control my-3" placeholder="Input Password">
			<button type="submit" name="login" class="btn btn-primary">Login</button>
		</form>
	</div>

</body>
</html>