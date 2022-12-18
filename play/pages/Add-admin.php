<?php 
session_start();
include '../config/connector.php';

$uid = $_SESSION['id'];
$show = mysqli_query($conn, "SELECT * FROM user WHERE id='$uid'");
$row = mysqli_num_rows($show);
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
                                <li><a class="dropdown-item" href="../config/logout.php">logout</a></li>
                            </ul>
                        </div>
                    <?php } else{ ?>
                        <a href="../play/pages/Login.php" class="nav-link text-white mx-4">Login</a>
                    <?php } ?>
                </div>
            </nav>
        </section>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-12 mt-5"></div>
                    <h2><b>Tambah Console</b></h2>
                    <div class="col-md-12">
                        <p>Tambah Console Baru Anda </p>
                    </div>
                </div>
                <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Playstation 4">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type" placeholder="Console">
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" placeholder="Sony">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <input type="text" class="form-control" id="desc" name="desc">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price (/day)</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="img">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Status</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Tersedia">
                                    <label class="form-check-label" for="inlineRadio1">Tersedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Tidak Tersedia">
                                    <label class="form-check-label" for="inlineRadio2">Tidak Tersedia</label>
                                </div>
                            </div>
                            <div class="mt-3 pb-3">
                                <button class="btn btn-primary" type="submit">Selesai</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <section>

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