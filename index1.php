
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>Rental Drone Bejo</title>

<body>
<div class="header">
Rental Drone Bejo
<div class="kop">
Jl.Kabupaten,Kronggahan 2,Sleman,Yogyakarta
</div>
</div>
<div class="navigation">
			<a href ="home.php">Home</a>
			<a href="profil.php">Profil</a>
			<a href ="transaksi.php">Booking</a>
			<a href ="login.php">Login</a>
		
</div>

<div class="sidebar">
Cara Booking Online : <br>
1. Klik booking<br>
2. Isi form Booking <br>
3. Print Booking untuk dijadikan bukti bahwa benar sudah membooking<br>
<br></br>
Ketentuan Booking Online : <br>
1. Jika Saat pengambilan drone melebihi tanggal mem-Booking maka dianggap tidak membooking.<br>
2. Saat Pengambilan drone WAJIB membawa Bukti Pem-bookingan yaitu print data booking.
</div>


<div class="content2">

<table width="900" height="20" border="1">
  <tr>
    <td width="40">No</td>
    <td width="90">Gambar</td>
    <td width="120">Nama drone</td>
    <td width="120">Tarif Sewa</td>
	<td width="100">Booking Online</td>
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
        	<td><a href='transaksi.php'>BOOKING</a><br>
      </tr>
      <?php

}?>
    </table>


</div>

<?php
?>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<br></br>

<div class="footer">
<marquee>Created by : Brillian Ayub S</marquee>
</div>
</body>
</html>