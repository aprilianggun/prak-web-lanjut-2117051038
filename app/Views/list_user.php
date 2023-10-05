<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="tabel-bagus">
    <table border="1" bgcolor="#eaeaea">
        <thead>
            <tr class="tabel size">
                <th style="color: #FFE5E5;">ID</th>
                <th style="color: #FFE5E5;">Nama</th>
                <th style="color: #FFE5E5;">NPM</th>
                <th style="color: #FFE5E5;">Kelas</th>
                <th style="color: #FFE5E5;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>