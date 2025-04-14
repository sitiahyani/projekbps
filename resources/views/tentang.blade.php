<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang - Jagad Statistik</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Inter", sans-serif;
      background-color: #f5f8fc;
      color: #333;
    }

    /* Header (Navbar) */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    header img {
      height: 90px;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      color: #333;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #007bff;
    }

    nav a.chat {
      color: #f59e0b;
    }

    nav a.layanan {
      color: #22c55e;
    }

    nav a.login {
      background-color: #007bff;
      padding: 6px 14px;
      color: white;
      border-radius: 999px;
    }
    footer {
    background-color: #fff;
    padding: 50px 30px;
    border-top: 1px solid #ccc;
    text-align: center;
}

.footer-content {
    max-width: 2000px;
    margin: 0 auto;
}

.footer-top {
    display: flex;
    flex-direction: column;
    align-items: center !important; /* supaya isi flex column di tengah */
    gap: 50px;
    margin-right: 20px !important; /* tambahkan px */
    text-align: center !important; /* pastikan teks juga rata tengah */
}

.footer-top img {
    height: 150px;
    margin-left: 150px;
}

.footer-columns {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 30px;
}

.footer-columns div {
    flex: 1 1 200px;
    margin-bottom: 20px;
}

footer p {
    font-size: 14px;
    color: #555;
}

footer small {
    display: block;
    margin-top: 20px;
    text-align: center;
    color: #999;
}

/* Responsive */
@media (min-width: 768px) {
    .hero-content {
        flex-direction: row;
        gap: 40px;
        justify-content: center;
        text-align: left;
    }

    .hero-icon {
        width: 250px;
    }

    .hero-text h1 {
        font-size: 36px;
    }

    .footer-top {
        flex-direction: row;
        justify-content: space-between;
    }
}
  </style>
</head>
<body>

  {{-- Navbar --}}

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
            <a href="https://example.com/layanan1" target="_blank">Konsultasi</a>
            <a href="https://example.com/layanan2" target="_blank">Pencarian Data</a>
            <a href="https://example.com/layanan3" target="_blank">Rekomendasi Statistik</a>
          </div>
        </div>
        <a href="#" class="login">LOGIN</a>
      </nav>
    </header>
    
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
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
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
    </style>  
      </nav>
    </header>

 {{-- Konten Tentang --}}
<section class="about-section" style="font-family: 'Poppins', sans-serif; padding: 80px 24px; background-color: #f9fafb;">
  <div style="max-width: 900px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 36px; font-weight: 700; color: #1f2937; margin-bottom: 24px;">Apa itu Jagad Statistik?</h2>
    
    <p style="font-size: 18px; line-height: 1.8; color: #4b5563; margin-bottom: 30px;">
      <strong style="color: #0ea5e9;">Jagad Statistik</strong> adalah platform digital yang dikembangkan oleh 
      <strong style="color: #10b981;">Badan Pusat Statistik (BPS) Kabupaten Banyuwangi</strong> untuk menyediakan akses layanan data statistik 
      yang <strong>mudah</strong>, <strong>cepat</strong>, dan <strong>terpadu</strong>. Platform ini dirancang untuk semua kalangan, mulai dari pelajar, akademisi, peneliti, instansi pemerintah, hingga masyarakat umum.
    </p>
    
    <p style="font-size: 18px; line-height: 1.8; color: #4b5563;">
      Melalui <em style="color: #6366f1;">Jagad Statistik</em>, pengguna dapat:
      <br><br>
      <ul style="text-align: left; max-width: 700px; margin: 0 auto; padding-left: 20px; color: #374151; font-size: 17px;">
        <li>✅ Mengakses berbagai jenis data statistik terkini</li>
        <li>✅ Melakukan permintaan data khusus sesuai kebutuhan</li>
        <li>✅ Konsultasi langsung dengan ahli statistik dari BPS</li>
        <li>✅ Menjelajahi koleksi digital dan e-book statistik</li>
      </ul>
      <br>
      Semua layanan dirancang agar <strong>ramah pengguna</strong>, <strong>informatif</strong>, dan <strong>akurat</strong>.
    </p>
  </div>
</section>


  {{-- Footer --}}
  <footer>
    <div class="footer-top">
      <img src="{{ asset('img/bawah.png') }}" alt="Logo BPS" />
    </div>
    <div class="footer-columns">
      <div>
        <h4>Tentang BPS</h4>
        <p>Informasi umum</p>
        <p>Visi & Misi</p>
        <p>Tugas & Fungsi</p>
      </div>
      <div>
        <h4>Tentang Jagad Statistik</h4>
        <p>Pelayanan Statistik</p>
        <p>Standar Pelayanan</p>
      </div>
      <div>
        <h4>Website</h4>
        <p>Hallo PST</p>
        <p>BPS Kab Banyuwangi</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 1rem">© 2025 BPS Kabupaten Banyuwangi</p>
  </footer>

</body>
</html>
