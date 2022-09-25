@extends('adminLayout.main')
@section('title', 'loker')
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
                        <form action="{{ route('editloker',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label class="form-label">Input Foto</label>
                                @if ($data->foto)
                                <img src="{{ asset('storage/photos/loker-img/' . $data->foto) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                @endif

                                @error('foto')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                                <input type="file" name="foto" class="form-control" id="image" accept=".jpg,.png,.jpeg" onchange="previewImage()">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" name="kategori" required class="form-control" value="{{ $data->kategori }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Perusahaan</label>
                                <input type="text" name="perusahaan" required class="form-control" value="{{ $data->perusahaan }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendaftaran</label>
                                <input type="text" name="waktu_pendaftaran" required class="form-control" value="{{ $data->waktu_pendaftaran }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">URL</label>
                                <input type="text" name="url" required class="form-control" required value="{{ $data->url }}">
                            </div>
                            <div class="form-floating mb-2">
                                <label for="floatingTextarea2">Isi Conten</label>
                                <textarea name="isi" class="form-control">{!! $data->isi !!}</textarea>
                            </div>
                            <a href="{{ route('loker') }}" class="btn btn-secondary">Cencel</a>
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

<script src="https://cdn.tiny.cloud/1/wsq6tbauqun7rq24d7d6wto27qs6qjlepz3f1whznzduu2rq/tinymce/5/tinymce.min.js"></script>
<script>
    var editor_config = {
    path_absolute : "/",
    selector: 'textarea',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>

@endpush
