<?php

 include "../action/koneksi.php";

 //ketika siswa login, diambil username dari tabel login (di database), lalu diinisialisasikan sebagai nis
 $nis = $_SESSION['username'];

 //nis udah dapet, lalu ngambil id siswa berdasarkan nis yang sedang aktif/login
 $querykode   = "SELECT * FROM siswa WHERE nis='$nis'";
 $cekquery    = mysqli_query($koneksi, $querykode)or die(mysqli_error($koneksi));
 $data        = mysqli_fetch_array($cekquery);
 
 //dapetin id siswanya diinisialisasikan sbg id_siswa
 $id_siswa    = $data['id'];
?>

<div class="table-responsive">
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
      <thead>
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
      </thead>
      <tbody>
        <?php
          //
          $query = mysqli_query($koneksi, "SELECT * FROM input_nilai WHERE id_siswa='$id_siswa'")or die(mysqli_error());
                  if(mysqli_num_rows($query) == 0){
                    echo '<tr><td colspan="14"><i>Tidak ada data!</i></td></tr>';
                  }
                    else
                  {
                    while($data = mysqli_fetch_array($query)){
                      echo '<tr  class="header">';
                      echo '<td>'.$data['kelas'].'</td>';
                      echo '<td>'.$data['semester'].'</td>';
                      echo '<td>'.$data['pai'].'</td>';
                      echo '<td>'.$data['bindo'].'</td>';
                      echo '<td>'.$data['binggris'].'</td>';
                      echo '<td>'.$data['barab'].'</td>';
                      echo '<td>'.$data['matematika'].'</td>';
                      echo '<td>'.$data['ipa'].'</td>';
                      echo '<td>'.$data['ips'].'</td>';
                      echo '<td>'.$data['aqidah'].'</td>';
                      echo '<td>'.$data['qurdis'].'</td>';
                      echo '<td>'.$data['ski'].'</td>';
                      echo '<td>'.$data['senbud'].'</td>';
                      echo '<td>'.$data['penjaskes'].'</td>';
                      ?>
                      <?php
                     
                    }
                  }
              ?>

          </tbody>
    </table>  