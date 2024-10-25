<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***** FORM INPUT *****</title>
</head>
<body>
    <form action="latihan2a.php" method="post">
        <center>
            <h1> PERPUSTAKAAN "PINTAR MEMBACA" </h1>
            <h3> Pendaftaran Anggota Secara Online </h3>
            <h5><i>Jl. Sejahtera No. 11 Bekasi Tenggara <br></i></h5>
            <hr color="red">
        </center><p><pre>
            Nama Lengkap : <input type="text" name="nama" size="35" maxlength="30"><br>
            TTL          : <input type="text" name="tempatlahir" size="20" maxlength="20"> <select size=1 name="tanggallahir">
                <option>1
                <option>2
                <option>3
                <option>4
                <option>5
                <option>6
                <option>7
                <option>8
                <option>9
                <option>10
                <option>11
                <option>12
                <option>13
                <option>14
                <option>15
                <option>16
                <option>17
                <option>18
                <option>19
                <option>20
                <option>21
                <option>22
                <option>23
                <option>24
                <option>25
                <option>26
                <option>27
                <option>28
                <option>29
                <option>30
                <option>31
                <?
                for=($i=1;$i<=31;$i++)
                {
                echo "<option value= $i > $i </option>";
                }
                ?>
                </select> <select size=1 name="bulanlahir">
                <option>Januari
                <option>Februari
                <option>Maret
                <option>April
                <option>Mei
                <option>Juni
                <option>Juli
                <option>Agustus
                <option>September
                <option>Oktober
                <option>November
                <option>Desember
                    </select> <input type="text" name="tahunlahir" size="5" maxlength="4" value="2005"><br>
            Jenis Kelamin: <input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
            Alamat       : <textarea name="alamat" rows="3" cols="35" wrap="on"></textarea><br>
            No. Telp     : <input type="text" name="telp" size="15" maxlength="15"><br><p>
                           <input type="submit" value="Kirim"> <input type="reset" value="Bersih">
                </pre>
                </form>
                <hr color="red">
                <marquee direction="right">
                    <i>- - - Pendaftaran Anggota Secara Online - - -</i>
                </marquee>
</body>
</html>