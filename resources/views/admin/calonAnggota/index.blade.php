@extends('adminLayout.main')
@section('title', 'Calon Anggota')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Calon Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            {{-- <a href="#" class="btn btn-success mb-2">Tambah +</a> --}}
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat Tanggal Lahir</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Tahun Lulus</th>
                            <th scope="col">No Telp.</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($calon as $item)
                            <tr>
                                {{-- <th scope="row">{{ $row->id }}</th> --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->ttl }}</td>
                                <td>{{ $item->angkatan }}</td>
                                <td>{{ $item->tahun_lulus }}</td>
                                <td>0{{ $item->no_hp }}</td>
                                <td>
                                    {{-- <a href="{{ route('editpengurus', $item->id) }}" class="btn btn-info">Edit</a> --}}
                                    <a href="{{ route('deletecalon', $item->id) }}" class="btn btn-danger delete" data-id="{{ $item->id }}">Delete</a>

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
