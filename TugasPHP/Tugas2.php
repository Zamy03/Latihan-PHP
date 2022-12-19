<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>

<body>
    <h2>Akumulasi</h2>
    <?php
    function Akumulasi($a, $b, $c, $d)
    {
        $hasil = $a + $b + $c + $d;
        return $hasil;
    }
    echo "Akumulasi bilangan genap 0 s.d 6 adalah " . Akumulasi(0, 2, 4, 6)
    ?>
</body>

</html>