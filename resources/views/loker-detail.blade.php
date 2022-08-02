@extends('layouts.main')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/header/h2.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Detail Loker</h2>

    </div>
  </div><!-- End Breadcrumbs -->


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/loker/img1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/loker/img3.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/loker/img2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/loker/img4.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Loker</h3>
              <ul>
                <li><strong>Kategori</strong>: Web design</li>
                <li><strong>Perusahaan</strong>: AS Company</li>
                <li><strong>Waktu Pendaftaran</strong>: 01 March, 2020</li>
                <li><strong>URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of loker detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection