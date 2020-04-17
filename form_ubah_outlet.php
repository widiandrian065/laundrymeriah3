<?php
require 'db.php';
$id = $_GET['id'];
$db = new Database();
$outlet = $db->getById('outlet', ['id_outlet' => $id]);
foreach($outlet as $o):
?>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Form Ubah Outlet</h4>
            <p class="card-category">Ubah data sesuai dengan kolom yang tersedia</p>
          </div>
          <div class="card-body">
          <form action="proses_ubah_outlet.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">ID Outlet</label>
                        <input name="id_outlet" type="number" class="form-control" value="<?= $o['id_outlet']; ?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Nama</label>
                        <input name="nama" type="text" class="form-control" value="<?= $o['nama']; ?>">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Alamat</label>
                        <input name="alamat" type="text" class="form-control" value="<?= $o['alamat']; ?>">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Hp</label>
                        <input name="hp" type="text" class="form-control" value="<?= $o['hp']; ?>">
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Ubah!</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>