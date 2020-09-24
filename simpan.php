<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$alamat        = $_POST['alamat'];
$email           = $_POST['email'];
$tempat_lahir         = $_POST['tempat_lahir'];
$tanggal_lahir            = $_POST['tanggal_lahir'];
$gender           = $_POST['gender'];
$keahlian        = $_POST['keahlian'];
// query SQL untuk insert data
$query="INSERT INTO tb_karyawan SET nik='$nik',nama='$nama',alamat='$alamat',email='$email',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',gender='$gender', keahlian='$keahlian'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>