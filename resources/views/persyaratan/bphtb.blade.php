@extends('main')
@section('title', '| pajak bphtb')
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
              <li><a>Pajak BPHTB</a></li>
              <li><a href="daerah">Pajak Daerah</a></li>
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
        <span>BPHTB</span>
        <h2>BPHTB</h2>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box"  >
            <h4>Jual Beli</h4>
            <div>
            <p style="text-align: left">1. Copy Sporadik/AJB/Sertifikat</p>
            <p style="text-align: left">2. Copy SPPT PBB Tahunan Berjalan</p>
            <p style="text-align: left">3. Lunas PBB 5 Tahun Terkahir</p>
            <p style="text-align: left">4. Mengisi Form Permohonan</p>
            <p style="text-align: left">5. Mengisi Form Pernyataan</p>
            <p style="text-align: left">6. Melampirkan Foto Objek</p>
            </div>
            
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <h4>Waris</h4>
            <p style="text-align: left">1. Copy Sertifikat</p>
            <p style="text-align: left">2. Copy SPPT PBB Tahunan Berjalan</p>
            <p style="text-align: left">3. Lunas PBB 5 Tahun Terkahir</p>
            <p style="text-align: left">4. Copy KTP/KK/Ahli Waris</p>
            <p style="text-align: left">5. Copy Surat Keterangan Waris</p>
            <p style="text-align: left">6. Copy Surat Keterangan Kematian</p>
            <p style="text-align: left">7. Copy Kartu Keluarga Pihak Kewarisan</p>
            <p style="text-align: left">8. Mengisi Form Permohonan</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <h4>Hibah</h4>
            <p style="text-align: left">1. Copy Sertifikat</p>
            <p style="text-align: left">2. Copy SPPT PBB Tahunan Berjalan</p>
            <p style="text-align: left">3. Lunas PBB 5 Tahun Terkahir</p>
            <p style="text-align: left">3. Copy KTP Pemberi dan Penerima Hibah</p>
            <p style="text-align: left">3. Copy Kartu Keluarga</p>
            <p style="text-align: left">4. Mengisi Form Permohonan</p>
            <p style="text-align: left">5. Mengisi Form Pernyataan</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Lelang</h4>
            <p style="text-align: left">1. Copy Sertifikat</p>
            <p style="text-align: left">2. Copy SPPT PBB Tahunan Berjalan</p>
            <p style="text-align: left">3. Lunas PBB 5 Tahun Terkahir</p>
            <p style="text-align: left">4. Copy Surat Pemenang Lelang</p>
            <p style="text-align: left">8. Mengisi Form Permohonan</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>PTSL</h4>
            <p style="text-align: left">1. Copy Sertifikat</p>
            <p style="text-align: left">2. Copy SPPT PBB Tahunan Berjalan</p>
            <p style="text-align: left">3. Lunas PBB 5 Tahun Terkahir</p>
            <p style="text-align: left">3. Copy KTP Pemilik Sertifikat</p>
            <p style="text-align: left">3. Copy Kartu Keluarga</p>
            <p style="text-align: left">4. Mengisi Form Permohonan</p>
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