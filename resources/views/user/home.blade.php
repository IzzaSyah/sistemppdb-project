<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem PPDB - Halaman Utama</title>
  <link href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;400;600;700&display=swap"
    rel="stylesheet">



  <style>
    #carouselExampleControls {
      max-width: 750px;
      margin-left: 20px;
    }

    .carousel-inner img {
      width: 100%;
      /* Menyesuaikan lebar gambar dengan lebar carousel */
      height: 500px;
      /* Mengatur tinggi gambar agar proporsional */
    }

    #system-info {
      background-color: #E3FEF7;
      height: 750px;
      width: 100%;
    }

    #satu {}


    #dua {
      max-width: 1365px;
      padding: 10;
      margin-left: 30px;
      margin-right: 30px;
      height: 540px;
      display: flex;
      justify-content: space-between;
    }

    #tiga {
      width: 300px;
      height: 300px padding: 20px;
    }

    #a {
      width: 30%;
      margin-top: 20px;
      padding: 20px;
      align-items: center;
      color: #135D66;
    }

    #kotak {
      display: flex;
      justify-content: center;
      /* Menengahkan konten secara horizontal */
      align-items: center;
      /* Menengahkan konten secara vertikal */
    }

    #poster {
      width: 100%;
    }

    .footer {
      bottom: 0;
      width: 100%;
      background-color: #135D66;
      /* Ganti dengan warna background yang kamu inginkan */
      padding: 20px;
      /* Atur padding sesuai kebutuhan */
      text-align: center;
      /* Pusatkan teks jika diperlukan */

    }

    .story {
      padding-top: 10rem;
      padding-bottom: 8rem;
      background-image: url('assets/img/bgt.png');
      /* Ganti dengan path gambar yang sesuai */
      background-size: cover;
      /* Membuat gambar background menutupi seluruh area section */
      background-position: center;
      /* Posisi background di tengah */
      background-repeat: no-repeat;
      /* Menghindari pengulangan background */
      padding: 80px 0;
    }

    .story h2 {
      color: var(--pink);
      font-family: 'Garamond';
      font-size: 5rem;
      font-weight: bold;
    }

    .story span {
      text-transform: uppercase;
      color: #666;
      font-size: 0.9rem;
      letter-spacing: 1px;
      display: block;
      margin-bottom: 1rem;
    }

    .story p {
      font-size: 1rem;
      font-weight: 300;
    }

    .timeline {
      list-style: none;
      padding: 1.4rem 0;
      margin-top: 1rem;
      position: relative;
    }

    .timeline::before {
      content: '';
      top: 0;
      bottom: 0;
      position: absolute;
      width: 1px;
      background-color: #ccc;
      left: 50%;

    }

    .timeline li {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .timeline li::before,
    .timeline li::after {
      content: '';
      display: table;
    }

    .timeline li::after {
      clear: both;
    }

    .timeline li .timeline-image {
      width: 160px;
      height: 160px;
      background-color: #ccc;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 50%;

      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .timeline li .timeline-panel {
      width: 40%;
      float: left;
      border: 1px solid #ccc;
      padding: 2rem;
      position: relative;
      border-radius: 8px;
      background-color: #fff;
    }

    .timeline li .timeline-panel::before {
      content: '';
      display: inline-block;
      position: absolute;
      border-top: 15px solid transparent;
      border-left: 15px solid #ccc;
      border-right: 0 solid #ccc;
      border-bottom: 15px solid transparent;
      top: 80px;
      right: -15px;
    }

    .timeline li .timeline-panel::after {
      content: '';
      position: absolute;
      display: inline-block;
      border-top: 14px solid transparent;
      border-left: 14px solid #fff;
      border-right: 0 solid #fff;
      border-bottom: 14px solid transparent;
      top: 81px;
      right: -13px;
    }

    .timeline li.timeline-inverted .timeline-panel {
      float: right;
    }

    .timeline li.timeline-inverted .timeline-panel::before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }

    .timeline li.timeline-inverted .timeline-panel::after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -13px;
      right: auto;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav name="navbar" class="navbar navbar-expand-lg" style="background-color: #135D66; margin-bottom: 0;">
    <div class="container-fluid" style="margin-bottom: 0">
      <a class="navbar-brand" href="#" style="color: #fff;">PPDB SMA Indah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: #fff;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: #fff;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #fff;">Program</a>
          </li>
        </ul>
      </div>

      <!-- Login and Profile -->
      <div class="navbar-nav">
        @auth
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #fff;">{{ Auth::user()->name }}</a>
      </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}" style="color: #fff;">Login</a>
    </li>
  @endauth
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #fff;">
            <img src="assets/img/user.jpg" alt="Profile" style="width: 30px; height: 30px; border-radius: 50%;">
          </a>
        </li>
      </div>
    </div>
  </nav>
  <section id="system-info" class="content">
    <div id="satu" class="container"
      style="background-color:#FFFFFF; max-width: 1365px; padding: 20px; margin-left: 50px; margin-right: 50px; height: 550px;">
      <div id="dua" class="info-section">
        <div id="box" class="info-text">
          <h1 style="font-family: 'Open Sans', bold; background-color: #77B0AA; padding: 5px;">Selamat Datang di Sistem
            PPDB</h1>
          <h2 style="font-family: 'Open Sans', bold; background-color:#77B0AA; padding: 5px;">SMA Indah</h2>
          <p>Cerdas Digital: Sekolah Unggul Berbasis Teknologi Informasi, Berpikir Cepat, Bertindak Tepat</p>
          <img id="tiga" src="assets/img/db.png" alt="" style="align-items:center;">
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/kelas.jpeg" class="d-block " alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="assets/img/lap.jpeg" class="d-block " alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="assets/img/osis.png" class="d-block" alt="third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>
      </div>
      <div id="kotak" class="row" style="border-color: #135D66;">
        <div id="a" class="col-12 col-md-6 col-lg-4 mb-3">
          <a href="{{ route('formshow') }}" style="text-decoration: none;" method="post">
            <div class="card text-primary border-primary">
              <div class="card-body" style="color:#135D66;">
                <div class="row align-items-center">
                  <div class="col border-end">
                    <h3 style="color:#135D66;">Daftar</h3>
                  </div>
                  <div class="col-4 text-center">
                    <h1 class="bi bi-box2"></h1>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div id="a" class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="card text-primary border-primary">
          <a href="https://api.whatsapp.com/send?phone=6285791176311&text=Halo,%20saya%20ingin%20bertanya%20tentang%20pendaftaran%20SMA%20Indah" target="_blank" class="text-decoration-none">
            <div class="card-body" style="color:#135D66;">
              <div class="row align-items-center">
                <div class="col border-end">
                  <h3 style="color:#135D66;">Contact</h3>
                </div>
                <div class="col-4 text-center">
                  <h1 class="bi bi-box2"></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="a" class="col-12 col-md-6 col-lg-4 mb-3 mt+10">
          <div class="card text-primary border-primary" style="border-color: #135D66 ">
            <div class="card-body" style="color:#135D66;">
              <div class="row align-items-center">
                <div class="col border-end">
                  <h3 style="color:#135D66;">Persyaratan</h3>
                </div>
                <div class="col-4 text-center">
                  <h1 class="bi bi-box2"></h1>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-10 text-center">
          <span> SMA INDAH </span>
          <h2> Time Line Pendaftaran</h2>
          <p>Jangan sampai terlambat, Kejar mimpimu bersama kami</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-image: url(assets/img/form.png)">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pemberkasan</h3>
                  <span> 1 Juni - 20 Juni 2024</span>
                </div>
                <div class="timeline-body">
                  <p>Pengisian Formulir dan Upload Berkas</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-image: url(assets/img/hasil.png)">
              </div>

              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Hasil Seleksi Berkas</h3>
                  <span> 25 Juni 2024</span>
                </div>
                <div class="timeline-body">
                  <p> Cetak Kartu Kelulusan</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image" style="background-image: url(assets/img/ke.png)">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Tes</h3>
                  <span>5 Juli - 10 Juli 2024</span>
                </div>
                <div class="timeline-body">
                  <p> Ke sekolah memebawa kartu kelulusan</p>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Area - About -->
  <section id="about" class="content alternate"
    style="background-image: url('assets/img/back.png'); background-size: cover; background-position: center; padding-top: 50px; ">
    <div class="container">
      <div class="info-section">
        <div id="galeri" class="info-text"
          style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-top:0px; margin-bottom:30px; background-color: #E3FEF7; padding: 5px;">
          <h1 style="text-align: center; ">Galeri Sekolah</h1>
          <p style="text-align: center;">Program Study exchange, Ekstrakulikuler, Kegiatan Sehari hari</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/bola.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Futsal</h4>
                  <p class="card-text">Team Lighning Cheetah memperoleh Juara 2 Nasional </p>
                  <p>2024</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/basket.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Basket</h4>
                  <p class="card-text">Lighning Cheetah Juara 2 Jawa Timur Shadow Eagle Juara 3 Jawa Timur</p>
                  <p>2024</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/tukar.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Studi Exchange</h4>
                  <p class="card-text">Pertukaran pelajar ke Negara Asia Tenggara</p>
                  <p>Sejak 2020</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/parade.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Parade</h4>
                  <p class="card-text">Kegiatan siswa yang diselenggarakan oleh osis, seperti Konser, parade dll.</p>
                  <p>2024</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Baris baru untuk card berikutnya -->
          <div class="row">
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/futsal.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Tim Shadow Eagle</h4>
                  <p>Tean Shadow Eagle meraih Juara 3 Nasional </p>
                  <p>2023</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/bultang.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Badminton</h4>
                  <p>Juara 3 Mewakiliki Jawa Timur (Tay Tawa, Mark Pakin)</p>
                  <p>2023</p>
                </div>
              </div>
            </div>
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/olah.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Studi Exchange Thailand</h4>
                  <p class="card-text">30 Siswa lolos untuk studi exchange ke Thailand</p>
                  <P>2024</P>
                </div>
              </div>
            </div>
            <div class="col-3 mb-5">
              <div class="card" style="width: 100%;">
                <img src="assets/img/konser.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4>Band Sekolah</h4>
                  <p class="card-text">Chinzhilla Group Juara 1 Kompetisi ke Jawa Timur</p>
                  <p>2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Content Area - Cards -->
  <section class="content">
    <div class="container">
      <!-- Card box content here -->
    </div>
  </section>

  <!-- Content Area - Cards -->
  <section class="content">
    <div class="container">
      <!-- Three cards content here -->
    </div>
  </section>

  <!-- Contact Information -->
  <footer id="contact" class="footer">
    <div class="container">
      <h2>Kontak Kami</h2>
      <p>Informasi kontak sekolah disini...</p>
    </div>
  </footer>

 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k0fFON3sB5p5X2w2/OzKRJj3uexfIWln1H3mNEoLeFz7Iv0dGqBRQ4nXbK8hAAWW"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz4fnFO9gybB5IXNxFwWQfE7u8Lj+XJHAxKlXiG/8rsrtpb6PEdzD828Ii"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>