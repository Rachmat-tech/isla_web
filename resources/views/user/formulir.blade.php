@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/h1.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Formulir Pendaftaran</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>ISLA's</h2>
                    <p>Registration Form</p>
                </div>

                <div class="text-center" data-aos="fade-up">
                    <iframe
                        src="https://docs.google.com/forms/d/e/1FAIpQLSeFClLWEgHK4ANvWS0-cjuXBJUHt1mCOcwc6tKrMLKZ5mmUoA/viewform?embedded=true"
                        width="640" height="868" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
