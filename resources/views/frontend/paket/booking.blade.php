@extends('layouts.frontend.layout')

@section('title')
Booking {{ $paket->title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h2>Booking {{ $paket->title }}</h2>
            <hr>
            @include('partials.warning')
            <form method="post" action="{{ route('home.paket.submit') }}">
                <input type="hidden" name="paket_id" value="{{ $paket->id }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon Anda" required>
                </div>
                <div class="form-group">
                    <label>Alamat Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Alamat Email Anda">
                </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-4 col-sm-12">
            <h3>Paket Pilihan Anda
                <div class="pull-right">
                    <a href="{{ route('home.paket') }}" class="btn btn-primary btn-xs">Cari Paket Lain</a>
                </div>
            </h3>
            <hr>
            <center>
              <div class="thumbnail">
                  <img src="http://taratourtravel.com/wp-content/uploads/2017/04/paket-tour-paris.jpg" style="height: 150px">
              </div>
              
              <div class="caption">
                  <h3>{{ $paket->title }}</h3>
                  <p>{{ $paket->content }}</p>
              </div>
          </center>
        </div>
    </div>
</div>
@endsection

@section('custom_styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
     $( function() {
        $( "#chkin" ).datepicker();
        $( "#chkout" ).datepicker();
    } );
</script>
@endsection