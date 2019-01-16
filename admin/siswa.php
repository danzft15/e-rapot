<?php
 include "../action/koneksi.php";
 ?>
 <a href="../admin/tambah_siswa.php?page=tambah_siswa" class="btn btn-info btn-lg">
          			<span class="glyphicon glyphicon-plus"></span> Tambah Data 
          		</a>
 <div class="table-responsive">
 		<table class="table table-bordered" id="" width="100%" cellspacing="0">
 	<tr>
 				
					<th><center>NO.</th>
					<th><center>NISN</th>
					<th><center>NIS</th>
					<th><center>NAMA LENGKAP</th>
					<th><center>TEMPAT LAHIR </th>
					<th><center>TANGGAL LAHIR</th>
					<th><center>JENIS KELAMIN</th>
					<th><center>KELAS</th>
					<th><center>ALAMAT</th>
					<th><center>PROVINSI</th>
					<th><center>STATUS SISWA</th>
					<th><center>AKSI</th>

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
							<td>'.$row['status_siswa'].'</td>
							<td>
								<a href="../walikelas/input_nilai.php?id='.$row['id'].'" title="Input Nilai"><span class="glyphicon glyphicon-plus-sign"></span></a>
								<a href="../action/hapus_siswa.php?aksi=delete&nisn='.$row['nisn'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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