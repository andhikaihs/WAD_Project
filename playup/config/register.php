<?php 
include ("connector.php");

if(isset($_POST['submit'])){
    $id=rand(1000,9999);
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];
    
    if($password == $password1){
        if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'"))==1){
            echo "<script>alert('Username telah digunakan');window.location.href='../pages/register.php';</script>";
        } elseif(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email_user = '$email'"))==1){
            echo "<script>alert('Email telah digunakan');window.location.href='../pages/register.php';</script>";
        } else{
            mysqli_query($conn, "INSERT INTO users (id_user,username,name_user,email_user,pass_user) VALUES ('$id','$username','$name','$email','$password')");
            echo "<script>alert('Akun berhasil dibuat');window.location.href='../pages/login.php';</script>";
            header("location:../pages/login.php");
        }

    } else{ 
        echo "<script>alert('Password yang dimasukkan tidak sama');window.location.href='../pages/register.php';</script>";
    }
}
?>