@extends('adminLayout.main')
@section('title', 'contact')
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
                        <form action="{{ route('savedcontact') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" name="instagram" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Call</label>
                                <input type="numeric" name="no_hp" class="form-control">
                            </div>
                            <a href="{{ route('contact') }}" class="btn btn-secondary">Cencel</a>
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
