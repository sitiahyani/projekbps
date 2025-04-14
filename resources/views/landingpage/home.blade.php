<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jagad Statistik</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    nav a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      padding: 10px;
      position: relative;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 180px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      z-index: 1;
      border-radius: 6px;
      top: 38px;
      left: 0;
    }

    .dropdown-content a {
      color: #333;
      padding: 10px 14px;
      text-decoration: none;
      display: block;
      font-size: 14px;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .layanan::after {
      content: '';
      margin-left: 4px;
    }
    <!-- Tambahkan ini di bagian <style> -->
  .container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1rem;
  }

  .section-title {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    font-weight: 700;
    color: #333;
    text-align: center;
  }

  .search-container {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
  }

  .search-container input {
    padding: 10px;
    width: 300px;
    border-radius: 8px 0 0 8px;
    font-size: 14px;
  }

  .search-container button {
    padding: 10px 16px;
    color: white;
    border: none;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
  }

  .card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: 0.3s ease;
    max-width: 300px;
    margin: 1rem;
    display: flex;
    flex-direction: column;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .card-content {
    padding: 1rem;
    text-align: center;
  }

  .card-content h3 {
    font-size: 1.1rem;
    margin: 0.5rem 0;
    color: #333;
  }

  .card-content p {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.4;
  }

  .btn-download {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-size: 14px;
  }

  .cards-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  </style>
</head>

<body>
  <header>
    <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS" style="height: 60px;">
    <nav style="display: flex; gap: 20px; align-items: center;">
      <a href="{{ route('tentang') }}" class="tentang">Tentang</a>
      <a href="https://wa.me/6282170003510" target="_blank" class="chat">Chat CS</a>
      {{-- Dropdown Layanan --}}
      <div class="dropdown">
        <a href="#" class="layanan">Layanan ▾</a>
        <div class="dropdown-content">
          <a href="https://example.com/layanan1" target="_blank">Permintaan Data</a>
          <a href="https://banyuwangikab.bps.go.id/id" target="_blank">Pencarian Data</a>
          <a href="https://romantik.web.bps.go.id/" target="_blank">Rekomendasi Statistik</a>
        </div>
      </div>
      <a href="{{ route('login.landing') }}" class="login">LOGIN</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <img src="{{ asset('img/jagad.png') }}" alt="Logo BPS" class="hero-logo" />
      <div class="hero-text">
        <h1 class="hero-title">Platform<br>Pelayanan<br>Data Terpadu</h1>
        <p class="hero-desc gradient-text">
          Website ini dirancang untuk memudahkan akses pelayanan data bagi siapa saja mulai dari pelajar, instansi atau organisasi, hingga masyarakat umum. Dengan antarmuka yang ramah pengguna, pengunjung dapat menemukan, mengunduh, dan menganalisis data secara cepat dan akurat.
        </p>
      </div>
    </div>
  </section>

  <section class="menu-section">
    <h2>Silakan pilih menu sesuai dengan kebutuhan Anda :</h2>

    <div class="menu-cards">
      <div class="menu-card pss">
        <img src="{{ asset('img/tas.png') }}" alt="PSS Icon" class="card-icon" />
        <h3>PSS</h3>
        <p>Temukan informasi statistik yang relevan untuk kebutuhan pribadi dan umum</p>
      </div>
      <div class="menu-card pst">
        <img src="{{ asset('img/orang.png') }}" alt="PST Icon" class="card-icon" />
        <h3>PST</h3>
        <p>Dapatkan data resmi untuk perencanaan dan pengambilan kebijakan yang lebih akurat</p>
      </div>
      <div class="menu-card pojok">
        <img src="{{ asset('img/toga.png') }}" alt="Pojok Statistik Icon" class="card-icon" />
        <h3>POJOK STATISTIK</h3>
        <p>Akses data dan statistik untuk mendukung penelitian dan tugas akademik Anda</p>
      </div>
    </div>
<!-- Koleksi Digital & E-Book -->
<div class="container">

  <h2 class="section-title">Koleksi Digital</h2>
  <div class="search-container">
    <input type="text" placeholder="Cari koleksi..." />
    <button type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>

  <div class="cards-wrapper">
    @foreach($infografis ?? [] as $info)
      <div class="card">
        <img src="{{ asset('storage/' . $info->gambar) }}" alt="{{ $info->judul }}">
        <div class="card-content">
          <h3>{{ $info->judul }}</h3>
          <p>{{ $info->deskripsi }}</p>
        </div>
      </div>
    @endforeach
  </div>

  <h2 class="section-title" style="margin-top: 3rem;">Koleksi E-Book</h2>
  <div class="cards-wrapper">
    @foreach($ebooks ?? [] as $ebook)
      <div class="card">
        <div class="card-content">
          <h3>{{ $ebook->judul }}</h3>
          <p>{{ $ebook->deskripsi }}</p>
          <a href="{{ asset('storage/' . $ebook->nama_file) }}" target="_blank" class="btn-download">Baca E-book</a>
        </div>
      </div>
    @endforeach
  </div>
</div>
<div>
  <footer>
  <div class="footer-top">
    <img src="{{ asset('img/bawah.png') }}" alt="Logo BPS" />
  </div>

  <div class="footer-columns">
    <div class="footer-column">
      <h4>Tentang BPS</h4>
      <p>Informasi Umum</p>
      <p>Visi & Misi</p>
      <p>Tugas & Fungsi</p>
    </div>
    <div class="footer-column">
      <h4>Tentang Jagad Statistik</h4>
      <p>Pelayanan Statistik</p>
      <p>Standar Pelayanan</p>
    </div>
    <div class="footer-column">
      <h4>Website</h4>
      <p>Hallo PST</p>
      <p>BPS Kab Banyuwangi</p>
    </div>
  </div>

  <p class="footer-bottom">© 2025 BPS Kabupaten Banyuwangi</p>
</footer>

</body>

</html>
