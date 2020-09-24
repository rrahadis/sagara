<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_karyawan   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from tb_karyawan where id='$id_karyawan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>