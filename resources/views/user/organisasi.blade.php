@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/pulau.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Struktur Organisasi ISLA</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Struktur Organisasi</h2>
                    <p>ISLA</p>
                </div>

                <div class="row">
                    @forelse ($organisasis as $item)
                        <img src="{{ asset('storage/photos/strukturOrganisasi-img/' . $item->foto) }}" class="img-fluid"
                            alt="" width="150" height="150">
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
