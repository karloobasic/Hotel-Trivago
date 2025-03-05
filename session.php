<?php
	//Ostvaruje konekciju sa serverom tako što proslijedi naziv servera, korisnicko ime, lozinku i ime baze
	$server="localhost";
	$suser="root";
	$spass="";
	$dbname="trivago";
	
	$conn=mysqli_connect($server, $suser, $spass, $dbname);
	if(!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	session_start();// Sesija započinje
	
	/// Spremanje sesijes
	$user_check=$_SESSION['login_user'];

	//stvaranje upita
	$sql="SELECT kor_ime from korisnik where kor_ime='$user_check'";
	
	$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_assoc($result);
	
	$login_session=$row['kor_ime'];
	//echo "<h2>fffff".$login_session."</h2>";
	
	if(!isset($login_session)){
		mysqli_close($conn); // Zatvaranje konekcije
		header("location: index.html"); // Redirektanje na početnu stranicu
	}	
?>