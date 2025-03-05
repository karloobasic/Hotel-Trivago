<?php
   session_start();
	
   $server="localhost";
   $username="root";
   $password="";
   $dbname="trivago";
   
   $conn=mysqli_connect($server, $username, $password, $dbname);

	if($conn==false)
	{
		die("Greška kod spajanja!");
	}

	$kor_ime=$_POST["kor_ime"];
   $password=$_POST["lozinka"]; 
      
   $sql="SELECT id FROM korisnik WHERE kor_ime='$kor_ime' and lozinka='$password'";  
   $result=mysqli_query($conn,$sql);  
   $count=mysqli_num_rows($result);
		
   if($count==1) 
   {    
      $_SESSION["login_user"]=$kor_ime;     
      header("location: users.php");
   }
   else 
   {
      $error="Vaše korisničko ime ili lozinka su neispravni.";
	   echo $error;
   }
?>