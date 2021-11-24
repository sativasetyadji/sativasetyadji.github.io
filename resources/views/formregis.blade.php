@extends('main')
@section('title', '| form register')
@section('header')
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="/">Booking Antrian Online</a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link" href="/">Beranda</a></li>
        <li class="dropdown"><a><span>Persyaratan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="persyaratan/pbb">Pajak Bumi Bangunan</a></li>
            <li><a href="persyaratan/bphtb">Pajak BPHTB</a></li>
            <li><a href="persyaratan/daerah">Pajak Daerah</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="/#contact">Kontak</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
@endsection

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title mt-3">
      <span>Form Register</span>
      <h2>Form Register</h2>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="php-email-form">
            @livewire('multi-step-form')
          </div>
        </div>

      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

@section('footer')
     <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BPPRD Kota Bandar Lampung</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/sativasetyadji/">Sativasetyadji</a>
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection