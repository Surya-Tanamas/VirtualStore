<?php

// Nomor Pesanan
$nomor_pesanan = "00001";

for( $id = 1; $id <= $request['pesanan']; $id++ ) {
	$display[] = [
		"item" => $request['item'.$id], 
		"jumlah" => $request['jumlah'.$id], 
		"harga" => $request['harga'.$id]
	];
}

?>
@extends('layouts.front')

@section('content')
<div class="row">
	<div class="col-md-6 mx-auto p-1">
		<div class="row m-0">
			<div class="col-12 h5 text-center">Terima Kasih telah memesan makanan/minuman anda ditempat kami!</div>
			<div class="col-12 h5 text-center">Nomor Pesanan Anda<br>#{{ $nomor_pesanan }}</div>
		</div>
		
		<div class="row m-0 mt-3">
			<div class="col h5">Detail Pemesanan :</div>
		</div>
		<div class="border jumbotron row mx-0 my-1 p-0">
			<div class="col px-2 py-0">
				@foreach( $display as $var )
				<div class="row m-0">
					<div class="col my-auto px-2 py-1">
						<div class="font-weight-bold">{{$var['item']}}</div>
					</div>
					<div class="col my-auto px-2 py-1 text-center">
						<div class="font-weight-bold">{{$var['jumlah']}}</div>
					</div>
					<div class="col my-auto px-2 py-1 text-right">
						<div class="font-weight-bold">{{$var['harga']}}</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="border jumbotron row mx-0 my-1 p-0">
			<div class="col px-2 py-0">
				<div class="row m-0">
					<div class="col-6 h6 my-0 p-2">
						<div class="font-weight-bold">Total Harga</div>
					</div>
					<div class="col-6 h6 my-0 p-2 text-right">
						<div class="font-weight-bold">{{$request['total']}}</div>
					</div>
					<div class="col-6 h6 my-0 p-2">
						<div class="font-weight-bold">Pembayaran</div>
					</div>
					<div class="col-6 h6 my-0 p-2 text-right">
						<div class="font-weight-bold">{{$request['bayar']}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection