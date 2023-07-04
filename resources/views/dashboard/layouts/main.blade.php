<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<title>{{ $title }}</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<link href="/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	@livewireStyles

	<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
	<style>
		trix-toolbar [data-trix-button-group="file-tools"] {
		  display: none;
		}
	</style>
</head>

<body>
	<div class="wrapper">
        {{-- start - sidebar --}}
		@include('dashboard.partials.sidebar')
        {{-- end - sidebar --}}

		<div class="main">
            {{-- start - navbar --}}
			@include('dashboard.partials.navbar')
            {{-- end - navbar --}}

            {{-- start - content --}}
			@yield('container')
            {{-- end - content --}}

            {{-- start - footer --}}
			@include('dashboard.partials.footer')
            {{-- end - footer --}}
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script src="/js/app.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

	<script>
        $(function() {
            $("#myTable").dataTable();
        });
    </script>

	@stack('calendar')
	@stack('table')
	@stack('slug')
	
	@include('sweetalert::alert')
	@livewireScripts
	@stack('kelasAlert')
	@stack('kelas1Alert')
	@stack('kelas2Alert')
	@stack('kelas3Alert')
	@stack('kelas4Alert')
	@stack('kelas5Alert')
	@stack('GuruAlert')
	@stack('GaleriAlert')
	@stack('BlogAlert')
	@stack('KontakAlert')
	@stack('AdminAlert')
</body>

</html>