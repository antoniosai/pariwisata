@extends('layouts.frontend.layout')

@section('title')
{{ $information->title }}
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin-left: -80px">
		<div class="col-md-8 col-sm-12">
			<h2>{{ $information->title }}</h2>
			<hr>
			{{ $information->content }}
		</div>
	</div>
</div>
@endsection
