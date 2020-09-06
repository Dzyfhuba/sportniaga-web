<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header class="header sticky-top">
		@include('includes.header')
	</header>
	<div id="main" class="container-fluid">
		<div class="row">
			<div class="col-sm-6 p-3" style="background-color: #8c8c8c">
				@yield('preview')
			</div>
			<div class="col-sm p-3" style="background-color: #c8c8c8">
				@yield('category')
			</div>
		</div>
		<div class="row">
			@yield('jerseybola')
		</div>
		@yield('content')
	</div>
	@include('includes.footer')
</body>
</html>