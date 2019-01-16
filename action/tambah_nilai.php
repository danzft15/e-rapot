<?php

	include 'koneksi.php';

	$nisn					= $_POST['nisn'];
	$nama					= $_POST['nama'];
	$kelas					= $_POST['kelas'];
	$semester				= $_POST['semester'];
	$tanggal_lahir			= $_POST['tanggal_lahir'];
	$jenis_kelamin			= $_POST['jenis_kelamin'];
	$kelas					= $_POST['kelas'];
	$alamat					= $_POST['alamat'];
	$provinsi   			= $_POST['provinsi'];
	$status_siswa			= $_POST['status_siswa'];

	$simpan	= "INSERT INTO siswa(id, nisn, nis, nama_siswa, tempat_lahir, tanggal_lahir, jenis_kelamin, kelas, alamat, provinsi, status_siswa) VALUES ('', '$nisn', '$nis', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$kelas', '$alamat', '$provinsi', '$status_siswa')";
	
	$masuk	= mysqli_query($koneksi,$simpan)or die(mysqli_error($koneksi));


?>