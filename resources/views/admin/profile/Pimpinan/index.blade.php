@extends('adminLayout.main')
@section('title', 'Pimpinan Kami')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pimpinan Kami</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('tambahpimpinan') }}" class="btn btn-success mb-2">Tambah +</a>
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Motto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pimpinan as $item)

                        <tr>
                            {{-- <th scope="row">{{ $row->id }}</th> --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <img style="width: 80px" src="{{ asset('storage/photos/pimpinan-img/'.$item->foto) }}" alt="">
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->motto }}</td>
                            <td>
                                <a href="{{ route('editpimpinan', $item->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('deletepimpinan', $item->id) }}" class="btn btn-danger delete" data-id="{{ $item->id }}" data-foto="{{ $item->foto }}">Delete</a>
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