@extends('layouts.frontend.layout')

@section('title')
Gallery
@endsection

@section('content')
<div class="container">
    <center><h2>Gallery</h2></center>
    <hr>
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            
            <div class="col-sm-12">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <?php $no = 0; ?>
                                    @foreach($gallery as $carousel)
                                    <div class="@if($no == 0)active @endif item" data-slide-number="{{ $no++ }}">
                                        <img src="{{ $carousel->url }}">
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <?php $nomor = 0; ?>
                    @foreach($gallery as $gambar)
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-{{ $nomor++ }}"><img src="{{ $gambar->url }}"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection

@section('custom_styles')
<style>
.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}
</style>
@endsection

@section('custom_scripts')
<script>
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>
@endsection