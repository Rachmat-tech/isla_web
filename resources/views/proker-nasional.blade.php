@extends('layouts.main')

@section('content')


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/header/h1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
  
          <h2>Proker</h2>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>ISLA'S</h2>
            <p>Proker Nasional</p>
          </div>

            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Proker</th>
                      <th>Waktu Pelaksanaan</th>
                      <th>Jenis Kegiatan</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>A</td>
                      <td>kapan-kapan</td>
                      <td>C</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>B</td>
                    <td>kapan-kapan</td>
                    <td>C</td>
                </tr>
              </tbody>
            </table>
        </div>
      </section>

  </main><!-- End #main -->


@endsection