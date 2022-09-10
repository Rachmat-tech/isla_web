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
                        <form action="{{ route('editstruktur',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Input Foto</label>
                                @if ($data->foto)
                                <img src="{{ asset('storage/photos/strukturOrganisasi-img/' . $data->foto) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                @endif
                                
                                @error('foto')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="foto" class="form-control" value="{{ $data->foto }}"
                                    required accept=".jpg,.png,.jpeg">
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
<script>
    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush