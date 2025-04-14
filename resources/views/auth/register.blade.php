<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi Akun - Jagad Statistik</title>
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
      align-items: center;
      padding: 10px 30px;
      background-color: #fff;
    }

    header img {
      height: 60px;
    }

    .container {
      max-width: 960px;
      margin: auto;
      padding: 40px 20px;
      text-align: center;
    }

    h2 {
      color: #2196f3;
      font-size: 28px;
      font-weight: 600;
      margin-top: 10px;
      margin-bottom: 30px;
    }

    form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      row-gap: 30px;
      column-gap: 50px;
      text-align: left;
    }

    label {
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 5px;
      display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"] {
      width: 100%;
      padding: 12px 16px;
      border-radius: 25px;
      border: 2px solid #ccc;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }

    .biru { border: 2px solid #2196f3 !important; }
    .ijo { border: 2px solid #4CAF50 !important; }
    .oren { border: 2px solid #EB8A1F !important; }

    .btn {
      grid-column: span 2;
      background-color: #1A97DE;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 25px;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s;
      text-align: center;
      letter-spacing: 1px;
    }

    .btn:hover {
      background-color: #147fbd;
    }

    .login-link {
      grid-column: span 2;
      text-align: center;
      font-size: 13px;
      margin-top: 10px;
    }

    .login-link a {
      color: #000;
      font-weight: bold;
      text-decoration: none;
    }

    .errors {
      grid-column: span 2;
      background: #fdd;
      color: red;
      padding: 10px;
      border-radius: 8px;
      font-size: 13px;
    }

    @media (max-width: 768px) {
      form {
        grid-template-columns: 1fr;
      }

      .btn, .login-link, .errors {
        grid-column: span 1;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS">
  </header>

  <div class="container">
    <h2>Registrasi Akun</h2>

    {{-- Tampilkan error validasi jika ada --}}
    @if ($errors->any())
      <div class="errors">
        <ul style="margin:0; padding-left: 20px;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Email -->
      <div>
        <label for="peng_Email">Email *</label>
        <input type="email" id="peng_Email" name="peng_Email" class="biru" value="{{ old('peng_Email') }}" required>
      </div>

      <!-- Nomor Telepon -->
      <div>
        <label for="peng_NomorTelepon">Nomor Telepon *</label>
        <input type="tel" id="peng_NomorTelepon" name="peng_NomorTelepon" class="oren" value="{{ old('peng_NomorTelepon') }}" required>
      </div>

      <!-- Nama Lengkap -->
      <div>
        <label for="peng_NamaLengkap">Nama Lengkap *</label>
        <input type="text" id="peng_NamaLengkap" name="peng_NamaLengkap" class="ijo" value="{{ old('peng_NamaLengkap') }}" required>
      </div>

      <!-- Pekerjaan -->
      <div>
        <label for="peng_Pekerjaan">Pekerjaan *</label>
        <input type="text" id="peng_Pekerjaan" name="peng_Pekerjaan" class="ijo" value="{{ old('peng_Pekerjaan') }}" required>
      </div>

      <!-- Kata Sandi -->
      <div>
        <label for="peng_KataSandi">Kata Sandi *</label>
        <input type="password" id="peng_KataSandi" name="peng_KataSandi" class="biru" required>
      </div>

      <!-- Konfirmasi Kata Sandi -->
      <div>
        <label for="peng_KataSandi_confirmation">Konfirmasi Kata Sandi *</label>
        <input type="password" id="peng_KataSandi_confirmation" name="peng_KataSandi_confirmation" class="biru" required>
      </div>

      <!-- Tahun Lahir -->
      <div>
        <label for="peng_TahunLahir">Tahun Lahir *</label>
        <input type="text" id="peng_TahunLahir" name="peng_TahunLahir" class="oren" value="{{ old('peng_TahunLahir') }}" required>
      </div>

      <button type="submit" class="btn">REGISTRASI</button>

      <div class="login-link">
        Sudah Punya Akun? <a href="/login/user">MASUK DISINI</a>
      </div>
    </form>
  </div>

</body>
</html>
