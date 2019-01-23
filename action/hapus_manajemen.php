<?php
include 'koneksi.php';

$username=$_GET['username'];
$hapus=mysqli_query($koneksi,"delete from login where username='$username'");
header("location:../admin/index.php?page=manajemenguru#");
?>