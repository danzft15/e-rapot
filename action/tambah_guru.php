<?php
	
	include 'koneksi.php';

	$nuptk					= $_POST['nuptk'];
	$nip					= $_POST['nip'];
	$nama_lengkap			= $_POST['nama_lengkap'];
	$tempat_lahir			= $_POST['tempat_lahir'];
	$tanggal_lahir			= $_POST['tanggal_lahir'];
	$jenis_kelamin			= $_POST['jenis_kelamin'];
	$alamat					= $_POST['alamat'];
	$status_pegawai			= $_POST['status_pegawai'];
	$mata_pelajaran			= $_POST['mata_pelajaran'];
	$status					= $_POST['status'];

	$insert = mysqli_query($koneksi, "INSERT INTO guru(id, nuptk, nip, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, status_pegawai, mata_pelajaran, status)VALUES('', '$nuptk', '$nip', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$status_pegawai', '$mata_pelajaran', '$status')") or die(mysqli_error($koneksi));


	// echo "<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=siswa'>";
	echo "Berhasil";


?>