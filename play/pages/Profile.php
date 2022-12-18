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
                                <li><a class="dropdown-item" href="../pages/Profile.php">profile</a></li>
                                <li><a class="dropdown-item" href="../config/logout.php">logout</a></li>
                            </ul>
                        </div>
                    <?php } else{ ?>
                        <a href="../play/pages/Login.php" class="nav-link text-white mx-4">Login</a>
                    <?php } ?>
                </div>
            </nav>
        </section>

        <section>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="container mt-5">
                        <h3><b>Profile</b></h3><br>
                        <form method="POST" action="../config/profile.php">
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>"/>
                            <?php while($data = mysqli_fetch_array($show)) { ?>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control bg-light" id="username" name="username" value="<?= $data['username']?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $data['name']?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $data['email']?>">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor Handphone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="<?= $data['phone']?>">
                            </div>
                            <label for="address" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?= $data['address']?>">
                            <hr>
                            <div class="mb-3">
                                <label for="password1" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password1" name="password1">
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Ulangi Kata Sandi</label>
                                <input type="password" class="form-control" id="password2" name="password2">
                            </div>
                            <?php } ?>
                            
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </form>
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