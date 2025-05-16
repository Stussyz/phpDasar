<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
   
<?php if( isset($_POST["submit"]) ): ?>
    <h1>Selamat Siang, semoga sehat selalu <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<!-- <form action="tryPost2.php" method="post"> -->
    <!-- sending action/data to the same page: -->
    <form action="" method="post">
    Masukkan Nama:
    <input type="text" name="nama">
    <button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>