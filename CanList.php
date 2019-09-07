<?php


	mysql_connect("localhost","root","");
	mysql_select_db("votingsystem");

	$query="SELECT * FROM candidates ";
    $result=mysql_query($query);
    echo "<center><br><br><br><br>";
    echo "THE CANDIDATES FOR ELECTION ARE AS FOLLOWS :";
    echo "<center><br><br><br>";

        echo"<table border='2'>";
        echo"<tr>";
        echo"<td>Candidate ID</td>";
		echo"<td>Candidate Name</td>";
        echo"<td>Candidate Party</td>";
        echo"<td>Candidate Votes</td>";
		echo"</tr>";
        
	while($row=mysql_fetch_array($result))
	{
	
		//echo"<table border='2'>";
        echo"<tr>";
        echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
        echo"<td>".$row[2]."</td>";
        echo"<td>".$row[3]."</td>";
		echo"</tr>";
        
        
        
	
    }
    echo"</table>";
?>
<form action="CanVote.php" name="vote" method="post" id="myform" >
    <center><br><br><br>
    
    GIVE THE CANDIDATE ID FOR WHOM YOU HAVE TO VOTE &emsp;
    <input type "number" name ="cidvote" size=5>
    <center><br><br><br>
    <input type="submit" value="Submit Vote">

</form>