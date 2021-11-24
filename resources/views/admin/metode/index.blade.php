@extends('admin.main')
@section('title1', ' Tambah Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Metode Antrian</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                            <strong>Simulasi</strong>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('metode') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i>Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Jumlah Pelanggan</label>
                                            <input type="number"  id="lamda" class="form-control"autofocus>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Lama Pelayanan</label>
                                            <input type="number" id="miu"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Jumlah Loket</label>
                                            <input type="number" id="server" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                    <button id="button" class="btn btn-success pull-right">Hitung</button>
                            
                                    <table id="bootstrap-data-table" class="table  table-bordered">
                                        <thead>
                                          <tr>
                                            <td>Tingkat kesibukan loket</td>
                                            <td>Probabilitas WP dalam layanan</td>
                                            <td>Jumlah WP dalam antrian</td>
                                            <td>Waktu WP dalam antrian</td>
                                            <td>Waktu WP dalam layanan</td>
                                            <td>Jumlah WP dalam sistem</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th id="hasilp"></th>
                                            <th id="hasilpo"></th>
                                            <th id="hasillq"></th>
                                            <th id="hasilwq"></th>
                                            <th id="hasilw"></th>
                                            <th id="hasill"></th>
                                        </tr>
                                        </tbody>
                                      </table>
                                     <script type="text/javascript">
                                     var server = document.getElementById("server")
                                     var button = document.getElementById("button")
                                     
                                     button.addEventListener("click", function(e){
                                         e.preventDefault();
                                         var ld = lamda.value;
                                         var m = miu.value;
                                         var s = server.value;

                                        //  hitung p
                                         var p = ld/(m*s);
                                         hasilp.innerHTML = Math.round(`${p}`);

                                        //  hitung po
                                         var po = (1-p)
                                         hasilpo.innerHTML = Math.round(`${po*60}`);

                                        // hitung lq
                                         var f = 1
                                         for (var i = s; i>0; i--) {
                                           f*= i;  
                                         }
                                         var b = po*(Math.pow((ld/m), s))*p
                                         var  c = f*(Math.pow((1-p), 2))
                                         var lq = b/c
                                         hasillq.innerHTML = Math.round(`${lq}`);

                                         // hitung wq
                                         var wq = lq/ld
                                         hasilwq.innerHTML = Math.round(`${wq*60}`); 

                                         // hitung w
                                         var w = wq+(1/m)
                                         hasilw.innerHTML = Math.round(`${w*60}`);

                                         // hitung l
                                         var  l = ld*w
                                         hasill.innerHTML = Math.round(`${l}`);

                                     })

                                          
                                    </script>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection