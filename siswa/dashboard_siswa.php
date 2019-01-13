<?php
  
  $nis = $_SESSION['username'];

?>
<form class="form-horizontal" method="POST">
  <table border="1px" id="myTable" class="table table-striped">
    <thead>
      <tr>
        <th><center>NISN</center></th>
        <th><center>NIS</center></th>
        <th><center>Nama Lengkap</center></th>
        <th><center>Tempat Lahir</center></th>
        <th><center>Tanggal Lahir</center></th>
        <th><center>Jenis Kelamin</center></th>
        <th><center>Kelas</center></th>
        <th><center>Alamat</center></th>
        <th><center>Provinsi</center></th>
        <th><center>Status</center></th>
      </tr>
    </thead>
    <tbody>
      <?php

      error_reporting();

        include '../action/koneksi.php';

        $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'")or die(mysqli_error());
                if(mysqli_num_rows($query) == 0){
                  echo '<tr><td colspan="10"><i>Tidak ada data!</i></td></tr>';
                }
                  else
                {
                  while($data = mysqli_fetch_array($query)){
                    echo '<tr  class="header">';
                    echo '<td>'.$data['nisn'].'</td>';
                    echo '<td>'.$data['nis'].'</td>';
                    echo '<td>'.$data['nama_lengkap'].'</td>';
                    echo '<td>'.$data['tempat_lahir'].'</td>';
                    echo '<td>'.$data['tanggal_lahir'].'</td>';
                    echo '<td>'.$data['jenis_kelamin'].'</td>';
                    echo '<td>'.$data['kelas'].'</td>';
                    echo '<td>'.$data['alamat'].'</td>';
                    echo '<td>'.$data['provinsi'].'</td>';
                    echo '<td>'.$data['status_siswa'].'</td>';
                    ?>
                    <?php
                   
                  }
                }

            ?>

    </tbody>
  </table>
</form>