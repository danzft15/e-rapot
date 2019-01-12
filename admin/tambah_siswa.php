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
<body>

<div class="container">
		<div class="content">
			<h2>Tambah Data Siswa</h2>
			<hr />
						
			<form class="form-horizontal" action="../action/tambah_siswa.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NISN</label>
						<div class="col-sm-3">
							<input type="text" name="nisn" class="form-control" placeholder="NISN">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIS</label>
						<div class="col-sm-3">
							<input type="text" name="nis" class="form-control" placeholder="NIS">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA LENGKAP</label>
						<div class="col-sm-3">
							<input type="text" name="nama_lengkap" class="form-control" placeholder="NAMA LENGKAP">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT LAHIR</label>
						<div class="col-sm-3">
							<input type="tedxt" name="tempat_lahir" class="form-control" placeholder="TEMPAT LAHIR">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL LAHIR</label>
						<div class="col-sm-3">
							<input type="date" name="tanggal_lahir" class="form-control" placeholder="TANGGAL LAHIR">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control">
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
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PROVINSI</label>
						<div class="col-sm-3">
							<input type="text" name="provinsi" class="form-control" placeholder="PROVINSI">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS SISWA</label>
					<div class="col-sm-2">
						<select name="status_siswa" class="form-control">
							<option value="">STATUS SISWA</option>
							<option value="laki-laki">AKTIF</option>
							<option value="perempuan">TIDAK AKTIF</option>
						</select>
					</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" class="btn btn-primary" value="TAMBAH">
						<a href="../admin/index.php?page=siswa" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
