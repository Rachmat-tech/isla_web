<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ISLA UH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}landingPage/assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/vendor/swiper/swiper-bundle.min.css">

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



    <!-- Template Main CSS File -->

    <link rel="stylesheet" href="{{ asset('') }}landingPage/assets/css/style.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo row">
                {{-- <div class="col-4"> --}}
                <!-- Uncomment below if you prefer to use an image logo -->
                {{-- <a href="/"><img src="landingPage/assets/img/logo.png" alt="" class="img-fluid"></a> --}}
                {{-- </div> --}}
                {{-- <div class="col-8">
                    <h1 class="mt-4 d-none d-sm-block"><a href="index.html">ISLA UNHAS</a></h1>
                </div> --}}
            </div>

            <!-- .navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="dropdown"><a
                            class="{{ request()->is('tentang') || request()->is('mpo') || request()->is('pimpinan') || request()->is('organisasi') || request()->is('wilayah') ? 'active' : '' }}"
                            href="#profile"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/tentang">Tentang ISLA</a></li>
                            <li><a href="/pimpinan">Struktur Pimpinan</a></li>
                            <li><a href="/mpo">Struktur MPO</a></li>
                            <li><a href="/organisasi">Struktur Organisasi</a></li>
                            <li><a href="/wilayah">Pengurus Wilayah</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a
                            class="{{ request()->is('berita') || request()->is('opini') || request()->is('loker') ? 'active' : '' }}"
                            href="#klanews"><span>Klanews</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/berita">Berita</a></li>
                            <li><a href="/opini">Opini</a></li>
                            <li><a href="/loker">Info Loker</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a
                            class="{{ request()->is('proker-nasional') || request()->is('proker-regional') ? 'active' : '' }}"
                            href="#proker"><span>Proker</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/proker-nasional">Proker Nasional</a></li>
                            <li><a href="/proker-regional">Proker Regional</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a
                            class="{{ request()->is('alumni') || request()->is('galeri') ? 'active' : '' }}"
                            href="#alumni"><span>Alumni</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/alumni">Alumni Award</a></li>
                            <li><a href="/galeri">Galeri</a></li>
                            {{-- <li><a href="/formulir">Form Pendaftaran Anggota</a></li>
              <li><a href="/kemitraan">Mitra</a></li> --}}
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('document') ? 'active' : '' }}"
                            href="/document">Document</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}"
                            href="/contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>



        </div>
    </header><!-- End Header -->


    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-12 footer-info">
                        <a href="/" class="logo d-flex align-items-center">
                            <span>ISLA UNHAS</span>
                        </a>
                        <div class="social-links d-flex  mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://m.facebook.com/isla.unhas.52?eav=AfaA7O2bN4x_Wvpb3ar8MOw60GWtb4MyxGEfi1B1Mt0uBTEOaFVoL7AqNXokqfqCSqQ&tsid=0.5078483124854167&source=result"
                                target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/isla_unhas?igshid=YmMyMTA2M2Y=" target="_blank"
                                class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                        <h4>Our Address</h4>
                        <p>
                            Jl. Angsana Raya No.01 Blok R. Rawajati Timur Kalibata Jakarta Selatan 12150

                            <br><br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Phone: 0217949227<br>
                            Email: sarjana.kelautan.unhas@bestparadize.com <br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                        <h4>Donasi</h4>
                        <p>
                            2135-01-001255-53-6 <br>
                            BRI an ikatan sarjana kelautan universitas
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>ISLA</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div> --}}
    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}landingPage/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}landingPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}landingPage/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}landingPage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}landingPage/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}landingPage/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}landingPage/assets/js/main.js"></script>
    {{-- script boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    @stack('js')
</body>

</html>
