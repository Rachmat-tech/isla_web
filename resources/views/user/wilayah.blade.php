@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Pengurus Wilayah</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Pimpinan</h2>
                    <p>Wilayah</p>
                </div>

                <div class="row" style="justify-content: center">
                    @forelse ($wilayas as $item)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{ asset('storage/photos/pengurusWilayah-img/' . $item->foto) }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->nama }}</h4>
                                    <h6>{{ $item->jabatan }}</h6>
                                    {{-- <span>{{ $item->motto }}</span> --}}
                                    <span>{{ $item->motto }}</span>
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
        <!-- End Team Section -->



    </main><!-- End #main -->
@endsection
