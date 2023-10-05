<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/profile.css") ?>">
    <title>Document</title>
</head>

<body>
    <div class="card">
    <img src="<?= base_url('/assets/img/aprikcantik.jpeg') ?>" alt="cantik" width=130 height=130 class="gambar"> <br>
        Nama: <?= $nama ?><br>
        Kelas: <?= $id_kelas ?><br>
        NPM: <?= $npm ?>
    </div>
</body>

</html>