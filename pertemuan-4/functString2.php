<?php
// USER DEFINED FUNCTION:
// definisikan terlebih dahulu kemudian baru bisa dipanggil

// menentukan salam $waktu berdasarkan waktu saat ini
function salam($nama = 'Ado') {
    $waktu = date('H');
   if($waktu < 12) {
    $salam = "Selamat Pagi";
   }else{
    $salam = "Selamat Sore";
   }
   return "$salam, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <!-- menimpa default function dengan definisi baru -->
    <h1><?= salam(); ?></h1>
</body>
</html>