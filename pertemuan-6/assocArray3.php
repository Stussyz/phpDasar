<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: blueviolet;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(180deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
    // mencetak salah satu array didalam array utama
    $angka= [[1,2,3],[4,5,6],[7,8,9]];
    echo $angka [2] [0];
    ?>
</body>
</html>