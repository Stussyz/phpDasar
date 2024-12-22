<?php
// BUILD IN FUNCTION:

// 1. Date
// Menampilkan dengan format tertentu
// echo date("l, d-M-Y");

// 2. Time
// UNIX Timestamp / EPOCH time
// Detik yang sudah berlaku sejak 1 Januari 1970
// echo time ();

// 3. Memperkirakan hari/tanggal yang akan datang
// + untuk waktu yang akan datang, - untuk waktu yang telah dilewati
// 60 detik x 60 menit x 24 jam x 5 hari
// echo date ("d-M-Y", time()+60*60*24*5);

// 4. mktime
// membuat sendiri detik)
// mktime(0,0,0,0,0,0) jam, menit, detik, bulan, tanggal, tahun):
// echo date("l", mktime(0,0,0,8,3,2000));

// 5. strtotime
// bisa juga menggunakan strtotime agar lebih mudah
echo date("l", strtotime("3 aug 2000"));

// string 
?>