<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2 - Hasil Perhitungan Future Value Annuity Due</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Memanggil file header dari folder template -->
    <?php include 'template/Header.html'?>
    
    <div class="container mt-4">
        <h1 class="text-center mb-4">Halaman 2 - Hasil Perhitungan Future Value Annuity Due</h1>
        <div class="alert alert-primary" role="alert" id="hasil">
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
            ?>
            
            <!-- Output poin per poin -->
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-2">Pembayaran periodik: Rp. <?php echo $C; ?></p>
                    <p class="mb-2">Tingkat bunga: <?php echo $i; ?></p>
                    <p class="mb-2">Jumlah periode: <?php echo $n; ?></p>
                    <p>Future Value dari Annuity Due adalah: Rp. <?php echo $futureValueFormatted; ?></p>
                </div>
            </div>
        </div>
        
        <!-- Tombol kembali ke halaman 1 -->
        <div class="text-center mt-4">
            <a href="Halaman1.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <!-- Memanggil file footer dari folder template -->
    <?php include "template/footers.html" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
