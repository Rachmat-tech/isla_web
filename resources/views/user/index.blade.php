@extends('user.layout.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <img src="landingPage/assets/img/logo.png" alt="" width="60%"
                        style="display: block; margin-left: auto; margin-right: auto; margin-bottom: 25px">
                    <h2 data-aos="fade-up"><span style="color:#c5c079; background: none">I</span>KATAN <span
                            style="color:#c5c079; background: none">S</span>ARJANA KE<span
                            style="color:#c5c079; background: none">LA</span>UTAN UNHAS</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>JALAS VEVA</p>
                        <p>JAYA MAHE</p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#contact" class="btn-get-started">Bergabung Bersama Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Tentang</h2>
                    <p>ISLA UNHAS</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-12">
                        <p style="text-align:justify;">
                            Kemakmuran Kelautan kedua hal ini yang dipadukan dalam Logo dan Nama Organisasi alumni Ilmu
                            Kelautan Universitas Hasanuddin, ISLA-UNHAS <br> (IKATAN SARJANA KELAUTAN) UNIVERSITAS
                            HASANUDDIN.
                            Nama ini dipilih dengan keyakinan akan pentingnya Kesatuan dan Persatuan menuju kemakmuran
                            kelautan. <br><br>
                            ISLA-UNHAS adalah wadah untuk kemakmuran anggota yang memiliki nilai solidaritas, harmonis,
                            profesional, kemandirian dan kesejahteraan serta bertanggungjawab atas terwujudnya pembangunan
                            kelautan, perikanan dan kemaritiman Indonesia. Jales veva jaya mahe
                        </p>
                        {{-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> --}}
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Benefit Section ======= -->
        <section id="benefit" class="benefit">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Keuntungan</h2>
                    <p>Bergabung di ISLA UNHAS</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Beasiswa Alumni</a></h4>
                            <p class="description">Para anggota ISLA-UNHAS memiliki kesempatan yang sama untuk melanjutkan
                                pendidikan dengan bantuan dari ISLA baik material dan nonmaterial.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="">Networking</a></h4>
                            <p class="description">Para alumni ISLA UH bisa mendapatkan jaringan koneksi yang luas dengan
                                para alumni yang tersebar di seluruh Indonesia bahkan Dunia</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Collaboration Opportunity</a></h4>
                            <p class="description">Para anggota ISLA-UNHAS bisa mendapatkan jaringan koneksi yang luas
                                dengan para alumni yang tersebar di tingkat Lokal, Regional, Nasional dan Internasional.</p>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 mt-5">
                        <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="">Lowongan Kerja Alumni</a></h4>
                            <p class="description">Para ISLA-UNHAS akan mendapatkan pelayanan dan pengurusan siap kerja di
                                perusahaan impian kamu.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Keuntungan Section -->

        <!-- ======= Program Section ======= -->
        <section id="program" class="program">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Program</h2>
                    <p>ISLA UH</p>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="box" data-aos="zoom-in">
                            <h3>Program Kerja Nasional</h3>
                            <img src="landingPage/assets/img/features-1.png" alt="" width="60%" height="50%">
                            <div class="btn-wrap">
                                <a href="/proker-nasional" class="btn-program">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Program Kerja Regional</h3>
                            <img src="landingPage/assets/img/features-2.png" alt="" width="60%" height="50%">
                            <div class="btn-wrap">
                                <a href="/proker-regional" class="btn-program">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End program Section -->


        <!-- ======= Loker Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Info</h2>
                    <p>Loker</p>
                </div>
                <div class="row gy-5">
                    @forelse ($lokers as $item)
                        <div class="row portfolio-container" data-aos="fade-up">

                            <div class="col-lg-4 col-md-6 portfolio-item ">
                                <div class="portfolio-img"><img
                                        src="{{ asset('storage/photos/loker-img/' . $item->foto) }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{ $item->kategori }}</h4>
                                    <p>{{ $item->perusahaan }}</p>
                                    <a href="/loker-detail" class="details-link" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="alert alert-info" role="alert">
                            Data Tidak Ada
                        </div>
                    @endforelse
                </div>

                <div class="btn-wrap">
                    <a href="/loker" class="btn-loker">Semua Loker</a>
                </div>
            </div>
        </section> --}}
        <!-- End loker Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        {{-- <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Berita</h2>
                    <p>Kelautan</p>
                </div>

                <div class="row gy-5">
                    @forelse ($beritas as $item)
                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-box">
                                <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="meta">
                                    <span class="post-date">{{ $item->date_create }}</span>
                                </div>
                                <h3 class="post-title">{{ $item->judul }}</h3>
                                <p>{!! mb_substr($item->isi, 0, 120) !!} ...</p>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info" role="alert">
                            Data Tidak Ada
                        </div>
                    @endforelse

                </div>

                <div class="btn-wrap">
                    <a href="/berita" class="btn-rpost">Semua Berita</a>
                </div>

            </div>
        </section> --}}
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Cerita</h2>
                    <p>Alumni</p>
                </div>

                {{-- detail cerita --}}


                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @forelse ($ceritaAlumnis as $item)
                            <div class="swiper-slide">
                                <a class="btn-show-modal show-detail" style="cursor:pointer;" data-bs-toggle="modal"
                                    data-bs-target="#modalCerita">
                                    <div class="testimonial-item">
                                        <div class="d-none cerita">{!! $item->isi !!}</div>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {!! mb_substr($item->isi, 0, 120) !!}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ asset('/storage/photos/ceritaAlumni-img/' . $item->foto) }}"
                                            class="testimonial-img" alt="">

                                        <h3 class="nama">{{ $item->nama }}</h3>
                                        <h4 class="profesi">{{ $item->profesi }}</h4>
                                    </div>
                                </a>
                            </div><!-- End testimonial item -->
                        @empty
                            <div class="alert alert-info" role="alert">
                                Data Tidak Ada
                            </div>
                        @endforelse

                    </div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Bergabung</h2>
                    <p>Bersama ISLA UH</p>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <img src="{{ asset('') }}landingPage/assets/img/KTA.png" alt="" width="90%"
                                height="90%">
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
                        <form action="{{ route('submit.pendaftaran') }}" method="post" role="form">
                            @csrf
                            @method('post')
                            <div class="form-group mt-3">
                                <label for="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nama" required>
                            </div>
                            {{-- <div class="form-group mt-3">
                                <label for="form-label">Tempat Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tanggal_lahir" id="date"
                                    placeholder="Tanggal Lahir" required>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tahun_lulus"
                                        placeholder="Tempat Lahir" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="kontak"
                                        placeholder="Tanggal Lahir" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="form-label">Angkatan</label>
                                <input type="text" class="form-control" name="angkatan" id="nim"
                                    placeholder="Angkatan" required>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="form-label">Tahun Lulus</label>
                                    <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus"
                                        placeholder="Tahun Lulus" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="form-label">No. Telp</label>
                                    <input type="number" class="form-control" name="phone_number" id="kontak"
                                        placeholder="No. Telp" required>
                                </div>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}

                            <br>
                            <div class="text-center"><button type="submit">Send</button></div>
                        </form>
                    </div>

                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalCerita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-nama-cerita">

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <center>
                                    <img style="width:70%" id="modal-img-cerita" alt="">
                                </center>
                            </div>
                            <div class="mt-3" id="isi-cerita">

                            </div>
                            {{-- <div class="mt-3 fs-6 fw-bold" id="modal-profesi-cerita">

                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Contact Section -->

    </main>

    <!-- End #main -->
@endsection
@push('js')
    <script src="{{ asset('') }}landingPage/assets/js/jquery.js"></script>
    <script>
        $('.show-detail').on('click', function() {
            
            let img = $(this).parents(".swiper-slide").find(".testimonial-img").attr('src')
            let nama = $(this).parents(".swiper-slide").find(".nama").text()
            let isi = $(this).parents(".swiper-slide").find(".cerita").text()
            let profesi = $(this).parents(".swiper-slide").find(".profesi").text()

            $('#modal-img-cerita').attr("src", img)
            $('#modal-nama-cerita').text(nama)
            $('#isi-cerita').text(isi)
            $('#modal-profesi-cerita').text(profesi)
        })
    </script>
@endpush
