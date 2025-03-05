<?php
	include("session.php");
	$obj=null;
	if(isset($_POST["submit"])){
 	$obj=$_POST["submit"];
	$sql1="INSERT INTO rent (id, Dani, Cijena) VALUES ('', '1 Dana', '140 KM')";
		if (mysqli_multi_query($conn, $sql1)) 
		{
			echo "New records created successfully";
		} 
		else 
		{
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
	};

	$obj=null;
	if(isset($_POST["submit2"])){
	$obj=$_POST["submit2"];
	$sql2="INSERT INTO rent (id, Dani, Cijena) VALUES ('', '1 Dana', '210 KM')";
		if (mysqli_multi_query($conn, $sql2)) 
		{
			echo "New records created successfully";
		} 
		else 
		{
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
	};

	$obj=null;
	if(isset($_POST["submit3"])){
	$obj=$_POST["submit3"];
	$sql3="INSERT INTO rent (id, Dani, Cijena) VALUES ('', '1 Dana', '350 KM')";
		if (mysqli_multi_query($conn, $sql3)) 
		{
			echo "New records created successfully";
		} 
		else 
		{
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
	};

	$obj=null;
	if(isset($_POST["submit4"])){
	$obj=$_POST["submit4"];
	$sql4="INSERT INTO rent (id, Dani, Cijena) VALUES ('', '1 Dana', '490 KM')";
		if (mysqli_multi_query($conn, $sql4)) 
		{
			echo "New records created successfully";
		} 
		else 
		{
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		};
	}
	header("location: users.php");
?>