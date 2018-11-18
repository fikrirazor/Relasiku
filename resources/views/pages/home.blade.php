@extends('layouts.default')

@section('content')
	<div class="row" >
		
					<div class="col s10 m6 10 center-align">
						<div class="container">
						<div class="row " style="margin-top:50px;">
							<div class="card-panel hoverable black opa">
								<h6>Quote</h6>
								<span class="white-text ">"Ilmu adalah cahaya
yang menerangi
jalan kehidupan"
								</span>
							</div>
						</div>
						<div class="row ">
							<h5 style="font-weight:bold;">Belajar Asik Di Relasiku</h5>
						</div>
						<div class="row ">
							<a class="waves-effect waves-light btn  amber darken-4 " style="width: calc(33.333% - 20px);margin-top: 100px;" href="/pembelajaran">Mulai</a>
						</div>
						</div>
					</div>
					<div class="col s10 m6 10 center-align ">
					<div class="container">
						<h5 style="font-weight:bold;">Daftar</h5>
						<div class="row ">
							<div class="input-field col s6 ">
							  <input id="first_name" type="text" class="validate white-text">
							  <label for="first_name">Nama Depan</label>
							</div>
							<div class="input-field col s6">
								<input id="last_name" type="text" class="validate white-text">
								<label for="last_name">Nama Belakang</label>
							</div>
						</div>
						<div class="row">
						  <div class="input-field col s12">
							<input id="name" type="text" class="validate white-text">
							<label for="username">Username</label>
						  </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
							  <input id="password" type="password" class="validate white-text">
							  <label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 ">
							  <input id="email" type="email" class="validate white-text">
							  <label for="email">Email</label>
							</div>
						</div>
						<div class="row center-align">
							<a class="waves-effect waves-light btn  amber darken-4" style="width:100px">Daftar</a>
						</div>
						</div>
					</div>
					
			 </div>
		  <div class="row center-align warnabg2" style="margin-bottom: 0px;">
			<div class="container">			
				<div class="col s4 m4 12" style="margin-top:50px;margin-bottom:50px;">
				  <img src="{{ URL::asset('img/bumi.png') }}" alt="" class="circle responsive-img center-align" style="max-width: 40%">
				  <h5 class="center">Belajar Dimana Saja</h5>
				</div>
				<div class="col s4 m4 12" style="margin-top:50px;margin-bottom:50px;">
				  <img src="{{ URL::asset('img/buku.png') }}" alt="" class="circle responsive-img center-align " style="max-width: 40%"> 
				  <h5 class="center">Materi Lengkap</h5>
				</div>
				<div class="col s4 m4 12" style="margin-top:50px;margin-bottom:50px;">
				  <img src="{{ URL::asset('img/grade.png') }}" alt="" class="circle responsive-img center-align" style="max-width: 40%">
				  <h5 class="center">Sistem Grading</h5>
				</div>				
			</div>
		</div>

@stop