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
        <a href="/admin/pss" class="active"><i class="bi bi-briefcase"></i> PSS</a>
        <a href="/admin/potik"><i class="bi bi-person"></i> PST</a>
        <a href="#"><i class="bi bi-mortarboard"></i> Pojok Statistik</a>
        <a href="#"><i class="bi bi-folder2-open"></i> Koleksi</a>
        <a href="#"><i class="bi bi-database"></i> Permintaan Data</a>
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
        </div>
<!-- PSS Section -->
<div id="pssSection" class="p-4">
  <h3 class="mb-4"> Pembinaan Statistik Sektoral </h3>

  <!-- Kegiatan Online -->
  <div class="card mb-4">
    <div class="card-header bg-primary text-white">
      Kegiatan Online 
    </div>
    <div class="card-body">
      <!-- Search Input -->
      <div class="input-group mb-3">
        <span class="input-group-text bg-white border-end-0">
          <i class="bi bi-search"></i>
        </span>
        <input type="text" class="form-control border-start-0" id="searchZoom" placeholder="Cari kegiatan online..." />
      </div>

      <!-- Form Input Kegiatan Online -->
      <form class="row g-3 mb-3">
        <div class="col-md-3">
          <label class="form-label">Judul Kegiatan</label>
          <input type="text" class="form-control" placeholder="Judul Zoom/Pamflet" />
        </div>
        <div class="col-md-2">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" />
        </div>
        <div class="col-md-2">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Belum Selesai</option>
            <option>Sudah Selesai</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Deskripsi</label>
          <input type="text" class="form-control" placeholder="Deskripsi kegiatan" />
        </div>
        <div class="col-md-2">
          <label class="form-label">Upload Konten</label>
          <input type="file" class="form-control" />
        </div>
        <div class="col-md-1 d-flex align-items-end">
          <button type="submit" class="btn btn-success w-100">
            <i class="bi bi-plus-circle"></i>
          </button>
        </div>
      </form>

      <!-- Tabel Kegiatan Online -->
      <table class="table table-bordered" id="zoomTable">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Deskripsi</th>
            <th>Konten</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Webinar Statistik Dasar</td>
            <td>2024-02-10</td>
            <td><span class="badge bg-success">Sudah Selesai</span></td>
            <td>Pengantar konsep dasar statistik</td>
            <td><a href="#" class="btn btn-sm btn-info">Lihat Konten</a></td>
            <td>
              <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

  <!-- Kegiatan Offline -->
  <div class="card">
    <div class="card-header bg-success text-white">
      Kegiatan Offline 
    </div>
    <div class="card-body">
      <!-- Search Input -->
      <div class="input-group mb-3">
        <span class="input-group-text bg-white border-end-0">
          <i class="bi bi-search"></i>
        </span>
        <input type="text" class="form-control border-start-0" id="searchOffline" placeholder="Cari kegiatan offline..." />
      </div>

      <!-- Form Input Kegiatan Offline -->
      <form class="row g-3 mb-3">
        <div class="col-md-3">
          <label class="form-label">Nama Kegiatan</label>
          <input type="text" class="form-control" placeholder="Contoh: Workshop Posyandu" />
        </div>
        <div class="col-md-2">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" />
        </div>
        <div class="col-md-3">
          <label class="form-label">Upload Foto</label>
          <input type="file" class="form-control" />
        </div>
        <div class="col-md-3">
          <label class="form-label">Deskripsi</label>
          <input type="text" class="form-control" placeholder="Deskripsi kegiatan" />
        </div>
        <div class="col-md-1 d-flex align-items-end">
          <button type="submit" class="btn btn-success w-100">
            <i class="bi bi-plus-circle"></i>
          </button>
        </div>
      </form>

      <!-- Tabel Kegiatan Offline -->
      <table class="table table-bordered" id="offlineTable">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pelatihan Statistik</td>
            <td>2024-03-21</td>
            <td><img src="pamflet.jpg" alt="Foto Kegiatan" width="80" /></td>
            <td>Pengenalan software SPSS dan Excel</td>
            <td>
              <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
