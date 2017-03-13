
<?php
	session_start(); 		
	include 'connect.php'; 		
	$username=$_POST['username']; 	
	$password=$_POST['password']; 	
 
	$query=mysql_query("select * from userlogin where username='$username' and password='$password'");	 
	$xxx=mysql_num_rows($query);
	if($xxx==TRUE){ 		
		$_SESSION['username']=$username; 
		header("location:index.php");    
	}else{   				
		echo "gagal login";
	}
 
?>