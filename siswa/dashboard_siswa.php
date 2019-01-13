<?php
 include "../action/koneksi.php";
 ?>

<<div class="table-responsive">
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
  <tr>
        
          <th>KELAS</th>
          <th>SEMESTER</th>
          <th>AGAMA ISLAM</th>
          <th>BAHASA INDONESIA</th>
          <th>BAHASA INGGRIS</th>
          <th>BAHASA ARAB</th>
          <th>MATEMATIKA</th>
          <th>IPA</th>
          <th>IPS</th>
          <th>AQIDAH AKHLAK</th>
          <th>FIQIH</th>
          <th>ALQUR'AN HADIST</th>
          <th>SENI BUDAYA</th>
          <th>PENJASKES</th>

  </tr>

  <?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
  <?php
        if($urut){
          $sql = mysqli_query($koneksi, "SELECT * FROM input_nilai");
        }else{
          $sql = mysqli_query($koneksi, "SELECT * FROM input_nilai");
        }
        if(mysqli_num_rows($sql) == 0){
          echo '<tr><td colspan="15">Tidak ada data.</td></tr>';
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
</div>