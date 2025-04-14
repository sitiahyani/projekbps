<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jagad Statistik - Koleksi Admin</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body { background-color: #f8f9fa; }
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
    .sidebar a.active, .sidebar a:hover {
      background-color: #0d6efd;
      color: #fff;
    }
    .logo-img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
    }
    .topbar {
      padding: 1rem;
      border-bottom: 1px solid #ddd;
      background-color: #fff;
    }
    .koleksi-section h2 {
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 1rem;
      border-left: 4px solid #0d6efd;
      padding-left: 8px;
    }
    .koleksi-table table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      background-color: white;
    }
    .koleksi-table th, .koleksi-table td {
      padding: 12px;
      border: 1px solid #dee2e6;
      vertical-align: middle;
      font-size: 14px;
    }
    .koleksi-table img {
      width: 80px;
      object-fit: cover;
      border-radius: 4px;
    }
    button.edit i { color: #0d6efd; }
    button.delete i { color: #dc3545; }
    button.edit:hover i { color: #084298; }
    button.delete:hover i { color: #a71d2a; }

    @media (max-width: 768px) {
      .koleksi-table table, .koleksi-table thead, .koleksi-table tbody, .koleksi-table th, .koleksi-table td, .koleksi-table tr {
        display: block;
      }
      .koleksi-table td::before {
        content: attr(data-label);
        font-weight: bold;
        display: inline-block;
        width: 120px;
      }
        h3.mb-4 {
        font-weight: 700;
        font-size: 1.75rem;
        background: linear-gradient(90deg, #0d6efd, #fd7e14, #28a745);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        padding-left: 15px;
        margin-bottom: 1.5rem;
      }

      h3.mb-4:after {
        content: "";
        display: block;
        height: 2px;
        width: 100%;
        background: linear-gradient(90deg, #0d6efd, #fd7e14, #28a745);
        margin-top: 10px;
      }

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
        <a href="/admin/koleksi" class="active"><i class="bi bi-folder2-open"></i> Koleksi</a>
        <a href="/admin/permintaan"><i class="bi bi-database"></i> Permintaan Data</a>
        <a href="{{ route('logout') }}" class="text-danger"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i> Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>

      <!-- Main Content -->
      <div class="col-md-10">
        <!-- Topbar -->
        <div class="topbar d-flex justify-content-between align-items-center">
          <strong>Halaman / Koleksi</strong>
          <div class="d-flex align-items-center gap-3">
            <div class="input-group">
              <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control border-start-0" placeholder="Cari..." />
            </div>
            <i class="bi bi-person-circle fs-3 text-secondary"></i>
          </div>
        </div>

        <!-- Konten -->
        <div class="p-4">
          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <h3 class="mb-4">Koleksi</h3>
          <div class="row">
            <!-- Form Infografis -->
            <div class="col-md-6">
              <div class="card p-4 mb-4 shadow-sm border-0">
                <h5 class="mb-3">Upload Infografis</h5>
                <form action="{{ route('admin.koleksi.infografis') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Upload Infografis</button>
                </form>
              </div>
            </div>

            <!-- Form E-book -->
            <div class="col-md-6">
              <div class="card p-4 mb-4 shadow-sm border-0">
                <h5 class="mb-3">Upload E-book</h5>
                <form action="{{ route('admin.koleksi.ebook') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required></textarea>
                  </div>
                  <div class="mb-3">
                    <label>File PDF</label>
                    <input type="file" name="file_pdf" class="form-control" accept="application/pdf" required>
                  </div>
                  <button type="submit" class="btn btn-success">Upload E-book</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Daftar Infografis -->
          <section class="koleksi-section">
            <h2>Daftar Infografis</h2>
            <div class="koleksi-table">
              <table>
                <thead>
                  <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Upload</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($infografis as $item)
                  <tr>
                    <td><img src="{{ asset('storage/infografis/' . $item->gambar) }}" alt="Infografis"></td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>
                      <!-- Edit -->
                      <a href="{{ route('admin.koleksi.edit', ['id' => $item->id, 'type' => 'infografis']) }}" class="btn btn-sm btn-outline-primary me-1">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                    
                      <!-- Delete -->
                      <form action="{{ route('admin.koleksi.destroy', ['id' => $item->id, 'type' => 'infografis']) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </section>

          <!-- Daftar E-book -->
          <section class="koleksi-section">
            <h2>Daftar E-book</h2>
            <div class="koleksi-table">
              <table>
                <thead>
                  <tr>
                    <th>Nama File</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Upload</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ebooks as $item)
                  <tr>
                    <td>{{ $item->file_pdf }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>
                      <!-- Edit -->
                      <a href="{{ route('admin.koleksi.edit', ['id' => $item->id, 'type' => 'ebook']) }}" class="btn btn-sm btn-outline-primary me-1">
                        <i class="bi bi-pencil-square"></i>
                      </a>
                    
                      <!-- Delete -->
                      <form action="{{ route('admin.koleksi.destroy', ['id' => $item->id, 'type' => 'ebook']) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                          <i class="bi bi-trash"></i>
                        </button>
                      </form>
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
