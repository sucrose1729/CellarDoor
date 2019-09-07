<?php 

 /*
 This is the candidate connect page, confirmation of database entry
 */

$a2=$_POST['a11'];
$b2=$_POST['b11'];



if($a2==""||$b2=="") {

    echo "<center><br><br><br>";    
    echo "ALL BLANKS ARE NECESSARY";
}
else {
    
    mysql_connect("localhost","root","");
    mysql_select_db("votingsystem");
    $query="SELECT * FROM candidates WHERE CanName = '$a2' AND CanParty ='$b2'";
    $result = mysql_query($query); 
    $con = mysql_num_rows($result); 
    
    
    if($con==0) 
    
    {
        $query1="INSERT into candidates (CanName,CanParty) 
            VALUES ('$a2','$b2')";
        mysql_query($query1);
        echo "<center><br><br><br>";
        echo "VALUE SUCCESSFULLY INSERTED!";
        echo "<center><br><br><br>";
        echo "CLICK HERE TO RETURN BACK TO ADMIN SPACE <br>";
        echo "<body><center>";
        echo "<a href ='AdmLogin.php'>BACK</a>";
    }
    
    else
    {
        
        echo "ALREADY EXISTS!";
        
    }
}

 ?>