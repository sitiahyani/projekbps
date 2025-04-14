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
    .welcome h1 {
      font-weight: bold;
    }
    .blue {
      color: #0d6efd;
    }
    .orange {
      color: #f28b00;
    }
    .card {
      padding: 1rem;
      border-left: 5px solid #0d6efd;
      background-color: #e7f1ff;
    }
    .table thead {
      background-color: #e3f2fd;
    }
    .logo-img {
      height: 60px;
      object-fit: contain;
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
        <a href="/admin" class="active"><i class="bi bi-house-door"></i> Beranda</a>
        <a href="/admin/pss"><i class="bi bi-briefcase"></i> PSS</a>
        <a href="#"><i class="bi bi-person"></i> PST</a>
        <a href="/admin/potik"><i class="bi bi-mortarboard"></i> Pojok Statistik</a>
        <a href="/admin/koleksi"><i class="bi bi-folder2-open"></i> Koleksi</a>
        <a href="/admin/permintaan"><i class="bi bi-database"></i> Permintaan Data</a>
        <a href="{{ route('logout') }}" class="text-danger"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>

      <!-- Main content -->
      <div class="col-md-10">
        <!-- Topbar -->
        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
          <div><strong>Halaman / Beranda</strong></div>
          <div class="d-flex align-items-center gap-3">
            <!-- Search -->
            <div class="input-group">
              <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
              <input type="text" class="form-control border-start-0" name="search" placeholder="Pencarian..." value="{{ request()->query('search') }}" onkeyup="submitSearch()" />
            </div>
            <script>
              function submitSearch() {
                let searchQuery = document.querySelector('input[name="search"]').value;
                window.location.href = "/admin?search=" + searchQuery;
              }
            </script>                  
            <!-- User icon -->
            <i class="bi bi-person-circle fs-3 text-secondary"></i>
          </div>
        </div>

        <div class="p-4">

          <!-- ✅ Notifikasi Sukses -->
          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <!-- Welcome Section -->
          <section class="welcome mb-4">
            <h1><span class="blue">Selamat Datang</span> <span class="orange">Jagad Statistik, Admin!</span></h1>
            <div class="card mt-3">
              <div class="d-flex align-items-center gap-3">
                <i class="bi bi-person fs-2"></i>
                <p class="m-0">Jumlah Pengguna : <strong>{{ $pengunjung->count() }}</strong></p>
              </div>
            </div>
          </section>

          <!-- User Table -->
          <section class="user-table">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Pekerjaan</th>
                    <th>Tahun Lahir</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pengunjung as $user)
                  <tr>
                    <td>{{ $user->peng_id }}</td>
                    <td>{{ $user->peng_NamaLengkap }}</td>
                    <td>{{ $user->peng_Email }}</td>
                    <td>{{ $user->peng_NomorTelepon }}</td>
                    <td>{{ $user->peng_Pekerjaan }}</td>
                    <td>{{ $user->peng_TahunLahir }}</td>
                    <td>
                      <!-- ✅ Form Hapus -->
                      <form action="{{ route('pengunjung.destroy', $user->peng_id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
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
