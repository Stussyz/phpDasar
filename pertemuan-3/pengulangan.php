<?php
// for
// while
// do.. while
// foreach : pengulangan khusus array

// logika for = jika "kondisi" bernilai (true), maka lakukan pengulangan terus sampai "increment/decrement" memenuhi "kondisi" (false), 
// looping akan berhenti ketika hasil sudah sesuai dengan kondisi (false)
// for ( $i = 0; $i < 5; $i++ ) {
//     echo "Hello World! <br>";
// }

// logika while : jika kondisi bernilai true maka, apapun isinya akan dijalankan; jika bernilai false maka looping berhenti.
// while-do:
// $i = 10;
// while ( $i < 7 ) {
//     echo "green park <br>";
// $i++;
// }

// logika do-while : jika kondisi bernilai false, maka akan dirunning terlebih dahulu 1x, kemudian berhenti ketika "baru disadari" kondisinya false
$i = 10;
do {
    echo "ani pemalas <br>";
$i++;
} while( $i < 2 );
?>