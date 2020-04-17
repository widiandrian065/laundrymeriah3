<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Detail Transaksi</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <?php

            require 'db.php';

            $id=$_GET['id'];

            $db = new Database();
            $detail_transaksi = $db->getById('detail_transaksi', ['id_detail_transaksi'=>$id]);

            foreach($detail_transaksi as $dt):
        ?>

        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form ubah detail transaksi</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_detail_transaksi.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Id detail transaksi</label> 
                    <input class="form-control" type="number" name="id_detail_transaksi" placeholder="Id detail transaksi"  value="<?php echo $dt['id_detail_transaksi'];?>" readonly>
                </div>
                <div class="form=group">
                    <label class="bmd-label-floating">Id Paket</label>
                    <select name="id_paket" class="form-control">
                    <?php 
                    $paket = $db->getAll('paket');

                        foreach($paket as $p):

                    ?>
                        <option value="<?php echo $p['id_paket']; ?>" class="form-control"><?php echo $p['id_paket'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">id_transaksi</label>
                    <select name="id_transaksi" class="form-control">
                    <?php 
                    $transaksi = $db->getAll('transaksi');

                        foreach($transaksi as $t):

                    ?>
                        <option value="<?php echo $t['id_transaksi']; ?>" class="form-control"><?php echo $t['id_transaksi'];?></option>
                        <?php endforeach; ?>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label class="label-control">qty</label> 
                    <input class="form-control" type="text" name="qty" placeholder="qty"value="<?php echo $dt['qty'];?>" required>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control">Keterangan</label> 
                    <select class="form-control" type="text" name="keterangan" placeholder="keterangan"value="<?php echo $t['keterangan'];?>" required>
                          <option>Express</option>
                          <option>Reguler</option>
                          <option>Biasa</option>
                    </select>
               <br>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>
        </div>
        </div>
        </div>
        <?php endforeach; ?>
        </body>
</html>