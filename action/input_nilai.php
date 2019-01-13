<?php
include "../action/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Nilai</title>
	<link rel="shortcut icon" href="../img/logo_zihud.jpg">

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
	<div class="container">
		<div class="content">
			<h2>Input Nilai Siswa</h2>
			<hr />
			
			<?php

			$id  = $_GET['id'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
			// $hasil   = mysqli_query($conn, $edit)or die(mysql_error());
			$row = mysqli_fetch_array($sql);
			if(isset($_POST['add'])){
				$kelas				= $_POST['kelas'];
				$semester			= $_POST['semester'];
				$mata_pelajaran		= $_POST['mata_pelajaran'];
				$kkm				= $_POST['kkm'];
				$nilai_angka		= $_POST['nilai_angka'];
				$huruf				= $_POST['nilai_huruf'];
				$predikat			= $_POST['predikat'];
				$keterangan			= $_POST['keterangan'];
				$deskripsi			= $_POST['deskripsi'];
				$budi_pekerti		= $_POST['budi_pekerti'];
				$sakit				= $_POST['sakit'];
				$izin				= $_POST['izin'];
				$alfa				= $_POST['alfa'];
				$id_siswa			= $_POST['id_siswa'];
		
				$cek = mysqli_query($koneksi, "SELECT * FROM input_nilai WHERE kelas='$kelas'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO input_nilai(id, id_siswa, kelas, semester, mata_pelajaran, kkm, nilai_angka, nilai_huruf, predikat, keterangan, deskripsi, budi_pekerti, sakit, izin, alfa)
															VALUES('', '$kelas', '$semester', $id_siswa', '$mata_pelajaran', '$kkm', '$nilai_angka', '$huruf', '$predikat', '$keterangan', '$deskripsi','$budi_pekerti', '$sakit', '$izin', '$alfa')") or die(mysqli_error($koneksi));
												}
											}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<input type="hidden" name="id_siswa" value="<?php echo $row['id']; ?>">
				<div class="form-group">
					<label class="col-sm-3 control-label">NISN</label>
						<div class="col-sm-2">
							<input type="text" name="nisn" class="form-control" value="<?php echo $row['nisn']; ?>" placeholder="NISN" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA</label>
						<div class="col-sm-3">
							<input type="text" name="nama" class="form-control" value="<?php echo $row['nama_siswa']; ?>" placeholder="NAMA" disabled>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KELAS</label>
						<div class="col-sm-2">
							<input type="text" name="kelas" class="form-control" value="<?php echo $row['kelas']; ?>" placeholder="KELAS" disabled>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">SEMESTER</label>
					<div class="col-sm-2">
						<select name="semester" class="form-control" required>
						<option value="">SEMESTER</option>
							<option value="Ganjil">GANJIL</option>
							<option value="Genap">GENAP</option>
						</select>
					</div>
				</div>

				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN PENDIDIKAN AGAMA ISLAM</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN BAHASA INDONESIA</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN BAHASA INGRRIS</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN BAHASA ARAB</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN MATEMATIKA</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN ILMU PENGETAHUAN ALAM</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN ILMU PENGETAHUAN SOSIAL</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN AQIDAH AKHLAK</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN FIQIH</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN ALQUR'AN HADIST</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN SEJARAH KEBUDAYAAN ISLAM</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN SENI BUDAYA</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN PENJASKES</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilai_huruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-6 control-label">UMUM</label>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">BUDI PEKERTI</label>
					<div class="col-sm-2">
						<select name="budi_pekerti" class="form-control" required>
							<option value="Disiplin">Disiplin</option>
							<option value="Kurang Disiplin">Kurang Disiplin</option>
							<option value="Tidak Disiplin">Tidak Disiplin</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">SAKIT</label>
					<div class="col-sm-2">
						<input type="number" name="sakit" class="form-control" placeholder="SAKIT">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IZIN</label>
					<div class="col-sm-2">
						<input type="number" name="izin" class="form-control" placeholder="IZIN">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALFA</label>
					<div class="col-sm-2">
						<input type="number" name="alfa" class="form-control" placeholder="ALFA">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="INPUT">
						<a href="../admin/index.php?page=siswa" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>