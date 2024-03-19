<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2 - Hasil Perhitungan Future Value Annuity Due</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Memanggil file header dari folder template -->   
  <?php include 'template/Header.html'?>
     <!-- Judul dibawah hasil --> 
    <div class="container mt-4">
      <h1>Halaman 2 - Hasil Perhitungan Future Value Annuity Due</h1>
    <div class="alert alert-primary" role="alert">
    
        <!-- menambahkan fungsi logika ke dalam rumus -->
        <?php
          function annuityDueFutureValue($C, $i, $n) {
          $FV = $C * ((pow(1 + $i, $n) - 1) / $i) * (1 + $i);
          return $FV;
          }
          // Mengambil nilai pembayaran periodik, tingkat bunga, dan jumlah periode dari query parameter
          $C = isset($_GET['payment']) ? $_GET['payment'] : "Pembayaran belum diinput.";
          $i = isset($_GET['interest']) ? $_GET['interest'] : "Bunga belum diinput.";
          $n = isset($_GET['periods']) ? $_GET['periods'] : "Jumlah periode belum diinput.";

          // Menghitung Future Value (Nilai Masa Depan) dari Annuity Due
          $futureValue = annuityDueFutureValue($C, $i, $n);
          // Format angka dengan pemisah ribuan
          $futureValueFormatted = number_format($futureValue, 0, ',', '.');
          echo "Future Value dari Annuity Due dengan pembayaran periodik sebesar $C, tingkat bunga $i, dan jumlah periode $n adalah: Rp.  $futureValueFormatted";
        ?>
     </div>

     <!-- button kembali ke halaman 1 -->
     <a href="Halaman1.php" class="btn btn-primary">Kembali ke Halaman 1</a>
</div>

     <!-- Memanggil file footer dari folder template -->
    <?php include "template/Footer.html" ?>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
