<?php
// USER DEFINED FUNCTION:
// definisikan terlebih dahulu kemudian baru bisa dipanggil

// default function
function salam($waktu = "Pagi", $nama = "Admin") {
    return "$waktu, $nama!";
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
    <h1><?= salam("Sore" , "Ado"); ?></h1>
</body>
</html>