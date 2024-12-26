<?php
// data mahasiswa dengan array multi dimensi
// meng-asosiasikan array numerik menjadi associative array 
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
        "Nama" => "Mohammad Fadhol", 
        "NRP" =>" 602", 
        "Jurusan" => "Sistem Informasi", 
        "Universitas" => "ITS", 
        "Email" => "mfadhol@gmail.com",
        "Gambar" => "spiderman.jpg"
    ],
    [
        "Nama" => "Citra Dewi R.S.D.P", 
        "NRP" => "603", 
        "Jurusan" => "Ekonomi Pembangunan", 
        "Universitas" => "UMM", 
        "Email" => "citra@gmail.com",
        "Gambar" => "superman.jpg"
    ]
];
// pemanggilan array numerik + string + array didalam sub-array:
// echo $mahasiswa[0]["Nilai"][2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- pemanggilan data mhs dengan array associative (index "string") -->
    <!-- menambahkan gambar 100x100 pada list dengan pemanggian array associative (index "string") -->
    <?php foreach ($mahasiswa as $m) : ?>
            <ul>
            <li>
                <img src="img/<?= $m["Gambar"]; ?>">
            </li>
            <li><?= $m ["Nama"]; ?></li>
            <li><?= $m ["NRP"]; ?></li>
            <li><?= $m ["Jurusan"]; ?></li>
            <li><?= $m ["Universitas"]; ?></li>
            <li><?= $m ["Email"]; ?></li>
            </ul>
        <?php endforeach ?>
</body>
</html>
