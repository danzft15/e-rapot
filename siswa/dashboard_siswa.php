<?php
 include "../action/koneksi.php";
 ?>

<<div class="table-responsive">
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
  <tr>
        
          <th width="50px"><center>NO.</th>
          <th><center>MATA PELAJARAN</th>
          <th width="70px"><center>KKM</th>
          <th width="70px"><center>NILAI</th>
          <th width="70px"><center>RATA-RATA</th>
          <th width="130px"><center>KETERANGAN</th>
          <th><center>CATATAN GURU</th>

  </tr>

  <?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
  <?php
        if($urut){
          $sql = mysqli_query($koneksi, "SELECT * FROM input_nilai");
        }else{
          $sql = mysqli_query($koneksi, "SELECT * FROM input_nilai");
        }
        if(mysqli_num_rows($sql) == 0){
          echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
        }else{
          $no = 1;
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              <td>'.$no.'</td>
              <td>'.$row['mata_pelajaran'].'</td>
              <td>'.$row['kkm'].'</td>
              <td>'.$row['nilai_angka'].'</td>
              <td>'.$row['predikat'].'</td>
              <td>'.$row['keterangan'].'</td>
              <td>'.$row['deskripsi'].'</td>';
            echo'
              </td>
            </tr>
            ';
            $no++;
          }
        }
        ?>
    </table>
</div>

<<div class="table-responsive">
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
  <tr>
        
          <th width="200px"><center>BUDI PEKERTI</th>
          <th width="20px"><center>SAKIT</th>
          <th width="20px"><center>IZIN</th>
          <th width="20px"><center>ALFA</th>

  </tr>

  <?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
  <?php
        if($urut){
          $sql = mysqli_query($koneksi, "SELECT * FROM input_nilai");
        }else{
          $sql = mysqli_query($koneksi, "SELECT * FROM input_nilai");
        }
        if(mysqli_num_rows($sql) == 0){
          echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
        }else{
          $no = 1;
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              
              <td>'.$row['budi_pekerti'].'</td>
              <td>'.$row['sakit'].'</td>
              <td>'.$row['izin'].'</td>
              <td>'.$row['alfa'].'</td>';
            echo'
              </td>
            </tr>
            ';
            $no++;
          }
        }
        ?>
    </table>
    <a href="view_rapot.php" target="_BLANK" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
</div>