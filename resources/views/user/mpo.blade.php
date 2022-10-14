@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Struktur MPO</h2>
                <h2>(Majelis Pertimbangan Organisasi)</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Pimpinan</h2>
                    <p>MPO</p>
                </div>

                <div class="row" style="justify-content: center">
                    @forelse ($mpos as $item)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{ asset('storage/photos/mpo-img/' . $item->foto) }}" class="img-fluid"
                                        alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->nama }}</h4>
                                    <h6>{{ $item->jabatan }}</h6>
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