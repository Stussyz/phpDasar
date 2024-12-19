<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <!-- NEW: menambahkan pengkondisian pada table ganjil dengan memberikan <style> warna yang berbeza -->
     <style>
        .warna-baris {
            background-color: green;
        }
     </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="1">
    <!-- penggunaan statement open close {} dapat digantikan  : dan endfor; -->
    <!-- sebaliknya, statement open close :; dapat digantikan { dan } -->
    <?php for ( $i="1"; $i <= 5; $i++ ) : ?>
        <!-- untuk menentukan sisa bagi (modulus) genap ($i % 2 == 0) -->
        <!-- untuk menentukan sisa bagi (modulus) ganjil ($i % 2 == 1) -->
        <?php if( $i % 2 == 1 ) : ?>
            <tr class ="warna-baris">    
        <?php else : ?>
            <tr>
        <?php endif ?>
            <?php for ( $j="1"; $j <= 6; $j++ ) : ?>
                <!-- php echo dapat digantikan dengan = , asalkan digunakan untuk mencetak variable,string -->
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>