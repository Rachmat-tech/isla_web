<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ISLA UH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
 
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/vendor/aos/aos.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="../assets/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="../assets/vendor/remixicon/remixicon.css">
  <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
 
  {{-- Boostrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

 

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="../assets/css/style.css">


  <!-- =======================================================
  * Template Name: Selecao - v4.8.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1><a href="index.html">ISLA UNHAS</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <!-- .navbar -->
      <nav  id="navbar" class="navbar">
        <ul >
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li class="dropdown"><a href="#profile"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/tentang">Tentang ISLA</a></li>
              <li><a href="/pimpinan">Struktur Pimpinan</a></li>
              <li><a href="/organisasi">Struktur Organisasi</a></li>
              <li><a href="/mpo">Struktur MPO</a></li>
              <li><a href="/wilayah">Pengurus Wilayah</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#klanews"><span>Klanews</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/berita">Berita</a></li>
              <li><a href="/opini">Opini</a></li>
              <li><a href="/loker">Info Loker</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#proker"><span>Proker</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/proker-nasional">Proker Nasional</a></li>
              <li><a href="/proker-regional">Proker Regional</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#alumni"><span>Alumni & Kemitraan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/alumni">Alumni</a></li>
              <li><a href="/formulir">Form Pendaftaran Anggota</a></li>
              <li><a href="/kemitraan">Mitra</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/document">Document</a></li>
          <li><a class="nav-link scrollto" href="/contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      

     
    </div>
  </header><!-- End Header -->

 
    @yield('content')
  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h4>IKATAN SARJANA KELAUTAN UNHAS</h4>
      <p>Ruko Angsana Park, Jalan Angsana Raya Blok R, Rajawati Timur<br>Kalibata, Jakarta Selatan 12150 <br> Telp. 021 7949227</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>ISLA</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  {{-- script boostrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>