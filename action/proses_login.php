<?php
	
	include "koneksi.php";
	
	$username  = $_POST["username"];
	// encrypt password dengan md5 password
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM login WHERE username='$username' AND password='$password'";
	$login     = mysqli_query($koneksi,$query)or die(mysqli_error($koneksi));
	$jlhrecord = mysqli_num_rows($login);
	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);
	$username  = $data['username'];
	$level     = $data['level'];
	$keterangan = $data['keterangan'];
	if ($jlhrecord > 0){

		if($level==0) {
			// jika Username dan password ada didalam database daftarkan session
			session_start();
			$_SESSION['username']  = $username;
			$_SESSION['level']     = $level;
			$_SESSION['keterangan']= $keterangan;
			$_SESSION['id']        = session_id();
			
			header('location: ../admin/index.php?page=guru');
		}
		elseif ($level==1) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: ../siswa/index.php');
		}
		elseif ($level==2) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: ../walimurid/index.php');
		}  

		elseif ($level==3) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	if ($keterangan=='a'){
		 		session_start();
		 		$_SESSION['username']  = $username;
		 		$_SESSION['level']     = $level;
		 		$_SESSION['id']        = session_id();
		 	
		 		header('location: ../walikelas/halaman_wali_kelas_8.php');
		 	}
		 	if ($keterangan=='b'){
		 		session_start();
		 		$_SESSION['username']  = $username;
		 		$_SESSION['level']     = $level;
		 		$_SESSION['id']        = session_id();
		 		
		 		echo "Berhasil login sebagai walikelas 8b";
		 		// header('location: halaman_wali_kelas_8.php');
		 	}
		 	if ($keterangan=='c'){
		 		session_start();
		 		$_SESSION['username']  = $username;
		 		$_SESSION['level']     = $level;
		 		$_SESSION['id']        = session_id();
		 		
		 		echo "Berhasil login sebagai walikelas 8c";
		 		// header('location: halaman_wali_kelas_8.php');
		 	}
		}

		elseif ($level==4) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: ../walikelas/halaman_wali_kelas_9.php');
		} 

		elseif ($level==5) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location../walikelas/halaman_wali_kelas_7.php');
		} 
 
	}
	else{
		// echo $data;
		//header("location:index.php");
		print"
			<script>
				alert(\"Username atau Password Anda Salah!\");
				history.back(-1);
			</script>";
	} 
?>