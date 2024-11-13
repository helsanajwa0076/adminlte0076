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
    /* Tema Umum */
    body {
      background-color: #ecf0f1;
      color: #2c3e50;
    }

    .main-sidebar {
      background-color: #2c3e50;
    }

    .main-sidebar .nav-link p {
      color: #ecf0f1;
    }

    /* Styling Form Container */
    .form-container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .form-title {
      font-weight: bold;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    .form-group label {
      font-weight: bold;
      color: #34495e;
    }

    /* Tombol */
    .btn-success {
      background-color: #27ae60;
      border-color: #27ae60;
    }

    .btn-outline-light {
      color: #2c3e50;
      border-color: #2c3e50;
    }

    .btn-outline-light:hover {
      color: #ffffff;
      background-color: #2c3e50;
    }
  </style>
</head>

<body>
<div class="container form-container">
    <h2 class="form-title">Tambah Barang</h2>
    <form action="index.php?controller=barang&action=store" method="POST">
        <div class="form-group">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>

        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php?controller=barang&action=index" class="btn btn-outline-light">Kembali</a>
    </form>
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
