<?php

session_start();
$errors=array();
$success=array();
$_SESSION['success']="";

$connect = mysqli_connect('localhost','root','','login');

/*______________________________________*/ 
//  registration.....
if(isset($_POST['reg_user'])){
    $name = mysqli_real_escape_string($connect,$_POST['name']);
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $password_1 = mysqli_real_escape_string($connect,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($connect,$_POST['password_2']);

    if(empty($name)){array_push($errors,"Please Entering your UserName");}
    if(empty($email)){array_push($errors,"Please Entering your Email");}
    if(empty($password_1)){array_push($errors,"Please entering your Password");}
    if($password_1 != $password_2){array_push($errors,"The passwords are not matching to each another");}


    $check_name = "SELECT * FROM users WHERE `username` = '$name'";
   $result = mysqli_query($connect,$check_name);
      if($user = $result -> fetch_assoc()){
          if($user['username'] === $name){
            array_push($errors,"SORRY , These UserName is taken !! ");
          }
    }

    $check_email= "SELECT * FROM users WHERE `email` = '$email'";
    $result_email= mysqli_query($connect,$check_email);
    if($User = $result_email-> fetch_assoc()){
        if($User['email']===$email){
            array_push($errors,"SORRY , These Email is taken !!");
        }
    }

    if(count($errors) == 0){
        $password = md5($password_1);
        $insert = "INSERT INTO users (`username`,`email`,`password`) VALUES ('$name','$email','$password')";

        mysqli_query($connect,$insert);
        $_SESSION['username']=$name;
        $_SESSION['success']="Now you are logged in 😍 ...";
        header('location: index.php');
        

    }
}

/*______________________________________*/ 
//  login.....
if(isset($_POST['login_user'])){
  $username = mysqli_real_escape_string($connect,$_POST['name']);
  $password = mysqli_real_escape_string($connect,$_POST['password']);

if(empty($username)){array_push($errors,"Please Entering your UserName");}
if(empty($password)){array_push($errors,"Please Entering your Password");}

if(count($errors) == 0){
    $password1 = md5($password);
    $select = "SELECT * FROM users WHERE `username`='$username' AND `password`='$password1'";
    $num_row = mysqli_query($connect,$select);

    if(mysqli_num_rows($num_row) == 1){
        $_SESSION['username']=$username;
        $_SESSION['success']="NOW you are logged in ..";
        header('location: index.php');
    }else{
        array_push($errors,"WRONG in UserName/Password combination");
    }
 }
}

/*______________________________________*/ 
//  send email for reset password.....

if(isset($_POST['send_code'])){
    $email = mysqli_real_escape_string($connect,$_POST['email']);

    if(empty($email)){
        array_push($errors,"Please enter your email...");
    } else {
        $query = "SELECT * FROM users WHERE email ='$email'";
        $result4 = mysqli_query($connect,$query);

        if(mysqli_num_rows($result4) == 1){
            $token = bin2hex(random_bytes(50));
            $expires = date("Y-m-d H:i:s", strtotime("+2 hour"));
            
            $query_update = "UPDATE users SET reset_token = '$token', reset_token_expriy = '$expires' WHERE email = '$email'";
            mysqli_query($connect, $query_update);
            
            $reset_link = "http://localhost/firstPHP/loginhome/reset_password.php?token=$token";
            $subject = "Password Reset Request";
            $message = "Click the link below to reset your password  and these link in valid for only an hour :\n\n$reset_link";
            $headers = "From: elshourbagi97@gmail.com";

           if(mail($email, $subject, $message, $headers)){
               array_push($success, "Check your email for the reset password link.");
            }else{
               array_push($errors,"Wrong Email. Please check it.");
            }
            
        } else {
            array_push($errors,"SORRY ,These is not found please try again !");
        }
    }
}

/*______________________________________*/ 
//  Reset password.....

if(isset($_GET['token'])){
    if(isset($_POST['reset'])){
        $token = $_POST['token'];
        $password1=$_POST['new_password'];
        $password2=$_POST['password2'];
    
        if(empty($password1)){
            array_push($errors,"Please entering your Password");
           
        }
        if($password1 != $password2){
        array_push($errors,"Not matching password");
       
    }
    $query1="SELECT id FROM users WHERE reset_token='$token' and Reset_token_expriy > now()";
    $result = mysqli_query($connect,$query1);
    $users1= $result->fetch_assoc();
    if($users1){
        $passwordd = md5($password1);
        $update1= "UPDATE users SET password ='$passwordd' , reset_token=null , reset_token_expriy=null where id = {$users1['id']}";
        mysqli_query($connect,$update1);
        header('location: login.php');
        exit();
    }
    }
}
 ?>