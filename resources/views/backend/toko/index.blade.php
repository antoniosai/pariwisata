@extends('layouts.backend.layout')

@section('title')
Managemen Toko
@endsection

@section('header')
Managemen Toko
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Manajemen Toko
        <div class="pull-right">
            <a href="{!! route('toko.get.add') !!}" class="btn btn-success btn-sm"><i class="fa fa-user-plus fa-lg"></i> Tambah Toko</a>
        </div>
    </h4>
    <hr>
    <table class="table table-striped table-hover table-condensed" id="toko">
        <thead>
            <tr class="info">
                <th>No</th>
                <th>Kode Toko</th>
                <th>Nama Toko</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($toko as $listToko)
            <tr>
                <td>{!! $no++ !!}</td>
                <td>{!! $listToko->kd_toko !!}</td>
                <td><a href="{{ route('toko.detail', $listToko->id) }}">{!! $listToko->nama_toko !!}</a></td>
                <td>{!! $listToko->email !!}</td>
                <td>{!! $listToko->alamat !!}</td>
                <td>{!! $listToko->telepon !!}</td>
                <td>
                    <a href="{{ route('toko.get.edit', $listToko->id) }}" class="btn btn-xs btn-warning">Edit</a>
                    <a href="{{ route('toko.delete', $listToko->id) }}" class="btn btn-xs btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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