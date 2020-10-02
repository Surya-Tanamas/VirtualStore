<?php
use App\Models\stokBarang;
use App\Models\kategoriBarang;
?>
@extends('layouts.front')

@section('content')
<div class="row h-100">
	<div class="col-sm-9 col-md-7 mx-auto my-auto p-2">
		<ul class="nav nav-tabs nav-fill">
			<li class="nav-item  font-weight-bold text-primary active">
				<a class="nav-link active font-weight-bold text-primary" href="login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="register">Register</a>
			</li>
		</ul>
		<form class="border-left border-right border-bottom rounded-bottom p-3" method="post" action="{{ route('login') }}">
			@csrf
			<div class="row">
				<div class="col">
					<input type="hidden" class="form-control" name="referer" value="{{ $referer }}" />
					@if( session('status') )
					<div class="font-weight-bolder text-danger text-center my-2">{{ session('status') }}"</div>
					@endif
				</div>
			</div>
			<div class="form-group row my-2">
				<label for="email" class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm">
					<input type="email" class="form-control" id="email" name="email" />
				</div>
			</div>
			<div class="form-group row my-2">
				<label for="password" class="col-sm-3 col-form-label">Password</label>
				<div class="col-sm">
					<input type="password" class="form-control" id="password" name="password" />
				</div>
			</div>
			<div class="form-group row my-2">
				<div class="col-auto mx-auto">
					<input type="submit" class="btn btn-primary form-control px-4" name="submit" value="Login" />
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('jquery')
@endsection