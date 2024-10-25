<center>
    <h1> PERPUSTAKAAN "PINTAR MEMBACA" </h1>
    <h3> Pendaftaran Anggota Secara Online </h3>
    <h5><i>Jl. Sejahtera No. 11 Bekasi Tenggara <br></i></h5>
    <hr color="red">
</center><p>
    <pre>
        <h2>***** BUKTI PENDAFTARAN *****</h2>
        <?php
        $nama = $_POST['nama'];
        $tempat = $_POST['tempatlahir'];
        $tanggal = $_POST['tanggallahir'];
        $bulan = $_POST['bulanlahir'];
        $tahun = $_POST['tahunlahir'];
        $jenis = $_POST['jeniskelamin'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        
        echo "<br>";
        echo "Tanggal Cetak : ";
        echo date ("D - d/M/Y <p>");
        echo "<br>";
        echo "Nama Lengkap  : $nama <br>";
        echo "TTL           : $tempat - $tanggal/$bulan/$tahun <br>";
        if ($jenis=1)
        $jenis='Laki-laki';
    else
    $jenis='Perempuan';
echo "Jenis Kelamin : $jenis <br>";
echo "Alamat        : $alamat <br>";
echo "No. Telp      : $telp <br>";
?>
</pre><p>
    <a href="latihan2.php"><<< Input Lagi</a>
    <hr color="red">
    <marquee direction="right">
        <i>- - - Pendaftaran Anggota Secara Online - - -</i>
</marquee>