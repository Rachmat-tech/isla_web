@extends('adminLayout.main')
@section('title', 'Proker')
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
                    <h1 class="m-0">Proker Nasional</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('tambahnasional') }}" class="btn btn-success mb-2">Tambah +</a>
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($nasional as $item)
                            <tr>
                                {{-- <th scope="row">{{ $row->id }}</th> --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <img class="img-berita" style="width: 80px"
                                        src="{{ asset('storage/photos/nasional-img/' . $item->foto) }}"
                                        alt="">
                                </td>
                                <td class="judul">{{ $item->judul }}</td>
                                <td class="d-none"><span class="isi">{!! $item->isi !!}</span></td>
                                <td class="date-create">{{ $item->date_create }}</td>
                                <td>
                                    <a href="{{ route('editnasional', $item->id) }}" class="btn btn-info">Edit</a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        data-title="{{ $item->judul }}" data-isi="{{ $item->isi }}"
                                        class="btn btn-warning btn-show-berita">Detail</button>
                                    <a href="{{ route('deletenasional', $item->id) }}" class="btn btn-danger delete"
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
                    <h5 class="modal-title" id="exampleModalLabel">Detail Proker</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="body-img">
                        <img id="img-modal-berita" style="width: 100%" src="" alt="">
                    </div>
                    <div>
                        <center>
                            <h4 class="mt-3" id="judul-modal-berita"></h4>
                            <span id="date-create-modal" style="font-size: 12px"></span>
                        </center>
                        <div class="mt-2">
                            <p id="isi-modal-berita"></p>
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
        $('.btn-show-berita').on('click', function() {

            let judul = $(this).parents("tr").find(".judul").text()
            let isi = $(this).parents("tr").find(".isi").text()
            let dateCreate = $(this).parents("tr").find(".date-create").text()
            let urlImg = $(this).parents("tr").find(".img-berita").attr('src')
            

            $('#judul-modal-berita').text(judul)
            $('#isi-modal-berita').text(isi)
            $('#date-create-modal').text(dateCreate)
            $("#img-modal-berita").attr("src", urlImg);
        })
    </script>
@endpush
