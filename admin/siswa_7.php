<?php
 include "../action/koneksi.php";
 ?>
 <<div class="table-responsive">
 		<table class="table table-bordered" id="" width="100%" cellspacing="0">
 	<tr>
 				
					<th><center>NO.</th>
					<th><center>NISN</th>
					<th><center>NIS</th>
					<th><center>NAMA LENGKAP</th>
					<th><center>TEMPAT LAHIR</th>
					<th><center>TANGGAL LAHIR</th>
					<th><center>JENIS KELAMIN </th>
					<th width="20%"><center>KELAS</th>
					<th width="30%"><center>ALAMAT</th>
					<th><center>PROVINSI</th>
					<th width="10%"><center>STATUS SISWA</th>
					<th width="40%"><center>NAMA ORANG TUA</th>
					<th width="35%"><center>AKSI</th>

	</tr>
	<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE kelas=7");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE kelas =7");
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
							<td>'.$row['status_siswa'].'</td>';

							
						echo '
							</td>
							<td>'.$row['nama_orangtua'].'</td>
							<td>
								<a href="../walikelas/input_nilai.php?id='.$row['id'].'" title="Input Nilai"><span class="glyphicon glyphicon-plus-sign"></span></a>
								<a href="../action/hapus_siswa.php?aksi=delete&id='.$row['id'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
		</table>
</div>