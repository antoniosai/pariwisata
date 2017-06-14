@extends('layouts.backend.layout')

@section('title')
Tambah Kategori
@endsection

@section('header')
Tambah Kategori
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Tambah Kategori</h4>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('category.post.add') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_category" class="form-control" placeholder="Nama Kategori">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection