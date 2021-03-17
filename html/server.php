<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'admin');


if (isset($_POST['reg_user'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  	 VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "";
  	header('location: home.html');
  }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: home.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  /*+++++++++++++++++++++++++++*/
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $rec = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $username = $record['username'];
    $password = $record['password'];
    $id = $record['id'];
    header('location: register.php');
    }

    if(isset($_POST['update'])){
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);
        $id = mysql_real_escape_string($_POST['id']);

        mysqli_query($db, "UPDATE users SET name='$username', address='$password' WHERE id=$id");
        $_SESSION['msg'] = "Address updated";
        header('location: admin.php');
    }

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
    
        mysqli_query($db, "DELETE FROM users WHERE id=$id");
        $_SESSION['msg'] = "Address updated!"; 
        header('location: admin.php');
    }

    $results = mysqli_query($db, "SELECT * FROM users");
  ?>
