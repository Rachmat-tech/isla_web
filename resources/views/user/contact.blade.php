@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Kontak</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>ISLA</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row mt-5">
                    @forelse ($contacts as $item)
                        <div class="col-lg-4" data-aos="fade-right">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>{{ $item->location }}</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>{{ $item->email }}</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-instagram"></i>
                                    <h4>Instagram:</h4>
                                    <p>{{ $item->instagram }}</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>0{{ $item->no_hp }}</p>
                                </div>

                            </div>
                        @empty
                            <div class="alert alert-info" role="alert">
                                Data Tidak Ada
                            </div>
                    @endforelse
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0 text-center" data-aos="fade-left">

                </div>


            </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
