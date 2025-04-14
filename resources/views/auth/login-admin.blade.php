<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login admin - Jagad Statistik</title>
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
      padding: 10px 30px;
      background-color: #fff;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px 10px;
      gap: 60px;
      min-height: 50vh; /* ubah dari 100vh ke 80vh agar posisi naik */
    }

    .container img {
      max-width: 420px;
      height: auto;
      margin-right: 70px;
    }

    .form-container {
      max-width: 400px;
      width: 100%;
    }

        .welcome-message {
      text-align: left;
      margin-top: 10px;
    }

        .text-blue {
      color: #1A97DE;
      font-size: 40px;
      font-weight: 700;
      font-style: italic;
      font-family: 'Poppins', sans-serif;
      margin: 0 0 4px 0; /* atas kanan bawah kiri */
    }

    .text-orange {
      color: #EB8A1F;
      font-size: 40px;
      font-weight: 700;
      font-style: italic;
      font-family: 'Poppins', sans-serif;
      margin: 0;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 20px;
    }

    label {
      font-weight: 500;
      font-size: 14px;
      color: #444;
    }

        input[type="email"],
    input[type="password"],
    input[type="text"] {
      padding: 12px 16px;
      border-radius: 25px;
      border: 2px solid transparent;
      background-image: 
        linear-gradient(white, white),
        linear-gradient(90deg, #2196f3, #f9a825, #4caf50);
      background-origin: border-box;
      background-clip: padding-box, border-box;
      outline: none;
      font-size: 14px;
      transition: 0.3s;
    }

    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="text"]:focus {
      background-image: 
        linear-gradient(white, white),
        linear-gradient(90deg, #2196f3, #f9a825, #4caf50);
      outline: none;
    }


    .btn-login {
      background-color: #1A97DE;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 25px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-login:hover {
      background-color: #147fbd;
    }

    .register {
      font-size: 13px;
      margin-top: 10px;
      text-align: center;
    }

    .register a {
      color: #1a97de;
      font-weight: bold;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        text-align: center;
        padding-top: 20px;
      }

      .form-container {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS" style="height: 60px;">
  </header>

  <div class="container">
    <img src="{{ asset('img/jagad.png') }}" alt="Logo Jagad Statistik" />
    <div class="form-container">
      <div class="welcome-message">
        <h2><span class="text-blue">Selamat Datang</span></h2>
        <h3><span class="text-orange">Sahabat Data!</span></h3>
      </div>      
      <form method="POST" action="{{ route('login.admin.submit') }}">
        @csrf
        <label for="admin_nama">Nama Admin <span style="color:red;">*</span></label>
        <input type="text" id="admin_nama" name="admin_nama" required>
      
        <label for="password">Kata Sandi <span style="color:red;">*</span></label>
        <input type="password" id="password" name="admin_password" required>        
      
        <div class="show-password">
          <input type="checkbox" onclick="togglePassword()"> Lihat Kata Sandi
        </div>
      
        <button type="submit" class="btn-login">MASUK</button>
      </form>
    </div>
  </div>

  <script>
    function togglePassword() {
      var pwd = document.getElementById("password");
      pwd.type = pwd.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>
