
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Form Tambah User</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"> Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Halaman User<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Halaman Paket</a>
                    </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Outlet</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_outlet.php" method="POST">
                        <div class="form-group">
                            <label class="label-control">Nama</label>
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Alamat</label>
                            <input class="form-control" type="text" name="alamat" placeholder="Masukkan alamat">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Hp</label>
                            <input class="form-control" type="text" name="hp" placeholder="Masukkan hp">
                        </div>

                        <button type="submit" class="btn btn-warning mb-2">Tambah!</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>