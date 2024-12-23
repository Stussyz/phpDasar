<?php
// Array :
// variabel yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value (key and value pair)
// key-nya adalah index, yang dimulai dari 0

// MEMBUAT ARRAY:
// cara lama =>
$hari = array("Senin", "Selasa", "Rabu");
// cara baru =>
$bulan = ["Januari", "Februari", "Maret"];

// bisa menampung beda tipe data =>
$array1 = [123, "welcome", false];

// MENAMPILKAN ARRAY:
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// MENAMPILKAN 1 ELEMEN PADA ARRAY :
echo $array1[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

// MENAMBAHKAN ELEMEN BARU PADA ARRAY (DI TENGAH-TENGAH CODINGAN)
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);
?>