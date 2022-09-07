@extends('adminLayout.main')
@section('title', 'Piminan Kami')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="{{ route('editpimpinan',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" value="{{ $data->jabatan }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Hp</label>
                                <input type="numeric" name="no_hp" class="form-control" value="{{ $data->no_hp }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Motto</label>
                                <input type="text" name="motto" class="form-control" value="{{ $data->motto }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Input Foto</label>
                                @if ($data->foto)
                                <img src="{{ asset('storage/photos/pimpinan-img/' . $data->foto) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                @endif

                                @error('foto')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="foto" class="form-control" id="image" required accept=".jpg,.png,.jpeg" onchange="previewImage()">
                            </div>
                            <a href="{{ route('pimpinan') }}" class="btn btn-secondary">Cencel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


@endsection

@push('scripts')
@endpush
