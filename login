<!DOCTYPE html>
<html>
<head>
	<title>BlogPost Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">    
</head>
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>User Name</b></label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username" required>    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password" required>    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here" required>       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
    </form>     
</div>    
</body>    
</html>  