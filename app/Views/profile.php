<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url("assets/css/profile.css") ?>">
<div class="card">
    <div class="w-50 text-center border mx-auto">
        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="gambar">
    </div>
    <div class="text">
        Nama: <?= $user['nama'] ?><br>
        Kelas: <?= $user['nama_kelas'] ?><br>
        NPM: <?= $user['npm'] ?>
    </div>
</div>