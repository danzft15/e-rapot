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
			
			<form class="form-horizontal" action="../action/tambah_nilai.php" method="post">
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
						<input type="text" name="kkm_pai" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_pai" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_pai" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN BAHASA INDONESIA</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_bindo" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_bindo" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_bindo" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN BAHASA INGRRIS</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_bing" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_bing" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_bing" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN BAHASA ARAB</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_barab" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_barab" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_barab" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN MATEMATIKA</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_matematika" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_matematika" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_matematika" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>

				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN ILMU PENGETAHUAN ALAM</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_ipa" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_ipa" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_ipa" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN ILMU PENGETAHUAN SOSIAL</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_ips" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_ips" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_ips" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN AQIDAH AKHLAK</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_aqidah" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_aqidah" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_aqidah" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN FIQIH</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_fiqih" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_fiqih" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_fiqih" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN ALQUR'AN HADIST</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_qurdis" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_qurdis" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_qurdis" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN SEJARAH KEBUDAYAAN ISLAM</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_ski" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_ski" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_ski" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN SENI BUDAYA</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_senbud" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_senbud" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_senbud" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<hr \>
				<div class="form-group">
				<label class="col-sm-8 control-label">MATA PELAJARAN PENJASKES</label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm_penjaskes" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_penjaskes" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="huruf_penjaskes" class="form-control" placeholder="NILAI HURUF">
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
					<label class="col-sm-3 control-label">CATATAN GURU</label>
					<div class="col-sm-6">
						<input type="text" name="catatan_guru" class="form-control" placeholder="CATATAN GURU">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" class="btn btn-primary" value="INPUT">
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