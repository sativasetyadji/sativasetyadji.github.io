@extends('main')
@section('title', '| nomor antrian')
@section('header')
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">
    <h1 class="logo"><a href="/">Booking Antrian Online</a></h1>
  </div>
</header>
@endsection

<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <span>Nomor Antrian</span>
      <h2>Nomor Antrian</h2>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="php-email-form">
            <h5 class="text-center"> Silahkan screenshoot nomor antrian anda</h5>
             <div class="form-group mt-5" method="post">
               @csrf
               <h1 class="text-center"><b>{{ request()->kode}}</b></h1>
                <h3 class="text-center"><b>{{ request()->jam}}</b></h3>
                <h3 class="text-center"><b>{{ request()->tanggal}}</b></h3>
                </div>
                <h5 class="text-center mt-5">Silahkan datang 30 menit sebelum waktu antrian anda, Terima Kasih</h5>
                  <div class="card-body">
                    <h2 class="text-center"> <a href="/"> Selesai</a></h2>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>

@section('footer')
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BPPRD Kota Bandar Lampung</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/sativasetyadji/">Sativasetyadji</a>
      </div>
    </div>
  </footer>
@endsection