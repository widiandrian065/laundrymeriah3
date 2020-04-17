<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah Outlet</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
            <style type="text/css">
                 body{
                    background-image:url('gray.jpg') ;
                }
            </style>
        </head>
        <body class="container mt-5">
        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah detail transaksi</h2>
                </div>
        <div class="card-body">
        <form action="proses_tambah_detail_transaksi.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Id Paket</label>
                    <select name="id_paket" class="form-control">
                    <?php
                        include 'db.php';
                        $db = new Database();
                        $paket = $db->getAll('paket');

                        foreach($paket as $p):

                    ?>
                        <option value="<?php echo $p['id_paket']; ?>" class="form-control"><?php echo $p['id_paket'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                <label class="bmd-label-floating">Id Transaksi</label>
                <select name="id_transaksi" class="form-control">
                    <?php
                        $db = new Database();
                        $transaksi = $db->getAll('transaksi');

                        foreach($transaksi as $t):

                    ?>
                        <option value="<?php echo $t['id_transaksi']; ?>" class="form-control"><?php echo $t['id_transaksi'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">Qty</label>
                    <input class="form-control" type="text" name="qty" placeholder="Qty" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form=group">
                    <label class="bmd-label-floating">keterangan</label>
                    <input class="form-control" type="text" name="keterangan" placeholder="Keterangan" required>
                </div>
                <br>
                <button class="btn btn-warning" type="submit">Tambah</button> 
                </div>
        </form>