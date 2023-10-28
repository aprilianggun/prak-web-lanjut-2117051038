<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="continer">
    <div class="card">
        <div class="form-container">
            <form action="<?= base_url('kelas/store') ?>" method="post" enctype="multipart/form-data">
                <div class="form-input">
                    <input type="text" class="form-control <?= (empty(service('validation')->getError('nama_kelas'))) ? '' : 'is-invalid' ?>" name="nama_kelas" value="<?= old('nama_kelas') ?>" placeholder="Masukan Kelas">
                    <div class="invalid-feedback">
                        <?= service('validation')->getError('nama_kelas') ?>
                    </div>
                </div>
                <div class="form-input">
                    <input type="text" class="form-control <?= (empty(service('validation')->getError('jumlah_kapasitas'))) ? '' : 'is-invalid' ?>" name="jumlah_kapasitas" value="<?= old('jumlah_kapasitas') ?>" placeholder="Masukan Jumlah Kapasitas">
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