<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="form-container">
        <form action="<?= base_url('user/profile') ?>" method="post" enctype="multipart/form-data">
            <div class="form-input">
                <input type="text" class="form-control <?= (empty(service('validation')->getError('nama'))) ? '' : 'is-invalid' ?>" name="nama" value="<?= old('nama') ?>" placeholder="nama">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('nama') ?>
                </div>
            </div>
            <div class="form-input">
                <input type="text" class="form-control <?= (empty(service('validation')->getError('npm'))) ? '' : 'is-invalid' ?>" name="npm" value="<?= old('npm') ?>" placeholder="npm">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('npm') ?>
                </div>
            </div>
            <div class="form-input">
                <select class="form-select <?= (empty(service('validation')->getError('kelas'))) ? '' : 'is-invalid' ?>" name="kelas" id="kelas">
                    <option disabled selected>Kelas</option>
                    <?php
                    foreach ($kelas as $item) :
                    ?>
                        <option value="<?= $item['id'] ?>" <?= ($item['id'] == old('kelas')) ? 'selected' : '' ?>>
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= service('validation')->getError('kelas') ?>
                </div>
            </div>
            <div class="form-input">
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <input type="submit" value="Submit" class="btn-login" />
        </form>
    </div>
</div>

<?= $this->endSection() ?>
