<?php

include "connect.php" ;


$foto = $_POST['foto'];
$nama = $_POST['nama'];
$tarif = $_POST['tarif'];

mysql_query("INSERT INTO data VALUE(NULL, '$foto', '$nama', '$tarif')");
header("location:index.php");



?>