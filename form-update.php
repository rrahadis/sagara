<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
            <tr><td>NIK</td><td><input type="text" onkeyup="isi_otomatis()" name="nik"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td>TEMPAT LAHIR</td><td><input type="text" name="tempat_lahir"></td></tr>
                <tr><td>TANGGAL LAHIR</td><td><input type="text" name="tanggal_lahir"></td></tr>
                <tr><td>GENDER</td><td>
                        <select name="gender">
                            <option value="pria">PRIA</option>
                            <option value="wanita">WANITA</option>
                    
                        </select>
                    </td></tr>
                <tr><td>KEAHLIAN</td><td><input type="text" name="keahlian"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>