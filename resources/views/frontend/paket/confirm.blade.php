@extends('layouts.frontend.layout')

@section('title')
Konfirmasi Booking
@endsection

@section('content')

<div class="container">
	<div class="row">
		<center>
			<h2>Konfirmasi Booking<br><small>Harap Simpan Data-data dibawah ini</small></h2>
			<hr>
		</center>
		<div class="row">
			<div class="col-md-12">
				<center>
					Data booking Anda sedang diproses, silahkan tunggu konfirmasi selanjutnya.
					<div class="alert alert-success">
						<table class="table" style="width: 460px">
							<tr>
								<td><center>Kode Booking</td><center>
								<td><center>:</td><center>
								<td><center><b>{{ $kd_booking }}</b></td><center>
							</tr>
							<tr>
								<td><center>Nama</td><center>
								<td><center>:</td><center>
								<td><center><b>{{ $visitor->name }}</b></td><center>
							</tr>
							<tr>
								<td><center>Paket</td><center>
								<td><center>:</td><center>
								<td><center><b>{{ $paket->title }}</b></td><center>
							</tr>
						</table>
					</div>
				</center>
			</div>
			<!-- row anyar didieu nya -->
		</div>
	</div>
</div>
@endsection