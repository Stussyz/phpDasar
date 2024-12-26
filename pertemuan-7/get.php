<?php
// Variable Scope
// CONTOH LOCAL VARIABLE ==>
// $x = 10;

// function y() {
//     $x = 20;
//     echo $x;
// }
// y();
// echo "<br>";
// echo $x;


// CONTOH GLOBAL VARIABLE ==>
// $r = 11;

// function showR() {
//     global $r;
//     echo $r;
// }
// showR();


// CONTOH SUPERGLOBALS VARIABLE ==>
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// $_GET:
$_GET ["nama"] = "Mohammad Fadhol";
$_GET ["nrp"] = "6026232004";
var_dump($_GET);

?>