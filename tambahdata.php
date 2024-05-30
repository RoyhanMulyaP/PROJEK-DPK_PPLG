<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROYHAN MULYA PRATAMA</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="view/js/bootstrap.min.js"></script>
</head>
<body>


        <nav>
            <?php
            include ('konek.php');
            include ('view/navbar.php');
            ?>
        </nav>
    <div class="container pt-3">
        <form action="pdata.php" method="post">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder ="HURUF KAPITAL" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder= "@gmail.com" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Umur</label>
                            <input type="text" class="form-control"  name="umur" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" placeholder="Contoh: REKAYASA PERANGKAT LUNAK" name="jurusan" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sosial Media Instagram</label>
                            <input type="text" class="form-control" placeholder="@namainstagram" name="sosmed" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat Tinggal</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="HURUF KAPITAL" name="alamat" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value="input">Submit</button>
                    </form>
                </div>
            </div>
        </form>
    </div>  
</body>
</html>