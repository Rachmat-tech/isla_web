@extends('adminLayout.main')
@section('title', 'Galeri Isla')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Galeri Isla</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('tambahgaleri') }}" class="btn btn-success mb-2">Tambah +</a>
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($galeri as $item)

                        <tr>
                            {{-- <th scope="row">{{ $row->id }}</th> --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <img style="width: 80px" src="{{ asset('storage/photos/galeriIsla-img/'.$item->foto) }}" alt="">
                            </td>
                            <td>
                                {{ $item->keterangan }}
                            </td>
                            <td>
                                <a href="{{ route('editgaleri', $item->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('deletegaleri', $item->id) }}" class="btn btn-danger delete" data-id="{{ $item->id }}" data-foto="{{ $item->foto }}">Delete</a>
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
