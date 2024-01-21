<?php
session_start();
include ('./includes/config.php');
if (isset($_POST['submit'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $password=mysqli_real_escape_string($conn,md5($_POST['passWord']));
    $confirmpassword=mysqli_real_escape_string($conn,md5($_POST['cpassword']));
    $otp=mysqli_real_escape_string($conn,md5(rand()));

    if($password==$confirmpassword)
    {
        $insert_query="INSERT INTO users (email,phone,password,otp) VALUES ('$email','$phone','$password','$otp')";
        $insert_query_run=mysqli_query($conn, $insert_query);

        if($insert_query_run){
            $_SESSION['message']="Registered Successfully";
            header('Location: index.php');
        }else{
            $_SESSION['message']="Something went wrong";
            header('Location: register.php');
        }
    }
    else{
        $_SESSION['message']="Passwords do not match";
        header('Location: register.php');
    }
}
?>