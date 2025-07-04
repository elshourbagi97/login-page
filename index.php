<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
if(isset($_GET['logout'])){
    Session_unset();
    Session_destroy();
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="Mobile mobile2">
          <span class="top-border">
              <span class="network">Vodafone</span>
              <span class="symbols">
                <i class="fa-solid fa-signal"></i>
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-battery-empty">
                    <div></div>
                </i>
              </span>
          </span>

          <div class="container">
          <img src="./Success.gif"  class="imgg" alt="Login" />
            <div class="success">
                <p><?php echo $_SESSION['success'];?></p>
            </div>
            <p style="font-size:17px">Welcome <strong style=" text-transform: capitalize;"><?php echo $_SESSION['username']; ?></strong></p>
            <a  href="index.php?logout='1'" style="color:red; font-size:18px;">Logout</a>
          </div>
          <span class="right-border top"></span>
        </div>
</body>
</html>