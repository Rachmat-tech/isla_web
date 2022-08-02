@extends('layouts.main')

@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/header/h1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
  
          <h2>Tentang ISLA</h2>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>ISLA</h2>
            <p>Logo</p>
          </div>

          <div class="row gy-4" data-aos="fade-up">
            <div class="col-lg-4">
              <img src="../assets/img/logo.png" class="img-fluid" alt="" width="250" height="250">
            </div>
            <div class="col-lg-8">
              <div class="content ps-lg-5">
                <h3>ISLA Merupakan</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
                {{-- <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul> --}}
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->

  </main><!-- End #main -->

@endsection