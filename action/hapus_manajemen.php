<?php
include 'koneksi.php';

$id=$_GET['id'];
$hapus=mysqli_query($koneksi,"delete from login where id='$id'");
header("location:../admin/index.php?page=manajemenguru");
?>