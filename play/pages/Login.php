<?php 
session_start();
include '../config/connector.php';
include '../config/login.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <section>
            <nav class="navbar navbar-expand-lg bg-primary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../asset/image/logo2.png" alt="logo" height="40">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../pages/ListGame.php">Console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../pages/About.php">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex">
                    <?php if($_SESSION != null){ ?>
                        <div class="dropdown mx-4">
                            <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['name'] ?>
                            </button>
                            <ul class="dropdown-menu">  
                                <li><a class="dropdown-item" href="../pages/Profile.php">profile</a></li>
                                <li><a class="dropdown-item" href="../config/logout.php">logout</a></li>
                            </ul>
                        </div>
                    <?php } else{ ?>
                        <!-- <a href="../pages/Login.php" class="nav-link text-white mx-4">Login</a> -->
                    <?php } ?>
                </div>
            </nav>
        </section>

        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="justify-content-center img-fluid">
                        <img src="../asset/image/login.jpg" alt="" style="height:100vh ;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="row mt-5">
                            <div class="col-md-11 p-5">
                                <div clas="d-flex justify-content-center align-items-center">
                                    <h3><b>Login</b></h3>
                                    <form method="POST">
                                        <div class="mb-3 mt-5">
                                            <label for="usermame" class="form-label">Username</label>
                                            <input type="username" class="form-control" id="username" name="username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="Y" id="rememberMe" name="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                                        </div>
                                        <button class="btn btn-primary mt-4" type="submit" name="submit">Masuk</button>
                                        <p class="mt-3">Anda belum punya akun? <a href="../pages/Register.php">Daftar</a></p>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <footer class="text-muted text-center bg-light">
                <div class="text-center p-2" style="color:black">
                    Created by Andhika_1202200168
                </div>
            </footer>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>