<?php

$host="localhost";
$kullanici="root";
$parola="12345678";
$vt="admins";

$baglanti2 =mysqli_connect($host, $kullanici, $parola ,$vt);
mysqli_set_charset($baglanti2, "UTF8");



?>