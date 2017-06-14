@extends('layouts.frontend.layout')

@section('title')
Detail Paket {{ $paket->title }}
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-10 blogShort">
				<h1>{{ $paket->title }}<br><div class="badge badge-info">Capacity : {{ $paket->capacity }}</div>
				<div class="badge badge-info">Price : Rp {{ number_format($paket->price) }}</div>
					<div class="pull-right">
						<a href="" class="btn btn-primary">Book Now!</a>
					</div>
				</h1>
				<hr>
				<img src="http://taratourtravel.com/wp-content/uploads/2017/04/paket-tour-paris.jpg" style="width: 440px" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
				
				<hr>
				<article>
				<p>{{ $paket->content }} Everything you want to add is here... </p>
				<p>Any elements like table, pictures, and so on for further information. for reader, just like when you are writing a docs in microsoft word<br><i>TTD, Antonio</i></p>
				
				</article>
		
			</div>
		</div>
	</div>
</div>
@endsection

@section('custom_styles')
<style>
.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 100%;
    padding: 8px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #34ca78; 
    color: #fff; 
}
.nav-sidebar .active a:hover {
    background-color: #37D980;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

.btn-blog {
    color: #ffffff;
    background-color: #37d980;
    border-color: #37d980;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#34ca78;
    border-color: #34ca78;
}
article h2{color:#333333;}
h2{color:#34ca78;}
 .margin10{margin-bottom:10px; margin-right:10px;}
</style>
@endsection