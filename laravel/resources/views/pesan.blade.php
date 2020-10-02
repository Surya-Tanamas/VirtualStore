<?php
use App\Models\stokBarang;
use App\Models\daftarBank;

$id = 1;

$decode = json_decode( $pesanan );

foreach( $decode as $temp ) {
	$json = json_decode( $temp );
	$display[] = $json;
	$harga[] = $json[1];
}

$count = count( $decode );
$total = array_sum( $harga );

if( $username ) {
	$contact = [
		["Nama", $username],
		["WhatsApp", $user->whatsapp]
	];
}

?>
@extends('layouts.front')

@section('content')
<div class="row">
	<div class="col-md-auto mx-auto p-1">
		<form method="post" action="simpan">
			@csrf
			<input type="hidden" id="count" name="pesanan" value="{{ $count }}"/>
			<div class="bg-default jumbotron row mx-0 my-2 p-1">
				<div class="col h5 my-auto">Detail Pemesanan :</div>
			</div>
			@foreach( $display as $var )
			<div class="row m-0">
				<div class="col col-sm my-auto px-3 py-0">
					<input type="text" class="form-control-plaintext px-2 py-1" name="{{'item'.$id}}" value="{{$var[0]}}"/>
					<input type="hidden" id="{{'harga'.$id}}" name="{{'harga'.$id}}" value="{{$var[1]}}"/>
				</div>
				<div class="col-4 col-sm-3 ml-auto my-auto p-0">
					<input type="number" class="buttons-only form-control-sm" id="{{'jumlah'.$id}}" name="{{'jumlah'.$id}}" min="0" max="99" value="1" onchange="update(this)"/>
				</div>
			</div>
			<?php $id++; ?>
			@endforeach
			<div class="border jumbotron row mx-0 my-2 p-1">
				<label class="col col-form-label font-weight-bold my-auto py-0">Total Pesanan</label>
				<div class="col ml-auto my-auto p-0">
					<input type="text" class=" form-control-plaintext font-weight-bold text-right px-2 py-0" id="total" name="total" value="{{number_format($total,0,'','.')}}" readonly/>
				</div>
			</div>
			
			<div class="row mx-0 my-2 p-1">
				<div class="col-auto mx-auto my-auto p-0">
					<a class="btn btn-sm btn-outline-primary font-weight-bold" href="./?tambah=1">Tambah Pesanan</a>
				</div>
			</div>
			
			
			<div class="bg-default jumbotron row mx-0 my-2 p-1">
				<div class="col h5 my-auto">Pembayaran :</div>
			</div>
			<div class="border jumbotron row mx-0 my-2 p-1">
				<div class="col-sm my-auto px-4 py-1">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="bayar" value="Cash" checked/>
						<label class="form-check-label" for="bayar">Cash</label>
					</div>
				@foreach( daftarBank::all() as $var )
					<div class="form-check">
						<input class="form-check-input" type="radio" name="bayar" value="{{$var->nama_bank}}"/>
						<label class="form-check-label" for="bayar">{{$var->nama_bank . ' ' . $var->nomor_rekening}}</label>
					</div>
				@endforeach
				</div>
			</div>
			
			@if( $username )
			<div class="bg-default jumbotron row mx-0 my-2 p-1">
				<div class="col h5 my-auto">Data Pemesan :</div>
			</div>
			<div class="border jumbotron row mx-0 my-2 p-1">
				<div class="col-sm my-auto p-1">
				@foreach( $contact as $var )
					<div class="form-group row m-0">
						<label class="col-3 col-form-label font-weight-bold">{{ ucwords( $var[0] ) }}</label>
						<div class="col my-auto px-2 py-0">
							<input type="text" class="form-control-plaintext px-2 py-1" value="{{ $var[1] }}"/>
						</div>
					</div>
				@endforeach
				</div>
			</div>
			@endif
			
			<div class="row m-0">
				<div class="col text-center p-1">
					<input type="submit" class="btn btn-sm btn-primary px-4" value="Pesan"/>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('jquery')
<script src="{{ asset('js/bootstrap-input-spinner.js') }}"></script>
<script>$("input[type='number']").inputSpinner({buttonsOnly: true})</script>
<script src="{{ asset('js/pesan.js') }}"></script>
@endsection