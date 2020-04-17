<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Transaksi</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <?php

            require 'db.php';

            $id=$_GET['id'];

            $db = new Database();
            $transaksi = $db->getById('transaksi', ['id_transaksi'=>$id]);

            foreach($transaksi as $t):
        ?>

        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form ubah transaksi</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_transaksi.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Id Transaksi</label> 
                    <input class="form-control" type="number" name="id_transaksi" placeholder="Id Transaksi"  value="<?php echo $t['id_transaksi'];?>" readonly>
                </div>
                <div class="form=group">
                    <label class="bmd-label-floating">Id Outlet</label>
                    <select name="id_outlet" class="form-control">
                    <?php 
                    $outlet = $db->getAll('outlet');

                        foreach($outlet as $o):

                    ?>
                        <option value="<?php echo $o['id_outlet']; ?>" class="form-control"><?php echo $o['id_outlet'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">Id Member</label>
                    <select name="id_member" class="form-control">
                    <?php 
                    $member = $db->getAll('member');

                        foreach($member as $m):

                    ?>
                        <option value="<?php echo $m['id_member']; ?>" class="form-control"><?php echo $m['id_member'];?></option>
                        <?php endforeach; ?>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label class="label-control">Id User</label> 
                    <select name="id_user" class="form-control">
                    <?php 
                    $user = $db->getAll('user');

                        foreach($user as $u):

                    ?>
                        <option value="<?php echo $u['id_user']; ?>" class="form-control"><?php echo $u['id_user'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Kode Invoice</label> 
                    <input class="form-control" type="number" name="kode_invoice" placeholder="Kode Invoice" value="<?php echo $t['kode_invoice'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Tgl</label> 
                    <input class="form-control" type="date" name="tgl" placeholder="Tgl" value="<?php echo $t['tgl'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Batas Waktu</label> 
                    <input class="form-control" type="date" name="batas_waktu" placeholder="Batas Waktu" value="<?php echo $t['batas_waktu'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Tgl Bayar</label> 
                    <input class="form-control" type="date" name="tgl_bayar" placeholder="Tgl Bayar" value="<?php echo $t['tgl_bayar'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Biaya Tambahan</label> 
                    <input class="form-control" type="number" name="biaya_tambahan" placeholder="Biaya Tambahan" value="<?php echo $t['biaya_tambahan'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Diskon</label> 
                    <input class="form-control" type="number" name="diskon" placeholder="Diskon" value="<?php echo $t['diskon'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Pajak</label> 
                    <input class="form-control" type="number" name="pajak" placeholder="Pajak" value="<?php echo $t['pajak'];?>" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Status</label> 
                    <select name="status" class="form-control">
                        <option>Baru</option>
                        <option>Proses</option>
                        <option>Selesai</option>
                        <option>Diambil</option>
                    </select>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Dibayar</label> 
                    <select name="dibayar" class="form-control">
                        <option>Dibayar</option>
                        <option>Belum dibayar</option>
                    </select>
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