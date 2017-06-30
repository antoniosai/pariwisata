@extends('templates.backend.layout')

@section('title')
Managemen Paket <a href="{!! route('admin.paket.get.add') !!}" class="btn btn-success btn-sm"><i class="fa fa-file-plus fa-lg"></i> Tambah Paket</a>
@endsection

@section('content')
<table class="table table-striped table-hover table-condensed" id="member">
    <thead>
        <tr class="info">
            <th>No</th>
            <th>Nama Paket</th>
            <th>Maks. Kapasitas</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($paket as $listPaket)
        <tr>
            <td>{!! $no++ !!}</td>
            <td>{!! $listPaket->title !!}</td>
            <td>{!! $listPaket->capacity !!}</td>
            <td>Rp {!! number_format($listPaket->price) !!}</td>
            <td>
                <a href="{{ route('admin.paket.detail', $listPaket->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-lg fa-search"></i> Detail</a>
                <a href="{{ route('admin.paket.get.edit', $listPaket->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-lg fa-pencil"></i> Edit</a>
                <a href="{{ route('admin.paket.delete', $listPaket->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-lg fa-trash"></i> Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
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
    $("#member").dataTable();
  });
</script>
@endsection