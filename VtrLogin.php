<?php 

 /*
 This page comes after Voter logs in from main login page
 voter can view candidates
 and cast vote 
 Voter can cast the vote only if they are approved by the administrator
 
 */
    session_start();
    
    if(isset($_SESSION['VtrName']))
    {

        ?>
        <center><br>
        <p style="font-family:'Consolas';font-size:25px;color:#ff4d4d" >
        <b>VOTER LOGIN SUCCESSFUL!</b>
        </style>
        </p>
        <center><br><br>

        <?php
        mysql_connect("localhost","root","");
        mysql_select_db("votingsystem");
        $n = $_SESSION ['VtrName'];

        $query="SELECT * FROM voter WHERE VtrName = '$n' AND VtrConf = 'NOTCONFIRMED' ";
        $result = mysql_query($query); 
        $con = mysql_num_rows($result);
        if($con>0)
        {
            echo "<center><br><br><br>";
            echo "WELCOME ";
            echo $_SESSION ['VtrName'];
            echo ", TO ONLINE VOTING PLATFORM!";
            echo "<center><br><br><br>";
            echo "YOU HAVE NOT BEEN CONFIRMED BY THE ADMINISTRATOR";
            echo "<center><br><br><br><br><br>";
            echo "CLICK HERE TO LOGOUT <br>";
            echo "<body><center>";
            echo "<a href ='VtrLogout.php'>LOGOUT</a>";

        }
        else 
        {

            echo "<center><br><br><br>";
            echo "WELCOME ";
            echo $_SESSION ['VtrName'];
            echo ", TO ONLINE VOTING PLATFORM!";
            echo "<center><br><br><br>";
            echo "USE THE FOLLOWING LINKS TO EXECUTE OPERATIONS";
            echo "<center><br><br><br><br><br>";
            
            echo "CLICK HERE TO SEE CANDIDATE LIST AND VOTE<br>";
            echo "<body><center>";
            echo "<a href ='CanList.php'>CANDIDATE LIST</a>";
            echo "<center><br><br><br>";
            echo "CLICK HERE TO LOGOUT <br>";
            echo "<body><center>";
            echo "<a href ='VtrLogout.php'>LOGOUT</a>";
        }
    }
    else
    {
        header("location:Login.php");
    }


 ?>