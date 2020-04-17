<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah Transaksi</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Transaksi</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_transaksi.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Id Outlet </label> 
                    <select name="id_outlet" class ="form-control">
                    <?php
                        include 'db.php';
                        $db = new Database();
                        $outlet = $db->getAll('outlet');

                        foreach($outlet as $o):

                    ?>
                        <option value="<?php echo $o['id_outlet']; ?>" class="form-control"><?php echo $o['id_outlet'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">Id Member</label> 
                    <select name="id_member" class ="form-control">
                    <?php
                    $db = new Database();
                    $member = $db->getAll('member');

                        foreach($member as $m):

                    ?>
                    <option value="<?php echo $m['id_member']; ?>" class="form-control"><?php echo $m['id_member'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">Id User</label> 
                    <select name="id_user" class ="form-control">
                    <?php
                    $db = new Database();
                    $user = $db->getAll('user');

                        foreach($user as $u):

                    ?>
                    <option value="<?php echo $u['id_user']; ?>" class="form-control"><?php echo $u['id_user'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label-control">Kode Invoice</label> 
                    <input class="form-control" type="number" name="kode_invoice" placeholder="kode_invoice" required>
                </div>
                <div class="form-group">
                    <label class="label-control">Tgl</label> 
                    <input class="form-control" type="date" name="tgl" placeholder="tgl" required>
                </div>
                <div class="form-group">
                    <label class="label-control">Batas Waktu</label> 
                    <input class="form-control" type="date" name="batas_waktu" placeholder="batas waktu" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Tgl Bayar</label> 
                    <input class="form-control" type="date" name="tgl_bayar" placeholder="Tgl" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Biaya Tambahan</label> 
                    <input class="form-control" type="number" name="biaya_tambahan" placeholder="biaya tambahan" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Diskon</label> 
                    <input class="form-control" type="number" name="diskon" placeholder="diskon" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Pajak</label> 
                    <input class="form-control" type="number" name="pajak" placeholder="pajak" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Status</label> 
                    <select name="status" class="form-control">
                        <option class="form-control" value="2">Proses</option>
                        <option class="form-control" value="1">Selesai</option>
                        <option class="form-control" value="2">Diambil</option>
                    </select>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Dibayar</label> 
                    <select name="dibayar" class="form-control">
                        <option class="form-control" value="1">Dibayar</option>
                        <option class="form-control" value="2">Belum Dibayar </option>
                    </select>
                </div>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>
        </div>
        </div>
        </div>
        </body>
</html>