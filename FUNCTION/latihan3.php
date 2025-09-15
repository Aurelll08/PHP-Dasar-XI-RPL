<?php 

	$pelajar="urell";

	function siswa($nama="Aurel", $kelas="XI RPL"){
		global $pelajar; //mengammbil variabel dari luar function
		echo "Siswa kelas $kelas yang bernama $pelajar selalu rajin.";
	}

	siswa();

 ?>