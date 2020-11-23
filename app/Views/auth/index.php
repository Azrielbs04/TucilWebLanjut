<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('auth/admin')?>">Admin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('auth/aboutme')?>">About Me</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('auth/login')?>">Log Out</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">Musik</h1>
        <hr>
        <p class="lead">Musik adalah suara yang disusun sedemikian rupa sehingga mengandung irama, lagu, nada, dan keharmonisan terutama dari suara yang dihasilkan dari alat-alat yang dapat menghasilkan irama. Walaupun musik adalah sejenis fenomena intuisi, untuk mencipta, memperbaiki dan mempersembahkannya adalah suatu bentuk seni. Mendengar musik adalah sejenis hiburan. Musik adalah sebuah fenomena yang sangat unik yang bisa dihasilkan oleh beberapa alat musik.</p></div>

    <div class="as">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <h1 class="text-center">FL STUDIO</h1>
            <img class="card-img-top" src="/img/FLSTUDIO.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">FL Studio</h5>
              <p class="card-text">FL Studio adalah sebuah aplikasi stasiun kerja audio digital untuk merekam, mengubah, dan membuat audio. FL Studio dikembangkan oleh perusahaan bernama Image-Line. Pada tahun 2014.</p>
              <a class="btn btn-primary btn-lg" href="<?= site_url('auth/flstudio')?>" role="button">Check this out</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <h1 class="text-center">Ableton Live</h1>
            <img class="card-img-top" src="/img/ABLETON.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ableton Live</h5>
              <p class="card-text">Ableton Live adalah stasiun kerja audio digital yang dikembangkan oleh Ableton untuk macOS dan Windows. Ableton dirancang untuk menjadi instrumen untuk pertunjukan langsung serta untuk membuat, merekam,dan mixing.</p>
              <a class="btn btn-primary btn-lg" href="<?= site_url('auth/ableton')?>" role="button">Check this out</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
          <h1 class="text-center">Sonar</h1>
            <img class="card-img-top" src="/img/cakewalk.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sonar by Cakewalk</h5>
              <p class="card-text">Sonar adalah stasiun kerja audio digital yang dibuat oleh Cakewalk, Lalu diakuisisi oleh perusahaan musik Singapura BandLab Technologies, dan diganti namanya menjadi Cakewalk oleh BandLab.</p>
              <a class="btn btn-primary btn-lg" href="<?= site_url('auth/sonar')?>" role="button">Check this out</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
          <h1 class="text-center">Logic Pro</h1>
            <img class="card-img-top" src="/img/Logicpro.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Logic Pro Apple</h5>
              <p class="card-text">Logic Pro adalah stasiun kerja audio digital dan perangkat lunak sekuenser MIDI untuk macOS. awalnya dibuat pada awal 1990-an sebagai Notator Logic, oleh pengembang  Jerman C-Lab kemudian disebut Emagic.</p>
              <a class="btn btn-primary btn-lg" href="<?= site_url('auth/logicpro')?>" role="button">Check this out</a>
            </div>
          </div>
        </div>
      </div>
    </div>