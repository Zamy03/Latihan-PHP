<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>

<body>
    <?php
    $pembelian = 100000;
    $diskon = 0;
    if ($pembelian >= 100000) {
        $diskon = $pembelian * (25 / 100);
    } elseif ($pembelian >= 75000) {
        $diskon = $pembelian * (20 / 100);
    } elseif ($pembelian >= 50000) {
        $diskon = $pembelian * (15 / 100);
    } elseif ($pembelian >= 25000) {
        $diskon = $pembelian * (10 / 100);
    } elseif ($pembelian >= 10000) {
        $diskon = $pembelian * (5 / 100);
    }
    $pembayaran = $pembelian - $diskon;
    echo "<pre>";
    echo "Total Pembelian = " . $pembelian . "<br>";
    echo "Mendapatkan Diskon = " . $diskon . "<br>";
    echo "Total Pembayaran = " . $pembayaran . "<br>";
    echo "</pre>";
    ?>

</body>

</html>