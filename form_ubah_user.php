<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah User</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <?php

            require 'db.php';

            $id=$_GET['id'];

            $db = new Database();
            $user = $db->getById('user', ['id_user'=>$id]);

            foreach($user as $u):
                ?>

        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form ubah user</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_user.php" method="POST">
                <div class="form-group">
                    <label class="label-control">ID User</label> 
                    <input class="form-control" type="number" name="id_user" placeholder="id_user"  value="<?php echo $u['id_user'];?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label-control">ID outlet</label> 
                    <input class="form-control" type="number" name="id_outlet" placeholder="id_outlet"  value="<?php echo $u['id_outlet'];?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label-control">Nama </label> 
                    <input class="form-control" type="text" name="nama" placeholder="nama" required>
                </div>
                <div class="form-group">
                    <label class="label-control">Username</label> 
                    <input class="form-control" type="text" name="username" placeholder="username"  required>
                </div>
                <div class="form-group">
                    <label class="label-control">Password </label> 
                    <input class="form-control" type="text" name="password" placeholder="password"  required>
                </div>
                <div class="form-group">
                <label class="label-control">Role</label> 
                <br>
                    <select name="role" class="form-control"> 
                        <option value="1"> Admin </option>
                        <option value="2"> Kasir </option>
                        <option value="3"> Owner</option>

                    </select>   
                </div>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>
        </div>
        </div>
        </div>
        <?php endforeach; ?>
        </body>
</html>