@extends('layouts.frontend.layout')

@section('title')
Beranda
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin-left: -80px">
		<div class="col-md-8">
			@forelse($articles as $article)
			<h1>Artikel</h1>
			<hr>
			<h3>{{ $article->title }}</h3>
			<p>{{ $article->content}}</p>
			<div>
				<div class="more label"><a href="{{ route('home.article.detail', $article->id) }}" class="btn btn-info btn-sm">Selengkapnya</a></div> 
			</div> 
			<div class="clear"></div>
			<hr>
			@empty
			<h3>Maaf, Tidak ada data</h3>
			@endforelse
		</div>
	</div>
</div>
@endsection