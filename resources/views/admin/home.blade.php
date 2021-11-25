@extends('admin.main')
@section('title1', ' Data Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Info Antrian</strong>
                        </div>
                    <div class="card-body table-responsive">
                        <div class="row gx-5">
                                    <div class="card col no-padding bg-flat-color-1">
                                        <div class="card-body">
                                            <div class="h1 text-muted text-right mb-4">
                                                <i class="fa fa-users text-light"></i>
                                            </div>
                                            <div class="h1 mb-0 text-light">
                                                @foreach ($jams as $item)
                                                <span class="count">{{ $item->kode }}</span>
                                             </div>
                                            <h4 class="text-uppercase font-weight-bold text-light">Nomor Antrian</h4>
                                            <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                        </div>
                                    </div>
                                    <div class="card col no-padding no-shadow">
                                        <div class="card-body bg-flat-color-4">
                                            <div class="h1 text-light text-right mb-4">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="h1 mb-0 text-light">{{ $item->jam }}</div>
                                            @endforeach

                                            <h4 class="text-light text-uppercase font-weight-bold">Waktu Dilayani</h4>
                                            <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    {{ $jams->links() }}

                                </div>
                                
                  {{-- <div class="pull-right">
                    {{ $jams->links() }}
                  </div> --}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection