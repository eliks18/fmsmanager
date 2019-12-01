<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{env('APP_NAME')}}</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	@stack('styles')
</head>
<body>
	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-md-3">
				@yield('sidebar')
			</div>
			<div class="col-md-9">
				@yield('content')
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}" type="text/js"></script>
	{{-- <script type="text/javascript" src="{{asset('js/jquery-3.3.1.slim.min.js')}}" type="text/js"></script> --}}
	<script src="{{ asset('js/app.js') }}" type="text/js"></script>
	<script src="{{ asset('fontawesome/js/all.min.js') }}" type="text/js"></script>
	<link href="{{ asset('js/datatables.min.js') }}" type="text/js"/>
	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>
	@stack('scripts')
</body>
</html>