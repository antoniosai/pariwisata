@extends('layouts.backend.layout')

@section('title')
Edit Toko
@endsection

@section('header')
Edit Toko
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Edit Toko {{ $toko->nama_toko }}</h4>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('toko.post.edit') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $toko->id }}">
                <div class="form-group">
                    <label>Nama Toko</label>
                    <input type="text" name="nama_toko" class="form-control" value="{{ $toko->nama_toko }}" placeholder="Nama Toko">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control" value="{{ $toko->website }}" placeholder="Website">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="{{ $toko->telepon }}" placeholder="Telepon">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $toko->email }}" placeholder="E-Mail">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" cols="30" rows="10">{{ $toko->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{ $toko->alamat }}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Langtitude</label>
                            <input type="text" name="langtitude" class="form-control" value="{{ $toko->langtitude }}" placeholder="Langtitude">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Longtitude</label>
                            <input type="text" name="longtitude" class="form-control" value="{{ $toko->longtitude }}" placeholder="Longititude">
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection