<?php

	$students=[
		[
			"NISN"=>"1008",
			"Nama"=>"Karina",
			"Alamat"=>"Cimerta",
			"Kelas"=>"XI RPL",
			"Gender"=>"Perempuan",
			"foto"=>"1.jpg",
		],
		[
			"NISN"=>"1078",
			"Nama"=>"Mingyu",
			"Alamat"=>"Cigadung",
			"Kelas"=>"XI RPL",
			"Gender"=>"Laki-Laki",
			"foto"=>"2.jpg",
		],
		[
			"NISN"=>"1098",
			"Nama"=>"Udin",
			"Alamat"=>"Cijambe",
			"Kelas"=>"XI RPL",
			"Gender"=>"Laki-Laki",
			"foto"=>"3.jpg",
		],
		[
			"NISN"=>"1087",
			"Nama"=>"Edoh",
			"Alamat"=>"Cimerta",
			"Kelas"=>"XI RPL",
			"Gender"=>"Perempuan",
			"foto"=>"4.jpg",
		],
		[
			"NISN"=>"1907",
			"Nama"=>"Aurel",
			"Alamat"=>"Cibogo",
			"Kelas"=>"XI RPL",
			"Gender"=>"Perempuan",
			"foto"=>"1.jpg",
		], 

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
						<td><img src="../foto/<?= $student['foto']?>" class="rounded" class="100px" ></td>
						<td><?= $student['NISN'] ?></td>
						<td><?= $student['Nama'] ?></td>S
						<td><?= $student['Kelas'] ?></td>
						<td><?= $student['Alamat'] ?></td>
						<td><?= $student['Gender'] ?></td>
						<td>
							<a href="edit.php?foto=<?=$student['foto']?>
							&NISN= <?=$student ['NISN']?>
							&Nama= <?=$student ['Nama']?>
							&Kelas= <?=$student ['Kelas']?>
							&Alamat= <?=$student ['Alamat']?>
							&Gender= <?=$student ['Gender']?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
							<a href="detail.php?foto=<?=$student['foto']?>
							&NISN= <?=$student ['NISN']?>
							&Nama= <?=$student ['Nama']?>
							&Kelas= <?=$student ['Kelas']?>
							&Alamat= <?=$student ['Alamat']?>
							&Gender= <?=$student ['Gender']?>" class="btn btn-primary"><i class="bi bi-list"></i></a>

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