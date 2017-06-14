@extends('layouts.backend.layout')

@section('title')
Managemen User
@endsection

@section('header')
Managemen User
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

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Manajemen User
        <div class="pull-right">
            <a href="{!! route('user.get.add') !!}" class="btn btn-success btn-sm"><i class="fa fa-user-plus fa-lg"></i> Tambassh User</a>
        </div>
    </h4>
    <hr>
    <table class="table table-striped table-hover table-condensed" id="member">
        <thead>
            <tr class="info">
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Last Login</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($users as $listUser)
            <tr>
                <td>{!! $no++ !!}</td>
                <td>{!! $listUser->name !!}</td>
                <td>{!! $listUser->email !!}</td>
                <td>{!! $listUser->updated_at !!}</td>
                <td>
                    <a href="" class="btn btn-xs btn-warning">Edit</a>
                    <a href="" class="btn btn-xs btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection