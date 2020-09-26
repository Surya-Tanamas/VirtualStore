<?php
use App\Models\stokBarang;
$id = 1;
if( $request ?? '' ) {
	foreach( json_decode( $request->pesanan ) as $json ) {
		$json = json_decode( $json );
		$harga[] = $json[1];
		$pesanan[] = $json;
	}
} else {
	header("location:./");
	exit;
}
$total = array_sum( $harga );
?>
@extends('layouts.front')

@section('content')
<div class="row">
	<div class="col-md-5 p-1">
		<form method="post" action="simpan">
			@csrf
			<div class="row m-0">
				<label class="col-auto col-form-label h6 my-auto">Detail Pemesanan :</label>
			</div>
			@foreach( $pesanan as $var )
			<div class="row m-0">
				<div class="col col-sm my-auto p-1">
					<input type="text" class="form-control form-control-sm" name="{{'item'.$id}}" value="{{$var[0]}}"/>
					<input type="hidden" class="form-control form-control-sm" id="{{'harga'.$id}}" name="{{'harga'.$id}}" value="{{$var[1]}}"/>
				</div>
				<div class="col-4 col-sm-3 ml-auto my-auto p-1">
					<input type="number" class="buttons-only form-control-sm" id="{{'jumlah'.$id}}" name="{{'jumlah'.$id}}" min="0" max="99" value="1" onchange="update(this,{{count($pesanan)}})"/>
				</div>
			</div>
			<?php $id++; ?>
			@endforeach
			<div class="row m-0">
				<label class="col-auto col-form-label h6 my-auto">Detail Pembayaran :</label>
			</div>
			<div class="row m-0">
				<label class="col col-form-label my-auto">Total Harga</label>
				<div class="col ml-auto my-auto p-1">
					<input type="text" class=" form-control-plaintext text-right px-2" id="total" name="total" value="{{number_format($total,0,'','.')}}" readonly/>
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

@section('jquery')
<script src="{{ asset('js/bootstrap-input-spinner.js') }}"></script>
<script>$("input[type='number']").inputSpinner({buttonsOnly: true})</script>
<script src="{{ asset('js/pesan.js') }}"></script>
@endsection