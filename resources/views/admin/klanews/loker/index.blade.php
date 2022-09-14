@extends('adminLayout.main')
@section('title', 'Loker')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Loker</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('tambahloker') }}" class="btn btn-success mb-2">Tambah +</a>
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">URL</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($loker as $item)
                            <tr>
                                {{-- <th scope="row">{{ $row->id }}</th> --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <img class="img-loker" style="width: 80px"
                                        src="{{ asset('storage/photos/loker-img/' . $item->foto) }}" alt="">
                                </td>
                                <td class="kategori">{{ $item->kategori }}</td>
                                <td class="d-none"><span class="isi">{!! $item->isi !!}</span></td>
                                <td class="perusahaan">{{ $item->perusahaan }}</td>
                                <td class="waktu_pendaftaran">{{ $item->waktu_pendaftaran }}</td>
                                <td class="url">{{ $item->url }}</td>
                                <td>
                                    <a href="{{ route('editloker', $item->id) }}" class="btn btn-info">Edit</a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-title="{{ $item->kategori }}" data-perusahaan="{{ $item->perusahaan }}"
                                        data-waktu_pendaftaran="{{ $item->waktu_pendaftaran }}"
                                        data-url="{{ $item->url }}" data-isi="{{ $item->isi }}"
                                        class="btn btn-warning btn-show-loker">Detail
                                    </button>
                                    <a href="{{ route('deleteloker', $item->id) }}" class="btn btn-danger delete"
                                        data-id="{{ $item->id }}" data-foto="{{ $item->foto }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Loker</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="body-img">
                        <img id="img-modal-loker" style="width: 100%" src="" alt="">
                    </div>
                    <div>
                        <center>
                            <h4 class="mt-3" id="kategori-modal-loker"></h4>
                            <span id="perusahaan-modal-loker"style="font-size: 12px"></span>
                            <span id="waktu-pendaftaran-modal" style="font-size: 12px"></span>
                            <span id="url-modal-loker" style="font-size: 12px"></span>
                        </center>
                        <div class="mt-2">
                            <p id="isi-modal-loker"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script>
        $('.btn-show-loker').on('click', function() {

            let kategori = $(this).parents("tr").find(".kategori").text()
            let isi = $(this).parents("tr").find(".isi").text()
            let perusahaan = $(this).parents("tr").find(".perusahaan").text()
            let url = $(this).parents("tr").find(".url").text()
            let waktuPendaftaran = $(this).parents("tr").find(".waktu-pendaftaran").text()
            let urlImg = $(this).parents("tr").find(".img-loker").attr('src')


            $('#kategori-modal-loker').text(kategori)
            $('#isi-modal-loker').text(isi)
            $('#perusahaan-modal-loker').text(perusahaan)
            $('#url-modal-loker').text(url)
            $('#waktu-pendaftaran-modal').text(waktuPendaftaran)
            $("#img-modal-loker").attr("src", urlImg);
        })
    </script>
@endpush
