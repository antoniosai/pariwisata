@extends('layouts.frontend.layout')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<div class="container">
	<div class="row" style="margin-left: -140px">
		<div class="col-md-8">
			<h2>{{ $article->title }}</h2>
            <hr>
            <p>{{ $article->content }}</p>
		</div>
        <div class="col-md-4">
            <?php $articles = App\Artikel::all(); ?>
            @if($articles)
                <h2>Artikel Yang Lain</h2>
                <hr>
                <div class="alert alert-info">
                    <a href="">{{ $article->title }}</a><br>
                </div>
            @else

            @endif
        </div>
	</div>
</div>
@endsection