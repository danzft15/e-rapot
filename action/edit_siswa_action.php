<?php

include 'koneksi.php';

	$nisn					= $_POST['nisn'];
	$nis					= $_POST['nis'];
	$nama_siswa				= $_POST['nama_siswa'];
	$tempat_lahir			= $_POST['tempat_lahir'];
	$tanggal_lahir			= $_POST['tanggal_lahir'];
	$jenis_kelamin			= $_POST['jenis_kelamin'];
	$kelas					= $_POST['kelas'];
	$alamat					= $_POST['alamat'];
	$provinsi				= $_POST['provinsi'];
	$status_siswa			= $_POST['status_siswa'];
	$nama_orangtua			= $_POST['nama_orangtua'];

	$edit 	= "UPDATE siswa SET nisn='$nisn', nis='$nis',  nama_siswa='$nama_siswa', tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', kelas='$kelas', alamat='$alamat', provinsi='$provinsi', status_siswa='$status_siswa', nama_orangtua='$nama_orangtua' WHERE nisn='$nisn'";
	$editsiswa	= mysqli_query($koneksi, $edit)or die(mysqli_error());

	if ($editsiswa)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=siswa">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>