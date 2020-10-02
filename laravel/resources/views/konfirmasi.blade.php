<?php
use App\Models\stokBarang;
use App\Models\daftarBank;

for( $id = 1; $id <= $request['pesanan']; $id++ ) {
	$display[] = [
		"item" => $request['item'.$id], 
		"jumlah" => $request['jumlah'.$id], 
		"harga" => $request['harga'.$id]
	];
}

$contact = [
	["name", $username],
	["whatapp", '081345679809']
];

?>
@extends('layouts.front')

@section('content')
<div class="row">
	<div class="col-md-auto mx-auto p-1">
		<form method="post" action="simpan">
			@csrf
			
			<div class="bg-default jumbotron row mx-0 my-2 p-1">
				<div class="col h5 my-auto">Detail Pesanan :</div>
			</div>
			<div class="border jumbotron row mx-0 my-2 p-1">
				<div class="col px-2 py-0">
				@foreach( $display as $var )
					<div class="form-group row m-0">
						<div class="col my-auto px-2 py-0">
							<input type="text" class="form-control-plaintext px-2 py-1" value="{{$var['item']}}"/>
						</div>
						<div class="col-2 my-auto px-2 py-0">
							<input type="text" class="form-control-plaintext px-2 py-1" value="{{$var['jumlah']}}"/>
						</div>
						<div class="col-3 my-auto px-2 py-0">
							<input type="text" class="form-control-plaintext px-2 py-1" value="{{$var['harga']}}"/>
						</div>
					</div>
				@endforeach
				</div>
			</div>
			
			<div class="bg-default jumbotron row mx-0 my-2 p-1">
				<div class="col h5 my-auto">Kontak Pemesan :</div>
			</div>
			<div class="border jumbotron row mx-0 my-2 p-1">
				<div class="col">
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
			
			<div class="row m-0">
				<div class="col text-center p-1">
					<input type="submit" class="btn btn-sm btn-primary px-4" value="Selesai"/>
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