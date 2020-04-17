<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Tambah User</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>
    <body>
    <style type="text/css">
                 body{
                    background-image:url('67.jpg') ;
                }
            </style>
    
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      
                    <li class="nav-item  active">
            <a class="nav-link " href="halaman_outlet.php"> Outlet </a><hr class="bg-secondary">
            </li>
            <li class="nav-item  active">
            <a class="nav-link" href="halaman_member.php"> Member </a><hr class="bg-secondary">
            </li>
        <li class="nav-item active">
            <a class="nav-link" href="halaman_paket.php"> Paket </a><hr class="bg-secondary">
            </li>
            <li class="nav-item  active">
            <a class="nav-link " href="halaman_user.php"> User </a><hr class="bg-secondary">
            </li>
            <li class="nav-item  active">
            <a class="nav-link" href="halaman_detail_transaksi.php"> detail Transaksi </a><hr class="bg-secondary">
            </li>
            <li class="nav-item  active">
            <a class="nav-link " href="halaman_transaksi.php"> Transaksi </a><hr class="bg-secondary">
            </li>
    
    
    
    
                    </ul>
                </nav>
            </div>
            
                    
                  <div class="wrap">
                        <div class="header">            
                        <center><h1> Tambah Outlet</h1></center>
                    </div> 
                    <?php
                        require "db.php";

                        $db = new Database();
                        $data = $db->getAll('outlet');

                    ?>
                      <div class="container mt-5">
                     <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                   <th scope="col">ID Outlet</th>
                                   <th scope="col">Nama</th>
                                   <th scope="col">Alamat</th>
                                   <th scope="col">HP </th>
                                   <th scope="col" style="min-width:175px;">Aksi </th>
                                </tr> 
                        </thead>
                        <tbody>
                        <?php
                          foreach($data as $d):
                        ?>
                            <tr>
                               <th scope="row"><?php echo $d['id_outlet'];?></th>
                               <td><?php echo $d['nama'];?></td> 
                               <td><?php echo $d['alamat'];?></td> 
                               <td><?php echo $d['hp'];?></td> 
                               <td>
                                 <a href="form_ubah_outlet.php?id=<?php echo $d['id_outlet'];?>" class="btn btn-primary">Edit</a>

                                 <a href="proses_hapus_outlet.php?id=<?php echo $d['id_outlet'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
                                </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                     </table>
        </div>
        <center><a href="form_tambah_outlet.php" class="btn btn-info">Tambah!</a></center>        
      </body>
</html>
