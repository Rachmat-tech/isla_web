@extends('user.layout.main')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Alumni Award</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row portfolio-container" data-aos="fade-up">

                @forelse ($alumnis as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-img"><img src={{ asset('storage/photos/alumniaward-img/' . $item->foto) }}
                                class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <p>{{ $item->keterangan }}</p>
                            <a href="{{ asset('storage/photos/alumniaward-img/' . $item->foto) }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="{{ $item->keterangan }}"><i class="bx bx-plus"></i></a>
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
