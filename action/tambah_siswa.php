<?php
	include 'koneksi.php';	
	
	$nisn					= $_POST['nisn'];
	$nis					= $_POST['nis'];
	$nama_lengkap			= $_POST['nama_lengkap'];
	$tempat_lahir			= $_POST['tempat_lahir'];
	$tanggal_lahir			= $_POST['tanggal_lahir'];
	$jenis_kelamin			= $_POST['jenis_kelamin'];
	$kelas					= $_POST['kelas'];
	$alamat					= $_POST['alamat'];
	$provinsi   			= $_POST['provinsi'];
	$status_siswa			= $_POST['status_siswa'];
	$nama_orangtua			= $_POST['nama_orangtua'];

	$simpan	= "INSERT INTO siswa(id, nisn, nis, nama_siswa, tempat_lahir, tanggal_lahir, jenis_kelamin, kelas, alamat, provinsi, status_siswa, nama_orangtua) VALUES ('', '$nisn', '$nis', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$kelas', '$alamat', '$provinsi', '$status_siswa', '$nama_orangtua')";
	
	$masuk	= mysqli_query($koneksi,$simpan)or die(mysqli_error($koneksi));
	
	//narik data terakhir dari tabel siswa
	$querykode 				= "SELECT * FROM siswa WHERE nama_siswa='$nama_lengkap' ORDER BY id DESC LIMIT 1";
	$cekquery				= mysqli_query($koneksi, $querykode)or die(mysqli_error($koneksi));
	$data 					= mysqli_fetch_array($cekquery);
	
	//menginisialisasikan nis menjadi username dan password
	$username  = $data['nis'];
	$password  = md5($data['nis']);
	$ortu 	   = substr($data['nama_orangtua'], 0, 4);
	$pw_ortu   = md5($ortu);
	
	//insert siswa into login
	$save 	= "INSERT INTO login(id, username, password, level, keterangan) VALUES ('', '$username', '$password', '1', 'siswa')";
	$insert	= mysqli_query($koneksi,$save)or die(mysqli_error($koneksi));

	

	//insert siswa into login
	$save 	= "INSERT INTO login(id, username, password, level, keterangan) VALUES ('', '$username', '$pw_ortu', '2', 'walimurid')";
	$insert	= mysqli_query($koneksi,$save)or die(mysqli_error($koneksi));

	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='0; URL=../admin/index.php?page=siswa'>";
?> 