<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="tabel-bagus">
    <a href="<?= base_url('user/create') ?>">Add User</a>
    <table border="1" bgcolor="#eaeaea">
        <thead>
            <tr class="tabel size">
                <th style="color: #FFE5E5;">ID</th>
                <th style="color: #FFE5E5;">Nama</th>
                <th style="color: #FFE5E5;">NPM</th>
                <th style="color: #FFE5E5;">Kelas</th>
                <!-- <th style="color: #FFE5E5;">Foto</th> -->
                <th style="color: #FFE5E5;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($users && is_array($users)) : ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>

                        <td>
                            <a href="<?= base_url('user/' . $user['id']) ?>" class="">Detail</a>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">Nothing User</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
