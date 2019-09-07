<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center><br><br><br><br><br><br>
<form method = "POST" action = "AdmCon.php">
    <br>
    <font color = #a64dff size='16'>
    THIS IS THE ADMIN LOGIN SPACE : <br> <br>
    </font>
    <p style="font-family:'Courier New';font-size:20px;color:#ff4d4d" >
	Enter your Username : <br>
	<input type = "text" name ="x2" size = 30><br><br>
	Enter your Password : <br>
	<input type ="password" name = "y2" size = 30> <br> <br>
	<input type = "submit" value = "SUBMIT NOW">
    <input type = "reset" value = "RESET NOW"></p>
    
    <script type="text/javascript" > 
    var frmvalidator = new Validator("myform");
    frmvalidator.addValidation("username" , "req" , "Please Enter Username");
    frmvalidator.addValidation("username", "maxlen=50");
    frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
</form>
    
</body>
</html>