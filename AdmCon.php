<?php
	
	session_start();
	$a3=$_POST['x2'];
	$b3=$_POST['y2'];
	
	if($a3==""||$b3==""){
        echo "<center><br><br><br><br><br><br><br><br><br><br><br><br>";	
		echo "ALL FIELDS REQUIRED";
		echo "<center><br><br><br>";
		echo "CLICK HERE TO GO BACK TO LOGIN <br>";
    	echo "<body><center>";
    	echo "<a href ='AdmLoginHome.php.php'>LOGIN</a>";
    }
	else
	{
	
		mysql_connect("localhost","root","");
		mysql_select_db("votingsystem");
		$query="SELECT * FROM admins WHERE AdmName = '$a3' AND AdmPswd ='$b3'";
		$result = mysql_query($query); 
		$con = mysql_num_rows($result); 
		if($con!=0)
		{
		
			$_SESSION['AdmName']=$a3;
			header ("location:AdmLogin.php");
		
		}
		
		else
		{
            echo "<center><br><br><br><br><br><br><br><br><br><br><br><br>";		
			echo "AUTHORIZATION FAILED";
			echo "<center><br><br><br>";
			echo "CLICK HERE TO GO BACK TO LOGIN <br>";
    		echo "<body><center>";
    		echo "<a href ='AdmLoginHome.php'>LOGIN</a>";
		
		}
	
	}


?>