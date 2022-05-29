<?php
session_start();
 
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'gagal';
  header('Location: login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>ARANA STUDIO - Build Project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.svg" alt="team meeting">
             <!--  <h4>Spac<span>Dyna</span></h4> -->
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href=index.php >Home</a></li>
            <!--   <li class="scroll-to-section"><a href=works2.php class="active">Req Product</a></li> -->
              <li class="scroll-to-section"><a href="#services" >About Us</a></li>
              <li class="scroll-to-section"><a href=u-our-work.php>Our Works</a></li> 
              <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button"><a href="logout.php">Logout</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->



  <div id="contact" style="margin-top: 150px;" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Digital Products Needs</h2>
            <div  class="phone-info">
              <h4 style="color: black;">For any enquiry, Call Us: <span><i class="fa fa-phone"></i>  <a style="color: black;" href="https://wa.me/+6281299366151">+6281299366151</a></span></h4>
            </div>
          </div>
        </div>

        <div  class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form style="background-color: #F8F8FF;" id="contact" action="insertwork.php" enctype="multipart/form-data" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset >
                  <label  class="form-label">Gambar Referensi Produk</label>
                   <input style="padding-top: 7px;" type="file" class="form-control"  name="foto" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label  class="form-label">Nama Produk</label>
                  <input type="text" name="judul" id="judul" placeholder="judul"  required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label  class="form-label">Kategori</label>
                  <div style="background-color: #D1F3FF; border-radius: 30px;">
                    <center>
                  <input style="margin-top: 15px; width: 15px; height: 15px;" type="radio" name="kategori" value="Web" required="">Web
                  <input style="margin-top: 15px; margin-left: 50px ;width: 15px; height: 15px;" type="radio" name="kategori" value="Mobile" required="">Mobile
                  <input style="margin-top: 15px; margin-left: 50px ; width: 15px; height: 15px;" type="radio" name="kategori" value="Dekstop" required="">Dekstop
                  <input style="margin-top: 15px; margin-left: 50px ;;width: 15px; height: 15px;" type="radio" name="kategori" value="IOS" required="">IOS
                </center></div>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label  class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="deskripsi" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Submit</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
     <p>© Tugas Web Kelompok 3 | Ahmad Rifaldi, Ananda Syifa, Gresia Andayani, M. Nur Syamil Azzam
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>

</body>
</html>