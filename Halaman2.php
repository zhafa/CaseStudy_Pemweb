<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Volume Balok</title>
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
  <h1>Halaman 2 - Hasil Perhitungan Volume Balok</h1>
  <div class="alert alert-primary" role="alert">
  <?php
    // Retrieve the volume value from the query parameter
    $volume = isset($_GET['volume']) ? $_GET['volume'] : "Volume belum dihitung.";
    echo "Hasil: $volume";
    ?>
  </div>
  <a href="Halaman1.php" class="btn btn-primary">Kembali ke Halaman 1</a>
</div>

<!-- php lopgic -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $tinggi = $_POST["tinggi"];

    // Hitung volume balok
    $volume = $panjang * $lebar * $tinggi;

    // Redirect to halaman2.php with result as query parameter
    header("Location: Halaman2.php?volume=" . urlencode($volume));
    exit();
}
?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
