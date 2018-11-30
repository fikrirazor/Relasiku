
			
<!doctyple html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		<div class=""> 
				<nav class=" " style="background-color:#1285edff">
					<div class="nav-wrapper " style="">
					  <a href="/" class="brand-logo">Relasiku</a>
					  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					
					</div>
				</nav>
				
						  
			</div>
	</header>
	<main class="warnabg polkadot">
		@yield('content')
	</main>
	<footer class="page-footer polkadot ">
		@include('includes.footer')
	</footer>
	<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('js/materialize.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.webui-popover.min.js') }}"></script>
	<script src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>