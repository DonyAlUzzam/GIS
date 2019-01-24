<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery Web</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">

    <script src='js/snowstorm.js' type='text/javascript'></script>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <link rel="stylesheet" href="css/ekko-lightbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>
 <body>
 <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-responsive margin-b10" src="img/logo-logo.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-11">
                <h1 class="judul-head">Sistem Informasi Geografis Pemetaan Sekolah</h1>
                <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi yang memuat data Sekolah di Batam</p>
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
      </div>
    </div>
    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
            <li><a href="data.php"><i class="fa fa-list-ul"></i> DATA SEKOLAH</a></li>
            <li><a href="peta.php"><i class="fa fa-map-marker"></i> PETA PERSEBARAN SEKOLAH</a></li>
            <li><a href="gallery.php"><i class="fa fa-map-marker"></i> Gallery</a></li>
            <li><a href="about.php" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    <!-- GALLERY CONTAINER -->
    <section id="gallery" class="py-5">
      
        <h1 class="text-center">Photo Gallery</h1>
        <p class="text-center">Check out our photos</p>
        <div class="row mb-4">

          <div class="col-6 col-md-4 mt-4">
            <a href="img/f2-full.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/f2a.jpg" class="img-fluid img-thumbnail" >
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image2.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail2.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image3.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail3.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image4.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail4.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image5.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail5.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image6.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail6.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image7.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail7.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image8.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail8.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>

          <div class="col-6 col-md-4 mt-4">
            <a href="img/full-image9.jpg" data-toggle="lightbox"
            data-gallery="img-gallery">
              <img src="img/thumbnail9.jpg" class="img-fluid img-thumbnail">
            </a>
          </div>
        </div><br><br><br>
        <div class="col text-center">
          <button class="btn btn-large btn-info">Load More</button>
        </div>

      </div>
    </section>

      <script src="js2/js/jquery-3.3.1.js"></script>
    <script src="js2/js/popper.js"></script>
    <script src="js2/js/bootstrap.js"></script>
    <script src="js2/js/ekko-lightbox.js"></script>
    <script>
      $(document).on('click','[data-toggle="lightbox"]',function(event){
        event.preventDefault();
        $(this).ekkoLightbox();
      })
    </script>


          </div>
        </div>
        </div>
      </div>
    </div>
    </body>
  <div class="footer footer1">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <img src="img/logo-logo.png" width="72" height="72" />
            <h4 class="white">Data Pemetaan Sekolah di Batam</h4>
          <h3 class="white">Indonesia</h3>
          <ul class="list-inline">
            <li><a href="" class="link-footer">Beranda</a></li>
            <li><a href="" class="link-footer">Petunjuk Penggunaan</a></li>
            <li><a href="" class="link-footer">Tentang</a></li>
          </ul>
          <h5 class="white">Copyright &copy; Dony Al-Uzzam 2018</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">About</h4>
      </div>
      <div class="modal-body">
        <h4>SISTEM INFORMASI GEOGRAFIS PEMETAAN SEKOLAH DI BATAM BERBASIS WEBGIS</h4>
        <p>Program ini dibuat oleh M.Khairi Usman (Cyberchrome) untuk Tugas GIS 2018.</p>
        <p>Diharapkan program ini memberikan manfaat</p>
      </div>
    </div>
  </div>
</div>

  
    
  </body>
</html>