<?php
session_start();
require '../config/connector.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PlayUp - Service Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.2.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <h1>PlayUp<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../pages/about.php">About</a></li>
          <li><a href="../pages/services.php" class="active">Services</a></li>
          <?php if($_SESSION==null){ ?>
            <li><a href="../pages/login.php">Login</a></li>
          <?php }else{ ?>
            <li><a href="../pages/order.php">Order</a></li>
            <li class="dropdown"><a href="#"><img src="../assets/icon/user.png" height="14px" class="me-2"><?php echo $_SESSION['username']; ?> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="../config/logout.php">Logout</a></li>
              </ul>
            </li>
          <?php } ?>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/breadcrumbs.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Booking</h2>
        <ol>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../pages/services.php">Services</a></li>
          <li>Booking</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-md-center">

          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">

                <form action="../config/booking.php" method="POST" enctype="multipart/form-data">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $_SESSION['name'] ?>" required>
                  </div>    

                  <div class="form-outline mb-4">
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address</label>
                    <textarea name="address" id="address" rows="3" class="form-control" required></textarea>
                  </div>

                  <div class="form-outline mb-4">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" aria-label="service" name="service" required>
                      <option <?php if($_GET['id']==1){echo'selected';} ?> value="Sony Playstation 4">Sony Playstation 4</option>
                      <option <?php if($_GET['id']==2){echo'selected';} ?> value="Sony Playstation 5">Sony Playstation 5</option>
                      <option <?php if($_GET['id']==3){echo'selected';} ?> value="Sony Playstation Portable">Sony Playstation Portable</option>
                    </select>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="date">Booking Date</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="duration">Duration</label>
                    <input type="number" id="duration" name="duration" class="form-control" placeholder="days" required>
                  </div>

                  <div class="d-grid gap-1 col-3 mx-auto">
                    <button type="submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body mb-2" name="submit">Order</button>
                    <a href="../pages/services.php" class="btn btn-light btn-block btn-lg gradient-custom-4 text-body" role="button">Cancel</a>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>PlayUp</h3>
              <p>
                Bandung<br>
                Jawa Barat, Indonesia<br><br>
                <strong>Phone:</strong> +62 812 3456 7890<br>
                <strong>Email:</strong> info@playup.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://www.twitter.com" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-6 col-md-3 footer-links">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
              dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>PlayUp</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>