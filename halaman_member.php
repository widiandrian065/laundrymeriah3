<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <title>Halaman Member</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>
    <body>
    
    <style type="text/css">
        body{
          background-image:url('67.jpg');
        }
        </style>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <a class="navbar-brand" href="index.php">Admin</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.php">Login</a>
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
                        <center><h1>Halaman Member</h1></center>
                    </div> 
                    
                    <?php
                        include "db.php";

                        $db = new Database();
                        $data = $db->getAll('member');

                    ?>
                      <div class="container mt-5">
                     <table class="table">
                        <thead class="thead-dark">
                                <tr>
                                   <th scope="col">ID member</th>
                                   <th scope="col">Nama</th>
                                   <th scope="col">Alamat</th>
                                   <th scope="col">jenis Kelamin</th>
                                   <th scope="col">Telephone </th>
                                   <th scope="col" style="min-width:175px;">Aksi </th>
                                </tr> 
                                
                        </thead>
                        <?php
                          foreach($data as $d):
                        ?>
                            <tr>
                               <th scope="row"><?php echo $d['id_member'];?></th>
                               <td><?php echo $d['nama'];?></td> 
                               <td><?php echo $d['Alamat'];?></td> 
                               <td><?php echo $d['Jenis_kelamin'];?></td> 
                               <td><?php echo $d['telephone'];?></td> 
                               <td>
                                 <a href="form_ubah_member.php?id=<?php echo $d['id_member'];?>" class="btn btn-primary">Edit</a>

                                 <a href="proses_hapus_member.php?id=<?php echo $d['id_member'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
                                </td>
                          </tr>
                          <?php endforeach; ?>
                     </table>
        </div>
        <center><a href="form_tambah_member.php" class="btn btn-info">Tambah!</a></center>        
      </body>
</html>
