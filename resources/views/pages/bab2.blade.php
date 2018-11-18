@extends('layouts.belajar')
@section('content')
<div class="row">
<div class="row">
<div class="container">
<h1>Kardinalitas Relasi</h1>
</div>
</div>
<div class="container">
<p>kadinalitas relasi yang terjadi di antara dua himpunan entitas dapat berupa satu ke satu (one to one), satu ke banyak (one to many), dan banyak ke banyak (many to many).<br>
Terdapat tiga jenis kardinalitas yaitu <br>
Relasi Biner (me-relasi-kan 2 entitas)<br>
Relasi Unary (me-relasi-kan 1 entitas)<br>
Relasi Ternary dan n-nary (me-relasi-kan 3 atau lebih entitas)<br>
__________________________________________________________________________________________</p>
    
 <ul class="collapsible " data-collapsible="expandable">
    <li>
      <div class="collapsible-header" style="color:black;">Relasi Biner (me-relasi-kan 2 entitas)</div>
      <div class="collapsible-body"><p><br> (Atribut) merupakan kolom dari suatu relasi yang mempunyai nama. Atribut-atribut pada suatu relasi tidak harus tersusun secara khusus. Contohnya, pada relasi Member mempunyai lima kolom untuk atribut-atribut idMember, nmMember, username, password, email, telp, jalan, kota, provinsi, kodepos.
<br>Primary key
<br>Primary key adalah field kunci / utama dari suatu tabel yang menunjukkan bahwa field yang menjadi kunci tersebut tidak bisa diisi dengan data yang sama, / dengan kata lain Primary key menjadikan tiap record memiliki identitas sendiri-sendiri yang membedakan satu sama lainnya (unik).
<br>Foreign key
<br>Foreign key yaitu satu atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya. Foreign key berguna untuk mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain,jadi kolom foreign key nilainya harus diambil dari nilai kolom pada tabel lain.
</p></div>
    </li>
    <li>
      <div class="collapsible-header" style="color:black;">Relasi Unary (me-relasi-kan 1 entitas)</div>
      <div class="collapsible-body"><img src="{{ URL::asset('img/komposit.png') }}" alt="" class=" responsive-img center-align" style="max-width: 40%"><p>Atribut komposit akan dipecah dengan membuat atribut terpisah untuk masing-masing komponennya.Contoh seperti pada attribute alamat akan dibagi menjadi beberapa komponen seperti jalan, kota, provinsi dan kode pos seperti berikut: 
<br></p></div>
    </li>
	<li>
      <div class="collapsible-header" style="color:black;">Relasi Ternary dan n-nary (me-relasi-kan 3 atau lebih entitas)</div>
      <div class="collapsible-body"><img src="{{ URL::asset('img/komposit.png') }}" alt="" class=" responsive-img center-align" style="max-width: 40%"><p><br><img src="{{ URL::asset('img/multvalues.png') }}" alt="" class=" responsive-img center-align" style="max-width: 40%">
<br>Atribut multivalues M dari entitas E direpresentasikan oleh table terpisah E dan M. Atribut Multivalues dilambangkan dengan 2 lingkaran pada atributnya. Contohnya attribute image memiliki lebih dari 1 value yaitu idproduk dan image seperti berikut:
<br>
<br>Dimana dibuat table GambarProduk dengan PK produk sebagai FK dan atribut image sebagai PK 
<br></p></div>
    </li>
  </ul>
</div>
</div>
@stop