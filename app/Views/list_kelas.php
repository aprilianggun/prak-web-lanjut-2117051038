<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">
                <span class="firstname">APRI</span>
                <span class="lastname">LIA</span>
            </a>
            <ul class="navbar-menu">
                <li class="navbar-item"><a href="<?= base_url('user/') ?>" class="navbar-link active">USER</a></li>
                <li class="navbar-item"><a href="<?= base_url('kelas/') ?>" class="navbar-link">KELAS</a></li>
                <!-- <li class="navbar-item"><a href="logout.php" class="navbar-link">Log Out</a></li> -->
            </ul>
        </div>
    </nav>

<div class="continer">
    <div class="tabel-bagus">
        <a href="<?= base_url('kelas/create') ?>" class="btn-crud" style="width:70px; height:20px">Add Class</a>
        <table border="1" bgcolor="#eaeaea">
            <thead>
                <tr class="tabel size">
                    <th style="color: #FFE5E5;">Nama</th>
                    <th style="color: #FFE5E5;">Jumlah Kapasitas</th>
                    <!-- <th style="color: #FFE5E5;">Foto</th> -->
                    <th style="color: #FFE5E5;" class="aksi-column">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($kelas && is_array($kelas)) : ?>
                    <?php foreach ($kelas as $kelasItem) : ?>
                        <tr>
                            <td><?= $kelasItem['nama_kelas'] ?></td>
                            <td><?= $kelasItem['jumlah_kapasitas'] ?></td>

                            <td>
                                <div class="button-group">
                                    <a href="<?= base_url('kelas/' . $kelasItem['id']) ?>" class="btn-crud">Detail</a>
                                    <a href="<?= base_url('kelas/' . $kelasItem['id'] . '/edit') ?>" class="btn-crud">Edit</a>
                                    <form action="<?= base_url('kelas/' . $kelasItem['id']) ?>" method="post">

                                        <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field() ?>
                                        <div class="delete-button">
                                            <button type="submit" class="btn-crud" style="width: 70px; height:40px">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Tidak Ada Kelas Yang Tersedia</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>