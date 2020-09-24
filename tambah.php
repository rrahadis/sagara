<!DOCTYPE html>
<html>
    <head>
        <title>input data karyawan</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
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
                <tr><td>KEAHlIAN</td><td><input type="text" name="keahlian"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>