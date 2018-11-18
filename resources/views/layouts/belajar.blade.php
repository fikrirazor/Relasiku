<!doctyple html>
<html>
<head>
	@include('includes.head')
</head>
<body class="biruabu">
	
  
	  <div class="row biruabu flex">
      <div class="col s2 putih">
	  <ul class="collection with-header">
        <li class="collection-header "><a href="../bab1"><h4>Pengenalan Relasi</h4></a></li>
		<li class="collection-header"><a href="../bab2"><h4>Kardinalitas Relasi</h4></a></li>
		<li class="collection-header"><a href="../bab3"><h4>Entitas</h4></a></li>
      </ul>
	  </div>
      <div class="col s10 biruabu">
	  <div class="row"></div>
	  <span class="flow-text">@yield('content')</span>
	  <div class="row">
	  <a class="right" href="../pembelajaran">Kembali Ke Belajar</a>
	  </div>
	  </div>
		</div>
	
	<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('js/materialize.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.webui-popover.min.js') }}"></script>
	<script src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>