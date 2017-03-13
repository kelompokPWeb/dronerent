<?php
include ("connect.php");
$query = mysql_query ("DELETE FROM data WHERE no='".$_GET['no']."'");
if ($query)
echo "<script language='javascript'>alert<'DATA TELAH TERHAPUS'>;</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>