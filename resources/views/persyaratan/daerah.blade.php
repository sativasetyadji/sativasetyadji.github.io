@extends('main')
@section('title', '| pajak daerah')
@section('header')
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="/">Booking Antrian Online</a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link" href="/">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Persyaratan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="pbb">Pajak Bumi Bangunan</a></li>
            <li><a href="bphtb">Pajak BPHTB</a></li>
            <li><a>Pajak Daerah</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="/#contact">Kontak</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
@endsection

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">
  
      <div class="section-title">
        <span>Pajak Daerah</span>
        <h2>Pajak Daerah</h2>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box"  >
            <h4>Parkir</h4>
            <div>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
            </div>
            
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <h4>Hiburan</h4>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <h4>Hotel</h4>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Reklame</h4>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
            <p style="text-align: left">6. Foto Fisik Reklame</p>
            <p style="text-align: left">7. (Tiang 5 Meter Keatas )Copy Izin Peletakan Dari DPTSP</p>
        </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Restoran</h4>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Air Tanah</h4>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Mineral Logam Bukan Batuan</h4>
            <p style="text-align: left">1. Copy KTP</p>
            <p style="text-align: left">2. Copy NPWP</p>
            <p style="text-align: left">3. Copy SIUP/SITU (Bila Ada)</p>
            <p style="text-align: left">4. Surat Pernyataan Pernyataan</p>
            <p style="text-align: left">5. Mengisi Blanko</p>
          </div>
        </div>
  
      </div>
    </div>
  </section><!-- End Services Section -->

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