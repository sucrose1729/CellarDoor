<?php
/*This page opens afetr VtrReg
If all the entries are okay, it will prompt that database has been updated
and will display a link to the main login page

Errors could be :
1. Any field is empty
2. Username with the same email already exists

*/

    $a=$_POST['a1'];
	$b=$_POST['b1'];
	$c=$_POST['c1'];
    $d=$_POST['d1'];
    $e=$_POST['e1'];
    $f=$_POST['f1'];
	
	
	if($a==""||$b==""||$c==""||$d==""||$e==""||$f=="") {
        
        echo "<center><br><br><br>";
		echo "ALL BLANKS ARE NECESSARY";
	}
	else {
		
		mysql_connect("localhost","root","");
		mysql_select_db("votingsystem");
		$query="SELECT * FROM voter WHERE VtrName = '$a' AND VtrEmail ='$d'";
		$result = mysql_query($query); 
		$con = mysql_num_rows($result); 
		
		
		if($con==0) 
		
		{
			$query1="INSERT into voter (VtrName,VtrDOB,VtrCity,VtrEmail,VtrPswd,VtrPhno) 
				VALUES ('$a','$b','$c','$d','$e','$f')";
            mysql_query($query1);
            echo "<center><br><br><br>";
			echo "VOTER SUCCESSFULLY REGISTERED!";
			echo "<center><br><br><br>";
			echo "CLICK HERE TO GO BACK TO LOGIN <br>";
    		echo "<body><center>";
    		echo "<a href ='VtrLogHome.php'>LOGIN</a>";
		}
		
		else
		{
			
			echo "ALREADY EXISTS!";
			echo "<center><br><br><br>";
			echo "CLICK HERE TO GO BACK TO LOGIN <br>";
    		echo "<body><center>";
    		echo "<a href ='VtrLogHome.php'>LOGIN</a>";
			
		}
	}

?>