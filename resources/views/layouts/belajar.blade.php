<!doctyple html>
<html>
<head>
	@include('includes.belajarhead')
	<style>
	 header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
	</style>
</head>
<body>
<ul id="slide-out" class="sidenav sidenav-fixed" style="transform: translateX(0px);">
        <li class="logo" style="border-bottom: 1px solid #E3DFDE;"><a style="color:black;font-size:32px;font-weight:bold;" href="../pembelajaran" class="brand-logo">Relasiku</a></li>
		<li class="bold"style="border-bottom: 1px solid #E3DFDE;"><a class="collapsible-header waves-effect waves-teal" href="../bab1"><h4>Pengenalan Relasi</h4></a></li>
		<li class="bold"style="border-bottom: 1px solid #E3DFDE;"><a class="collapsible-header waves-effect waves-teal" href="../bab2"><h4>Kardinalitas Relasi</h4></a></li>
		<li class="bold"style="border-bottom: 1px solid #E3DFDE;"><a class="collapsible-header waves-effect waves-teal" href="../bab3"><h4>Entitas</h4></a></li>
</ul>
<main>
	  <div class="row ">
      <div class="col s12 biruabu ">
	  <span class="flow-text">@yield('content')</span>
	  <div class="row">
	  <a class="right" href="../quiz" style="color:white;">
	  <span style="line-height:60px;font-size:28px;color:white;font-weight:bold;" id="txt2">Quiz</span><i style="display: inline-flex;vertical-align:top;" class="material-icons medium">arrow_forward</i> </a>
	  </div>
	  </div>
	</div>
	</main>
	<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('js/materialize.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.webui-popover.min.js') }}"></script>
	<script src="{{ URL::asset('js/index.js') }}"></script>
</body>
</html>