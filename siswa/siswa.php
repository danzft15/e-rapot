<?php
 include "../action/koneksi.php";
 ?>
 <<div class="table-responsive">
 		<table class="table table-striped table-hover">
 	<tr>
 				
					<th><center>NO.</th>
					<th><center>NISN</th>
					<th><center>NIS</th>
					<th><center>NAMA LENGKAP</th>
					<th><center>TEMPAT LAHIR</th>
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
					$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nisn ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nisn ASC");
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
							<td>'.$row['nama_lengkap'].'</td>
							<td>'.$row['tempat_lahir'].'</td>
							<td>'.$row['tanggal_lahir'].'</td>
							<td>'.$row['jenis_kelamin'].'</td>
							<td>'.$row['kelas'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['provinsi'].'</td>
							<td>'.$row['status_siswa'].'</td>
							<td>';

						echo '
							</td>
							<td>
								<a href="edit.php?nisn='.$row['nisn'].'" title="Input Nilai"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="hapus.php?aksi=delete&nisn='.$row['nisn'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
		</table>
</div>