@extends('layouts.default')

@section('content')
<style>
/* Custom Stylesheet */
/**
 * Use this file to override Materialize files so you can update
 * the core Materialize files in the future
 *
 * Made By MaterializeCSS.com
 */

p {
  line-height: 2rem;
}

.sidenav-trigger {
  color: #26a69a;
}

.parallax-container {
  min-height: 380px;
  line-height: 0;
  height: auto;
  color: rgba(255,255,255,.9);
}
  .parallax-container .section {
    width: 100%;
  }

@media only screen and (max-width : 992px) {
  .parallax-container .section {
    position: absolute;
    top: 40%;
  }
  #index-banner .section {
    top: 10%;
  }
}

@media only screen and (max-width : 600px) {
  #index-banner .section {
    top: 0;
  }
}

.icon-block {
  padding: 0 15px;
}
.icon-block .material-icons {
  font-size: inherit;
}

footer.page-footer {
  margin: 0;
}

</style>

<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center putihtulisanhitam">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Tentang Kami</h4>
          <p class="left-align light">Setiap orang punya cara belajar sendiri. Untuk kali pertama dalam sejarah, kami dapat menganalisis bagaimana dalam waktu bersamaan jutaan orang belajar untuk menciptakan sistem pendidikan yang paling efektif sekaligus menyesuaikannya untuk masing-masing siswa.

Target utama kami adalah memberikan akses kepada setiap orang untuk merasakan pengalaman belajar privat lewat teknologi.</p>
        </div>
      </div>

    </div>
  </div>
  
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center ">
          <h5 class="header col s12 light">Relasiku memberi semangat untuk menimba ilmu</h5>
        </div>
      </div>
    </div>
    <div class="parallax "><img src="https://cdn.pixabay.com/photo/2016/12/09/18/30/database-schema-1895779_960_720.png" alt="Unsplashed background img 3"></div>
  </div>
  
@stop