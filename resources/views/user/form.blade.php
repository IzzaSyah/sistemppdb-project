<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir dengan Navigasi Tab</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color: #fff;">Login</a>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="assets/img/user.jpg" alt="Profile"
                            style="width: 30px; height: 30px; border-radius: 50%;">
                    </a>
                </li>
            </div>

        </div>
    </nav>
    <div class="container mt-5">
        <!-- Navigasi Tab -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form"
                    aria-selected="true">Form</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload"
                    aria-selected="false">Upload Dokumen</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="print-tab" data-toggle="tab" href="#print" role="tab" aria-controls="print"
                    aria-selected="false">Cetak Kartu</a>
            </li>
        </ul>

        <!-- Formulir -->
        <div class="tab-content" id="myTabContent">
            <!-- Tab Form -->
            <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
                <div class="card mt-4">
                    <div class="card-header">
                        Formulir Pendaftaran
                    </div>
                    <div class="card-body">
                        <form action="{{ route('formsubmit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan email" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="" disabled selected>Pilih jenis kelamin</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea class="form-control" id="address" name="address" rows="3"
                                    placeholder="Masukkan alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="asalsekolah">Asal sekolah</label>
                                <input type="text" class="form-control" id="asalsekolah" name="asalsekolah"
                                    placeholder="asal sekolah" required>
                            </div>
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn"
                                    placeholder="Masukkan NISN" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai">Nilai rata rata</label>
                                <input type="text" class="form-control" id="nilai" name="nilai"
                                    placeholder="Masukkan nilai rata rata SMP" required>
                            </div>
                            <div class="form-group">
                                <label for="kk">No Kartu Keluarga</label>
                                <input type="text" class="form-control" id="kk" name="kk" placeholder="Masukkan no kk"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Pilih Paket</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="package" id="package1"
                                        value="basic">
                                    <label class="form-check-label" for="package1">Jalur Prestasi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="package" id="package2"
                                        value="premium">
                                    <label class="form-check-label" for="package2">Jalur Umum</label>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="card-header">
                                Data Orang Tua
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="Nama Ayah">Nama Ayah</label>
                                <input type="text" class="form-control" id="namaayah" name="nama_ayah"
                                    placeholder="Masukkan nama ayah" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan ayah">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="p-ayah" name="pekerjaan_ayah"
                                    placeholder="Masukkan pekerjaan ayah" required>
                            </div>
                            <div class="form-group">
                                <label for="nik ayah">NIK Ayah</label>
                                <input type="text" class="form-control" id="nik-a" name="nik_ayah"
                                    placeholder="Masukkan nik ayah" required>
                            </div>
                            <div class="form-group">
                                <label for="nama ibu">Nama Ibu</label>
                                <input type="text" class="form-control" id="namaibu" name="nama_ibu"
                                    placeholder="Masukkan nama ibu" required>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan ibu">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="p-ibu" name="pekerjaan_ibu"
                                    placeholder="Masukkan pekerjaan ibu" required>
                            </div>
                            <div class="form-group">
                                <label for="nik ibu">NIK Ibu</label>
                                <input type="text" class="form-control" id="nik-i" name="nik_ibu"
                                    placeholder="Masukkan nik ibu" required>
                            </div>
                            @if($formulir)
                                <button type="submit" class="btn btn-primary"
                                    onclick="return confirm('Anda akan menyimpan formulir baru. Apakah Anda yakin ingin melanjutkan?')">Update</button>
                            @else
                                <button type="submit" class="btn btn-primary">Submit</button>
                            @endif
                        </form>
                    </div>
                </div>
                <p>Isi dengan tanda (-) apabila tidak ada orang tua, Jika ada salah satunya isi data dengan benar lalu
                    salah satunya lagi isi dengan (-)</p>
                <p>Pastikan semua data diatas diisi dengan benar dan sesuai</p>

            </div>

            <!-- Tab Upload Dokumen -->
            <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                <div class="card mt-4">
                    <div class="card-header">
                        Upload Dokumen
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('uploadsubmit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="kartukeluarga">Kartu Keluarga</label>
                                <input type="file" class="form-control" id="kartukeluarga" name="kartukeluarga"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="ijazah">Ijasah SMP</label>
                                <input type="file" class="form-control" id="ijazah" name="ijazah" required>
                            </div>
                            <div class="form-group">
                                <label for="sertifikat">Sertifikat Pendukung (opsional)</label>
                                <input type="file" class="form-control" id="sertifikat" name="sertifikat">
                            </div>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                        </form>


                    </div>
                </div>
            </div>

            <!-- Tab Cetak Kartu -->
            <div class="tab-pane fade" id="print" role="tabpanel" aria-labelledby="print-tab">
                <div class="card mt-4">
                    <div class="card-header">
                        Cetak Kartu
                    </div>
                    <div class="card-body">
                        <p>Untuk mencetak kartu, silakan klik tombol di bawah ini:</p>
                        <a href="{{ route('user.download.kartupeserta') }}" class="btn btn-primary">Cetak Kartu</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#registrationForm').on('submit', function (event) {
                event.preventDefault(); // Prevent the form from submitting normally

                $.ajax({
                    url: '{{ route("formsubmit") }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        if (response.success) {
                            // Switch to Upload tab
                            $('#upload-tab').tab('show');
                        }
                    },
                    error: function (response) {
                        // Handle errors here
                        alert('Form submission failed. Please try again.');
                    }
                });
            });

            $('#uploadForm').on('submit', function (event) {
                event.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route("uploadsubmit") }}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.success) {
                            // Handle successful document upload
                            alert('Document uploaded successfully.');
                        }
                    },
                    error: function (response) {
                        // Handle errors here
                        alert('Document upload failed. Please try again.');
                    }
                });
            });
        });
    </script>
</body>

</html>