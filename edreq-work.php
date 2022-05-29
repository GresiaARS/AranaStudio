<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Space Dynamic - SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

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
              <li class="scroll-to-section"><a href="#services" >About Us</a></li>
              <li class="scroll-to-section"><a href=works.php class="active">Our Works</a></li> 
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
        <?php include 'koneksi.php';
          if (isset($_GET['id']))
          $id = $_GET['id'];
          $data = mysqli_query($koneksi, "select * from work where id ='$id'");
          while ($d = mysqli_fetch_array($data)) { ?>
        <div  class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form name="formD" style="background-color: #F8F8FF;" id="contact" action="update.php" enctype="multipart/form-data" method="post">
            <div class="row">  
              <div class="col-lg-12">
                <fieldset>
                  <label  class="form-label">Gambar Referensi Produk</label>
                  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                  <input type="file" name="foto" value="<?php echo $d['foto']; ?>">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label  class="form-label">Nama Produk</label>
                  <input class="form-control"required type="text" id="judul" name="judul" value="<?php echo $d['judul']; ?>">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label  class="form-label">Deskripsi</label>
                  <input class="form-control"required type="text" id="deskripsi" name="deskripsi" value="<?php echo $d['deskripsi']; ?>">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label  class="form-label">Kategori</label>
                  <div style="background-color: #D1F3FF; border-radius: 30px;">
                   <input readonly="" class="form-control"required type="text" id="kategori" name="kategori" value="<?php echo $d['kategori']; ?>">
                </fieldset>
              </div>
             <div class="col-lg-6">
                <fieldset>
                  <label  class="form-label">Status</label>
                  <div style="background-color: #D1F3FF; border-radius: 30px;">
                   <input class="form-control"required type="text" id="status" name="status" value="<?php echo $d['status']; ?>">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" value="simpan" id="form-submit" class="main-button ">Update</button>
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
          <p>© Tugas Web Kelompok 3 | Ahmad Rifaldi, Ananda Syifa, Gresia Andayani, M. Nur Syamil Azzam |
          
          <!-- <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a> --></p>
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
    <?php
}
?> 