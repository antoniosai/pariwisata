@extends('layouts.backend.layout')

@section('title')
Menu Kategori
@endsection

@section('header')
Menu Kategori
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Manajemen Kategori
        <div class="pull-right">
            <a href="{!! route('category.get.add') !!}" class="btn btn-success btn-sm"><i class="fa fa-user-plus fa-lg"></i> Tambah Kategori</a>
        </div>
    </h4>
    <hr>
    <table class="table table-striped table-hover table-condensed" id="toko">
        <thead>
            <tr class="info">
                <th>No</th>
                <th>Nama Kategori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($categories as $category)
            <tr>
                <td>{!! $no++ !!}</td>
                <td>{!! $category->nama_category !!}</td>
                <td>
                    <a href="{{ route('category.get.edit', $category->id) }}" class="btn btn-xs btn-warning">Edit</a>
                    <a href="{{ route('category.delete', $category->id) }}" class="btn btn-xs btn-danger">Delete</a>
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