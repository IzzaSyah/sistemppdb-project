<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem PPDB - Halaman Utama</title>
  <link href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
  <style>
    #carouselExampleIndicators {
        max-width: 750px; 
        margin-left: 20px;
    }

    .carousel-inner img {
        width: 100%; /* Menyesuaikan lebar gambar dengan lebar carousel */
        height: 500px; /* Mengatur tinggi gambar agar proporsional */
    }
    #system-info {
        background-color:  #E3FEF7;  
        height: 750px;
        width: 100%;        
    }
    #satu{
      
    }
   

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
        height:300px
        padding: 20px;
    }
    
    #a {
      width: 30%;
      margin-top: 20px;
      padding: 20px;
      align-items: center;
      color :#135D66;
    }
    #kotak {
        display: flex;
        justify-content: center; /* Menengahkan konten secara horizontal */
        align-items: center;
        /* Menengahkan konten secara vertikal */
    }
    #poster {
      width: 100%;
    }
    .footer {
        bottom: 0;
        width: 100%;
        background-color: #135D66; /* Ganti dengan warna background yang kamu inginkan */
        padding: 20px; /* Atur padding sesuai kebutuhan */
        text-align: center; /* Pusatkan teks jika diperlukan */
        
    }



</style>
</head>
<body>
  <!-- Navbar -->
  <nav name="navbar" class="navbar navbar-expand-lg" style="background-color: #135D66; margin-bottom: 0;" >
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"  style="color: #fff;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #fff;">
                        <img src="assets/img/user.jpg" alt="Profile" style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
                </li>
            </div>
        </div>
    </nav>
    
<section id="system-info" class="content">
      <div id="satu" class="container" style="background-color:#FFFFFF; max-width: 1365px; padding: 20px; margin-left: 50px; margin-right: 50px; height: 550px;">
        <div id="dua" class="info-section">
          <div id="box" class="info-text"  >
          <h1 style="font-family: 'Open Sans', bold; background-color: #77B0AA; padding: 5px;">Selamat Datang di Sistem PPDB</h1>
          <h2  style="font-family: 'Open Sans', bold; background-color:#77B0AA; padding: 5px;">SMA Indah</h2>
            <p>Cerdas Digital: Sekolah Unggul Berbasis Teknologi Informasi, Berpikir Cepat, Bertindak Tepat</p>
            <img id="tiga" src="assets/img/db.png" alt="" style="align-items:center;">
          </div>
          <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/img/lap.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/kelas.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/re.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>  
        </div>
          <div id="kotak" class="row" style="border-color: #135D66;">
              <div id="a" class="col-12 col-md-6 col-lg-4 mb-3"   >
              <a href="{{ route('login') }}" style="text-decoration: none;">
                  <div class="card text-primary border-primary" >
                      <div class="card-body" style="color:#135D66;">
                          <div class="row align-items-center" >
                              <div class="col border-end" >
                                  <h3 style="color:#135D66;">Login</h3>
                              </div>
                              <div class="col-4 text-center" >
                                  <h1 class="bi bi-box2" ></h1>
                              </div>
                          </div>
                      </div>
                  </div>
               </a>
              </div>
              <div id="a" class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="card text-primary border-primary">
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
              <div id="a" class="col-12 col-md-6 col-lg-4 mb-3 mt+10">
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
              </div>
          </div>
        </div>
      </div>
</section>
  
  <img id="poster" src="assets/img/sma.png" alt="">

 
  <!-- Content Area - About -->
  <section id="about" class="content alternate"style="background-image: url('assets/img/back.png'); background-size: cover; background-position: center; padding-top: 50px; ">
    <div class="container">
      <div class="info-section"  >
        <div id="galeri" class="info-text" style="display: flex; flex-direction: column; justify-content: center; align-items: center; margin-top:0px; margin-bottom:30px; background-color: #E3FEF7; padding: 5px;" >
          <h1 style="text-align: center; ">Galeri Sekolah</h1>
          <p style="text-align: center;">Program Study exchange, Ekstrakulikuler, Kegiatan Sehari hari</p>
        </div>
        <div class="container" >
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


 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-k0fFON3sB5p5X2w2/OzKRJj3uexfIWln1H3mNEoLeFz7Iv0dGqBRQ4nXbK8hAAWW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybB5IXNxFwWQfE7u8Lj+XJHAxKlXiG/8rsrtpb6PEdzD828Ii" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>