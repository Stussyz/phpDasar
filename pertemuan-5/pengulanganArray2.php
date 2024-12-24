<?php
$mahasiswa = [
    ["Mohammad Fadhol", "60262320044", "Sistem Informasi", "ITS Surabaya", "085171543223", "mfadhol07@gmail.com"],
    ["Sandhika Galih", "60262320055", "Teknik Informatika", "Unpas Bandung", "081230263939", "sandhikagalih@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
        <li><?= $m [0]; ?></li>
        <li><?= $m [1]; ?></li>
        <li><?= $m [2]; ?></li>
        <li><?= $m [3]; ?></li>
        <li><?= $m [4]; ?></li>
        <li><?= $m [5]; ?></li>
        </ul>
    <?php endforeach ?>
    

</body>
</html>