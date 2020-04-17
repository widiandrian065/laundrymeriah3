<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Halaman Transaksi</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
            <style type="text/css">
                 body{
                    background-image:url('67.jpg') ;
                }
            </style>
    </head>
    <body>
   
    <style type="text/css">
        body{
          background-image:url('67.jpg');
        }
        </style>

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="halaman_admin.php">Admin<span class="sr-only">(current)</span></a>
                        </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="halaman_member.php">Member</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="halaman_paket.php">Paket</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="halaman_user.php">User</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="halaman_detail_transaksi.php">Detail transaksi</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="halaman_outlet.php">Outlet</a>
                        </li>
                          </a>
                          </ul>

                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                     
                      </form>
                    </div>
                  </nav>
                  <div class="wrap">
                        <div class="header">            
                        <center><h1>Halaman Transaksi</h1></center>
                    </div>                     
                    <?php
                        require "db.php";

                        $db = new Database();
                        $data = $db->getAll('transaksi');

                    ?>
                      <div class="container mt-5">
                     <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                   <th scope="col">id transaksi</th>
                                   <th scope="col">id outlet</th>
                                   <th scope="col">id member</th>
                                   <th scope="col">id user</th>
                                   <th scope="col">kode invoice</th>
                                   <th scope="col">tgl</th>
                                   <th scope="col">batas waktu</th>
                                   <th scope="col">tgl bayar</th>
                                   <th scope="col">biaya tambahan</th>
                                   <th scope="col">diskon</th>
                                   <th scope="col">pajak</th>
                                   <th scope="col">status</th>
                                   <th scope="col">dibayar</th>

                                   <th scope="col" style="min-width:175px;">Aksi </th>
                                </tr> 
                                
                        </thead>
                        <?php
                          foreach($data as $d):
                        ?>
                            <tr>
                               <th scope="row"><?php echo $d['id_transaksi'];?></th>
                               <td><?php echo $d['id_outlet'];?></td> 
                               <td><?php echo $d['id_member'];?></td> 
                               <td><?php echo $d['id_user'];?></td> 
                               <td><?php echo $d['kode_invoice'];?></td> 
                               <th><?php echo $d['tgl'];?></th>
                               <td><?php echo $d['batas_waktu'];?></td> 
                               <td><?php echo $d['tgl_bayar'];?></td> 
                               <td><?php echo $d['biaya_tambahan'];?></td> 
                               <td><?php echo $d['diskon'];?></td> 
                               <td><?php echo $d['pajak'];?></td> 
                               <td><?php echo $d['status'];?></td> 
                               <td><?php echo $d['dibayar'];?></td> 
                               <td>
                                 <a href="form_ubah_transaksi.php?id=<?php echo $d['id_transaksi'];?>" class="btn btn-primary">Edit</a>

                                 <a href="proses_hapus_transaksi.php?id=<?php echo $d['id_transaksi'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
                                </td>
                          </tr>
                          <?php endforeach; ?>
                     </table>
        </div>
        <center><a href="form_tambah_transaksi.php" class="btn btn-info">Tambah!</a></center>        
      </body>
</html>
