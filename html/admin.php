<?php  include('server.php'); 

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $rec = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $name = $record['name'];
    $address = $record['address'];
    $id = $record['id'];
}

?>
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
        <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif ?>
        <div id="header">
            <div class="container flexhead">
                <div class="logo">
                    <img src="../img/logo.png"  alt="logo">
                </div>
                <div class="menu">
                    <a href="home.html">Home</a>
                    <a href="about.html">About</a>
                </div>
        </div>
        <?php $results = mysqli_query($db, "SELECT * FROM users"); ?>

            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href="register.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                        </td>
                        <td>
                            <a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>  
            </table>

            <div id="footer">
                UBT 2020
        </div> 
        <?php if (isset($_SESSION['message'])): ?>
      <div class="msg">
          <?php 
              echo $_SESSION['message']; 
              unset($_SESSION['message']);
          ?>
      </div>
      <?php endif ?>
  </body>
</html>