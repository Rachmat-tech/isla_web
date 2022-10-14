@extends('user.layout.main')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Detail Loker</h2>

        </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                @forelse ($lokerDetails as $item)
                    <div class="col-lg-8">
                        <div class="slides-1 portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/photos/loker-img/' . $item->foto) }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Informasi Loker</h3>
                            <ul>
                                <li><strong>Kategori</strong>: {{ $item->kategori }}</li>
                                <li><strong>Perusahaan</strong>: {{ $item->perusahaan }}</li>
                                <li><strong>Waktu Pendaftaran</strong>: {{ $item->waktu_pendaftaran }}</li>
                                <li><strong>URL</strong>: <a href="{{ $item->url }}">{{ $item->url }}</a></li><br>
                                <li style="text-align:justify;">
                                    <p>
                                        {!! $item->isi !!}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info" role="alert">
                        Data Tidak Ada
                    </div>
                @endforelse
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
