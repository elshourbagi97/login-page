<?php require_once 'server.php' ?>;
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
        
        <div class="container">
            <img src="./login2.gif" alt="Login" />
            <form action="registrate.php" method="post">
                <?php require_once 'errors.php' ?>
                <div class="form-group">
                    <label  class="label">UserName :</label>
                    <input type="text" name="name"  style="text-transform:capitalize" class="form-control">
                </div>
                <div class="form-group mt-2">
                <label  class="label">Email :</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="" class="label">Password :</label>
                <input type="password" name="password_1" id='input-eyes1' class=" input-reg form-control">
            </div>
            <div class="form-group mt-2">
                <label for="" class="label">Confirm Password :</label>
                <input type="password" name="password_2" id='input-eyes2' class="input-reg form-control">
            </div>
            <div class="form-group mt-2">
                    <input type="checkbox"  id="check">
                    <label class="seePWS">See password</label>
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Create User" name="reg_user" class="btn btn1 btn-outline-primary">
            </div>
            <div class="form-group">
                <p>If you have already account ?! <a href="login.php"> Sign in</a></p>
            </div>
        </form>
    </div>
    <span class="right-border top"></span>
</div>



</body>
<script src="script.js"></script>
</html>