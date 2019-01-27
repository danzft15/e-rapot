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

	$edit 	= "UPDATE guru SET nuptk='$nuptk', nip='$nip',  nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', status_pegawai='$status_pegawai', mata_pelajaran='$mata_pelajaran', status='$status' WHERE nuptk='$nuptk'";
	$editguru	= mysqli_query($koneksi, $edit)or die(mysqli_error());

	if ($editguru)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/index.php?page=guru">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>