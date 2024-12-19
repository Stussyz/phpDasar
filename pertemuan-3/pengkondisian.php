<?php
// PENGKONDISIAN / PERCABANGAN :
// 1. if else
// 2. if else if else
// 3. ternary = untuk mengganti if else yang sederhana
// 4. switch = untuk meringkas if else yang sudah terlalu banyak

// CONTOH:
// NO. 1
// $x = 40;
// if ( $x < 39 ) {
//     echo "Benar";
// } else {
//     echo "Salah";
// }

// NO. 2 (kondisi di antara keduanya)
// $x = 60;
if ( $x < 60 ) {
    echo "Benar";
} else if ( $x == 60 ){
    echo "Crash!";
} else {
    echo "Salah";
}

?>