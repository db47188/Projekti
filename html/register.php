<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projekti ne Web</title>
        <link rel='stylesheet' type='text/css' href='../css/style2php.css'>
		<link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
        <link rel="stylesheet" type="text/css" href="../css/mobile.css" media="screen and (min-width: 320px) and (max-width: 500px)">
        <link rel="stylesheet" type="text/css" href="../css/tablet.css" media="screen and (min-width: 501px) and (max-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../css/laptop.css" media="screen and (min-width: 769px) and (max-width: 992px)">
        <link rel="stylesheet" type="text/css" href="../css/pc.css" media="screen and (min-width: 992px) and (max-width: 1200px)">
    </head>
<body>
<div id="header">
            <div class="container flexhead">
                <div class="logo">
                    <img src="../img/logo.png"  alt="logo">
                </div>
        </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <div id="footer">
                UBT 2020
        </div> 
</body>
</body>
</html>