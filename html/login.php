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
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <div id="footer">
                UBT 2020
        </div> 
		<style>
		
  /*login*/
  
body {
    font-size: 19px;
  }
  table{
    width: 100%;
    margin: 0px auto;
    border-collapse: collapse;
    text-align: left;
  }
  tr {
    border-bottom: 1px solid #cbcbcb;
  }
  th, td{
    border: none;
    height: 30px;
    padding: 2px;
  }
  tr:hover {
    background: #F5F5F5;
  }
  
  form {
    width: 45%;
    margin: 156px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
  }
  
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 100%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
  }
  
  .del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
  }
  .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
  }
		</style>
</body>
</html>