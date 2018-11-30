<!doctyple html>
<html>
<head>
	@include('includes.belajarhead')
</head>
<body>
<main>
	  <div class="row ">
      <div class=" col s12 pm ">
	   <div class="container ">
	   <ul>
	  <form  action="#">
       <p>Apa pengertian attribut</p>
      <label>
        <input name="group1" type="radio" checked />
        <span>merupakan kolom dari suatu relasi yang mempunyai nama</span><br>
      </label>
      <label>
        <input name="group1" type="radio" />
		<!-- ini jawabannya -->
        <span>merupakan sebuah tabel dengan kolom-kolom dan baris-baris digunakan untuk menyimpan informasi mengenai objek-objek yang direpresentasikan dalam sebuah basis data</span><br>
      </label>
      <label>
        <input  name="group1" type="radio"  />
        <span>adalah kumpulan informasi yang disimpan di dalam komputer secara sistematik sehingga dapat diperiksa menggunakan suatu program komputer untuk memperoleh informasi dari basis data tersebut. </span><br>
      </label>
      
  </form>
  
  <form  action="#">
       <p>Apa itu Primmary Key</p>
      <label>
        <input name="group1" type="radio" checked />
				<!-- ini jawabannya -->
        <span>adalah field kunci / utama dari suatu tabel yang menunjukkan bahwa field yang menjadi kunci tersebut tidak bisa diisi dengan data yang sama</span><br>
      </label>
      <label>
        <input name="group1" type="radio" />
        <span>yaitu satu atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya. </span><br>
      </label>
      <label>
        <input class="" name="group1" type="radio"  />
        <span>merupakan kolom dari suatu relasi yang mempunyai nama. Atribut-atribut pada suatu relasi tidak harus tersusun secara khusus.</span><br>
      </label>
      <label>
        <input name="group1" type="radio"  />
        <span> mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain</span>
      </label>
  </form>
  
    <form  action="#">
       <p>Apa itu Atribut Komposit</p>
      <label>
        <input name="group1" type="radio" checked />
        <span>atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya </span><br>
      </label>
      <label>
        <input name="group1" type="radio" />
		<!-- ini jawabannya -->
        <span> attribut yang membuat atribut terpisah untuk masing-masing komponennya. </span><br>
      </label>
      <label>
        <input class="" name="group1" type="radio"  />
        <span>attribute yang memiliki lebih dari 1 value  </span><br>
      </label>
      <label>
        <input name="group1" type="radio"  />
        <span> mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain</span>
      </label>
  </form>
  
    <form  action="#">
       <p>Apa itu Atribut multivalues</p>
      <label>
        <input name="group1" type="radio" checked />
        <span>atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya </span><br>
      </label>
      <label>
        <input name="group1" type="radio" />
        <span> attribut yang membuat atribut terpisah untuk masing-masing komponennya. </span><br>
      </label>
      <label>
        <input class="" name="group1" type="radio"  />
		<!-- ini jawabannya -->
        <span>attribute yang memiliki lebih dari 1 value  </span><br>
      </label>
      <label>
        <input name="group1" type="radio"  />
        <span> mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain</span>
      </label>
  </form>
  
        <form  action="#">
       <p>Apa itu Foreign Key</p>
      <label>
        <input name="group1" type="radio" checked />
        <span>adalah field kunci / utama dari suatu tabel yang menunjukkan bahwa field yang menjadi kunci tersebut tidak bisa diisi dengan data yang sama</span><br>
      </label>
      <label>
        <input name="group1" type="radio" />
		<!-- ini jawabannya -->
        <span>yaitu satu atribute (atau satu set atribute) yang melengkapi satu relationship (hubungan) yang menunjukkan ke induknya. </span><br>
      </label>
      <label>
        <input class=" " name="group1" type="radio"  />
        <span>merupakan kolom dari suatu relasi yang mempunyai nama. Atribut-atribut pada suatu relasi tidak harus tersusun secara khusus.</span><br>
      </label>
      <label>
        <input name="group1" type="radio"  />
        <span> mendefinisikan kolom-kolom pada suatu tabel yang nilainya mengacu ke tabel lain</span><br>
      </label>
  </form>
  <a href="../100" class="waves-effect waves-light btn-large amber darken-4">Selesai</a>
  </ul>
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