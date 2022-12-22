<?php

$host="localhost";
$kullanici="root";
$parola="12345678";
$vt="uyelik";

$baglanti =mysqli_connect($host, $kullanici, $parola ,$vt);
mysqli_set_charset($baglanti, "UTF8");



?>