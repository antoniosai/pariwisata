@extends('templates.backend.layout')

@section('title')
Desa Pariwisata
@endsection

@section('content')
<div class="widget-box transparent">
    <div class="widget-header widget-header-flat">
        <h4 class="widget-title lighter">
            <i class="ace-icon fa fa-star orange"></i>
            Informasi Sekolah
        </h4>

        <div class="widget-toolbar">
            <a href="#" data-action="collapse">
                <i class="ace-icon fa fa-chevron-up"></i>
            </a>
        </div>
    </div>

    <div class="widget-body">
        <div class="widget-main no-padding">
            
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
</div><!-- /.widget-box -->



<br />

<div class="panel-body">
    <div class="row">

        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg btn-block dash-widget" role="a" style="padding:2px;">
                <div id="box_1"><span class="fa fa-user fa-3x"></span></div>
                <div id="box_2" class="icon-label">Pengajar</div>
                <a href="#" class="btn btn-default btn-block">Buka Menu Guru</a>
            </a>
        </div>
        
        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg btn-block dash-widget" role="a" style="padding:2px;">
                <div id="box_1"><span class="fa fa-archive fa-3x"></span></div>
                <div id="box_2" class="icon-label">Kelas</div>
                <a href="#" class="btn btn-default btn-block">Buka Menu Kelas</a>
            </a>
        </div>
        
        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg btn-block dash-widget" role="a" style="padding:2px;">
                <div id="box_1"><span class="fa fa-desktop fa-3x"></span></div>
                <div id="box_2" class="icon-label">Jurusan</div>
                <a href="#" class="btn btn-default btn-block">Buka Menu Jurusan</a>
            </a>
        </div>
        
        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg btn-block dash-widget" role="a" style="padding:2px;">
                <div id="box_1"><span class="fa fa-users fa-3x"></span></div>
                <div id="box_2" class="icon-label">Siswa/i</div>
                <a href="#" class="btn btn-default btn-block">Buka Menu Siswa</a>
            </a>
        </div>
        
        <div class="col-md-2">
            <a href="#" class="btn btn-primary btn-lg btn-block dash-widget" role="a" style="padding:2px;">
                <div id="box_1"><span class="fa fa-users fa-3x"></span></div>
                <div id="box_2" class="icon-label">PSB 2017/2018</div>
                <a href="#" class="btn btn-default btn-block">Buka Menu PSB</a>
            </a>
        </div>
        
    </div>
</div>

@endsection

@section('custom_styles')
<style>
.hero-widget { text-align: center; padding-top: 20px; padding-bottom: 20px; }
.hero-widget .icon { display: block; font-size: 96px; line-height: 96px; margin-bottom: 10px; text-align: center; }
.hero-widget var { display: block; height: 64px; font-size: 64px; line-height: 64px; font-style: normal; }
.hero-widget label { font-size: 17px; }
.hero-widget .options { margin-top: 10px; }

.green {
    background: rgb(22, 105, 173);
}

</style>
@endsection