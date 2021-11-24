@extends('admin.main')
@section('title1', ' Data Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Nomor Antrian</h1>
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

    <div class="animated fadeIn">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Nomor</strong>
                            <div class="pull-right">
                                <a href="{{ url ('jams/create') }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        </div>
                    <div class="card-body table-responsive">
                        <div class="my-2">
                            <form action="jams" method="GET">
                                <div class="input-group mb-3">
                                    <select name="select"  class="form-control">
                                        <option selected>Pilih Jenis Pajak</option>
                                        @foreach ($jenispajaks as $item)
                                        <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                                        @endforeach
                                      </select>
                                    <button class="btn btn-primary" type="submit">GET</button>
                                </div>
                            </form>
                        </div>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Nomor Antrian</th>
                        <th>Di Layani</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($jams as $key=> $item)
                    <tr>
                        <td>{{ $loop ->iteration }}</td>
                        <td>{{ $item ->kode }}</td>
                        <td>{{ $item ->jam }}</td>
                        <td class="text-center">
                            <a href="{{ url('jams/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i> Edit
                            </a>
                            <form action="{{ url('jams/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection