<?php
	include("session.php");
	$obj=null;
	if(isset($_POST["novikorisnik"]))
	{
 	$obj=$_POST["novikorisnik"];
 
	$ime=$_POST['ime'];
	$lozinka=$_POST['lozinka'];
	$user_ime=$_POST['username'];
	$prezime=$_POST['prezime'];
	
	$sql="INSERT INTO korisnik (id,ime,lozinka,kor_ime,prezime) VALUES('','$ime','$lozinka','$user_ime','$prezime')";

		if (mysqli_multi_query($conn, $sql)) 
		{
			echo "New records created successfully";
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		};
	}
	header("location: users.php");
?>