<?php
	
	session_start();
	$c=$_POST['x1'];
	$a=$_POST['y1'];
	$b=$_POST['z1'];
	
	if($a==""||$b==""){
		echo "<center><br><br><br><br><br><br><br><br><br><br><br><br>";	
		echo "ALL FIELDS REQUIRED";
		echo "<center><br><br><br>";
		echo "CLICK HERE TO GO BACK TO LOGIN <br>";
    	echo "<body><center>";
    	echo "<a href ='VtrLogHome.php'>LOGIN</a>";
	}
	else
	{
	
		mysql_connect("localhost","root","");
		mysql_select_db("votingsystem");
		$query="SELECT * FROM voter WHERE VtrEmail = '$a' AND VtrPswd ='$b'";
		$result = mysql_query($query); 
		$con = mysql_num_rows($result); 
		if($con==1)
		{
		
			$_SESSION['VtrName']=$c;
			header ("location:VtrLogin.php");
		
		}
		
		else
		{
            echo "<center><br><br><br><br><br><br><br><br><br><br><br><br>";		
			echo "AUTHORIZATION FAILED";
			echo "<center><br><br><br>";
			echo "CLICK HERE TO GO BACK TO LOGIN <br>";
    		echo "<body><center>";
    		echo "<a href ='VtrLogHome.php'>LOGIN</a>";
		
		}
	
	}


?>