<?php 	
	session_start();

	if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:logout.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login session</title>
	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<!-- JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height: 100vh">
		<div class="card p-3 col-lg-6" style="border-radius: 15px">
			<div class="row">
				<div class="kiri col-lg-4">
				<img src="1.jpg" class="img-fluid col-12 rounded">
				</div>
				<div class="kanan col-lg-8">
					<h2 class="fw-bold mb-8"><?= $_SESSION['username']  ?></h2>
					<small>Admin sekolah dan pengajar mapel pilihan</small>
					<div class="col-12 py-3">s
						<small>Pengajar Jurusan : </small>
						<span class="badge rounded-pill text-bg-primary">PPLG</span>
						<span class="badge rounded-pill text-bg-secondary">PPLG</span>
						<span class="badge rounded-pill text-bg-success">MPLB</span>
						</div>
						<div class="row">
						<div class="col-8">
							<a href="#" class="btn rounded-pill btn-dark col-12">Edit Profile</a>
						</div>
						<div class="col-4">
							<a href="logout.php" class="btn rounded-pill btn-danger col=12">Logout</a>
						</div>
					
					</div>
				
				</div>
			</div>
		</div>
	</div>

</body>
</html>