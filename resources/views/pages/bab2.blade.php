@extends('layouts.belajar')
@section('content')
<div class="row">
<div class="row">
<div class="container">
<h1>Kardinalitas Relasi</h1>
</div>
</div>
<div class="container">
  
 <ul class="collapsible " data-collapsible="expandable">
   
<!-- BAB2 -->
<li> 
<div class="collapsible-header" style="color:black;">Pengaruh Kardinalitas
</div> 
<div class="collapsible-body">
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">Model relasi ini berdasarkan persepsi dunia nyata diantaranya himpunan objek dasar dan relasi antara entitas. Entitas dapat diartikan sebagai objek dan diidentifikasikan secara unik, dan objeknya dapat berbentuk orang, barang, dan sebagainya. Kardinalitas relasi menunjukkan maksimum entitas yang dapat berelasi dengan entitas pada himpunan entitas lain.</span></p>
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">kadinalitas relasi yang terjadi di antara dua himpunan entitas dapat berupa satu ke satu (<em>one to one</em>), satu ke banyak (<em>one to many</em>), dan banyak ke banyak (<em>many to many</em>).</span></p>
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Terdapat tiga jenis kardinalitas yaitu </span></p>
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Relasi Biner (me-relasi-kan 2 entitas)<br />Relasi Unary (me-relasi-kan 1 entitas)<br />Relasi Ternary dan n-nary (me-relasi-kan 3 atau lebih entitas)</span></p>
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">&nbsp;</span></p>
</li>


<li> 
<div class="collapsible-header" style="color:black;">Relasi Biner 
</div> 
<div class="collapsible-body">
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">Langkah umum transformasi relasi biner adalah sebagai berikut: </span></p>
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">1. Identifikasi satu entitas sebagai &ldquo;parent&rdquo; </span></p>
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">2. Sedangkan entitas lainnya sebagai &ldquo;child&rdquo; </span></p>
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">3. Sebagai aturan umum, PK dari parent ditambahkan kedalam child sebagai FK 4. Atribut yang berada pada relasi ditambahkan ke table child. </span></p>
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;">Untuk entitas dengan kardinalitas satu ke satu (one to one)</span></p>
<br><img src="{{ URL::asset('img/biner1.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Dimana terdapat 2 pilihan entitas parent.</span></p>
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Untuk kardinalitas satu ke banyak (one to many)</span></p>
<br><img src="{{ URL::asset('img/biner2.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman','serif';">Dimana entitas 1 sebagai parent dan entitas 2 sebagai child</span></p>
<p><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman','serif';">Untuk kardinalitas banyak ke banyak (many to many) </span></p>
<br><img src="{{ URL::asset('img/biiner4.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-family: calibri, sans-serif; font-size: 14pt;"><span style="line-height: 115%;">Dimana dibuatnya table baru yaitu T_RELASI sebagai child dan entitas 1 dan 2 sebagai </span><span style="line-height: 115%;">parent dengan PK 1 sebagai FK 1, PK 2 sebagai FK dan ditambahkan Atribut Relasi</span></span></p>
</li>

<li> 
<div class="collapsible-header" style="color:black;">Entitas kuat dan lemah
</div> 
<div class="collapsible-body">
<p><span style="font-size: 14.0pt; line-height: 115%; font-family: 'calibri','serif';">entitas lemah adalah himpunan entitas yang keberadaannya bergantung keberadaan himpunan entitas lain. Direpresentasikan dengan 2 persegi panjang pada entitasnya. Contohnya entitas angsuran merupakan entitas yang bergantung pada entitas kredit untuk lebih jelas sebagai berikut:
</span></p>
<!-- ini dibawah gambar. -->
<p><span style="font-size: 12pt; line-height: 115%; font-family: calibri, sans-serif;"><span style="font-size: 14pt;">Dimana PK pada entitas kredit dijadikan FK pada entitas Angsuran</span> </span></p>

</li>

<li> 
<div class="collapsible-header" style="color:black;">Relasi Unary
</div> 
<div class="collapsible-body">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Relasi Unary dengan kardinalitas 1 ke n</span></p>
<br><img src="{{ URL::asset('img/unary1.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 14pt; font-family: calibri, sans-serif;">Dimana FK adalah PK itu sendiri dan attribute relasi ditambahkan Relasi Unary </span></p>
<p><span style="font-size: 14pt; font-family: calibri, sans-serif;">dengan kardinalitas n ke m</span></p>
<br><img src="{{ URL::asset('img/unary2.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Dimana dibuat table baru yaitu t_relasi dengan PK sebagai FK1 dan FK2 dan ditambahkan Atribut Relasi</span></p>

</li>

<li> 
<div class="collapsible-header" style="color:black;">Relasi Ternary
</div> 
<div class="collapsible-body">
<br><img src="{{ URL::asset('img/trinary.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Dimana dibuatnya table baru yaitu T_RELASI sebagai child dan Entitas 1, 2 dan 3 sebagai parent dengan PK 1 sebagai FK 1, PK 2 sebagai FK 2 dan PK 3 sebagai FK 3 dan ditambahkan Atribut Relasi</span></p>

</li>
  </ul>
</div>
</div>
@stop