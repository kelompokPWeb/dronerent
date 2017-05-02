<?php

include "connect.php" ;


$nama = $_POST['nama'];
$tgl_pemakaian = $_POST['tgl_pemakaian'];
$lama_sewa = $_POST['lama_sewa'];


mysql_query("INSERT INTO transaksi VALUE(NULL, '$nama', '$tgl_pemakaian', '$lama_sewa')");
header("location:nota.php")
?>



?>