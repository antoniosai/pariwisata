@extends('layouts.frontend.layout')

@section('title')
Daftar Paket Wisata
@endsection

@section('content')

<div class="container">
	<div class="row">
		<h2>Daftar Paket Wisata</h2>
		<hr>
		<div class="row">
			<div class="col-md-8">
				<!-- Start of an Article -->
				@forelse($paket as $listPaket)
				<article>
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<figure>
								<img src="http://taratourtravel.com/wp-content/uploads/2017/04/paket-tour-paris.jpg">
							</figure>
						</div>
						<div class="col-sm-6 col-md-8">
							<span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
							<h4>{{ $listPaket->title }}</h4>
							<p>{{ $listPaket->content }}</p>
							<section>
								Price : Rp {{ number_format($listPaket->price) }}&nbsp;
								Capacity : Maks. 4 <i class="fa fa-user fa-lg"></i>
								<a href="{{ route('home.paket.detail', $listPaket->id) }}" class="btn btn-default btn-sm pull-right">Detail ...</a>&nbsp;
								<a href="{{ route('home.paket.booking', $listPaket->id) }}" class="btn btn-success btn-sm pull-right"> Book Now</a>
							</section>
						</div>
					</div>
				</article>
				@empty
				<h3>Maaf, tidak ada data tersedia</h3>
				@endforelse
				<hr>
				<!-- End of an Article -->

			</div>
		</div>
	</div>
</div>
@endsection

@section('custom_styles')
<style>
article{
    background-color: #E0E0E0;
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}
figure img{
    width: 100%;
    height: 100%;
}
.glyphicon-folder-open,
.glyphicon-user,
.glyphicon-calendar,
.glyphicon-eye-open,
.glyphicon-comment{
    padding: 5px;
}
</style>
@endsection