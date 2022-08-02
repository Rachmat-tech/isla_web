@extends('layouts.main')

@section('content')


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/header/h1.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
  
          <h2>Alumni</h2>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>ISLA'S</h2>
            <p>Alumni</p>
          </div>

            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Alumni</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>A</td>
                      <td>isi deskripsi</td>
                      <td><button type="button" class="btn btn-primary">Download</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>B</td>
                    <td>isi deskripsi</td>
                    <td><button type="button" class="btn btn-primary">Download</button></td>
                </tr>
              </tbody>
            </table>
        </div>
      </section>

  </main><!-- End #main -->


@endsection