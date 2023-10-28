<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="continer">
    <div class="card">
        <div class="text">
            Nama Kelas: <?= $kelas['nama_kelas'] ?><br>
            Jumlah Kapasitas: <?= $kelas['jumlah_kapasitas'] ?><br>
        </div>
    </div>

</div>
<?= $this->endSection() ?>