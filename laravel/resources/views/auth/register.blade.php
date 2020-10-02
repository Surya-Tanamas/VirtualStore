<?php
use App\Models\stokBarang;
use App\Models\kategoriBarang;
?>
@extends('layouts.front')

@section('content')
<div class="row h-100">
	<div class="col-sm-9 col-md-7 mx-auto my-auto p-2">
		<ul class="nav nav-tabs nav-fill">
			<li class="nav-item">
				<a class="nav-link" href="login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bold text-primary active" href="register">Register</a>
			</li>
		</ul>
		<form class="border-left border-right border-bottom rounded-bottom p-3" method="post" action="{{ route('register') }}">
			@csrf
			<div class="row">
				<div class="col">
					<input type="hidden" class="form-control" name="referer" value="{{ $referer }}" />
					@if( session('status') )
					<div class="font-weight-bolder text-danger text-center my-2">{{ session('status') }}"</div>
					@endif
				</div>
			</div>
			<div class="form-group row my-1">
				<label for="nama" class="col-sm-3 col-form-label py-0">Nama Lengkap</label>
				<div class="col-sm my-auto">
					<input type="text" class="form-control" id="nama" name="name" />
				</div>
			</div>
			<div class="form-group row mt-1 mb-2">
				<label for="email" class="col-sm-3 col-form-label">WhatsApp</label>
				<div class="col-sm my-auto">
					<input type="text" class="form-control" id="whatsapp" name="whatsapp" />
				</div>
			</div>
			<div class="form-group row my-2">
				<label for="email" class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm my-auto">
					<input type="email" class="form-control" id="email" name="email" />
				</div>
			</div>
			<div class="form-group row mt-2 mb-1">
				<label for="password" class="col-sm-3 col-form-label">Password</label>
				<div class="col-sm my-auto">
					<input type="password" class="form-control" id="password" name="password" onchange="checking(this)" />
				</div>
				<span class="text-danger" id="msg"></span>
			</div>
			<div class="form-group row my-1">
				<label for="password1" class="col-sm-3 col-form-label py-0">Konfirmasi Password</label>
				<div class="col-sm my-auto">
					<input type="password" class="form-control" id="password1" name="password1" onchange="matching()" />
				</div>
				<span class="text-danger" id="msg1"></span>
			</div>
			<div class="form-group row my-2">
				<div class="col-auto mx-auto">
					<input type="submit" class="btn btn-primary form-control px-4" id="submit" value="Register" />
				</div>
			</div>
		</form>
		<div id="display"></div>
	</div>
</div>
@endsection

@section('jquery')
<script src="{{ asset('js/register.js') }}"></script>
@endsection