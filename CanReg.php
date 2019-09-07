<?php 

 /*
 Only admin can add the candidate, this is the candidate registration page
 */

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>

<center>
<font align = "center">
<form method = "POST" action = "CanRegCon.php">
    <br><br><br><br><br><br>
	THIS IS THE CANDIDATE REGISTRATION SPACE <br><br><br><br>
	Enter The Candidate's Name : <br>
	<input type = "text" name ="a11" size = 30><br><br>
    Enter The Party's Name : <br>
	<input type = "text" name ="b11" size = 30><br><br>
	<input type = "submit" value = "SUBMIT NOW">
	<input type = "reset" value = "RESET NOW">
    <?php
        echo "<center><br><br><br><br>";
        echo "CLICK HERE TO RETURN BACK TO ADMIN SPACE <br>";
        echo "<body><center>";
        echo "<a href ='AdmLogin.php'>BACK</a>";

    ?>
</form>
     
 </body>
 </html>