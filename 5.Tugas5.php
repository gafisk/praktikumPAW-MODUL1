<?php
$hari = array(
    1 => 'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu'
);

function tanggal_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas No 5</title>
</head>

<body>
    <?php
    echo "<h1>Modul IV PHP Kondisional</h1>";
    echo "Nama/NRP : Galih Restu Baihaqi/190411100177 <br> <br>";

    $waktu = date('Y-m-d');
    $tanggal = tanggal_indo($waktu);;
    $hariindo = $hari[date('N')];

    echo "Sekarang Hari $hariindo : Tanggal $tanggal";
    ?>
</body>

</html>