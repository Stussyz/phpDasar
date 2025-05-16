<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"]) || 
    !isset($_GET["NRP"]) ||
    !isset($_GET["Universitas"]) ||
    !isset($_GET["Gambar"]))
    {
    // redirect (memindahkan user dari sebuah halaman ke halaman lain)
    // redirect dalam kasus ini untuk kickback user yang input page secara manual
    header("Location: next1Get2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail per-Mahasiswa</title>
</head>
<body>
    <!-- Menangkap data detail mahasiswa dengan variable Superglobal $_GET: (metode request GET) -->
    <ul>
        <li><img src="img/<?= $_GET ["Gambar"];?>"></li>
        <li><?= $_GET ["Nama"]; ?></li>
        <li><?= $_GET ["NRP"]; ?></li>
        <li><?= $_GET ["Universitas"] ?></li>    
    </ul>

<a href="next1Get2.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>