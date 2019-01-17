<?php

	include 'koneksi.php';

	$nis					= $_POST['nis'];
	$kelas					= $_POST['kelas'];
	$semester				= $_POST['semester'];
	$kkm_pai				= $_POST['kkm_pai'];
	$pai					= $_POST['nilai_pai'];
	$pai_huruf				= $_POST['huruf_pai'];
	$kkm_bindo				= $_POST['kkm_bindo'];
	$bindo 					= $_POST['nilai_bindo'];
	$bindo_huruf			= $_POST['huruf_bindo'];
	$kkm_binggris			= $_POST['kkm_bing'];
	$binggris	    		= $_POST['nilai_bing'];
	$binggris_huruf		    = $_POST['huruf_bing'];
	$kkm_barab				= $_POST['kkm_barab'];
	$barab			 		= $_POST['nilai_barab'];
	$barab_huruf			= $_POST['huruf_barab'];
	$kkm_matematika			= $_POST['kkm_matematika'];
	$matematika			 	= $_POST['nilai_matematika'];
	$matematika_huruf		= $_POST['huruf_matematika'];
	$kkm_ipa				= $_POST['kkm_ipa'];
	$ipa 				 	= $_POST['nilai_ipa'];
	$ipa_huruf				= $_POST['huruf_ipa'];
	$kkm_ips				= $_POST['kkm_ips'];
	$ips				 	= $_POST['nilai_ips'];
	$ips_huruf				= $_POST['huruf_ips'];
	$kkm_aqidah				= $_POST['kkm_aqidah'];
	$aqidah				 	= $_POST['nilai_aqidah'];
	$aqidah_huruf			= $_POST['huruf_aqidah'];
	$kkm_fiqih				= $_POST['kkm_fiqih'];
	$fiqih				 	= $_POST['nilai_fiqih'];
	$fiqih_huruf			= $_POST['huruf_fiqih'];
	$kkm_qurdis				= $_POST['kkm_qurdis'];
	$qurdis				 	= $_POST['nilai_qurdis'];
	$qurdis_huruf			= $_POST['huruf_qurdis'];
	$kkm_ski				= $_POST['kkm_ski'];
	$ski				 	= $_POST['nilai_ski'];
	$ski_huruf				= $_POST['huruf_ski'];
	$kkm_senbud				= $_POST['kkm_senbud'];
	$senbud				 	= $_POST['nilai_senbud'];
	$senbud_huruf			= $_POST['huruf_senbud'];
	$kkm_penjaskes			= $_POST['kkm_penjaskes'];
	$penjaskes			 	= $_POST['nilai_penjaskes'];
	$penjaskes_huruf		= $_POST['huruf_penjaskes'];
	$budi_pekerti			= $_POST['budi_pekerti'];
	$sakit					= $_POST['sakit'];
	$izin					= $_POST['izin'];
	$alfa					= $_POST['alfa'];
	$catatan_guru			= $_POST['catatan_guru'];

	if ($pai > $kkm_pai AND $bindo > $kkm_bindo AND ) {
		$kelas = $kelas + 1;
	} elseif {
		
	}

	$simpan	= "INSERT INTO input_nilai(id, nis, kelas, semester, pai, pai_huruf, kkm_pai, bindo, bindo_huruf, kkm_bindo, binggris, binggris_huruf, kkm_binggris, barab, barab_huruf, kkm_barab, matematika, matematika_huruf, kkm_matematika, ipa, ipa_huruf, kkm_ipa, ips, ips_huruf, kkm_ips, aqidah, aqidah_huruf, kkm_aqidah, fiqih, fiqih_huruf, kkm_fiqih, qurdis, qurdis_huruf, kkm_qurdis, ski, ski_huruf, kkm_ski, senbud, senbud_huruf, kkm_senbud, penjaskes, penjaskes_huruf, kkm_penjaskes, budi_pekerti, sakit, izin, alfa, catatan_guru) VALUES ('', '$nis', '$kelas', '$semester', '$pai', '$pai_huruf', '$kkm_pai', '$bindo', '$bindo_huruf', '$kkm_bindo', '$binggris', '$binggris_huruf', '$kkm_binggris', '$barab', '$barab_huruf', '$kkm_barab', '$matematika', '$matematika_huruf', '$kkm_matematika', '$ipa', '$ipa_huruf', '$kkm_ipa', '$ips', '$ips_huruf', '$kkm_ips', '$aqidah', '$aqidah_huruf', '$kkm_aqidah', '$fiqih', '$fiqih_huruf', '$kkm_fiqih', '$qurdis', '$qurdis_huruf', '$kkm_qurdis', '$ski', '$ski_huruf', '$kkm_ski', '$senbud', '$senbud_huruf', '$kkm_senbud', '$penjaskes', '$penjaskes_huruf', '$kkm_penjaskes', '$budi_pekerti', '$sakit', '$izin', '$alfa', '$catatan_guru')";
	
	$masuk	= mysqli_query($koneksi,$simpan)or die(mysqli_error($koneksi));

	//die(var_dump($simpan));

	if($masuk) {
		echo "Berhasil menyimpan nilai ke database";
	}

?>