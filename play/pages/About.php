<?php 
session_start();
require '../config/connector.php';
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
                <div class="row justify-content-md-center text-center mt-3">
                    <div class="col-md-12 mt-5">
                        <img src="../asset/image/logo.png" alt="logo" height="200px">
                    </div>
                    <div class="col-md-12">
                        <div class="row justify-content-md-center py-4 bg-light">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center align-items-center mb-3 ">
                                    <h1 style="font-family:Georgia, 'Times New Roman', Times, serif ; color:darkslategrey"><strong><u>OWNER</u></strong></h1>
                                </div>
                            </div> 
                            <div class="col-md-5">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="../asset/image/owner.jpg" alt="owner" height="450px">
                                        </div>        
                                    </div>       
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 style="font-family:cursive;"><strong>Jonatan Andre</strong></h1>
                                            <p style="font-family:'Times New Roman', Times, serif ;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis neque quis ligula aliquam pulvinar. Morbi sit amet tellus vulputate, fermentum enim vitae, varius metus. In auctor at nisi non gravida.
                                            Proin id ipsum eu mauris ornare scelerisque ut 
                                            </P>
                                            <p style="font-family:'Times New Roman', Times, serif ;">
                                            nec mi. Nullam fringilla lorem non vehicula suscipit. Ut et risus ultrices, mattis ex sed, rhoncus eros. In hac habitasse platea dictumst. Donec eleifend dolor non
                                            turpis vulputate, vel ullamcorper ante feugiat. Vivamus magna ante, faucibus a sapien tincidunt, finibus pharetra lacus. Aliquam vel magna ultricies, elementum metus egestas, lobortis eros. Morbi fin
                                            </p>
                                            <p style="font-family:'Times New Roman', Times, serif ;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis neque quis ligula aliquam pulvinar. Morbi sit amet tellus vulputate, fermentum enim vitae, varius metus. In auctor at nisi non gravida. 
                                            </P>
                                        </div>
        
                                    </div>
                                </div>                        
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center align-items-center my-3">
                                    <h1 style="font-family:Georgia, 'Times New Roman', Times, serif ; color:darkslategrey"><strong><u>LOCATION</u></strong></h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347863129!2d107.57311687144542!3d-6.903444341655676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1670437175010!5m2!1sen!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>   
                            <div class="col-md-12">
                                <h1 style="font-family:Georgia, 'Times New Roman', Times, serif ; color:darkslategrey"><strong><u>TARGET</u></strong></h1>
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