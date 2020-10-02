<?php
use App\Models\stokBarang;
use App\Models\kategoriBarang;
?>
@extends('layouts.front')

@section('content')

@foreach( kategoriBarang::all() as $str )
<div class="row">
	<div class="bg-default col-12 jumbotron my-2 p-2">
		<div class="h5 ml-2 my-1">{{ucwords( $str->nama )}}</div>
	</div>
	@foreach( stokBarang::where('jenis', $str->nama)->get() as $var )
		<div class="col-md-4 p-1">
			<div class="border row jumbotron m-0 p-1">
				<div class="col-4">
					<img class="w-100 rounded" src="{{$var->gambar}}" />
				</div>
				<div class="col-8">
					<div class="h5 my-1">{{$var->nama}}</div>
					<div class="h6 font-weight-normal my-1">{{$var->deskripsi}}</div>
				</div>
				<div class="col-4 text-center my-auto">
					<div class="h6 my-1">{{number_format($var->harga, 0, '', '.')}}</div>
				</div>
				<div class="col-8 text-center my-auto">
					<button class="btn btn-sm btn-outline-primary" onclick="tambah(this)" value="{{json_encode([$var->nama,$var->harga])}}">Tambah</button>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endforeach

@endsection

@section('content2')
<div class="container-fluid bg-default fixed-bottom">
	<div class="row">
		<div class="col-sm-6 col-md-3 mx-auto" id="display"></div>
	</div>
</div>
@endsection

@section('jquery')
<script src="{{ asset('js/index.js') }}"></script>
@endsection