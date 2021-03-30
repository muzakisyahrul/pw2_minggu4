<?php
$mahasiswa = [
    ["Eka Yuniar", "10510016", "Sistem Informasi", "eka@stimata.ac.id"],
    ["Yuniar", "10510016", "Sistem Informasi", "yuniar@stimata.ac.id"],
    ["Bintang", "12510016", "Sistem Informasi", "bintang@stimata.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach ($mhs as $m) : ?>
                <li><?= $m ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>

</html>