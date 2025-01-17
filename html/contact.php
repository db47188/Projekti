<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projekti ne Web</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../css/style2php.css'>
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
            <div class="menu">
                <a href="home.html">Home</a>
                <a href="about.html">About</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php">Logout</a>
                
            </div>
        </div>
    </div>
      <div class="container2">
        <?php include('errors.php'); ?>
        <form action="contact.php">
      
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="Kosova">Kosova</option>
            <option value="Albania">Albania</option>
            <option value="USA">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>
        <div id="footer">
            UBT 2020
        </div>
        <style>
         {
    margin: 0;
  }
  body {
    margin: 0;
  }
  .container {
    width: 90%;
    margin: 0 auto;
  }
  .flexhead {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  #header {
    width: 100%;
    min-height: 100px;
    background-color: #5cdb95;
    color: #05386b;
  }
  .logo {
  }
  .logo img {
    width: 70px;
    padding-top: 17px;
  }
  
  /*---------------------------MENU START-----------------------*/
  .menu a {
    padding: 0 10px 0 10px;
  
    text-transform: uppercase;
    color: #05386b;
    text-decoration: none;
  }
  .menu :hover {
    color: #05386b;
    font-weight: bold;
    background-size: 100% 100%;
  }
  /*-------------------MENU END----------------------------------*/
  
  /*-------------------CONTENT--------------*/
  /*-------------------CONTENT--------------*/
  #content {
    width: 100%;
    height: 498px;
    background-color: #5cdb95;
    display: flex;
  }
  #content2 {
    width: 100%;
    height: 10%;
    background-color: #5cdb95;
  }
  .posts {
    min-width: 300px;
    min-height: 300px;
    width: 96.5%;
    height: 90%;
    margin-left: 1%;
    padding: 10px;
    background-color: #409968;
  }
  #postoForm {
    max-width: 100%;
    max-height: 20%;
    width: 100%;
    height: 20%;
    text-align: left;
    background-color: #5cdb95;
    margin-left: 15px;
  }
  #postoForm input {
    width: 83.5%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  #postoForm button {
    width: 7%;
    background-color: #4caf50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  #footer {
    width: 100%;
    background-color: #5cdb95;
    height: 80px;
    text-align: center;
    padding-top: 50px;
    color: #05386b;
  }
  #footer {
    width: 100%;
    background-color: #5cdb95;
    height: 127px;
    text-align: center;
    padding-top: 50px;
    color: #05386b;
  }
  #contentAbout {
    height: 562px;
    margin: 0;
    background: #5cdb95;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100%;
    overflow: hidden;
    background-attachment: fixed;
  }
  
  #about-us {
    position: relative;
    float: left;
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-top: 100px;
    align-items: center;
  }
  #about-us h1 {
    font-size: 22pt;
    font-family: "Josefin Sans", sans-serif;
    padding-top: 9%;
  }
  
  .description {
    text-align: center;
    font-size: 16px;
    line-height: 30px;
    color: #05386b;
    width: 100%;
    max-width: 750px;
    font-family: "Josefin Sans", sans-serif;
  }
  .justify-content {
    display: flex;
    justify-content: center;
  }
  .align-items {
    display: flex;
    align-items: center;
  }
  /*login*/
  
body {
    font-size: 19px;
  }
  table{
    width: 50%;
    margin: 30px auto;
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
    margin: 0px auto;
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
    width: 93%;
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
  body {font-family: Arial, Helvetica, sans-serif;}
          * {box-sizing: border-box;}
          
          input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
          }
          
          input[type=submit] {
            background-color: #4CAF50;
            color: black;
            padding: 12px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }
          
          input[type=submit]:hover {
            background-color: #45a049;
          }
          
          .container2 {
            background-color: #5cdb95;
            height: 100%;
          }
         
    </body>
</html>
