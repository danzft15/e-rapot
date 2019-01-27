<?php
 include "../action/koneksi.php";
 ?>
 <a href="../admin/tambah_siswa.php?page=tambah_siswa" class="btn btn-info btn-lg">
          			<span class="glyphicon glyphicon-plus"></span> Tambah Data 
          		</a>
 <div class="table-responsive">
 		<table class="table table-bordered" id="" width="100%" cellspacing="0">
 	<tr>
 				
					<th width="10%"><center>NO.</th>
					<th width="10%"><center>NISN</th>
					<th width="10%"><center>NIS</th>
					<th width="10%"><center>NAMA LENGKAP</th>
					<th width="10%"><center>TEMPAT LAHIR</th>
					<th width="10%"><center>TANGGAL LAHIR</th>
					<th width="10%"><center>JENIS KELAMIN </th>
					<th width="20%"><center>KELAS</th>
					<th width="30%"><center>ALAMAT</th>
					<th><center>PROVINSI</th>
					<th width="10%"><center>STATUS SISWA</th>
					<th width="40%"><center>NAMA ORANG TUA</th>
					<th width="50%"><center>AKSI</th>

	</tr>
	<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY kelas ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY kelas ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nisn'].'</td>
							<td>'.$row['nis'].'</td>
							<td>'.$row['nama_siswa'].'</td>
							<td>'.$row['tempat_lahir'].'</td>
							<td>'.$row['tanggal_lahir'].'</td>
							<td>'.$row['jenis_kelamin'].'</td>
							<td>'.$row['kelas'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['provinsi'].'</td>
							<td>'.$row['status_siswa'].'
							<td>'.$row['nama_orangtua'].'</td>
							<td>

								<a href="../walikelas/input_nilai.php?id='.$row['id'].'" title="Input Nilai"><span class="glyphicon glyphicon-plus-sign"></span></a>
								<a href="../action/hapus_siswa.php?aksi=delete&nisn='.$row['nisn'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
								<a href="edit_siswa.php?NISN='.$row['nisn'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							</td>
							<td>';

						echo '
							</td>

						</tr>
						';
						$no++;
					}
				}
				?>
		</table>
</div>