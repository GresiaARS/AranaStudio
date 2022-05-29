

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>ARANA STUDIO - ADMIN - OUR WORKS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
     <link href ="http://codepen.io/vaibhavsingh97/full/VjRAXW" rel="stylesheet">

<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
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
              <li class="scroll-to-section"><a href=index2.php >Home</a></li>
              <li class="scroll-to-section"><a href=index2.php#services>About Us</a></li>
              <li class="scroll-to-section"><a href=our-work.php class="active">Our Works</a></li> 
              <li class="scroll-to-section"><a href=a-contactus.php>Contact Us</a></li> 
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
<div style="margin-top: 130px;" class="section-heading">
   <center><h2>Proyek-Proyek <em> Yang Sedang</em> dan &amp; <span>Telah</span> Kami Kerjakan</h2></center>




</div>
    <div class="container">
        
       <center>
           <form class="form-inline" >
             <div style="margin-top: 50px;margin-left: 300px;" class="form-group" >
              <input type="text" class="form-control" style="width:490px; height: 41px;"  id="KataKunci" name="KataKunci" placeholder="Ketik nama aplikasi dan tekan enter untuk mencari" required="" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
              <a href="our-work.php" class="btn btn-danger">Reset</a>
             </div>
          </form>  </center>
       

    <div class="row">     
  <?php
        include "koneksi.php";
        $page = (isset($_GET['page']))? (int) $_GET['page'] :1;

        // $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";

        $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

        $limit = 3;
        $limitStart = ($page - 1) * $limit;

        //kondisi jika parameter kosong
        if($kolomKataKunci==""){
          $SqlQuery = mysqli_query($koneksi, "select * from work limit $limitStart, $limit");
        }else{
          //kondisi terisi
          $SqlQuery = mysqli_query($koneksi, "select * from work where judul like '%$kolomKataKunci%' limit $limitStart, $limit");
        }

        $no = $limitStart + 1;
        while($row = mysqli_fetch_array($SqlQuery)){
          ?>

        <div class="col justify-content-center d-flex">
          <div class="card" style="margin-top: 70px;width: 350px;">
            <img style="object-fit: cover;object-position: center;" src="<?php echo $row['foto'] ?>"  class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title"><?php echo $row['judul'] ?></h5>
                    <p style="height: 100px;overflow: hidden; text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4; line-clamp: 2; -webkit-box-orient: vertical;"class="card-text"><?php echo $row['deskripsi'] ?></p>
                    <p style="" class="card-text">Kategori :<?php echo $row['kategori'] ?></p>
                    <p style=""class="card-text">Status   :<?php echo $row['status'] ?></p>
                    <a class="btn btn-primary" href="edreq-work.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $row ['id']; ?>">Hapus</a>
              </div>
          </div>
        </div>


      <?php
    }
    ?>
   </div>


    <div class="row mt-5">
                    <div class="col">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
      <?php
        if($page == 1){ 
      ?>        
       <li class="page-item disabled">
        <span class="page-link">Previous</span>
        </li>
      <?php
        }
        else{ 
          $LinkPrev = ($page > 1)? $page - 1 : 1;  

          if($kolomKataKunci==""){
          ?>
             <li class="page-item"><a class="page-link" href="our-work.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
       <?php     
          }else{
        ?> 
          <li class="page-item"><a class="page-link" href="our-works.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
         <?php
           } 
        }
      ?>

      <?php
        //kondisi jika parameter pencarian kosong
        if($kolomKataKunci==""){
          $SqlQuery = mysqli_query($koneksi, "SELECT * FROM work");
        }else{
          //kondisi jika parameter kolom pencarian diisi
          $SqlQuery = mysqli_query($koneksi, "SELECT * FROM work WHERE judul LIKE '%$kolomKataKunci%'");
        }     
      
        //Hitung semua jumlah data yang berada pada tabel Sisawa
        $JumlahData = mysqli_num_rows($SqlQuery);
        
        // Hitung jumlah halaman yang tersedia
        $jumlahPage = ceil($JumlahData / $limit); 
        
        // Jumlah link number 
        $jumlahNumber = 1; 

        // Untuk awal link number
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        
        // Untuk akhir link number
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
          $linkActive = ($page == $i)? ' class="active"' : '';

          if($kolomKataKunci==""){
      ?>
         
          <li class="page-item" <?php echo $linkActive; ?>><a class="page-link" href="our-work.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

      <?php
        }else{
          ?>
          <li class="page-item" <?php echo $linkActive; ?>><a class="page-link" href="our-work.php?Kolom=<?php echo judul?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php
        }
      }
      ?>
      
      <!-- link Next Page -->
      <?php       
       if($page == $jumlahPage){ 
      ?>
        <li class="page-item disabled">
                <span class="page-link">Next</span>
                </li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
       if($kolomKataKunci==""){
          ?>
            <li class="page-item"><a class="page-link" href="our-work.php?page=<?php echo $linkNext; ?>">Next</a></li>
       <?php     
          }else{
        ?> 
 
           <li class="page-item"><a class="page-link" href="our-work.php?Kolom=<?php echo judul;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>
      <?php
        }
      }
      ?>
    </ul>
  </div>
</div>

</body>

</div>
</center>
            </div>
  <!--         </div>
        </div>
      </div>
    </div>
  </div>
 -->
 

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>