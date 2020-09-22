<!DOCTYPE html>
<html>
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<base href="{{APP_URL}}/appstore/">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/apps.css')}}">

        <title>{{$page_title ?? 'Welcome'}} - Virtual Store</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-default">
			<div class="container">
				<a class="navbar-brand" href="">Virtual Store</a>
			</div>
		</nav>

        <div class="container">
            @yield('content')
        </div>
		
		@section('footer')
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link text-secondary" href="#tentang-kami">Tentang Kami</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-secondary" href="#kontak-kami">Kontak Kami</a>
			</li>
		</ul>
		@show
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="{{asset('jquery/jquery.slim.min.js')}}"></script>
		<script src="{{asset('popper/dist/umd/popper.min.js')}}"></script>
		<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    </body>
</html>
