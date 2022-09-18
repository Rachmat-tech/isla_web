@extends('adminLayout.main')
@section('title', 'document')
@section('css')

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data</h1>
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
                        <form action="{{ route('saveddocument') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Document</label>
                                <input type="text" name="nama_document" value="{{ old('nama_document') }}" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="desc_document" cols="30" rows="10">{{ old('desc_document') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Document</label>
                                @error('document')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="document" class="form-control" required accept=".pdf">
                            </div>
                            <a href="{{ route('document') }}" class="btn btn-secondary">Cencel</a>
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
