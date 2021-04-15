<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Azzara Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ["{{ asset('assets/css/fonts.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
  @include ('layouts.css_links')

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
      @include ('layouts.logo_header')
			<!-- End Logo Header -->

			<!-- Navbar Header -->
      @include('layouts.navbar')
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
    @include('layouts.sidebar')
		<!-- End Sidebar -->

    <!-- Main Panel -->
    @include('layouts.main-panel')

    <!-- Quick Sidebar -->
    @include('layouts.quick-sidebar')
	</div>
	<!--  JS Files   -->
  @include('layouts.js_links')
</body>
</html>
