<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mts.Ziyadatul Huda</title>
  <link rel="shortcut icon" href="img/logo_zihud.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php 
include '../action/koneksi.php';

$id_guru = $_GET['NUPTK'];

$tampilkan 		= "SELECT * FROM guru WHERE nuptk = '$id_guru'";
$hasil			= mysqli_query($koneksi, $tampilkan) or die(mysql_error());
$data 			= mysqli_fetch_array($hasil);


 ?>
 <br>
<body>
<div class="container">
		<div class="content">

			<h2>Edit Data Guru</h2>
			<hr />
			<form class="form-horizontal" action="../action/edit_guru_admin.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NUPTK</label>
						<div class="col-sm-3">
							<input type="text" name="nuptk" class="form-control" value="<?php echo $data['nuptk']; ?>" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIP</label>
						<div class="col-sm-3">
							<input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" required="">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA LENGKAP</label>
						<div class="col-sm-3">
							<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" required="">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT LAHIR</label>
						<div class="col-sm-3">
							<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>" required="">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL LAHIR</label>
						<div class="col-sm-3">
							<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>" required="">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control" value="<?php echo $data['jenis_kelamin']; ?>">
						    <option ><?php echo $data['jenis_kelamin']; ?></option>
							<option value="">JENIS KELAMIN</option>
							<option value="Laki-Laki">LAKI - LAKI</option>
							<option value="Perempuan">PEREMPUAN</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" required> <?php echo $data['alamat']; ?> </textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS PEGAWAI</label>
					<div class="col-sm-3">
						<select name="status_pegawai" class="form-control" required>
							<option value=""><?php echo $data['status_pegawai']; ?></option>
							<option value="PNS">PNS</option>
							<option value="NON-PNS">NON-PNS</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">MATA PELAJARAN</label>
					<div class="col-sm-3">
						<select name="mata_pelajaran" class="form-control"  required>
							<option value=""><?php echo $data['mata_pelajaran']; ?></option>
							<option value="Pendidikan Agama Islam (PAI)">Pendidikan Agama Islam (PAI)</option>
							<option value="Bahasa Indonesia">Bahasa Indonesia</option>
							<option value="Bahasa Inggris">Bahasa Inggris</option>
							<option value="Bahasa Arab">Bahasa Arab</option>
							<option value="Matematika">Matematika</option>
							<option value="Ilmu Pengetahuan Alam (IPA)">Ilmu Pengetahuan Alam (IPA)</option>
							<option value="Ilmpu Pengetahuan Sosial (IPS)">Ilmpu Pengetahuan Sosial (IPS)</option>
							<option value="Aqidah Akhlak">Aqidah Akhlak</option>
							<option value="Fiqih">Fiqih</option>
							<option value="Al Qur'an Hadist">Al Qur'an Hadist</option>
							<option value="Sejarah Kebudayaan Islam">Sejarah Kebudayaan Islam</option>
							<option value="Seni Budaya">Seni Budaya</option>
							<option value="Penjaskes">Penjaskes</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control"  required>
							<option value=""><?php echo $data['status']; ?></option>
							<option value="Aktif">AKTIF</option>
							<option value="Tidak Aktif">TIDAK AKTIF</option>
						</select>
					</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="EDIT">
						<a href="../admin/index.php?page=guru" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
