<?php 
	require 'connection.php';
	$id_siswa = $_GET['id_siswa'];
	if (isset($id_siswa)) {
		if (deleteSiswa($id_siswa) > 0) {
			setAlert("Siswa telah dihapus", "Penghapusan berhasil", "Sukses");
		    header("Location: siswa.php");
	    }
	} else {
	   header("Location: siswa.php");
	}