@extends('templates.backend.layout')

@section('title')
Tambah Paket Baru
@endsection

@section('content')
<form action="{{ route('admin.paket.post.add') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label>Judul Paket</label>
                <input type="text" name="title" class="form-control" placeholder="Judul Paket...">
            </div>
            <div class="form-group">
                <label>Kapasitas</label>
                <input type="number" name="capacity" class="form-control" placeholder="Kapasitas...">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Harga...">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="ckeditor" cols="80" name="content" rows="10"></textarea>
            </div>
        </div>
        <div class="col-md-5">
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
        </div>
    </div>
                <button class="btn-block btn-primary btn" type="submit">Simpan</button>
</form>
@endsection

@section('custom_scripts')
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

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection