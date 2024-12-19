<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="1">
<!-- Contoh 3 pembuatan table:  -->
<?php for( $i = 1; $i <= 4; $i++) { ?>
    <tr>
        <?php for( $j = 1; $j <= 7; $j++) { ?>
        <td><?php echo "$i, $j"; ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
</body>
</html>



