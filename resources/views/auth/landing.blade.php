<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landinglogin - Jagad Statistik</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      background-color: #ffffff;
      color: #333;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: #fff;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .box {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 60px;
      flex-wrap: wrap;
    }

    .box img {
      max-width: 400px;
      height: auto;
      flex: 1;
    }

    .info {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .info h1 {
      color: #1a97de;
      font-size: 45px;
      font-weight: 700;
      margin-bottom: 10px;
      font-style: italic; /* <- ini bikin miring */
    }

    .info p {
      font-size: 20px;
      color: #555;
      margin-bottom: 30px;
    }
    .gradient-text {
    background: linear-gradient(90deg, #2c6ecb, #4caf50, #ff9800);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 600;
}
  .buttons a {
    display: block;
    text-align: center;
    padding: 12px 20px;
    margin-bottom: 15px;
    border-radius: 30px;
    font-weight: bold;
    font-size: 14px;
    text-decoration: none;
    width: 100%;
    max-width: 100%; /* Mengisi lebar penuh parent-nya */
    min-width: 300px; /* Tambahan agar minimal tetap proporsional */
  }
    .btn-pegawai {
      background-color: #6aba32;
      color: #fff;
    }

    .btn-pengunjung {
      background-color: #f9a825;
      color: #fff;
    }

    @media (max-width: 768px) {
      .box {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .buttons a {
        width: 100%;
      }

      .info h1 {
        font-size: 22px;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS" style="height: 60px;">
  </header>

  <div class="container">
    <div class="box">
      <img src="{{ asset('img/jagad.png') }}" alt="Logo Jagad Statistik">
      <div class="info">
        <h1>Login ke Jagad<br>Statistik Banyuwangi</h1>
        <p class="hero-desc gradient-text">
          Untuk mengakses seluruh fitur Jagad Statistik Banyuwangi, silahkan login terlebih dahulu.</p>
        <div class="buttons">
          <a href="/login/admin" class="btn-pegawai">👨‍💼 Login Sebagai Pegawai BPS Kabupaten Banyuwangi</a>
          <a href="/login/user" class="btn-pengunjung">👤 Login Sebagai Pengunjung</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
