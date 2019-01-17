
<?php
    error_reporting(0);    
?>





<div class="container">

  <div class="row">
  <div class="col-sm-12"><br><div class="alert alert-info">
  <strong>Data Nilai Siswa/i </strong> MTS Ziyadatul Huda
</div></center></div>
 
</div>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading"> Nilai Siswa </div>
      <div class="panel-body">
  
  

<div class="table-responsive">
    <table class="table table-bordered" id="" width="100%" cellspacing="0">
      <thead>
        <tr>     
          <th><b>Mata Pelajaran</b></th>
           <th><b>KKM</b></th>
            <th><b>NILAI</b></th>
             <th><b>HURUF</b></th>
        </tr>
        <tr>
        <td> PAI </td>
        </tr>
         <tr>
        <td> Bahasa Indonesia </td>
        </tr>
         <tr>
        <td> Bahasa Inggris </td>
        </tr>
      </thead>
      <tbody>
        <?php
          //lalu, dari id_siswa yang didapat tadi, kita bisa mencari input_nilai siswa dengan id_siswa yang sesuai dengan yang sudah login tadi.
                session_start();

                if (!isset($_SESSION['username'])){
                      header("Location:./index.php");
                }

                if (isset($_SESSION['username']))
                  {   
                    include '../action/koneksi.php';
                
              

            $query = mysqli_query($koneksi, "SELECT login.username, input_nilai.nis, input_nilai.semester, input_nilai.pai, input_nilai.pai_huruf,input_nilai.kkm_pai,input_nilai.bindo,input_nilai.bindo_huruf,input_nilai.kkm_bindo,input_nilai.binggris,input_nilai.binggris_huruf,input_nilai.kkm_binggris,input_nilai.barab,input_nilai.barab_huruf,input_nilai.kkm_barab,input_nilai.matematika,input_nilai.matematika_huruf,input_nilai.kkm_matematika,input_nilai.ipa,input_nilai.ipa_huruf,input_nilai.kkm_ipa,input_nilai.ips,input_nilai.ips_huruf,input_nilai.kkm_ips,input_nilai.aqidah,input_nilai.aqidah_huruf,input_nilai.kkm_aqidah,input_nilai.fiqih,input_nilai.fiqih_huruf,input_nilai.kkm_fiqih,input_nilai.qurdis,input_nilai.qurdis_huruf,input_nilai.kkm_qurdis,input_nilai.ski,input_nilai.ski_huruf,input_nilai.kkm_ski,input_nilai.senbud,input_nilai.senbud_huruf,input_nilai.kkm_senbud,input_nilai.penjaskes,input_nilai.penjaskes_huruf,input_nilai.kkm_penjaskes,input_nilai.budi_pekerti,input_nilai.sakit,input_nilai.izin,input_nilai.alfa,input_nilai.catatan_guru from input_nilai, login where input_nilai.nis = login.username AND login.username =  '".$_SESSION['username']."'")or die(mysqli_error());

           // die(var_dump($query));

                  if(mysqli_num_rows($query) == 0){
                    echo '<tr><td colspan="14"><i>Tidak ada data!</i></td></tr>';
                  }
                    else
                  {
                    while($data = mysqli_fetch_array($query)){
                      echo '<tr  class="header">';
                      // echo '<td>'.$data['pai'].'</td>';
                     
                      ?>
                      <?php
                     
                    }
                  }
                }
              ?>

          </tbody>
    </table>  
    </div>
    </div>
    </div>