<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="1">
    <!-- penggunaan statement open close {} dapat digantikan  : dan endfor; -->
    <!-- sebaliknya, statement open close :; dapat digantikan { dan } -->
    <?php for ( $i="1"; $i <= 5; $i++ ) : ?>
        <tr>    
            <?php for ( $j="1"; $j <= 6; $j++ ) : ?>
                <!-- php echo dapat digantikan dengan = , asalkan digunakan untuk mencetak variable,string -->
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>