<?php require_once 'server.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
          <div class="container">
          <img src="./login2.gif" alt="Login" />
         <form action="reset_password.php?token=<?php echo $_GET['token'] ?>" method="post">
             <input type="hidden" name="token" value="<?php echo $_GET['token'] ?>">
             <?php require_once "success.php" ?>
             <?php require_once 'errors.php' ?>
                <div class="form-group">
                    <label  class="label">New Password :</label>
                    <input type="password" name="new_password" id='input-eyes1' class="input-reg form-control">
               </div>
            
                <div class="form-group mt-2">
                    <label class="label">Confirm Password :</label>
                    <input type="password" name="password2" id='input-eyes2' class="input-reg form-control">
               </div>
               <div class="form-group mt-2">
                    <input type="checkbox"  id="check">
                    <label class="seePWS">See password</label>
            </div>
               <div class="form-group mt-2">
               <input type="submit" value="Confirm" name="reset" class="btn btn2 btn-outline-primary">
               </div>
          </form>
          </div>
          <span class="right-border top"></span>
        </div>
</body>
<script src="script.js"></script>
</html>