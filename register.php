<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman Register</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    
    </head>
    <body class="container mt-5 bg-success">
        <div class="card text-dark">
            <div class="card-header bg-info">
                <h3>Form Register</h3>
            </div>
            <div class="card-body " >
                <form action="proses_register.php" method="POST">
                    <div class="form-group">
                        <label class="label-control">Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label class="label-control">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label class="label-control">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="label-control">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>

                    <button class="btn btn-info" type="submit">Daftar!</button>
                    <br>
                    <br>
                    <p>Sudah mempunyai Akun?Silahkan <a href="login.php">Login Disini!</a></p>
                </form>
            </div>
        </div>
        
    </body>
</html>