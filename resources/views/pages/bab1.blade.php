@extends('layouts.belajar')
@section('content')
<div class="row">
<div class="row">
<div class="container">
<h1>Pengenalan Relasi</h1>
</div>
</div>
<div class="container"> 
<div class="row">
    <div class="col s12 m9 l10">
         <iframe width="1280" height="720" src="https://www.youtube.com/embed/veum42cBWo0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <ul class="collapsible " data-collapsible="expandable" style="width:1280;">
    <li>
      <div class="collapsible-header" style="color:black;">Relasi</div>
      <div class="collapsible-body"><p align="justify">
	  <span class="amber-text text-darken-2" style="font-family: calibri, sans-serif">Relasi </span> <span style="font-family: calibri, sans-serif; font-size: 14pt;"> merupakan sebuah tabel dengan kolom-kolom dan baris-baris. Pada model relasional, relasi digunakan untuk menyimpan informasi mengenai objek-objek yang direpresentasikan dalam sebuah basis data. Relasi ini digambarkan dalam bentuk tabel dua dimensi. Contohnya mengenai informasi pegawai-pegawai yang bekerja di perusahaan X direpresentasikan pada relasi PEGAWAI yang mengandung informasi nomor induk pegawai, nama, alamat, gaji dan kode divisi tempat pegawai bekerja.</span></p>
    </li>
    <li>
      <div class="collapsible-header" style="color:black;">Attribut</div>
      <div class="collapsible-body"><p> <span class="amber-text text-darken-2" style="font-family: calibri, sans-serif">Atribut </span> <span style="font-family: calibri, sans-serif; font-size: 14pt;"> merupakan kolom dari suatu relasi yang mempunyai nama. Atribut-atribut pada suatu relasi tidak harus tersusun secara khusus. Contohnya, pada relasi Member mempunyai lima kolom untuk atribut-atribut idMember, nmMember, username, password, email, telp, jalan, kota, provinsi, kodepos.</span></p>
<p align="justify"> <span class="amber-text text-darken-2" style="font-family: calibri, sans-serif">Primmary Key </span> <span style="font-family: calibri, sans-serif; font-size: 14pt;">adalah&nbsp;field kunci / utama dari suatu tabel yang menunjukkan bahwa field yang menjadi kunci tersebut tidak bisa diisi dengan data yang sama, / dengan kata lain Primary key menjadikan tiap record memiliki identitas sendiri-sendiri yang membedakan satu sama lainnya (unik).</span></p>
<p align="justify"><span class="amber-text text-darken-2" style="font-family: calibri, sans-serif">Foreign Key </span><span style="font-family: calibri, sans-serif; font-size: 14pt;">yaitu satu atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya. Foreign key berguna untuk mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain,jadi kolom foreign key nilainya harus diambil dari nilai kolom pada tabel lain.</span></p></div>
    </li>
	<li>
      <div class="collapsible-header" style="color:black;">Pengaruh Atribut Komposit</div>
      <div class="collapsible-body">
	  <p>
	  <span class="amber-text text-darken-2" style="font-family: calibri, sans-serif">Atribut komposit akan dipecah dengan membuat atribut terpisah untuk masing-masing komponennya.</span><br>
	  <span style=" font-family: calibri, sans-serif;"><span style="font-size: medium;"><span style="font-size: 14pt;"> Contoh seperti pada attribute alamat akan dibagi menjadi beberapa komponen seperti jalan, kota, provinsi dan kode pos seperti berikut:</span> </span></span></p>
	  <br><img src="{{ URL::asset('img/komposit.png') }}" alt="" class=" responsive-img" style="max-width: 100%;display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;">
	  </div>
    </li>
	<li>
      <div class="collapsible-header" style="color:black;">Pengaruh Atribut Multivalues</div>
      <div class="collapsible-body"><p><span class="amber-text text-darken-2" style="font-family: calibri, sans-serif">Atribut multivalues M dari entitas E direpresentasikan oleh table terpisah E dan M. Atribut Multivalues dilambangkan dengan 2 lingkaran pada atributnya. </span><br>
	  <span style="font-family: calibri, sans-serif; font-size: 14pt;">Contohnya attribute image memiliki lebih dari 1 value yaitu idproduk dan image seperti berikut: </span>
	  <br><img src="{{ URL::asset('img/multvalues.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
	  </p></li>
  </ul>
    </div>
    
  </div>
</div>
</div>