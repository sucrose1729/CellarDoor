<?php 

 /*
 This page comes after Admin logs in from main login page

 It will have several options

 Admin can approve Voters
 Admin can add and view candidates
 Admin can view the results of voting
 Admin can add other admins
 
 */
session_start();

if(isset($_SESSION['AdmName']))
{
    
    ?>
    <center><br>
    <p style="font-family:'Consolas';font-size:25px;color:#ff4d4d" >
    <b>ADMIN LOGIN SUCCESSFUL!</b>
    </style>
    </p>
    <center><br><br>
    <?php
    echo "WELCOME ";
    echo $_SESSION ['AdmName'];
    echo ", TO ONLINE VOTING PLATFORM!";
    echo "<center><br><br><br><br>";
    echo "USE THE FOLLOWING LINKS TO EXECUTE OPERATIONS";
    echo "<center><br><br><br><br>";

    echo "CLICK HERE TO SEE VOTER LIST AND VOTING STATUS <br>";
    echo "<body><center>";
    echo "<a href ='VtrList.php'>VOTER LIST</a>";
    echo "<center><br><br><br>";


    echo "CLICK HERE TO SEE CANDIDATE LIST <br>";
    echo "<body><center>";
    echo "<a href ='CanResView.php'>CANDIDATE LIST</a>";
    echo "<center><br><br><br>";

    echo "CLICK HERE TO ADD CANDIDATE <br>";
    echo "<body><center>";
    echo "<a href ='CanReg.php'>ADD CANDIDATE</a>";
    echo "<center><br><br><br><br><br><br>";

    echo "CLICK HERE TO LOGOUT <br>";
    echo "<body><center>";
    echo "<a href ='AdmLogout.php'>LOGOUT</a>";
}
else
{
    header("location:Login.php");
}

 ?>
 