@extends('user.layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url({{ asset('') }}landingPage/assets/img/header/h2.jpg);">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Tentang ISLA</h2>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Sejarah</h2>
                    <p>ISLA</p>
                </div>

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="landingPage/assets/img/logo.png" class="img-fluid" alt="" width="250"
                            height="250">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                            <h3>ISLA-UNHAS</h3>
                            <br>
                            <p>
                                ISLA-UNHAS didirikan oleh beberapa bahariwan sejati di Pulau Barrang Lompo Kota Makassar
                                Pada tanggal 14 Agustus 1998 setelah beberapa bulan pasca agenda reformasi Indonesia.
                                bahariwan sejati mengetahui pentingnya akan persatuan dan kesatuan alumni kelautan
                                Universitas Hasanuddin untuk membangun kelautan perikanan dan maritim Indonesia.
                            </p>
                            {{-- <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul> --}}

                        </div>
                    </div>

                    <section id="program" class="program">
                        <div class="container">

                            <div class="section-title" data-aos="zoom-out">
                                <h2>VISI</h2>
                                <p>MISI</p>
                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                                    <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                                        <h3>Visi</h3>
                                        <ul style="text-align:justify;">
                                            <li>1. Menghimpun para Sarjana Kelautan Universitas
                                                Hasanuddin dalam satu ikatan
                                                Alumni untuk turut berperan serta dalam memajukan kesejahteraan serta
                                                meningkatkan kecerdasan kehidupan masyarakat Indonesia
                                            </li>
                                            <li>2. Menumbuhkan dan meningkatkan solidaritas dan Harmonisasi sesama anggota,
                                                mahasiswa dan masyarakat
                                            </li>
                                            <li>3. Membangun Sumber Daya Manusia Sarjana Kelautan Universitas Hasanuddin
                                                untuk meningkatkan-mengembangkan profesional, kemandirian dan kesejahteraan
                                            </li>
                                            <li>4. Berperan aktif dalam Pembangunan Kelautan, Perikanan dan Kemaritiman
                                            </li>
                                            <li>5. Membina Hubungan Baik dengan Organisasi Sosial dan Profesi di bidang
                                                Kelautan, Perikanan dan Kemaritiman </li>
                                            <li>6. Membangun kerjasama pengembangan IPTEK Kelautan, Perikanan dan
                                                Kemaritiman kepada kampus almamater </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                                    <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                                        <h3>Misi</h3>
                                        <ul style="text-align:justify;">
                                            <li>1. Mengusung spirit kolaborasi dengan memaksimalkan potensi dan jaringan
                                                para alumni sarjana kelautan Unhas.</li>
                                            <li>2. Membangun alumni kelautan untuk mendapatkan pekerjaan dengan memberikan
                                                informasi peluang kerja.
                                            </li>
                                            <li>3. Mengambil peran dan kontribusi dalam pembangunan kesejahteraan masyarakat
                                                pesisir dan kepulauan di Indonesia Timur
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </section>

                    <section id="program" class="program">
                        <div class="container">

                            <div class="section-title" data-aos="zoom-out">
                                <h2>Tanggung Jawab</h2>
                                <p>ISLA</p>
                            </div>

                            <div class="row">

                                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                                        <h3>1. Beasiswa Alumni</h3>
                                        <p>Para anggota ISLA-UNHAS memiliki kesempatan yang sama untuk melanjutkan
                                            pendidikan dengan bantuan dari ISLA baik material dan nonmaterial.</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                                        <h3>2. Networking </h3>
                                        <p>Para anggota ISLA-UNHAS bisa mendapatkan jaringan koneksi yang luas dengan para
                                            alumni yang tersebar di tingkat Lokal, Regional, Nasional dan Internasional.</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                                        <h3>3. Collaboration Opportunity</h3>
                                        <p>Para anggota ISLA-UNHAS berkemungkinan melakukan kerjasama baik dalam bidang yang
                                            sama maupun antar multi bidang.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                                        <h3>4. Lowongan Kerja Alumni Perusahaan nasional dan Perusahaan multinasional</h3>
                                        <p>Para ISLA-UNHAS akan mendapatkan pelayanan dan pengurusan siap kerja di
                                            perusahaan impian kamu.</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>


                </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->
@endsection
