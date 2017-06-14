@extends('layouts.frontend.layout')

@section('title')
Detail Kategori {{ $category->nama_category }}
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin-left: -80px">
		<h2 class="title">{{ $category->nama_category }}</h2>
	</div>
</div>
@endsection