@extends('adminLayout.main')
@section('title', 'Document')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Document Kami</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('tambahdocument') }}" class="btn btn-success mb-2">Tambah +</a>
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Document</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($document as $item)

                        <tr>
                            {{-- <th scope="row">{{ $row->id }}</th> --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>{{ $item->nama_document }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ asset('storage/document/'.$item->document) }}" class="btn btn-info">Download</a>
                                <a href="{{ route('editdocument', $item->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('deletedocument', $item->id) }}" class="btn btn-danger delete" data-id="{{ $item->id }}" data-foto="{{ $item->document }}">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>
        </div><!-- /.container-fluid -->
    </section>


@endsection

@push('scripts')
@endpush
