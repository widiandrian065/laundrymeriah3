<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah Outlet</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <div class="card bg-primary text-light">
                <div class="card-header">
                    <h2>Form Tambah paket</h2>
                </div>
        <div class="card-body">
        <form action="proses_tambah_paket.php" method="POST">
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
                    <label class="bmd-label-floating">Jenis</label>
                    <select name="jenis" class="form-control">
                        <option class="form-control" value="1">Kiloan</option>
                        <option class="form-control" value="2">Selimut</option>
                        <option class="form-control" value="3">Bed Cover</option>
                        <option class="form-control" value="4">Kaos</option>
                        <option class="form-control" value="5">Lain-lain</option>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control">Nama Paket</label> 
                    <select class="form-control" type="text" name="nama_paket" placeholder="nama paket"value="<?php echo $p['nama_paket'];?>" required>
                          <option>Express</option>
                          <option>Reguler</option>
                          <option>Biasa</option>
                    </select>

                <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control">harga</label> 
                    <input class="form-control" type="number" name="harga" placeholder="harga" required>
                <br>
                <button class="btn btn-success" type="submit">Tambah</button> 
                </div>
        </form>