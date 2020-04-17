<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah Member</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body class="container mt-5">
        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Member</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_member.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Nama </label> 
                    <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label class="label-control">Alamat</label> 
                    <input class="form-control" type="text" name="Alamat" placeholder="alamat" required>
                </div>
                <div class="form-group">
                    <label class="label-control">Jenis Kelamin</label> 
                    <select name="Jenis_kelamin" class="form-control"> 
                        <option > L </option>
                        <option > P </option>
                    </select>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Telephone</label> 
                    <input class="form-control" type="number" name="Telephone" placeholder="masukan no" required>
                </div>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>
        </div>
        </div>
        </div>
        </body>
</html>