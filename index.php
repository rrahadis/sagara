<!DOCTYPE html>
<html>
    <head>
		<title>Data Karyawan</title>
		<style type="text/css">
        @import url(css.css);
    </style>
    </head>
    <body>

	<div id = "menu">
			<ul>
			   <li class="utama"><a href="tambah.php">tambah data</a></li>
			   	<ul>
		
		</div>
	<h2>List Data</h2>
	<table border = 1>
    	<tr><th>NO</th><th>NIK</th><th>NAMA</th><th>ALAMAT</th><th>EMAIL</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Gender</th><th>Keahlian</th></tr>
	
	<?php
    include 'koneksi.php';
    $karyawan = mysqli_query($koneksi, "SELECT * from tb_karyawan");
    $no=1;
    foreach ($karyawan as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['nik']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
			<td>".$row['email']."</td>
			<td>".$row['tempat_lahir']."</td>
            <td>".$row['tanggal_lahir']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['keahlian']."</td>  
			<td><a href='form-update.php?id_karyawan=$row[id]'>Edit</a>
			  <a href='delete.php?id_karyawan=$row[id]'>Delete</a>
		  </td>
		  </tr>";
        $no++;
    }
    ?>
</table>
    </body>
</html>