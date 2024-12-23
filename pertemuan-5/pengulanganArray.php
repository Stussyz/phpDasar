<?php
// PENGULANGAN PADA ARRAY
// FOR / FOREACH

$angka = [2,1,3,6,4,5,7,10,9,8];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
    <style>
        .kotak1 {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    <!-- LOOPING FOR: -->
    <!-- count($angka) menghitung jumlah array otomatis, tanpa menghitung array manual -->
    <?php for( $i = 0; $i < (count($angka)); $i++ ) { ?>
        <div class="kotak1"><?php echo $angka [$i]; ?></div>
    <?php } ?>
    <div class="clear"></div>

    <!-- LOOPING FOREACH: -->
    <!-- dipermudah dgn menggunakan writing style "templating" -->
     <?php foreach( $angka as $a ) : ?>
        <div class="kotak1"><?php echo $a; ?></div>
    <?php endforeach ?>
</body>
</html>