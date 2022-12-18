<?php
include '../config/connector.php';
include '../config/register.php';

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
            </nav>
        </section>

        <section>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="../asset/image/login.jpg" alt="" style="height:100vh">
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                        <div class="row mt-5">
                            <div class="col-md-12 px-5">
                                <h1><b>Register</b></h1>
                                <form method="POST">
                                    <div class="mb-3 mt-4">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password2" required>
                                    </div>
                                    <button class="btn btn-primary mt-3" type="submit" name="submit">Daftar</button>
                                    <p class="mt-3">Anda sudah punya akun? <a href="../pages/Login.php">Login</a></p>
                                </form>
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