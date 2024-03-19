<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 11 - Menghitung Future Value Annuity Due</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Memanggil file header dari folder template -->
  <?php include 'template/Header.html'?>
  
  <!-- Judul dibawah form -->
    <div class="container mt-4">
      <h1>Halaman 1 - Menghitung Future Value Annuity Due</h1>
      <form action="Halaman2.php" method="GET">
    </div>
  
  <!-- membuat form input data -->
  <div class="container">
<!-- form 1 -->
    <div class="mb-3">
          <label for="payment" class="form-label"><b>Pembayaran Periode (bulan)</b></label>
          <input type="number" class="form-control" id="payment" name="payment" step="any" required>
          <p style="color: grey">Contoh : 12 juta pertahun / 12 bulan = Rp. 1.000.000</p>
        </div>
      
      <!-- form 2 -->
        <div class="mb-3">
          <label for="interest" class="form-label"><b>Tingkat Bunga Pertahun (Bulan)</b></label>
          <input type="float" class="form-control" id="interest" name="interest" step="any" required>
          <p style="color: grey">Contoh : 15% pertahun = 0.012 Perbulan</p>
        </div>
      
      <!-- form 3 -->
        <div class="mb-3">
          <label for="periods" class="form-label"><b>Jumlah Periode (bulan)</b></label>
          <input type="number" class="form-control" id="periods" name="periods" required>
          <p style="color: grey">Contoh: 1 periode = 12 Bulan </p>
        </div>
      
        <!-- tombol untuk submit -->
        <button type="submit" class="btn btn-primary">Hitung Future Value</button>
      </form>
    </div>
  </div>
  

  <!-- Memanggil file footer dari folder template -->
  <?php include "template/Footer.html" ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>
