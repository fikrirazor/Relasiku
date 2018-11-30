@extends('layouts.belajar')
@section('content')
<div class="row">
<div class="row">
<div class="container">
<h1>Relasi</h1>
</div>
</div>
<div class="container">

    
 <ul class="collapsible " data-collapsible="expandable">
   
<li> 
<div class="collapsible-header" style="color:black;">Entitas kuat dan lemah
</div> 
<div class="collapsible-body">
<p><span style="font-size: 14.0pt; line-height: 115%; font-family: 'calibri','serif';">entitas lemah adalah himpunan entitas yang keberadaannya bergantung keberadaan himpunan entitas lain. Direpresentasikan dengan 2 persegi panjang pada entitasnya. Contohnya entitas angsuran merupakan entitas yang bergantung pada entitas kredit untuk lebih jelas sebagai berikut:
</span></p>
<br><img src="{{ URL::asset('img/entitaslemah.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 12pt; line-height: 115%; font-family: calibri, sans-serif;"><span style="font-size: 14pt;">Dimana PK pada entitas kredit dijadikan FK pada entitas Angsuran</span> </span></p>
</li>

<li> 
<div class="collapsible-header" style="color:black;">Entitas dengan kasus Agregasi
</div> 
<div class="collapsible-body">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Pengertian dari Agregasi yaitu hubungan langsung dalam ERD antara himpunan entitas dengan himpunan relasi, mensyaratkan telah adanya relasi lain. terbentuknya relasi tidak juga dari entitas tapi bisa juga mengandung unsur relasi lainnya.</span></p>
<br><img src="{{ URL::asset('img/agregrasi.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Dimana Agregasi entitas A dan B membentuk table R1 dengan PK_A dan PK_B sebagai FK 1 dan FK 2 dan berelasi dengan entitas C sehingga membentuk table R2 dengan PK_R1 dan PK_C sebagai FK1 dan FK2</span></p>

</li>


<li> 
<div class="collapsible-header" style="color:black;">Entitas dengan kasus generalisasi spesialisasi
</div> 
<div class="collapsible-body">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Bila pada sebuah himpunan entitas dilakukan pengelompokan dan akhirnya melahirkan himpunan entitas baru maka proses ini disebut Spesialisasi. Tapi jika kebalikan dari proses spesialisasi disebut dengan Generalisasi.</span></p>
<p><span style="font-size: 14pt; line-height: 115%; font-family: 'Times New Roman', 'serif';"><span style="font-family: calibri, sans-serif;">Spesialisasi dan generalisasi sama-sama dilambangkan dengan komponen segitiga terbalik bertuliskan IS A. IS A juga melambangkan hubungan antara superclass-subclass. Entity yang dengan kedudukkan lebih rendah/tinggi memiliki lambang sama. Contohnya Pegawai tetap dan Pegawai honorer adalah Pegawai sehingga semua attribute pada pegawai ada di pegawai tetap dan honorer</span> </span></p>
<br><img src="{{ URL::asset('img/general.png') }}" alt="" class=" responsive-img center-align" style="max-width: 100%">
<p><span style="font-size: 14pt; line-height: 115%; font-family: calibri, sans-serif;">Dimana dapat dibuat table baru yaitu table pegawai atau pegawai tetap dan honorer ditambahkan semua atribut yang ada di entitas pegawai</span></p>

</li>
  </ul>
</div>
</div>
@stop