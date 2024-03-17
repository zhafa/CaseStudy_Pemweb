<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 11</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Volume Balok</a>
  </div>
</nav>

<div class="container mt-4">
  <h1>Halaman 1 - Menghitung Volume Balok</h1>

  <form action="Halaman2.php" method="POST">
    <div class="mb-3">
      <label for="panjang" class="form-label">Panjang</label>
      <input type="number" class="form-control" id="panjang" name="panjang" required>
    </div>
    <div class="mb-3">
      <label for="lebar" class="form-label">Lebar</label>
      <input type="number" class="form-control" id="lebar" name="lebar" required>
    </div>
    <div class="mb-3">
      <label for="tinggi" class="form-label">Tinggi</label>
      <input type="number" class="form-control" id="tinggi" name="tinggi" required>
    </div>
    <button type="submit" class="btn btn-primary">Hitung Volume</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<footer id="footer" class="bg-light fixed-bottom">
        <div class="container text-center">
            <p class="text-muted">Website ini dibuat oleh kelompok 11</p>
            <p class="text-muted">Zhafa, Kartika, Eunike</p>
        </div>
    </footer>
</body>
</html>
