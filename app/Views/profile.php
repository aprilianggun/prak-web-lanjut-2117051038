<?= $this->extend('layout/app') ?>
<?= $this->section('content') ?>

<div class="card">
    <img src="<?= base_url('/assets/img/aprikcantik.jpeg') ?>" alt="cantik" width=130 height=130 class="gambar"> <br>
    Nama: <?= $nama ?><br>
    Kelas: <?= $id_kelas ?><br>
    NPM: <?= $npm ?>
</div>