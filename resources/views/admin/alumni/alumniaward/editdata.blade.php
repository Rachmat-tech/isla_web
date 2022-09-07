@extends('adminLayout.main')
@section('title', 'Alumni Award')
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
                        <form action="{{ route('editaward',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Input Foto</label>
                                @if ($data->foto)
                                <img src="{{ asset('storage/photos/alumniaward-img/' . $data->foto) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                @endif

                                @error('foto')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="foto" class="form-control" id="image" required accept=".jpg,.png,.jpeg" onchange="previewImage()">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}">
                            </div>
                            <a href="{{ route('alumni') }}" class="btn btn-secondary">Cencel</a>
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
