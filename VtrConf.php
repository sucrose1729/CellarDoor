<?php
$y="YES";
$i=$_POST['confirm'];
session_start();
mysql_connect("localhost","root","");
mysql_select_db("votingsystem");
$n = $_SESSION ['AdmName'];
    
if(isset($_SESSION ['AdmName']))
{
    
    $query="SELECT * FROM voter WHERE VtrId = '$i' AND VtrConf = 'CONFIRMED' ";
	$result = mysql_query($query); 
	$con = mysql_num_rows($result); 
    if($con > 0 ) {
        echo "<center><br><br><br>";
        //echo "HI ! ";
        //echo "$n, YOU HAVE ";
        echo "THE VOTER WITH VOTER ID ";
        echo $i;
        echo " IS ALREADY CONFIRMED ";
        
        echo "<center><br><br><br>";
        echo "CLICK HERE TO GO BACK <br>";
        echo "<body><center>";
        echo "<a href ='VtrList.php'>BACK</a>";
    }
    else
    {
        
        //$q1="UPDATE candidates SET CanVotes = CanVotes+'1' WHERE CanId = '$i'";
        //$q2="UPDATE voter SET VtrStatus ='$y' WHERE VtrName = '$n'";
        $q33="UPDATE voter SET VtrConf ='CONFIRMED' WHERE VtrId ='$i'";
        //mysql_query($q1);
        //mysql_query($q2);
        mysql_query($q33);
        echo "<center><br><br><br>";
        echo "VOTER SUCCESSFULLY CONFIRMED";
        echo "THE VOTER ID WAS ";
        echo $i;
    }
}
else
{
    header("location:Login.php");
}

?>