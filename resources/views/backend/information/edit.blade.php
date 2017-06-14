@extends('layouts.backend.layout')

@section('title')
Edit Informasi {{ $information->title }}
@endsection

@section('header')
Edit Informasi {{ $information->title }}
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Edit Infomasi {{ $information->title }}</h4>
    <hr>
    <form action="{{ route('information.post.edit') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $information->id }}">
        <div class="form-group">
            <label>Judul Informasi</label>
            <input type="text" class="form-control" placeholder="Judul Informasi" value="{{ $information->title }}" name="title">
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Konten Informasi">{{ $information->content }}</textarea>
        </div>
        <div class="place-right">
            <button type="submit" class="btn btn-success btn-block">Simpan</button>
        </div>
    </form>
    
</div>

@endsection
