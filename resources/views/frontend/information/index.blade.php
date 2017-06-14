@extends('layouts.frontend.layout')

@section('title')
Information
@endsection

@section('content')
<div class="container">
	
	<div class="row" style="margin-left: -80px">
		<div class="col-md-8 col-sm-12">
			<h2>Information</h2>
			<hr>
			<ul class="event-list">
				@forelse($informations as $information)
				<li>
					<time datetime="2014-07-20 0000">
					<span class="day">{{ $information->created_at->format('d') }}</span>
					<span class="month">{{ $information->created_at->format('M') }}</span>
					<span class="year">{{ $information->created_at->format('Y') }}</span>
					</time>
					<div class="info">
					<h2 class="title"><a href="{{ route('home.information.read', $information->id) }}">{{ $information->title }}</a></h2>
					<p class="desc">{{ $information->content }}</p>
				</li>
				@empty

				@endforelse
			</ul>
		</div>
	</div>
</div>
@endsection

@section('custom_styles')
<link href="{{ asset('css/information.css') }}" rel="stylesheet">
@endsection