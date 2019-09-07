<?php
$y="YES";
$i=$_POST['cidvote'];
session_start();
mysql_connect("localhost","root","");
mysql_select_db("votingsystem");
$n = $_SESSION ['VtrName'];
    
if(isset($_SESSION ['VtrName']))
{
    
    $query="SELECT * FROM voter WHERE VtrName = '$n' AND VtrStatus = '$y' ";
	$result = mysql_query($query); 
	$con = mysql_num_rows($result); 
    if($con > 0 ) {
        echo "<center><br><br><br>";
        echo "HI ! ";
        echo "$n, YOU HAVE ";
        echo "ALREADY VOTED ";
        
        echo "<center><br><br><br>";
        echo "CLICK HERE TO LOGOUT <br>";
        echo "<body><center>";
        echo "<a href ='VtrLogout.php'>LOGOUT</a>";
    }
    else
    {
        
        $q1="UPDATE candidates SET CanVotes = CanVotes+'1' WHERE CanId = '$i'";
        $q2="UPDATE voter SET VtrStatus ='$y' WHERE VtrName = '$n'";
        $q3="UPDATE voter SET VtrVoted ='$i' WHERE VtrName = '$n'";
        mysql_query($q1);
        mysql_query($q2);
        mysql_query($q3);
        echo "<center><br><br><br>";
        echo "VOTE REGISTERED";
    }
}
else
{
    header("location:Login.php");
}

?>