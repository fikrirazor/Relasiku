<!doctyple html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
	<main class="warnabg polkadot">
		@yield('content')
	</main>
	
	<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('js/materialize.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.webui-popover.min.js') }}"></script>
	<script src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>