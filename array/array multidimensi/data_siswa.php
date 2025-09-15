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
	 <?php $no=1 ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<!-- menghubungkan CDN CSS menggunakan boostrap -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
	<!-- menghubungkan CDN JS menggunakan boostrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
	<!-- menghubungkan CDN IKON mengunakan boostrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
	<div class="container-fluid bg-primary-subtle py-5">
		<div class="container">
			<!-- card -->
		<div class="card">
		<div class="card-header">
			data siswa
		</div>	
			<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">NO.</th>
						<th scope="col">Foto</th>
						<th scope="col">NISN</th>
						<th scope="col">Nama</th>
						<th scope="col">Kelas</th>
						<th scope="col">Alamat</th>
						<th scope="col">Gender</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($students as $student) : ?>
					<tr>
						<th scope="row"><?= $no ?></th>
						<td><img src="../foto/<?= $student['5']?>" class="rounded"></td>
						<td><?= $student['0'] ?></td>
						<td><?= $student['1'] ?></td>
						<td><?= $student['2'] ?></td>
						<td><?= $student['3'] ?></td>
						<td><?= $student['4'] ?></td>
						<td>
							<a href="edit.php?foto=<?=$student['5']?>
							&NISN= <?=$student ['0']?>
							&Nama= <?=$student ['1']?>
							&Kelas= <?=$student ['2']?>
							&Alamat= <?=$student ['3']?>
							&Gender= <?=$student ['4']?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
							<a href="detail.php?foto=<?=$student['5']?>
							&NISN= <?=$student ['0']?>
							&Nama= <?=$student ['1']?>
							&Kelas= <?=$student ['2']?>
							&Alamat= <?=$student ['3']?>
							&Gender= <?=$student ['4']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>

						</td>
					</tr>
					<?php $no++ ?>
					<?php endforeach?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>