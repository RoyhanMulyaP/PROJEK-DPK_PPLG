<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="view/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include("konek.php");


    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];
    $jurusan = $_POST['jurusan'];
    $sosmed = $_POST['sosmed'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tbsiswa(nama,email,umur,jurusan,sosmed,alamat) VALUES('$nama','$email','$umur','$jurusan','$sosmed','$alamat')";

    if($conn->query($sql) === TRUE){
        echo "<form action='tabel.php' method='post'>
                <div class='container pt-5'>
                  <div class='modal modal-sheet position-static d-block p-5 py-md-6' tabindex='-1' role='dialog' id='modalSheet'>
                    <div class='modal-dialog' role='document'>
                      <div class='modal-content rounded-4 shadow-sm'>
                        <div class='modal-body py-5 mx-4'>
                          <h1>DATA TERVERIFIKASI</h1>
                        </div>
                        <div class='modal-footer flex-column align-items-stretch gap-1 pt-0 border-top-0'>
                          <input type='submit' class='btn btn-primary mb-3' value='Close'>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
  ?>
  
</body>
</html>