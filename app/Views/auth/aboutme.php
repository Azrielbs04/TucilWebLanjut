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

<div class="jumbotron">
  <h1 class="display-4">Hello!</h1>
  <p class="lead">Perkenalkeun, Nama Abdi Muhammad Azriel Bintang Saputra, Sekarang Berkuliah di Universitas Lampung angkatan 2018</p>
  <hr class="my-4">
  <p>Cek karya-karya terbaruku di youtubeku!</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="https://www.youtube.com/channel/UC4kUFNyEwMyTOa1R4wF49Tg?view_as=subscriber#" role="button">Youtube</a>
  </p>
  <a class="btn btn-primary btn-lg" href="<?= site_url('auth/index')?>" role="button">Home</a>
</div>