@extends('layouts.backend.layout')

@section('title')
Managemen Toko
@endsection

@section('header')
Managemen Toko
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <div class="row">
        <div class="col-md-6">
            <h4 class="title">Detail {{ $toko->nama_toko }}</h4>
            <hr>
            <table class="table table-hovered table-bordered">
                <tr>
                    <th class="info">Nama Toko</th>
                    <td>{{ $toko->nama_toko }}</td>
                </tr>
                <tr>
                    <th class="info">Telepon</th>
                    <td>{{ $toko->telepon }}</td>
                </tr>
                <tr>
                    <th class="info">Email</th>
                    <td>{{ $toko->email }}</td>
                </tr>
                <tr>
                    <th class="info">Website</th>
                    <td>{{ $toko->website }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h4 class="title">Lokasi Toko</h4>
            <hr>
            <p>{{ $toko->alamat }}</p>
            @if($toko->langtitude)
                <h4>Punya Lokasi</h4>
            @else
                <h4>Tidak PUnya Lokasi</h4>
            @endif
        </div>
    </div>
</div>

@endsection

@section('custom_styles')
<link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet">
<link href="{!! asset('css/dataTables.bootstrap.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.bootstrap3.css') !!}" rel="stylesheet">
@endsection

@section('custom_scripts')
<script src="{!! asset('datatables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('datatables/dataTables.bootstrap.js') !!}"></script>
<script type="text/javascript">
  $(function() {
    $("#toko").dataTable();
  });
</script>
@endsection