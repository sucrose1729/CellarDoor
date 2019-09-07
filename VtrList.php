<?php


        mysql_connect("localhost","root","");
        mysql_select_db("votingsystem");

        $query="SELECT * FROM voter ";
        $result=mysql_query($query);
        echo "<center><br><br><br><br>";
        echo "<font size ='6'>";
        echo "<b>THE VOTERS FOR ELECTION ARE AS FOLLOWS :</b>";
        echo "</font>";
        echo "<center><br><br><br>";
        echo "<style>";
        echo "table {border-collapse:collapse;width:100%;}";
        echo "th,td {text-align:center;padding:8px;}";

        //echo "nth-child(even) {background-color:#f2f2f2;}";
        echo "</style>";
        echo"<table border ='2'>";
        echo"<tr>";
        echo"<th>Voter ID</th>";
		echo"<th>Voter Name</th>";
        echo"<th>Voter DOB (DDMMYY)</th>";
        echo"<th>Voter City</th>";
        echo"<th>Voter Email</th>";
        //echo"<td>Voter Password</td>";
        echo"<th>Voter Phone Number</th>";
        echo"<th>Voter Voting Status (Y/N)</th>";
        echo"<th>Voter Voted For (Candidate ID)</th>";
        echo"<th>Voter Confirmation Status</th>";
        //echo"<td>Click To Confirm Voter</td>";
        echo"</tr>";
        /*
        echo"<tr>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        echo"<td> </td>";
        //echo"<td> </td>";
        echo "</tr>";
        */
        while($row=mysql_fetch_array($result))
        {
        
            //echo"<table border='2'>";
            echo"<tr>";
            echo"<td>".$row[0]."</td>";
            echo"<td>".$row[1]."</td>";
            echo"<td>".$row[2]."</td>";
            echo"<td>".$row[3]."</td>";
            echo"<td>".$row[4]."</td>";
            //echo"<td>".$row[5]."</td>";
            echo"<td>".$row[6]."</td>";
            echo"<td>".$row[7]."</td>";
            echo"<td>".$row[8]."</td>";
            echo"<td>".$row[9]."</td>";
            //echo"<td><a href ='VtrConf.php'>CONFIRM</a></td>";
            echo"</tr>";
            
                
        }
        echo"</table>";
?>

<form action="VtrConf.php" name="conf1" method="post" id="myform" >
    <center><br><br><br>
    
    GIVE THE VOTER ID FOR WHOM YOU HAVE TO CONFIRM &emsp;
    <input type "number" name ="confirm" size=5>
    <center><br><br><br>
    <input type="submit" value="CONFIRM VOTER">

</form>

<center><br><br><br>
CLICK HERE TO GO BACK : <br>
<a href ='AdmLogin.php'>BACK</a>

