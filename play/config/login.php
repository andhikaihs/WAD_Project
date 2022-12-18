<?php
include 'connector.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    
    if(mysqli_num_rows($check)==1){
        $result = mysqli_fetch_assoc($check);
    
        if($password == $result['password']){
            if(isset($_POST['rememberMe'])){
                setcookie('username', $row['username'], time()+3600, '/');
            }

            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['phone'] = $result['phone'];
            $_SESSION['address'] = $result['address'];
    
            $_SESSION['message'] = 'Berhasil Login';
            header('location: ../index.php');
        } else { 
            ?><div class="alert alert-danger" style="margin-top: 70px;">Password Salah</div><?php
        }
    } else { 
        ?><div class='alert alert-danger' style="margin-top: 70px;">Username Salah</div>
        
        <?php
    }
}
?>