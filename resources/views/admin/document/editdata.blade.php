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
                        <form action="{{ route('updatedocument', ['document' => $document->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            {{-- @method('PUT') --}}
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Document</label>
                                <input type="text" name="nama_document" class="form-control"
                                    value="{{ old('nama_document') != null ? old('nama_document') : $document->nama_document }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="desc_document" cols="30" rows="10">{{ old('desc_document') != null ? old('desc_document') : $document->deskripsi }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Document</label>
                                @if ($document->document)
                                    <iframe src="{{ asset('storage/document/' . $document->document) }}"
                                        frameborder="0"></iframe>
                                @else
                                
                                @endif

                                @error('document')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="document" class="form-control"
                                    value="{{ old('document') != null ? old('document') : $document->document }}"
                                    accept=".pdf">
                            </div>

                            <a href="{{ route('document') }}" class="btn btn-secondary">Cencel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


@endsection

@push('scripts')

@endpush
