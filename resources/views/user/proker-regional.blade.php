@extends('user.layout.main')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Proker Regional</h2>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

                    <div class="row gy-5 posts-list">

                        @forelse ($prokerRegionals as $item)
                            <div class="col-lg-4">
                                <article class="d-flex flex-column">

                                    <div class="" style="height: 400px; width: 100%; overflow: hidden;">
                                        <img data src="{{ asset('storage/photos/regional-img/' . $item->foto) }}"
                                            alt="" class="img-fluid data-img-berita" style="width: 100%;">
                                    </div>

                                    <h2 class="title">
                                        <a class="data-judul-berita">{{ $item->judul }}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    class="data-date-create">{{ $item->date_create }}</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <div class="d-none data-isi-berita">{{ $item->isi }}</div>
                                        <div class="">
                                            {!! mb_substr($item->isi, 0, 320) !!}
                                        </div>
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a class="btn-show-modal" style="cursor:pointer;" data-bs-toggle="modal"
                                            data-bs-target="#modalBerita">Read More <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>

                                </article>
                            </div><!-- End post list item -->
                        @empty
                            <div class="alert alert-info" role="alert">
                                Data Tidak Ada
                            </div>
                        @endforelse




                    </div><!-- End blog posts list -->

                    {{-- <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div><!-- End blog pagination --> --}}

                </div>
            </div>

        </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="modalBerita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-judul-berita">

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <img style="width:100%" id="modal-img-berita" alt="">
                        </div>
                        <div class="mt-3" id="isi-berita">

                        </div>
                        <div class="mt-3 fs-6" id="modal-date-create">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
    @push('js')
        <script src="{{ asset('') }}landingPage/assets/js/jquery.js"></script>
        <script>
            $('.btn-show-modal').on('click', function() {

                let img = $(this).parents("article").find(".data-img-berita").attr('src')
                let judul = $(this).parents("article").find(".data-judul-berita").text()
                let isi = $(this).parents("article").find(".data-isi-berita").text()
                let dateCreate = $(this).parents("article").find(".data-date-create").text()

                $('#isi-berita').empty()
                $('#modal-img-berita').attr("src", img)
                $('#modal-judul-berita').text(judul)
                $('#isi-berita').append(isi)
                $('#modal-date-create').text(dateCreate)
            })
        </script>
    @endpush
@endsection
