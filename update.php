<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_karyawan   = $_POST['id'];
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$alamat        = $_POST['alamat'];
$email           = $_POST['email'];
$tempat_lahir         = $_POST['tempat_lahir'];
$tanggal_lahir            = $_POST['tanggal_lahir'];
$gender           = $_POST['gender'];
$keahlian        = $_POST['keahlian'];
// query SQL untuk insert data
$query="UPDATE tb_karyawan SET nik='$nik',nama='$nama',alamat='$alamat',email='$email',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',gender='$gender', keahlian='$keahlian' where id='$id_karyawan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>