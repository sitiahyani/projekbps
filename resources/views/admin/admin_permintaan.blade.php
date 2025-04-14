<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jagad Statistik - Admin</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f8f9fa;
    }
    .logo-img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
    }
    .sidebar {
      background-color: #fff;
      min-height: 100vh;
      padding: 1rem;
      border-right: 1px solid #ddd;
    }
    .sidebar a {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px;
      margin-bottom: 8px;
      color: #555;
      text-decoration: none;
      border-radius: 5px;
    }
    .sidebar a.active,
    .sidebar a:hover {
      background-color: #0d6efd;
      color: #fff;
    }
    .card {
      padding: 1rem;
      border-left: 5px solid #0d6efd;
      background-color: #e7f1ff;
    }
    .table thead {
      background-color: #e3f2fd;
    }
        h3.mb-4 {
          font-weight: 700;
      font-size: 1.75rem;
      background: linear-gradient(90deg, #0d6efd, #fd7e14, #28a745); /* ijo, oren, biru */
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      padding-left: 15px;
      margin-bottom: 1.5rem;
    }

  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <div class="mb-4 d-flex justify-content-center align-items-center">
          <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS" class="logo-img">
        </div>  
        <a href="/admin"><i class="bi bi-house-door"></i> Beranda</a>
        <a href="/admin/pss"><i class="bi bi-briefcase"></i> PSS</a>
        <a href="#"><i class="bi bi-person"></i> PST</a>
        <a href="/admin/potik"><i class="bi bi-mortarboard"></i> Pojok Statistik</a>
        <a href="#"><i class="bi bi-folder2-open"></i> Koleksi</a>
        <a href="/admin/permintaan" class="active"><i class="bi bi-database"></i> Permintaan Data</a>
        <a href="#" class="text-danger"><i class="bi bi-box-arrow-right"></i> Keluar</a>
      </div>

      <!-- Main content -->
      <div class="col-md-10">
        <!-- Topbar -->
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
          <div><strong>Halaman / Beranda</strong></div>
          <div class="d-flex align-items-center gap-3">
            <div class="input-group">
              <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control border-start-0" placeholder="Pencarian..." />
            </div>
            <i class="bi bi-person-circle fs-3 text-secondary"></i>
          </div>
        </div><!-- Permintaan Data --> 
        <div id="permintaandata" class="p-4">
          <h3 class="mb-4"> Permintaan Data </h3>
        <div class="card-body">       
          <div class="card">
              <!-- Search Input -->
              <div class="input-group mb-3">
                <span class="input-group-text bg-white border-end-0">
                  <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-start-0" id="searchRequest" placeholder="Cari permintaan data..." />
              </div>
        
              <!-- Tabel Permintaan Data -->
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>No. Telepon</th>
                    <th>Keterangan</th>
                    <th>Dokumen</th>
                    <th>Ulasan Admin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dian Saputra</td>
                    <td>081234567890</td>
                    <td>Ingin data jumlah penduduk per kecamatan 2023</td>
                    <td><a href="#" class="btn btn-sm btn-info">Lihat Dokumen</a></td>
                    <td>
                      <textarea class="form-control mb-2" rows="2" placeholder="Tulis ulasan..."></textarea>
                      <button class="btn btn-sm btn-success w-100">
                        <i class="bi bi-send"></i> Tambahkan Ulasan
                      </button>
                    </td>
                    <td class="text-nowrap">
                      <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
                      <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        