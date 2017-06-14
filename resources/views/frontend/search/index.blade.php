@extends('layouts.frontend.layout')

@section('title')
Hasil Pencarian
@endsection

@section('content')
<h1>Hasil Pencarian</h1>
<hr>
<p>Anda mencari dengan parameter</p>
@forelse($category_id as $category)
    <?php $modelCategory = App\Category ?>
@empty
    <a href="{{ $toko->website }}"><span class="badge">Tidak Memilih Kategori</span></a>
@endforelse


@endsection