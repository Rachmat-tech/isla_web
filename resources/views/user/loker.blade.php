@extends('user.layout.main')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Lowongan Kerja</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Info</h2>
                <p>Loker</p>
            </div>

            <div class="row gy-5">
                @forelse ($lokers as $item)
                    <div class="row portfolio-container" data-aos="fade-up">

                        <div class="col-lg-4 col-md-6 portfolio-item ">
                            <div class="portfolio-img"><img src="{{ asset('storage/photos/loker-img/' . $item->foto) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $item->kategori }}</h4>
                                <p>{{ $item->perusahaan }}</p>
                                <a href="/loker-detail" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                    </div>
                @empty
                    <div class="alert alert-info" role="alert">
                        Data Tidak Ada
                    </div>
                @endforelse
            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
