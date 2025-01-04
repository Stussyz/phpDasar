<?php
// SUPERGLOBALS VARIABLE :
// variable global milik PHP
// merupakan Array Associative

// contoh 1: menggunakan key dan value pada variable superglobals
// $_GET ["nama"] = "Mohammad Fadhol";
// $_GET ["nrp"] = "60262300004";
// var_dump($_GET);

// contoh 2: menggunakan variable superglobals dengan input key & value pada kolom search bar (browser)
// var_dump($_GET);

// contoh 3: kombinasi dengan metode "foreach"
$mahasiswa = [
    [
        "Nama" => "Sandhika Galih", 
        "NRP"  => "601", 
        "Jurusan" => "Teknik Informatika", 
        "Universitas" => "UNPAS", 
        "Email" => "sandhika@gmail.com",
        "Nilai" => [90, 100, 110],
        "Gambar" => "batman.jpg"
    ],
    [
        "Nama" => "Fadhol", 
        "NRP" =>" 602", 
        "Jurusan" => "Sistem Informasi", 
        "Universitas" => "ITS", 
        "Email" => "mfadhol@gmail.com",
        "Gambar" => "spiderman.jpg"
    ],
    [
        "Nama" => "Citra", 
        "NRP" => "603", 
        "Jurusan" => "Ekonomi Pembangunan", 
        "Universitas" => "UMM", 
        "Email" => "citra@gmail.com",
        "Gambar" => "superman.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 7</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["Gambar"]; ?>"></li>
            <li><?= $mhs["Nama"]?></li>
            <li><?= $mhs["Jurusan"]?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>