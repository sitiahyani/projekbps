<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jagad Statistik - Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2f5f9;
      overflow-x: hidden;
    }

    .hero {
      position: relative;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                  url('https://source.unsplash.com/1600x600/?data,technology') center/cover no-repeat;
      color: white;
      padding: 5rem 1rem;
      text-align: center;
    }

    .hero-title {
      font-size: 3rem;
      font-weight: bold;
      background-image: linear-gradient(90deg, #0d6efd, #fd7e14, #198754);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
      animation: fadeSlideIn 1.5s ease-in-out;
    }

    .hero-sub {
      font-size: 1.25rem;
      margin-top: 1rem;
      animation: fadeIn 2s ease-in-out;
    }

    .btn-permintaan {
      background-color: #0d6efd;
      color: white;
      margin-top: 2rem;
      font-weight: bold;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
      box-shadow: 0 4px 12px rgba(13, 110, 253, 0.4);
      transition: background 0.3s ease;
      animation: fadeInUp 2s ease;
    }

    .btn-permintaan:hover {
      background-color: #0b5ed7;
    }

    @keyframes fadeSlideIn {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .section-wrapper {
      background: linear-gradient(to bottom right, #ffffff, #f1f3f6);
      padding: 3rem 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
      margin-bottom: 4rem;
    }

    .section-title {
      border-left: 6px solid #0d6efd;
      padding-left: 12px;
      margin-bottom: 2rem;
      font-weight: bold;
      font-size: 1.8rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .card {
      border: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 16px;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 16px;
      border-top-right-radius: 16px;
    }
  </style>
</head>
<body>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1 class="hero-title">Selamat Datang di Jagad Statistik</h1>
      <p class="hero-sub">Platform informasi kegiatan statistik BPS Kabupaten Banyuwangi</p>
      <a href="#" class="btn btn-permintaan"><i class="bi bi-bar-chart-fill"></i> Butuh Data? Klik di Sini</a>
    </div>
  </section>

  <!-- Konten -->
  <div class="container section-wrapper">

    <!-- PSS -->
    <div class="mb-5">
      <h2 class="section-title">
        <i class="bi bi-mortarboard-fill text-primary"></i> 
        PSS (Pojok Statistik Sekolah)
      </h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://source.unsplash.com/400x300/?school,education" class="card-img-top" alt="PSS">
            <div class="card-body">
              <h5 class="card-title">Kunjungan SMA Banyuwangi</h5>
              <p class="card-text">Edukasi statistik kepada pelajar SMA seputar penggunaan data dan literasi statistik.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PST -->
    <div class="mb-5">
      <h2 class="section-title">
        <i class="bi bi-laptop-fill text-warning"></i>
        PST (Pelatihan Statistik Terapan)
      </h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://source.unsplash.com/400x300/?training,data" class="card-img-top" alt="PST">
            <div class="card-body">
              <h5 class="card-title">Workshop Pengolahan Data</h5>
              <p class="card-text">Pelatihan penggunaan aplikasi statistik seperti SPSS dan R untuk mahasiswa dan instansi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Potik -->
    <div class="mb-3">
      <h2 class="section-title">
        <i class="bi bi-people-fill text-success"></i>
        Potik (Pojok Statistik)
      </h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://source.unsplash.com/400x300/?statistics,office" class="card-img-top" alt="Potik">
            <div class="card-body">
              <h5 class="card-title">Layanan Konsultasi Statistik</h5>
              <p class="card-text">Fasilitas bagi masyarakat umum untuk berkonsultasi langsung terkait data dan analisis statistik.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>
</html>
