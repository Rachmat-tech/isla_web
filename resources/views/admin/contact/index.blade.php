@extends('adminLayout.main')
@section('title', 'Contact')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('tambahcontact') }}" class="btn btn-success mb-2">Tambah +</a>
            <div class="row card card-custom">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Location</th>
                            <th scope="col">Email</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Call</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contact as $item)

                        <tr>
                            {{-- <th scope="row">{{ $row->id }}</th> --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->instagram }}</td>
                            <td>0{{ $item->no_hp }}</td>
                            <td>
                                <a href="{{ route('editcontact', $item->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('deletecontact', $item->id) }}" class="btn btn-danger delete" data-id="{{ $item->id }}" data-foto="{{ $item->foto }}">Delete</a>
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
