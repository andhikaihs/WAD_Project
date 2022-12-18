<?php 
include ("connector.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    session_start();
    if(mysqli_num_rows($check)==1){
        $result = mysqli_fetch_assoc($check);

        if($password == $result['pass_user']){
            if(isset($_POST['remember'])){
                setcookie('username', $_POST['username'], time()+3600, '/');
                setcookie('password', $_POST['password'], time()+3600, '/');        
            }
            $_SESSION['id'] = $result['id_user'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['name'] = $result['name_user'];
            $_SESSION['email'] = $result['email_user'];
            $_SESSION['cookie'] = $_POST['remember'];
            $_SESSION['role'] = $result['role_user'];

            header("location: ../index.php");
        } else {
            echo "<script>alert('Password salah');window.location.href='../pages/login.php';</script>";
        }   
    }
    else{
        echo "<script>alert('Username salah');window.location.href='../pages/login.php';</script>";
    }
}

?>