<!DOCTYPE html>
<html>
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Base URL -->
		<base href="{{asset('')}}"/>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"/>
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/frontend.css')}}"/>
		
        <title>{{$page_title ?? 'Welcome'}} - {{APP_TITLE}}</title>
    </head>
    <body>

		<nav class="navbar navbar-expand-lg navbar-light bg-default">
			<div class="container">
				<a class="navbar-brand" href="{{asset('')}}">{{APP_TITLE}}</a>
			</div>
		</nav>

        <div class="container">
            @yield('content')
        </div>
		
        @section('content2')
        @show
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="{{asset('jquery/jquery.slim.min.js')}}"></script>
		<script src="{{asset('popper/dist/umd/popper.min.js')}}"></script>
		<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
		
    </body>
</html>