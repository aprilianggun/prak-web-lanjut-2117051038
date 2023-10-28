<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="continer">
<div class="card">
    <div class="form-container">
        <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>

            <div class="form-input">
                <input type="text" class="form-control <?= (empty(service('validation')->getError('nama_kelas'))) ? '' : 'is-invalid' ?>" name="nama_kelas" value="<?=  $kelas['nama_kelas'] ?>" placeholder="Edit Nama Kelas">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('nama_kelas') ?>
                </div>
            </div>
            <div class="form-input">
                <input type="text" class="form-control <?= (empty(service('validation')->getError('jumlah_kapasitas'))) ? '' : 'is-invalid' ?>" name="jumlah_kapasitas" value="<?= $kelas['jumlah_kapasitas'] ?>" placeholder="Edit Jumlah Kapasitas Kelas">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('jumlah_kapasitas') ?>
                </div>
            </div>
            
            <input type="submit" value="Submit" class="btn-login" />
        </form>
    </div>
</div>
</div>

<?= $this->endSection() ?>
