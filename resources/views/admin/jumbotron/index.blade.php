@extends('adminLayout.main')
@section('title', 'Dashboard')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        {{-- ingat hapus controller dan route --}}
        <div class="card card-custom">
            <div class="m-3">
                <h2 class="display-4">
                    Selamat Datang Admin
                    <span style="color: rgb(0, 80, 155)">ISLA UNHAS</span>
                </h2>
                <hr class="my-4">
                <p>
                    Selamat datang di <b>Dashboard Admin ISLA UNHAS</b>. Dashboard Admin adalah sistem yang memungkinkan Anggota
                    ISLA UNHAS mengelola Website secara profesional. Sistem ini diharapkan dapat memberikan kemudahan kepada
                    Anggota ISLA UNHAS untuk melakukan manajemen website dengan profesional.
                </p>
                <p>Selamat menggunakan fasilitas ini.</p>
                <p class="lead">
                </p>
            </div>
        </div>

    </section>


@endsection

@push('scripts')
@endpush
