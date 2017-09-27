<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-control" content="public">
	<title>Amby Dienstencheques</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,600">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,700">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

	<div id="app">
		@include('partials.menu')
			<div class="site-content">
				@yield('content')
			</div>
		@include('partials.footer')
	</div>
	

	<script>
        window.Laravel =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

	<script src="{{ mix('/js/app.js') }}"></script>
	@yield('js')
</body>
</html>