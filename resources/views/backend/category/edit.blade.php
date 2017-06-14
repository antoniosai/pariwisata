@extends('layouts.backend.layout')

@section('title')
Edit Kategori
@endsection

@section('header')
Edit Kategossri {{ $category->nama_category }}
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Edit Kategori {{ $category->nama_category }}</h4>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('category.post.edit') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama_category" value="{{ $category->nama_category }}" class="form-control" placeholder="Nama Kategori">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{ $category->deskripsi }}</textarea>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection