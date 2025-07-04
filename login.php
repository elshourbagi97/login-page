<?php require_once "server.php" ?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.scss">
</head>
<body>
  
        <div class="Mobile">
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
          <?php require_once 'success.php' ?>
          <div class="container">
          <img src="./login2.gif" alt="Login" />
          <form action="login.php" method="post">
            <?php require_once "errors.php" ?>
            <div class="form-group">
                <label  class="label">UserName :</label>
                <input type="text" name="name" style="text-transform:capitalize" class="form-control">
            </div>
            
            <div class="form-group mt-2">
                <label class="label">Password :</label>
                <input type="password" id="input_login" name="password" class="input-reg form-control">
            </div>
            <div class="form-group mt-2">
                    <input type="checkbox"  id="check">
                    <label class="seePWS">See password</label>
            </div>        
            <div class="form-group mt-2">
                <input type="submit" value="Sign In" name="login_user" style="translate:30px 0px" class="btn btn1 btn-outline-primary">
            </div>
            <div class="form-group">
                <a class="forgot"  href="forgot_password.php">Do you forgot Your Password ?!</a>
            </div>
            <div class="form-group">
                <p>Not a member Yet ?! <a href="registrate.php"> Sign Up</a></p>
            </div>
          </form>
          </div>
          <span class="right-border top"></span>
        </div>
 

</body>
<script src="script.js"></script>
</html>