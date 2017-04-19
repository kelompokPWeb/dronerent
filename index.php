<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>Rental Drone</title>

<body>
<div class="header">
<div align="center">Rental Drone </div>
<div class="kop">
  <div align="center">Yogyakarta </div>
</div>
</div>
<div class="navigation">
			<a href ="nota.php">DATA BOOKING</a>
			<a href ="ins.php">FORM DATA</a>
			<a href ="home.php">LOGOUT</a>
</div>

<div class="content1" >
<div align="center">  
<table width="900" height="20" border="1" >
  <tr>
    <td width="25">No</td>
    <td width="90">Gambar</td>
    <td width="120">Nama Mobil</td>
    <td width="100">Tarif Sewa</td>
	<td width="90">Edit</td>
  </tr>

 <?php
include "connect.php";

$query1="select * from data ";
 
$result=mysql_query($query1) or die(mysql_error());


while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
     
       </td>
        <td><?php    echo $rows ->no;?></td>
		<td><img src="<?php echo $rows -> foto;?>" width="350" height="200" /></td>
        <td><?php    echo $rows -> nama;?></td>
        <td><?php    echo $rows -> tarif;?></td>
		<td><a href="del.php?no=<?php echo $rows -> no;?>">Hapus</a></td>
      </tr>
      <?php

}?>
    </table>
</div>
</div>

<?php
?>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<div class="footer">
<marquee>Created by : Brillian Ayub S</marquee>
</div>
</body>
</html>
