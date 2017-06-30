@extends('templates.backend.layout')

@section('title')
Gallery <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addImage">Tambah Gambar</button>
@endsection

@section('content')
<div class="container" style="margin-left: 25px; padding-right: 45px">
<!-- Slider -->
    <div class="row">
        
        <!--/Slider-->
        <div class="col-sm-8" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">
                <?php $nomor = 0; ?>
                @foreach($gallery as $gambar)
                <li class="col-sm-3">
                    <a class="thumbnail" id="carousel-selector-{{ $nomor++ }}"><img src="{{ $gambar->url }}" style="width:100%"></a>
                    <div class="row no-gutter" style="margin-top: -22px">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-xs btn-warning pull-right" data-toggle="modal" data-target="#editImage{{ $gambar->id }}"><i class="fa fa-lg fa-pencil"></i></button>

                            <div id="editImage{{ $gambar->id }}" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Gambar</h4>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ $gambar->url }}" style="width:100%">
                                        <form action="{{ route('admin.gallery.edit') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $gambar->id }}">
                                            <div class="form-group">
                                                <label>URL Gambar</label>
                                                <input type="text" class="form-control" name="gambar" value="{{ $gambar->url }}" placeholder="URL Gabar">
                                            </div>
                                            <button class="btn-block btn-primary btn" type="submit">Simpan</button>
                                        </form>
                                    </div>
                                </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.gallery.delete', $gambar->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-lg fa-trash"></i></a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-4">
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
        
    </div>

</div>
@endsection


@section('modal')
<!-- Modal -->
<div id="addImage" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Gambar</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.gallery.add') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a class="btn btn-xs btn-success" id="add_btn">Tambah Gambar</a>
                        </div>
                        <hr>
                        <table>
                            <tbody id="isi">
                                <tr>
                                    <div class="form-group">
                                        <label>URL Gambar</label>
                                        <input type="text" class="form-control" name="gambar[]" placeholder="URL Gabar">
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <button class="btn-block btn-primary btn" type="submit">Simpan</button>
            </form>
        </div>
    </div>

    </div>
</div>


@endsection

@section('custom_styles')
<style>
.no-gutter > [class*='col-'] {
    padding-right:0;
    padding-left:0;
}

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

<script type="text/javascript">
$(document).ready(function() {
	var count = 1;
	$("#add_btn").click(function(){
		count += 1;
		$('#isi').append(
			'<tr>'
			+'<td>'
			+'<div class="form-group">'
			+'<label>Pilih Gambar</label>'
			+'<input type="text" class="form-control" name="gambar[]" placeholder="URL Gambar">'
			+ '</div>'
			+ '</td>'
			+ '</tr>'
		);
	});
	$(".remove_item").live('click', function (ev) {
		if (ev.type == 'click') {
			$(this).parents(".records").fadeOut();
			$(this).parents(".records").remove();
		}
	});
});
</script>
@endsection