<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="continer">
<div class="card">
    <div class="form-container">
        <form action="<?= base_url('user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>

            <div class="form-input">
                <input type="text" class="form-control <?= (empty(service('validation')->getError('nama'))) ? '' : 'is-invalid' ?>" name="nama" value="<?=  $user['nama'] ?>" placeholder="nama">
                <div class="invalid-feedback">
                    <?= service('validation')->getError('nama') ?>
                </div>
            </div>
            <div class="form-input">
                <input type="text" class="form-control <?= (empty(service('validation')->getError('npm'))) ? '' : 'is-invalid' ?>" name="npm" value="<?= $user['npm'] ?>" placeholder="npm">
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
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    <?= service('validation')->getError('kelas') ?>
                </div>
            </div>
            <div class="form-input">
                <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="100px" height="100px">
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <input type="submit" value="Submit" class="btn-login" />
        </form>
    </div>
</div>
</div>

<?= $this->endSection() ?>