<?php
include 'koneksi.php';

$nuptk=$_GET['nuptk'];
$hapus=mysqli_query($koneksi,"delete from guru where nuptk='$nuptk'");
header("location:../admin/index.php?page=guru");
?>