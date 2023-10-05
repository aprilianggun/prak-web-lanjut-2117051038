<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("assets/css/profile.css") ?>">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="form-container">
            <form action="<?= base_url('user/store') ?>" method="post">
                <div class="form-input">
                    <input type="text" name="nama" placeholder="Nama" required />
                </div>
                <div class="form-input">
                    <input type="text" name="npm" placeholder="NPM" required />
                </div>
                <div class="form-input">
                    <input type="text" name="kelas" placeholder="Kelas" required />
                </div>
                <input type="submit" value="Submit" class="btn-login" />
            </form>
        </div>
    </div>

</body>

</html>