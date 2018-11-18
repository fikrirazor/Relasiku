@extends('layouts.belajar')
@section('content')
<div class="row">
<div class="row">
<div class="container">
<h1>Relasi</h1>
</div>
</div>
<div class="container">
<p>Relation (Relasi) merupakan sebuah tabel dengan kolom-kolom dan baris-baris. Pada model relasional, relasi digunakan untuk menyimpan informasi mengenai objek-objek yang direpresentasikan dalam sebuah basis data. Relasi ini digambarkan dalam bentuk tabel dua dimensi. Contohnya mengenai informasi pegawai-pegawai yang bekerja di perusahaan X direpresentasikan pada relasi PEGAWAI yang mengandung informasi nomor induk pegawai, nama, alamat, gaji dan kode divisi tempat pegawai bekerja.
</p>
    
 <ul class="collapsible " data-collapsible="expandable">
    <li>
      <div class="collapsible-header" style="color:black;">Attribute</div>
      <div class="collapsible-body"><p><br> (Atribut) merupakan kolom dari suatu relasi yang mempunyai nama. Atribut-atribut pada suatu relasi tidak harus tersusun secara khusus. Contohnya, pada relasi Member mempunyai lima kolom untuk atribut-atribut idMember, nmMember, username, password, email, telp, jalan, kota, provinsi, kodepos.
<br>Primary key
<br>Primary key adalah field kunci / utama dari suatu tabel yang menunjukkan bahwa field yang menjadi kunci tersebut tidak bisa diisi dengan data yang sama, / dengan kata lain Primary key menjadikan tiap record memiliki identitas sendiri-sendiri yang membedakan satu sama lainnya (unik).
<br>Foreign key
<br>Foreign key yaitu satu atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya. Foreign key berguna untuk mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain,jadi kolom foreign key nilainya harus diambil dari nilai kolom pada tabel lain.
</p></div>
    </li>
    <li>
      <div class="collapsible-header" style="color:black;">Pengaruh Atribut Komposit</div>
      <div class="collapsible-body"><img src="{{ URL::asset('img/komposit.png') }}" alt="" class=" responsive-img center-align" style="max-width: 40%"><p>Atribut komposit akan dipecah dengan membuat atribut terpisah untuk masing-masing komponennya.Contoh seperti pada attribute alamat akan dibagi menjadi beberapa komponen seperti jalan, kota, provinsi dan kode pos seperti berikut: 
<br></p></div>
    </li>
	<li>
      <div class="collapsible-header" style="color:black;">Pengaruh Atribut Multivalues</div>
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