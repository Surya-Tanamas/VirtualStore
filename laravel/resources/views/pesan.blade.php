<?php
use App\Models\stokBarang;
//dd( $request->pesanan );
?>
@extends('layouts.front')

@section('content')
<div class="row">
	<div class="col-md-4 p-1">
		<form method="post" action="pesan">
			@csrf
			<div class="row m-0">
				<label class="col-auto col-form-label h6 my-auto">Detail Pemesanan :</label>
			</div>
			@foreach( json_decode( $request->pesanan ) as $var )
			<div class="row m-0">
				<label class="col-auto col-form-label my-auto">{{$var}}</label>
				<div class="col-3 ml-auto my-auto p-1">
					<input type="hidden" name="item" value="{{$var}}"/>
					<!-- Bagaimana cara membuat bagian ini bisa ditambah kurang ya ? -->
					<input type="number" class="form-control form-control-sm text-right" name="jumlah" value="1"/>
				</div>
			</div>
			@endforeach
			<div class="row m-0">
				<label class="col-auto col-form-label h6 my-auto">Detail Pembayaran :</label>
			</div>
			<div class="row m-0">
				<label class="col col-form-label my-auto">Total Harga</label>
				<div class="col ml-auto my-auto p-1">
					<input type="text" class="form-control form-control-sm text-right" name="jumlah" value="10.000" readonly/>
				</div>
			</div>
			<div class="row m-0">
				<div class="col text-center p-1">
					<input type="submit" class="btn btn-sm btn-primary px-4" value="Pesan"/>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection