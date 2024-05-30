<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROYHAN MULYA PRATAMA</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="view/js/bootstrap.min.js"></script>
    <style>
      .carousel-caption {
    color: purple;
    }

    </style>
</head>
<body>
    
    
        <nav>
            <?php
            include ('view/navbar.php')
            ?>
        </nav>

      <div class="container pt-3">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/C3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>AXIOO</h5>
                  <p>Produk digital dari Indonesia kami telah mengeluarkan produk Handphone, Laptop, Phablet, Tablet, Windroid, dan All-in-one</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/C2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Axioo Class Program</h5>
                  <p>Program sosial atau Corporate Social Impact (CSI) dari PT Tera Data Indonusa Tbk atau Axioo Indonesia</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/C1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Axioo Smart Classroom</h5>
                  <p>Lewat pembentukan kelas industri, sinkronisasi kurikulum, workshop berkelanjutan untuk guru, pembelajaran berbasis IT, sertifikasi atau pemagangan dan rekrutmen tenaga kerja</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionsAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
</body>
</html>