<?php 
session_start();
require './config/connector.php';
$hasil = mysqli_query($conn, 'SELECT * FROM item');
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
                    <a class="navbar-brand" href="#">
                        <img src="./asset/image/logo2.png" alt="logo" height="40">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./pages/ListGame.php">Console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./pages/About.php">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex">
                    <?php if($_SESSION != null){ ?>
                        <div class="dropdown mx-5">
                            <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                            </button>
                            <ul class="dropdown-menu">
                                <?php if($_SESSION['id'] == 1){ ?>  
                                    <li><a class="dropdown-item" href="../pages/Add-admin.php">add item</a></li>
                                <?php } else { ?>
                                    <li><a class="dropdown-item" href="./pages/Profile.php">profile</a></li>
                                <?php } ?>
                                <li><a class="dropdown-item" href="./config/logout.php">logout</a></li>
                            </ul>
                        </div>
                    <?php } else{ ?>
                        <a href="../play/pages/Login.php" class="nav-link text-white mx-4">Login</a>
                    <?php } ?>
                </div>
            </nav>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center align-items-center min-vh-100">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <img src="./asset/image/logo.png" alt="logo" style="height: 150px;">
                                </div>
                                <div class="col-md-12">
                                    <h1><strong>Selamat Datang di Website PLAY</strong></h1>
                                </div>
                                <div class="col-md-12">
                                    <p>Kami menyediakan sewa berbagai jenis game console dan aksesorisnya</p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center align-items-center min-vh-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <iframe width="600" height="355" src="https://www.youtube.com/embed/cxXvYJyBlc4?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        
        <section>
            <footer class="text-muted text-center bg-light fixed-bottom">
                <div class="text-center p-2" style="color:black">
                    Created by Andhika_1202200168
                </div>
            </footer>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>