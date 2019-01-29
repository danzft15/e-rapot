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

				$id_siswa   = $_GET['id'];
				// echo $id_siswa;
				include '../action/koneksi.php';

				$tarik 					= "SELECT * FROM siswa WHERE id='$id_siswa'";
				$cekquery				= mysqli_query($koneksi, $tarik)or die(mysqli_error($koneksi));
				$row 					= mysqli_fetch_array($cekquery);

			?>			
			<form class="form-horizontal" action="../action/tambah_nilai.php" method="post">
				<input type="hidden" name="id_siswa" value="<?php echo $row['id']; ?>">
				<div class="form-group">
					<label class="col-sm-3 control-label">NIS</label>
						<div class="col-sm-3">
							<input type="text" name="nis" class="form-control" value="<?php echo $row['nis']; ?>" placeholder="NIS" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA</label>
						<div class="col-sm-3">
							<input type="text" name="nama" class="form-control" value="<?php echo $row['nama_siswa']; ?>" placeholder="NAMA" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KELAS</label>
						<div class="col-sm-2">
							<input type="text" name="kelas" class="form-control" value="<?php echo $row['kelas']; ?>" placeholder="KELAS" readonly>
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
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>No</th>
				        <th>Mata Pelajaran</th>
				        <th>KKM</th>
				        <th>Nilai</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>1</td>
				        <td>Pendidikan Agama Islam</td>
				        <td><input type="" value ="60" name="kkm_pai" disabled></td>
				        <td><input type="" name="pai"></td>
				      </tr>
				      <tr>
				        <td>2</td>
				        <td>Bahasa Infonesia</td>
				        <td><input type="" value="60" name="kkm_bindo" disabled></td>
				        <td><input type="" name="bindo"></td>
				      </tr>
				    </tbody>
				    <tr>
				        <td>3</td>
				        <td>Bahasa Inggris</td>
				        <td><input type="" value ="65" name="kkm_bing" readonly disabled></td>
				        <td><input type="" name="nilai_bing"></td>
				      </tr>
				    <tr>
				        <td>4</td>
				        <td>Bahasa Arab</td>
				        <td><input type="" value ="60" name="kkm_barab" readonly disabled></td>
				        <td><input type="" name="nilai_barab"></td>
				    </tr>
				    <tr>
				        <td>5</td>
				        <td>Matematika</td>
				        <td><input type="" value ="60" name="kkm_matematika" readonly disabled></td>
				        <td><input type="" name="nilai_matematika"></td>
				      </tr>
				    <tr>
				        <td>6</td>
				        <td>Ilmu Pengetahuan Alam</td>
				        <td><input type="" value ="60" name="kkm_ipa" readonly disabled></td>
				        <td><input type="" name="nilai_ipa"></td>
				    </tr>
				    <tr>
				        <td>7</td>
				        <td>Ilmu Pengetahuan Sosial</td>
				        <td><input type="" value ="60" name="kkm_ips" readonly disabled></td>
				        <td><input type="" name="nilai_ips"></td>
				      </tr>
				    <tr>
				        <td>8</td>
				        <td>Aqidah Akhlak</td>
				        <td><input type="" value ="65" name="kkm_aqidah" readonly disabled></td>
				        <td><input type="" name="nilai_aqidah"></td>
				      </tr>
				    <tr>
				        <td>9</td>
				        <td>Fiqih</td>
				        <td><input type="" value ="60" name="fiqih" readonly disabled></td>
				        <td><input type="" name="nilai_fiqih"></td>
				      </tr>
				    <tr>
				        <td>10</td>
				        <td>Alqur'an Hadist</td>
				        <td><input type="" value ="65" name="kkm_qurdis" readonly disabled></td>
				        <td><input type="" name="nilai_qurdis"></td>
				      </tr>
				    <tr>
				        <td>11</td>
				        <td>Sejarah Kebudayaan Islam</td>
				        <td><input type="" value ="65" name="kkm_ski" readonly disabled></td>
				        <td><input type="" name="nilai_ski"></td>
				      </tr>
				    <tr>
				        <td>12</td>
				        <td>Seni Budaya</td>
				        <td><input type="" value ="60" name="kkm_senbud" readonly disabled></td>
				        <td><input type="" name="nilai_senbud"></td>
				      </tr>
				    <tr>
				        <td>13</td>
				        <td>Penjaskes</td>
				        <td><input type="" value ="60" name="kkm_penjaskes" readonly disabled></td>
				        <td><input type="" name="nilai_penjaskes"></td>
				      </tr>
				  </table>
				<hr \>
				<div class="form-group">
				<label class="col-sm-6 control-label">UMUM</label>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">BUDI PEKERTI</label>
					<div class="col-sm-2">
						<select name="budi_pekerti" class="form-control" required>
						<option value="">BUDI PEKERTI</option>
							<option value="Disiplin">Disiplin</option>
							<option value="Kurang Disiplin">Kurang Disiplin</option>
							<option value="Tidak Disiplin">Tidak Disiplin</option>
						</select>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">SIKAP</label>
					<div class="col-sm-2">
						<select name="sikap" class="form-control" required>
						<option value="">SIKAP</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">KERAJINAN</label>
					<div class="col-sm-2">
						<select name="kerajinan" class="form-control" required>
						<option value="">KERAJINAN</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">KEBERSIHAN</label>
					<div class="col-sm-2">
						<select name="kebersihan" class="form-control" required>
						<option value="">KEBERSIHAN</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">SAKIT</label>
					<div class="col-sm-2">
						<input type="number" name="sakit" class="form-control" placeholder="SAKIT" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IZIN</label>
					<div class="col-sm-2">
						<input type="number" name="izin" class="form-control" placeholder="IZIN" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALFA</label>
					<div class="col-sm-2">
						<input type="number" name="alfa" class="form-control" placeholder="ALFA" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">CATATAN GURU</label>
					<div class="col-sm-6">
						<input type="text" name="catatan_guru" class="form-control" placeholder="CATATAN GURU" required>
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