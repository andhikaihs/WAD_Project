<?php 
include ("connector.php");

if(isset($_POST['submit'])){
    $id=rand(1000,9999);
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    
    if($password1 == $password2){
        if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"))==1){
            ?><div class="alert alert-danger" style="margin-top: 70px;">Username Telah Digunakan</div><?php
        } else{
            if (!mysqli_query($conn, "INSERT INTO user VALUES ('$id','$username','$name','$email','$phone','$address','$password2')")){
                echo ("Error description: " . mysqli_error($conn));
            }
            $_SESSION['registered'] = 'Berhasil Register';
            header("location:../pages/Login.php");
        }
    }
    else{ 
        ?><div class="alert alert-danger" style="margin-top: 70px;">Password Tidak Cocok</div><?php
    }
}
?>