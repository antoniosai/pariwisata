@extends('layouts.backend.layout')

@section('title')
Tambah Toko
@endsection

@section('header')
Tambah Toko
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Tambah User Baru</h4>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('toko.post.add') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Nama Toko</label>
                    <input type="text" name="nama_toko" class="form-control" placeholder="Nama Toko">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input type="text" name="website" class="form-control" placeholder="Website">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="E-Mail">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Langtitude</label>
                            <input type="text" name="langtitude" class="form-control" placeholder="Langtitude">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Longtitude</label>
                            <input type="text" name="longtitude" class="form-control" placeholder="Longititude">
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