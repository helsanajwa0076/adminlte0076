<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Penjualan- 0076</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE/dist/css/adminlte.min.css">

  <!-- Custom CSS -->
  <style>
    /* Sidebar background color */
    .main-sidebar {
      background-color: #2E3B55;
    }
    
    /* Sidebar link and user panel text color */
    .nav-sidebar .nav-link p, .user-panel .info a {
      color: #FFFFFF !important;
    }

    /* Sidebar link hover effect */
    .nav-sidebar .nav-link:hover {
      background-color: #4A5A7D;
      color: #FFFFFF;
    }

    /* Header styling */
    .content-header h1 {
      font-weight: bold;
      color: #4A5A7D;
    }

    /* Table styling */
    .table th {
      background-color: #4A5A7D;
      color: white;
      text-align: center;
    }

    .table td, .table th {
      padding: 12px;
      border: 1px solid #ddd;
    }

    .table tr:hover {
      background-color: #f5f5f5;
    }

    /* Button styling */
    .btn-outline-success, .btn-outline-info {
      border-radius: 20px;
      font-weight: bold;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-outline-success:hover {
      background-color: #28a745;
      color: white;
    }
    .btn-outline-info:hover {
      background-color: #17a2b8;
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

    /* Responsive adjustments */
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
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Penjualan- 0076</a>
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
            <a href="index.php?controller=barang&action=index" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p class="text">Barang</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="index.php?controller=home&action=index" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
          <div class="col-sm-6">
            <h1>Data Transaksi</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-body">
          <a href="index.php?controller=transaksi&action=create" class="btn btn-outline-success mb-3">Tambah Data</a>

          <table class="table table-striped table-bordered">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>Kode Barang</th>
                <th>ID Pelanggan</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($transaksiList as $key => $transaksi): ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $transaksi['id_transaksi'] ?></td>
                  <td><?= $transaksi['kode_barang'] ?></td>
                  <td><?= $transaksi['id_pelanggan'] ?></td>
                  <td><?= $transaksi['jumlah'] ?></td>
                  <td><?= number_format($transaksi['total_harga'], 2, '.', ',') ?></td>
                  <td><?= $transaksi['tanggal'] ?></td>
                  <td>
                    <a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>" class="btn btn-sm btn-outline-info">Detail</a>
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
    <div class="float-center d-none d-sm-block">
      <strong>Copyright &copy; 23.230.0076 - Helsa Najwa Maudini</strong>
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>

<!-- jQuery -->
<script src="public/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/AdminLTE/dist/js/demo.js"></script>
</body>
</html>
