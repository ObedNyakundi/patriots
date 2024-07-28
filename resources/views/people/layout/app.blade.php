<!DOCTYPE html>
<html>

<!-- Page header & CSS files -->
@include('people.layout.partials.header')

<body>
<div class="main-container">

	<!-- page preloader -->
	<div id="preloader" class="absolute-center"></div>

	<!-- page header decorations -->
	<img src="{{ asset('/assets/wavingflag.gif') }}" class="waving-flag" alt="KE Waving flag" title="Kenya's waving flag at half-mast">
	<img src="{{ asset('/assets/banch.png') }}" class="flowers" alt="Late Patriot FLowers" title="Flowers in honor of the departed">
	
	<!-- page legend -->
	<div class="legend-caption">
	<h1 class="text-white legend-head">The Patriots Gallery</h1>
	</div>

	<!-- body content -->
	<div class="container content-area">
		<div class="row">
			<!-- Page Menu -->
			@include('people.layout.partials.menu')

		<!-- Add Header if required -->
			<div class="col-lg-12 text-center" style="display: none;">
				<h1>This is the body section</h1>
			</div>

			@yield('content-section')

		</div>
	</div>
<!-- Page Footer & Custom JS -->
@include('people.layout.partials.footer')

</div>
</body>
</html>