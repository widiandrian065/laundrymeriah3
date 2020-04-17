<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah User</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <div class="card bg-primary text-light">
                <div class="card-header">
                    <h2>Form Tambah User</h2>
                </div>
        <div class="card-body">
        <form action="proses_tambah_user.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Id Outlet</label>
                    <select name="id_outlet" class="form-control">
                    <?php
                        include 'db.php';
                        $db = new Database();
                        $outlet = $db->getAll('outlet');

                        foreach($outlet as $o):

                    ?>
                        <option value="<?php echo $o['id_outlet']; ?>" class="form-control"><?php echo $o['nama'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Nama</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Password</label>
                    <input class="form-control" type="text" name="password" placeholder="Password" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Role</label>
                    <select name="role" class="form-control">
                        <option class="form-control" value="1">Admin</option>
                        <option class="form-control" value="2">Kasir</option>
                        <option class="form-control" value="3">Owner</option>
                    </select>
                </div>
                </div>
                <br>
                <br>
                <button class="btn btn-success" type="submit">Tambah</button> 
                </div>
        </form>