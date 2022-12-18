<?php 
session_start();
require '../config/connector.php';

$id = $_GET['id'];
$show = mysqli_query($conn, "SELECT * FROM item WHERE id_item='$id'");
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
            <nav class="navbar navbar-expand-lg bg-primary">
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
                <?php while($data = mysqli_fetch_array($show)) { ?>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <h3><b><?php echo($data['name_item']) ?></b></h3>
                        <p>Detail Item <?php echo($data['name_item']) ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="../asset/image/item/<?php echo($data['image']) ?>" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <form action="../config/edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="id_item" name="id_item" value="<?php echo $data['id_item'] ?>"/>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?=$data['name_item']?>" <?php if($_SESSION['id']!=1){echo'readonly';} ?>> 
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type" value="<?=$data['type']?>" <?php if($_SESSION['id']!=1){echo' readonly';} ?>>
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" value="<?=$data['merk']?>" <?php if($_SESSION['id']!=1){echo' readonly';} ?>>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <input type="text" class="form-control" id="desc" name="desc" value="<?=$data['desc']?>" <?php if($_SESSION['id']!=1){echo' readonly';} ?>>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="<?=$data['price']?>" <?php if($_SESSION['id']!=1){echo' readonly';} ?>>
                            </div>
                            <?php if($_SESSION['id']==1){ ?>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="img" value="<?=$data['image']?>" <?php if($_SESSION['id']!=1){echo' readonly';} ?>>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Status</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Tersedia" <?php if($data['status']=='Tersedia'){echo'checked';} ?>>
                                    <label class="form-check-label" for="inlineRadio1">Tersedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Tidak Tersedia" <?php if($data['status']=='Tidak Tersedia'){echo'checked';} ?>>
                                    <label class="form-check-label" for="inlineRadio2">Tidak Tersedia</label>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            <?php } else {?>
                                <div>
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" value="<?php if($data['status']=='Tersedia'){echo'Tersedia';}else{echo'Tidak Tersedia';} ?>" readonly>
                                </div>
                            <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>

        <section>
            <footer class="text-muted text-center bg-light mt-3">
                <div class="text-center p-2" style="color:black">
                    Created by Andhika_1202200168
                </div>
            </footer>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>