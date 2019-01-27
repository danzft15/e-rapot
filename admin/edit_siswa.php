<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mts.Ziyadatul Huda</title>
  <link rel="shortcut icon" href="../img/logo_zihud.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php 
include '../action/koneksi.php';

$id_siswa = $_GET['NISN'];

$tampilkan 		= "SELECT * FROM siswa WHERE nisn = '$id_siswa'";
$hasil			= mysqli_query($koneksi, $tampilkan) or die(mysql_error());
$data 			= mysqli_fetch_array($hasil);


 ?>
 <br>
 
<body>

<div class="container">
		<div class="content">
			<h2>EDIT Data Siswa</h2>
			<hr />
						
			<form class="form-horizontal" action="../action/edit_siswa_action.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NISN</label>
						<div class="col-sm-3">
							<input type="text" name="nisn" class="form-control" value="<?php echo $data['nisn']; ?>">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIS</label>
						<div class="col-sm-3">
							<input type="text" name="nis" class="form-control" value="<?php echo $data['nis']; ?>">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA LENGKAP</label>
						<div class="col-sm-3">
							<input type="text" name="nama_siswa" class="form-control" value="<?php echo $data['nama_siswa']; ?>">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT LAHIR</label>
						<div class="col-sm-3">
							<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL LAHIR</label>
						<div class="col-sm-3">
							<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control">
						<option ><?php echo $data['jenis_kelamin']; ?></option>
							<option value="">JENIS KELAMIN</option>
							<option value="laki-laki">LAKI - LAKI</option>
							<option value="perempuan">PEREMPUAN</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KELAS</label>
					<div class="col-sm-1">
						<select name="kelas" class="form-control">
						<option ><?php echo $data['kelas']; ?></option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
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
					<label class="col-sm-3 control-label">PROVINSI</label>
						<div class="col-sm-3">
							<input type="text" name="provinsi" class="form-control" value="<?php echo $data['provinsi']; ?>">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS SISWA</label>
					<div class="col-sm-2">
						<select name="status_siswa" class="form-control">
						<option ><?php echo $data['status_siswa']; ?></option>
							<option value="Aktif">AKTIF</option>
							<option value="Tidak Aktif">TIDAK AKTIF</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA ORANG TUA</label>
						<div class="col-sm-3">
							<input type="tedxt" name="nama_orangtua" class="form-control" value="<?php echo $data['nama_orangtua']; ?>" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" class="btn btn-primary" value="EDIT">
						<a href="../admin/index.php?page=siswa" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
