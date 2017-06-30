@extends('layouts.frontend.layout')

@section('title')
Beranda
@endsection

@section('custom_styles')
<link href="{{ asset('css/information.css') }}" rel="stylesheet">
@endsection

@section('content')
@include('frontend.carousel')
<div class="container">
  <div class="row"> <!-- Star row -->
    <div class="col-sm-12 col-md-12"> <!-- Star col 1 -->
      <center>
        <h2>
          Paket Wisata<br/>
          @if(count($paket) > 0)
            <a href="" class="btn btn-xs btn-info">Lihat Semua Paket</a>
          @endif
        </h2>
      </center>
      <hr>
      @forelse($paket as $listPaket)
      <div class="col-sm-12 col-md-3">
          <center>
              <div class="thumbnail">
                  <img src="http://taratourtravel.com/wp-content/uploads/2017/04/paket-tour-paris.jpg" style="height: 150px">
              </div>
              
              <div class="caption">
                  <h3>{{ $listPaket->title }}</h3>
                  <p>{{ $listPaket->content }}</p>
                  
                  <p>
                      <a href="{{ route('home.paket.detail', $listPaket->id) }}" class="btn btn-primary btn-sm btn-block" role="button">Detail</a> 
                  </p>
                  
              </div>
          </center>
      </div>
      @empty
      <center>
        <h4>Maaf! Tidak ada data</h4>
      </center>
      @endforelse
      
    </div> <!-- End row 1 -->
    
  </div> <!-- End of Row -->
  <div class="col-md-12">
    <hr>
    <center><h2>Information</h2></center>
    <ul class="event-list">
      @forelse($information as $informasi)
      <li>
        <time datetime="2014-07-20 0000">
          <span class="day">{{ $informasi->created_at->format('d') }}</span>
          <span class="month">{{ $informasi->created_at->format('M') }}</span>
          <span class="year">{{ $informasi->created_at->format('Y') }}</span>
        </time>
        <div class="info">
          <h2 class="title">{{ $informasi->title }}</h2>
          <p class="desc">{{ $informasi->content }}</p>
          <ul>
            <li style="width:100%;"><a href="{{ route('home.information.read', $informasi->slug) }}"><span class="fa fa-file"></span> Read More</a></li>
          </ul>
        </div>
      </li>
      @empty

      @endforelse
    </ul>
  </div>
  <div class="col-sm-12 col-md-12"> <!-- Star col 2 -->
    <hr>
    <center><h2>Location</h2></center>
    <div class="row">
        <div class="col-md-9">
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
    	  </div>
    	
      	<div class="col-md-3">
    		<h2>Hotel ABCD</h2>
    		<address>
    			<strong>Pamengpeuk, Garut</strong><br>
    			Jl. Pamengpeuk No. 15<br>
    			Pamengpeuk<br>
    			44182<br>
    			<abbr title="Phone">P:</abbr> 01234 567 890
    		</address>
    	</div>
    </div><!-- End col 2 -->
    

  </div>

</div>

@endsection