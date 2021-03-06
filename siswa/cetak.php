<head>
<style type="text/css">
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.font{
    font-color: black;  
    font-size: 12pt;

}

</style>
</head>

<html lang="en">
<body onload="window.print()">

    <div class="panel panel-default"">
        <div class="panel-body">
            <div class="row-table-bordered">
           <table>
            <tr>
            <td>
                <img src="../img/logo_zihud.jpg" class="img-responsive pull-left" style="max-height:150px;display:inline">
                <div class="col-md-8">
                <font size="6"><b><p class="text-center"> MTs Ziyadatul Huda</p></font>
                <font size="3"><b><p class="text-center">Jl. Pondok Kelapa Selatan RT.03 RW.02 Lampiri, Kelurahan Pondok Kelapa, Kecamatan Duren Sawit, Kota Jakarta Timur 13460</p></font>
                <b><p class="text-center">Phone : (021) 860-6936</p></b>
            </div>
        </div>
        <hr class="style2">
        
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

    <?php
    }?>
</table>

<br>
<br>
</body>
</html>