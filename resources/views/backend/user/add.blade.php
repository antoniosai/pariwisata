@extends('layouts.backend.layout')

@section('title')
Tambah User
@endsection

@section('header')
Tambah User
@endsection

@section('content')
<div class="card" style="padding: 20px 20px 20px 20px;">
    <h4 class="title">Tambah User Baru</h4>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('user.post.add') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama User">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Alamat Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="text" name="password" class="form-control" placeholder="Password Baru" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="text" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection