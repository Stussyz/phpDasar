<?php
// Belajar Variabel dan Tipe Data
// Variabel "TIDAK BOLEH DIAWALI DENGAN ANGKA, TETAPI BOLEH MENGANDUNG ANGKA"
$nama = "Darcit";
$nama2 = "Kuki";
?>

<!-- MEMANGGIL VARIABEL $ DIDALAM HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar variabel</title>
</head>
<body>
    <h1>Haii, Selamat Datang <?php echo "$nama"; ?></h1>
</body>
</html>

<!-- CONTOH KE 2 (INTERPOLASI) -->
<?php
// SALAH:
// echo 'kamu lucu banget deh, kayak $nama2';
// BENER:
echo "kamu lucu banget deh, kayak $nama2";
?>