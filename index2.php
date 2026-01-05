<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        $NamaProduk = "Headphone Gaming";
        $Hargaperunit = 250000;
        $JumlahPembelian = 3;
        $TotalHargaKotor = $Hargaperunit*$JumlahPembelian;
        $Diskon= $TotalHargaKotor*10/100;
        $TotalBayar = $TotalHargaKotor-$Diskon;

        echo "<H1> --- Struk Belanja ---</H1>";
        echo "<p> Nama Produk: $NamaProduk </p>";
        echo "<p> Harga per unit: Rp $Hargaperunit</p>";
        echo "<p> Jumlah Pembelian: $JumlahPembelian unit</p>";
        echo "<hr>";
        echo "<p> Total Harga Kotor : Rp $TotalHargaKotor</p>";
        echo "<p> Diskon(10%) : - Rp $Diskon </p>";
        echo "<hr>";
        echo "<h3> Total Bayar : Rp $TotalBayar </h3>";


    ?>
</body>
</html>