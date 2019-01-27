
<?php
    error_reporting(0);    

    session_start();

    if (!isset($_SESSION['username'])){
          header("Location:./index.php");
    }

    if (isset($_SESSION['username']))
      {   
        include '../action/koneksi.php';
        
        $query = mysqli_query($koneksi, "SELECT login.username, input_nilai.nis, input_nilai.semester, input_nilai.pai, input_nilai.pai_huruf,input_nilai.kkm_pai,input_nilai.bindo,input_nilai.bindo_huruf,input_nilai.kkm_bindo,input_nilai.binggris,input_nilai.binggris_huruf,input_nilai.kkm_binggris,input_nilai.barab,input_nilai.barab_huruf,input_nilai.kkm_barab,input_nilai.matematika,input_nilai.matematika_huruf,input_nilai.kkm_matematika,input_nilai.ipa,input_nilai.ipa_huruf,input_nilai.kkm_ipa,input_nilai.ips,input_nilai.ips_huruf,input_nilai.kkm_ips,input_nilai.aqidah,input_nilai.aqidah_huruf,input_nilai.kkm_aqidah,input_nilai.fiqih,input_nilai.fiqih_huruf,input_nilai.kkm_fiqih,input_nilai.qurdis,input_nilai.qurdis_huruf,input_nilai.kkm_qurdis,input_nilai.ski,input_nilai.ski_huruf,input_nilai.kkm_ski,input_nilai.senbud,input_nilai.senbud_huruf,input_nilai.kkm_senbud,input_nilai.penjaskes,input_nilai.penjaskes_huruf,input_nilai.kkm_penjaskes,input_nilai.budi_pekerti,input_nilai.sikap,input_nilai.kerajinan,input_nilai.kebersihan,input_nilai.sakit,input_nilai.izin,input_nilai.alfa,input_nilai.catatan_guru from input_nilai, login where input_nilai.nis = login.username AND login.username =  '".$_SESSION['username']."'")or die(mysqli_error());
        $data           = mysqli_fetch_array($query);

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
          <td> Pendidikan Agama Islam </td>
          <td> <?php echo $data['kkm_pai'] ?> </td>
          <td> <?php echo $data['pai'] ?> </td>
          <td> <?php echo $data['pai_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Bahasa Indonesia </td>
          <td> <?php echo $data['kkm_bindo'] ?> </td>
          <td> <?php echo $data['bindo'] ?> </td>
          <td> <?php echo $data['bindo_huruf'] ?> </td>
        </tr>
         <tr>
        <td> Bahasa Inggris </td>
          <td> <?php echo $data['kkm_binggris'] ?> </td>
          <td> <?php echo $data['binggris'] ?> </td>
          <td> <?php echo $data['binggris_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Bahasa Arab </td>
          <td> <?php echo $data['kkm_barab'] ?> </td>
          <td> <?php echo $data['barab'] ?> </td>
          <td> <?php echo $data['barab_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Matematika </td>
          <td> <?php echo $data['kkm_matematika'] ?> </td>
          <td> <?php echo $data['matematika'] ?> </td>
          <td> <?php echo $data['matematika_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Ilmu Pengetahuan Alam </td>
          <td> <?php echo $data['kkm_ipa'] ?> </td>
          <td> <?php echo $data['ipa'] ?> </td>
          <td> <?php echo $data['ipa_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Ilmu Pengetahuan Sosial </td>
          <td> <?php echo $data['kkm_ips'] ?> </td>
          <td> <?php echo $data['ips'] ?> </td>
          <td> <?php echo $data['ips_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Aqidah Akhlak </td>
          <td> <?php echo $data['kkm_aqidah'] ?> </td>
          <td> <?php echo $data['aqidah'] ?> </td>
          <td> <?php echo $data['aqidah_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Fiqih </td>
          <td> <?php echo $data['kkm_fiqih'] ?> </td>
          <td> <?php echo $data['fiqih'] ?> </td>
          <td> <?php echo $data['fiqih_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Alqur'an Hadist </td>
          <td> <?php echo $data['kkm_qurdis'] ?> </td>
          <td> <?php echo $data['qurdis'] ?> </td>
          <td> <?php echo $data['qurdis_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Sejarah Kebudayaan Islam </td>
          <td> <?php echo $data['kkm_ski'] ?> </td>
          <td> <?php echo $data['ski'] ?> </td>
          <td> <?php echo $data['ski_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Seni Budaya </td>
          <td> <?php echo $data['kkm_senbud'] ?> </td>
          <td> <?php echo $data['senbud'] ?> </td>
          <td> <?php echo $data['senbud_huruf'] ?> </td>
        </tr>
        <tr>
        <td> Penjaskes </td>
          <td> <?php echo $data['kkm_penjaskes'] ?> </td>
          <td> <?php echo $data['penjaskes'] ?> </td>
          <td> <?php echo $data['penjaskes_huruf'] ?> </td>
        </tr>
      </thead>
    </table> 
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="" width="10%" cellspacing="0">
    <thead>
        <tr>     
          <th width="50%"><b>KEPRIBADIAN</b></th>
          <th width="50%"><b>NILAI</b></th>
        </tr>
        <tr>
        <td> Budi Pekerti </td>
          <td> <?php echo $data['budi_pekerti'] ?> </td>
        </tr>
        <tr>
        <td> Sikap </td>
          <td> <?php echo $data['sikap'] ?> </td>
        </tr>
        <tr>
        <td> Kerajinan </td>
          <td> <?php echo $data['kerajinan'] ?> </td>
        </tr>
        <tr>
        <td> Kebersihan </td>
          <td> <?php echo $data['kebersihan'] ?> </td>
        </tr>
        <tr>
        <td> Sakit </td>
          <td> <?php echo $data['sakit'] ?> </td>
        </tr>
        <td> Izin </td>
          <td> <?php echo $data['izin'] ?> </td>
        </tr>
        <td> Alfa </td>
          <td> <?php echo $data['alfa'] ?> </td>
        </tr>
    </thead>
      </table>
    </div>


    <a href="../siswa/cetak.php" class="btn btn-info btn-lg">
      <span class="glyphicon glyphicon-print"></span> PRINT </a>

    <?php
    }?>