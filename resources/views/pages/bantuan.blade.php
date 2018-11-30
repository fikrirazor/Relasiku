@extends('layouts.bantuan')

@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-2">Bantuan</h1>
        <div class="row center">
          <h5 class="header col s12 light">Dapatkan seluruh informasi di halaman Relasiku.
Temukan berbagai macam informasi yang dibutuhkan disini panduan menggunakan website Relasiku.</h5>
        </div>
      </div>
    </div>
<div class="parallax"><img src="https://rexus.id/wp-content/uploads/2016/08/Bg_servis.jpg" alt="Unsplashed background img 1"></div>
</div>
<div class="row center-align putihtulisanhitam">
<br><br>
<div class="card-panel grey lighten-5 z-depth-1">
<h4>Cara Daftar</h4><br>
<div class="row">
<div class="col s4"><img src="https://cdn.discordapp.com/attachments/368030130741706762/518074657379713025/unknown.png" class="responsive-img"/></div><div clas="col s8"><span class="black-text">
                <ul class="collection left-align">
				<li class="collection-item">1. Isikan Nama depan dengan nama depan Anda</li>
				<li class="collection-item">2. Isikan Nama belakang dengan nama belakang Anda</li>
				<li class="collection-item">3. Isikan Email dengan email Anda contoh "fikrirazor@yahoo.co.id"</li>
				<li class="collection-item">4. Isikan kata sandi</li>
				<li class="collection-item">5. Klik daftar untuk menyelesaikan pendaftaran</li>
				</ul>
</span></div></div></div>
      
<br><br>
<div class="card-panel grey lighten-5 z-depth-1">
<h4>Cara Login</h4><br>
<div class="row">
<div class="col s4"><img src="https://cdn.discordapp.com/attachments/368030130741706762/518077957894307873/unknown.png" class="responsive-img"/></div><div clas="col s8"><span class="black-text">
                <ul class="collection left-align">
				<li class="collection-item">1. Isikan Email dengan email Anda contoh "fikrirazor@yahoo.co.id"</li>
				<li class="collection-item">2. Isikan kata sandi</li>
				<li class="collection-item">3. Klik login untuk mulai pembelajaran</li>
				</ul>
</span></div></div></div>
<br><br>
<div class="card-panel grey lighten-5 z-depth-1">
<h4>Cara Pilih Materi</h4><br>
<div class="row">
<div class="col s4"><img src="https://media.discordapp.net/attachments/368030130741706762/518078566378766337/unknown.png" class="responsive-img"/></div><div clas="col s8"><span class="black-text">
                <ul class="collection left-align">
				<li class="collection-item">1. Melakukan login di website Relasiku</li>
				<li class="collection-item">2. Pada menu pelajaran pilih pelajaran yang ingin dipelajari</li>
				<li class="collection-item">3. Anda akan masuk kehalaman pelajaran</li>
				</ul>
</span></div></div></div>
<br><br>
<div class="card-panel grey lighten-5 z-depth-1">
<h4>Belajar</h4><br>
<div class="row">
<div class="col s4"><img src="https://media.discordapp.net/attachments/368030130741706762/514644689626857472/materis.png" class="responsive-img"/></div><div clas="col s8"><span class="black-text">
                <ul class="collection left-align">
				<li class="collection-item">1. Pada no 1 adalah tempat dimana kalian dapat mempelajari materi relasiku</li>
				<li class="collection-item">2. Pada no 2 kalian dapat mengganti materi tanpa harus kembali ke menu materi</li>
				<li class="collection-item">3. Anda akan masuk kehalaman pelajaran</li>
				</ul>
</span></div></div></div>	
<br><br>
			 </div>
			<div class="polkadot">
			<div class="container">
				<div class="row" style="font-size:18px;font-weight: bold;">
				<div class="col s12 m4 l2 center-align">
				<a href="../bantuan" style="color:white">Bantuan</a>
				</div>
				<div class="col s12 m4 l8 center-align">
				<div class="row">
				<img src="{{ URL::asset('img/facebook.png') }}" alt="" class=" responsive-img center-align" style="max-width: 5%">
				<img src="{{ URL::asset('img/instagram.png') }}" alt="" class=" responsive-img center-align" style="max-width: 5%">
				</div>
				</div>
				<div class="col s12 m4 l2 center-align">
				<a href="../tentangkami" style="color:white">Tentang Kami</a>
				</div>
				</div>
			</div>
			<div class="footer-copyright">
			  <div class="container">
			  © 2018 Copyright relasiku
			  </div>
			</div>	
</div>			

@stop