<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Paket</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <?php

            require 'db.php';

            $id=$_GET['id'];

            $db = new Database();
            $paket = $db->getById('paket', ['id_paket'=>$id]);

            foreach($paket as $p):
                ?>

        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form ubah Paket</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_paket.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Id Paket</label> 
                    <input class="form-control" type="number" name="id_paket" placeholder="Id Paket"  value="<?php echo $p['id_paket'];?>" readonly>
                </div>
                <div class="form=group">
                    <label class="bmd-label-floating">Id Outlet</label>
                    <select name="id_outlet" class="form-control">
                    <?php 
                    $outlet = $db->getAll('outlet');

                        foreach($outlet as $o):

                    ?>
                        <option value="<?php echo $o['id_outlet']; ?>" class="form-control"><?php echo $o['nama'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">Jenis</label>
                    <br>
                    <select class="form-control" name="jenis" <?php echo $p['jenis'];?>>
                        <option value="1"> Kiloan </option>
                        <option value="2"> Selimut</option>
                        <option value="3"> bed-cover </option>
                        <option value="4"> kaos</option>
                        <option value="5"> lain-lain </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">Nama Paket</label> 
                    <select class="form-control" type="text" name="nama_paket" placeholder="nama paket"value="<?php echo $p['nama_paket'];?>" required>
                          <option>Express</option>
                          <option>Reguler</option>
                          <option>Biasa</option>
                    </select>

                </div>
                <div class="Form-group" >
                    <label class="label-control">Harga</label> 
                    <input class="form-control" type="number" name="harga" placeholder="harga" value="<?php echo $p['harga'];?>" required>
                </div>
               <br>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>
        </div>
        </div>
        </div>
        <?php endforeach; ?>
        </body>
</html>