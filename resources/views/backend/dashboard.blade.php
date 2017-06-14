@extends('layouts.backend.layout')

@section('title')
Dashboard
@endsection

@section('header')
Dashboard
@endsection

@section('custom_styles')
<script src="{!! asset('datatables/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('datatables/dataTables.bootstrap.js') !!}"></script>

<link href="{!! asset('css/jquery.dataTables.css') !!}" rel="stylesheet">
<link href="{!! asset('css/dataTables.bootstrap.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.css') !!}" rel="stylesheet">
<link href="{!! asset('css/selectize.bootstrap3.css') !!}" rel="stylesheet">
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <marquee>
        <h2 class="title">Selamat Datang di Aplikasi Manajemen Hotel</h2>    
    </marquee>
    <hr>
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> Quick Summary</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <center>
                            <a href="#" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>{{ $userCount }} Users</a>
                            <a href="#" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>{{ $tokoCount }} Toko</a>
                            <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>{{ $informationCount }}Informasi</a>
                            <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>{{ $categoryCount }} Kategori</a>
                          </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('custom_styles')
<style>
body { padding-top:20px; }
.panel-body .btn:not(.btn-block) { width:120px;margin-bottom:10px; }
</style>
@endsection