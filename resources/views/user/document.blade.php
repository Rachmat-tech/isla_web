@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/h1.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Dokumen</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title" data-aos="zoom-out">
                    <h2>ISLA'S</h2>
                    <p>Documents</p>
                </div>

                <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Document</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @forelse ($documents as $item)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_document }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td> <a class="btn btn-primary"
                                        href="{{ asset('storage/document/' . $item->document) }}">Download</a></td>
                            </tr>
                        </tbody>
                    @empty
                        <div class="alert alert-info" role="alert">
                            Data Tidak Ada
                        </div>
                    @endforelse
                </table>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
