


<?php

 /*
 This is the admin registration connect page, confirmation of database entry
 */


$a1=$_POST['a'];
$b1=$_POST['b'];
$c1=$_POST['c'];
$d1=$_POST['d'];


if($a1==""||$b1==""||$c1==""||$d1=="") {

    echo "<center><br><br><br>";    
    echo "ALL BLANKS ARE NECESSARY";
}
else {
    
    mysql_connect("localhost","root","");
    mysql_select_db("votingsystem");
    $query="SELECT * FROM admins WHERE AdmName = '$a1' AND AdmEmail ='$b1'";
    $result = mysql_query($query); 
    $con = mysql_num_rows($result); 
    
    
    if($con==0) 
    
    {
        $query1="INSERT into admins (AdmName,AdmEmail,AdmPswd,AdmPhno) 
            VALUES ('$a1','$b1','$c1','$d1')";
        mysql_query($query1);
        echo "<center><br><br><br>";
        echo "VALUE SUCCESSFULLY INSERTED!\n\n";
    }
    
    else
    {
        
        echo "ALREADY EXISTS!";
        
    }
}
?>

