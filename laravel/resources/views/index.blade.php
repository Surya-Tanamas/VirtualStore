<?php

use App\Models\stokBarang;

?>

@extends('layouts.app')

@section('content')
<div class="row">
@foreach( stokBarang::where("jenis", "Coffee")->get() as $var )
	<div class="border-0 col-md-4 p-1">
		<div class="border row jumbotron m-0 p-1">
			<div class="col-4">
				<img class="rounded w-100" src="{{$var->gambar}}"/> 
			</div>
			<div class="col-8">
				<div class="h5 my-1">{{$var->nama}}</div>
				<div class="h6 font-weight-normal my-1">{{$var->deskripsi}}</div>
			</div>
			<div class="col-4 my-auto text-center">
				<div class="h6 my-1">{{ number_format( $var->harga, 0, '', '.') }}</div>
			</div>
			<div class="col-8 my-auto text-center">
				<button class="btn btn-sm btn-outline-primary">Tambah</button>
			</div>
		</div>
	</div>
@endforeach
</div>
@endsection