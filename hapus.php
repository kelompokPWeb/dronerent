<?php
include ("connect.php");
$query = mysql_query ("DELETE FROM transaksi WHERE no='".$_GET['no']."'");
if ($query)
echo "<script language='javascript'>alert<'DATA TELAH TERHAPUS'>;</script>";
echo "<meta http-equiv='refresh' content='0;url=nota.php'>";
?>