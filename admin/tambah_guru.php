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
<body>

<div class="container">
		<div class="content">
			<h2>Tambah Data Guru</h2>
			<hr />
			<form class="form-horizontal" action="../action/tambah_guru.php" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NUPTK</label>
						<div class="col-sm-3">
							<input type="text" name="nuptk" class="form-control" placeholder="NUPTK">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIP</label>
						<div class="col-sm-3">
							<input type="text" name="nip" class="form-control" placeholder="NIP">
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
							<input type="text" name="tempat_lahir" class="form-control" placeholder="TEMPAT LAHIR">
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
							<option value="Laki-Laki">LAKI - LAKI</option>
							<option value="Perempuan">PEREMPUAN</option>
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
					<label class="col-sm-3 control-label">STATUS PEGAWAI</label>
					<div class="col-sm-3">
						<select name="status_pegawai" class="form-control">
							<option value="">STATUS PEGAWAI</option>
							<option value="PNS">PNS</option>
							<option value="NON-PNS">NON-PNS</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">MATA PELAJARAN</label>
					<div class="col-sm-3">
						<select name="mata_pelajaran" class="form-control" required>
							<option value="">MATA PELAJARAN</option>
							<option value="Pendidikan Agama Islam (PAI)">Pendidikan Agama Islam (PAI)</option>
							<option value="Bahasa Indonesia">Bahasa Indonesia</option>
							<option value="Bahasa Inggris">Bahasa Inggris</option>
							<option value="Bahasa Arab">Bahasa Arab</option>
							<option value="Matematika">Matematika</option>
							<option value="Ilmu Pengetahuan Alam (IPA">Ilmu Pengetahuan Alam (IPA)</option>
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
						<select name="status" class="form-control">
							<option value="">STATUS</option>
							<option value="Aktif">AKTIF</option>
							<option value="Tidak Aktif">TIDAK AKTIF</option>
						</select>
					</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="index.php?page=guru" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
