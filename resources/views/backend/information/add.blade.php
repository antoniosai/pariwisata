@extends('layouts.backend.layout')

@section('title')
Tambah Informasi Baru
@endsection

@section('header')
Tambah Informasi Baru
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Tambah Infomasi</h4>
    <hr>
    <form action="{{ route('information.post.add') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Judul Informasi</label>
            <input type="text" class="form-control" placeholder="Judul Informasi" name="title">
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Konten Informasi"></textarea>
        </div>
        <div class="place-right">
            <button type="submit" class="btn btn-success btn-block">Simpan</button>
        </div>
    </form>
    
</div>

@endsection
