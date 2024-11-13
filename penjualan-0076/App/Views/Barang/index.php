<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Penjualan-0076</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE/dist/css/adminlte.min.css">

  <style>
    /* Warna dasar sidebar */
    .main-sidebar {
      background-color: #2E3B55;
    }
    
    /* Warna teks pada sidebar */
    .nav-sidebar .nav-link p, .user-panel .info a {
      color: #FFFFFF !important;
    }

    /* Hover efek pada sidebar */
    .nav-sidebar .nav-link:hover {
      background-color: #4A5A7D;
      color: #FFFFFF;
    }
    
    /* Header styling */
    .content-header h1 {
      font-weight: bold;
      color: #4A5A7D;
    }
    
    /* Tabel styling */
    .table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 10px;
    }

    .table th {
      background-color: #4A5A7D;
      color: white;
      text-align: center;
    }

    .table td, .table th {
      padding: 12px;
      border: 1px solid #ddd;
    }

    /* Hover efek pada baris tabel */
    .table tr:hover {
      background-color: #f5f5f5;
    }

    /* Button styling */
    .btn-outline-success, .btn-outline-warning, .btn-outline-danger {
      border-radius: 20px;
      font-weight: bold;
      transition: background-color 0.3s, color 0.3s;
    }

    /* Warna background dan teks button saat hover */
    .btn-outline-success:hover {
      background-color: #28a745;
      color: white;
    }
    .btn-outline-warning:hover {
      background-color: #ffc107;
      color: white;
    }
    .btn-outline-danger:hover {
      background-color: #dc3545;
      color: white;
    }
    
    /* Footer styling */
    .main-footer {
      background-color: #2E3B55;
      color: white;
      text-align: center;
      padding: 10px;
      border-top: 2px solid #4A5A7D;
    }

    /* Adjustments for mobile view */
    @media (max-width: 768px) {
      .content-header h1 {
        font-size: 24px;
        text-align: center;
      }
      .table th, .table td {
        font-size: 12px;
        padding: 8px;
      }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <!-- Sidebar user -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Penjualan-0076</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?controller=home&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=barang&action=index" class="nav-link active">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=pelanggan&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-success"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=transaksi&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="index.php?controller=barang&action=index" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
          <div class="col-sm-6">
            <h1>Daftar Barang</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
          <a href="index.php?controller=barang&action=create" class="btn btn-outline-success mb-3">Tambah Data</a>
          <table class="table table-striped table-bordered">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $key => $barang): ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $barang['kode_barang'] ?></td>
                  <td><?= $barang['nama_barang'] ?></td>
                  <td><?= number_format($barang['harga'], 2, '.', ',') ?></td>
                  <td><?= $barang['stok'] ?></td>
                  <td>
                    <a href="index.php?controller=barang&action=edit&id=<?= $barang['kode_barang'] ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                    <a href="index.php?controller=barang&action=delete&id=<?= $barang['kode_barang'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Kamu yakin akan menghapus data ini ?');">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 23.230.0076 - Helsa Najwa Maudini</strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="public/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>