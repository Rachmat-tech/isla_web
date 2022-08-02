@extends('layouts.main')

@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container" >
          <h2 class="animate__animated animate__fadeInDown">Welcome To <span>ISLA UNHAS</span></h2>
          <p class="animate__animated fanimate__adeInUp">Official Website</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
        
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <img src="../assets/img/header/h1.jpg" alt="" class="jumbotron">
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <img src="../assets/img/header/h2.jpg" alt="" class="jumbotron">
        </div>
      </div>

      
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Tentang</h2>
          <p>ISLA UNHAS</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="/tentang" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Want To Join?</h3>
            <p>Anda Alumni Kelautan Unhas dan ingin bergabung dengan ISLA?</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="/formulir">Click Here</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Loker Section ======= -->
       <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>Info</h2>
            <p>Loker</p>
          </div>

          <ul class="d-flex justify-content-end" data-aos="fade-up">
            <li style="list-style: none;"><a href="/loker">[Selengkapnya]</a></li>
          </ul>
  
          <div class="row portfolio-container" data-aos="fade-up">
  
            <div class="col-lg-4 col-md-6 portfolio-item ">
              <div class="portfolio-img"><img src="assets/img/loker/img2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Nama Loker</h4>
                <p>Perusahaan Bersangkutan</p>
                <a href="assets/img/loker/img2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="/loker-detail" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item ">
              <div class="portfolio-img"><img src="assets/img/loker/img1.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Nama Loker</h4>
                <p>Perusahaan Bersangkutan</p>
                <a href="assets/img/loker/img1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="/loker-detail" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img"><img src="assets/img/loker/img3.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Nama Loker</h4>
                <p>Perusahaan Bersangkutan</p>
                <a href="assets/img/loker/img3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="/loker-detail" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img"><img src="assets/img/loker/img4.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Nama Loker</h4>
                <p>Perusahaan Bersangkutan</p>
                <a href="assets/img/loker/img4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="/loker-detail" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img"><img src="assets/img/loker/img5.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Nama Loker</h4>
                <p>Perusahaan Bersangkutan</p>
                <a href="assets/img/loker/img5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="/loker-detail" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-img"><img src="assets/img/loker/img6.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Nama Loker</h4>
                <p>Perusahaan Bersangkutan</p>
                <a href="assets/img/loker/img6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="/loker-detail" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
    <!-- End loker Section -->

       <!-- ======= Recent Blog Posts Section ======= -->
       <section id="recent-posts" class="recent-posts">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>Berita</h2>
            <p>Kelautan</p>
          </div>
  
          <ul class="d-flex justify-content-end" data-aos="fade-up">
            <li style="list-style: none;"><a href="/berita">[Selengkapnya]</a></li>
          </ul>

          <div class="row gy-5">
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">Tue, December 12</span>
                  <span class="post-author"> / Julia Parker</span>
                </div>
                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
                <a href="/blog-detail" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">Fri, September 05</span>
                  <span class="post-author"> / Mario Douglas</span>
                </div>
                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
                <a href="/blog-detail" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">Tue, July 27</span>
                  <span class="post-author"> / Lisa Hunter</span>
                </div>
                <h3 class="post-title">Quia assumenda est et veritati</h3>
                <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
                <a href="/blog-detail" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">Tue, Sep 16</span>
                  <span class="post-author"> / Mario Douglas</span>
                </div>
                <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
                <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
                <a href="/blog-detail" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End Recent Blog Posts Section -->


  </main><!-- End #main -->

  @endsection
  