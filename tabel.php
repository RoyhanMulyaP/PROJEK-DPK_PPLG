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
        <div class="card">
            <div class="d-grid gap-2 d-md-block pt-1 p-1 mx-2">
                Tambah Data
                <a href="tambahdata.php" class="btn btn-primary mx-2">Tambah</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Sosmed IG</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php
                    // query untuk mengambil data dari database
                        $query = "SELECT * FROM tbsiswa";
                        $result = mysqli_query($conn, $query);
            
                        // periksa apakah ada data yang ditemukan
                        if(mysqli_num_rows($result) > 0){
                        // mengambil setiap baris data dan menampilkannya dalam tabel
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['nama']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['umur']."</td>";
                                echo "<td>".$row['jurusan']."</td>";
                                echo "<td>".$row['sosmed']."</td>";
                                echo "<td>".$row['alamat']."</td>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='align-content-lg-center'>Data Tidak Ditemukan</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>