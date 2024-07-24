<?php
session_start();

include 'connect.php';

if(isset($_POST['signUpBtn'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $password=md5($password);

    if ($_POST["password"] !== $_POST["confirm_password"]) {
        header("Location: ../register.php?error=confirmpassword");
        exit();
     }

    $checkEmail="SELECT * FROM users where email='$email'";
    $resultemail=$conn->query($checkEmail);

    $checkUser="SELECT * FROM users where username='$username'";
    $resultuser=$conn->query($checkUser);

    if($resultemail->num_rows>0){
        header("Location: ../register.php?error=emailexists");
        exit();
    }else if($resultuser->num_rows>0){
        header("Location: ../register.php?error=userexists");
        exit();
    }
    else{
       $insertQuery="INSERT INTO users(username, email, password)
                        VALUES ('$username','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                $_SESSION['username']=$username;
                header("Location: ../index.php"); //When acc is created successfully goto test.php
            }
            else{
                echo 'Error:'.$conn->error;
            }
    }
}


if(isset($_POST['signInBtn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    if(empty($email) || empty($password)){
        header("Location: ../login.php?error=empty");
        exit();
    }

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['username']=$row['username'];
        header("Location: ../index.php");
        exit();
    }
    else{
        header("Location: ../login.php?error=nouser");
        exit();
    }
}

if(isset($_POST['resetPassBtn'])){
    $email=$_POST['email'];

    if(empty($email)){
        header("Location: ../passwordreset.php?error=empty");
        exit();
    }

    $sql="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        header("Location: ../passwordreset.php?success=resetconf&email=$email");
        exit();
    }
    else{
        header("Location: ../passwordreset.php?error=noemail");
        exit();
    }
}

?>