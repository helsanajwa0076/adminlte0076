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
    /* Mengubah tema sidebar */
    .main-sidebar {
      background-color: #2c3e50; /* Warna sidebar */
    }
    
    /* Mengubah warna teks pada sidebar */
    .main-sidebar .nav-link p {
      color: #ecf0f1;
    }

    /* Tema header halaman */
    .content-header h1 {
      color: #4A5A7D;
      font-weight: bold;
    }

    /* Tema footer */
    .main-footer {
      background-color: #2c3e50;
      color: #ecf0f1;
      text-align: center;
      padding: 10px;
    }

    /* Tombol di sidebar */
    .nav-link.active {
      background-color: #3498db;
      color: #ffffff;
    }

    .nav-link:hover {
      background-color: #2980b9;
      color: #ffffff;
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="index.php?controller=home&action=index" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
          <div class="col-sm-6">
            <h1>Home Page</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
          <br>
          <h1>Selamat Datang di Aplikasi Penjualan</h1>
          <br>
        </div>
      </div>
    </section>
  </div>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 23.230.0076 - Helsa Najwa Maudini</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<!-- jQuery -->
<script src="public/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
