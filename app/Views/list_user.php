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
    <a href="<?= base_url('user/create') ?>" class="btn-crud" style="width:70px; height:20px">Add User</a>
    <table border="1" bgcolor="#eaeaea">
        <thead>
            <tr class="tabel size">
                <th style="color: #FFE5E5;">ID</th>
                <th style="color: #FFE5E5;">Nama</th>
                <th style="color: #FFE5E5;">NPM</th>
                <th style="color: #FFE5E5;">Kelas</th>
                <!-- <th style="color: #FFE5E5;">Foto</th> -->
                <th style="color: #FFE5E5;" class="aksi-column">Aksi</th>
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
                            <div class="button-group">
                                <a href="<?= base_url('user/' . $user['id']) ?>" class="btn-crud">Detail</a>
                                <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn-crud">Edit</a>
                                <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
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
                    <td colspan="6">Nothing User</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>
<?= $this->endSection() ?>