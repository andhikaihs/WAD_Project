<?php 
session_start();
require '../config/connector.php';

$show = mysqli_query($conn, 'SELECT * FROM item');
$row = mysqli_num_rows($show)
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
                                <?php echo $_SESSION['username'] ?>
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
                        <a href="../pages/Login.php" class="nav-link text-white mx-4">Login</a>
                    <?php } ?>
                </div>
            </nav>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div id="carouselExampleControls" class="carousel slide w-50" data-bs-ride="carousel" style="margin-top: 100px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../asset/image/caro1.jpg" class="d-block" alt="..." style="height: 360px;">
                            </div>
                            <div class="carousel-item">
                                <img src="../asset/image/caro2.jpg" class="d-block" alt="..." style="height: 360px;">
                            </div>
                            <div class="carousel-item">
                                <img src="../asset/image/caro3.jpg" class="d-block" alt="..." style="height: 360px;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 mt-5">
                    <h3><b>Daftar Item</b></h3>
                    <p>List Item</p>
                </div>
            </div>
            <div class="row mt-3">
            <?php 
                if($row == 0) {?>
                <h3 class='text-center' style='margin-top:150px; margin-bottom: 150px;'>Tidak Ada Item</h3>
                <?php }
                else{
                    while($data = mysqli_fetch_array($show)) {
                ?>
                <div class="col-md-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="../asset/image/item/<?php echo($data['image'])?>" class="card-img-top"  height="200" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b><?php echo($data['name_item'])?></b></h5>
                            <p class="card-text"><?php echo(substr($data['desc'], 0, 80))?>...</p>
                            <a href="Detail.php?id=<?php echo($data['id_item'])?>" class="btn btn-primary rounded-pill px-4">Detail</a>
                            <?php if($_SESSION['id']==1){ ?>
                                <a href="../config/delete.php?id=<?php echo($data['id_item'])?>" class="btn btn-danger rounded-pill px-4">Delete</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php }} ?>
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