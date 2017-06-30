@extends('templates.backend.layout')

@section('title')
Tambah Paket Baru
@endsection

@section('content')
<form action="{{ route('admin.paket.post.add') }}"></form>
@endsection

@section('custom_scripts')
@endsection