@extends('adminLayout.main')
@section('title', 'Struktur Organisasi')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Struktur</h1>
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
                        <form action="{{ route('savedstruktur') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Input Foto</label>
                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                @error('foto')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="foto" class="form-control" id="image" required accept=".jpg,.png,.jpeg" onchange="previewImage()">
                            </div>
                            <a href="{{ route('struktur') }}" class="btn btn-secondary">Cencel</a>
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
