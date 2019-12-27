<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Manage your trash now using the application">
  <meta name="author" content="Matrash">


  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
    // fungsi initialize untuk mempersiapkan peta
    function initialize() {
      var propertiPeta = {
        center: new google.maps.LatLng(-7.747461, 110.4188926),
        zoom: 9,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);

    $(function() {
      $('[data-toggle="popover"]').popover()
    })
  </script>


  <!-- Website Title -->
  <title>Matrash</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <!--  <link href="css/swiper.css" rel="stylesheet"> -->
  <!-- <link href="css/magnific-popup.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="images/favicon-16x16.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

  <!-- Preloader -->
  <!--<div class="spinner-wrapper">-->
  <!--       <div class="spinner">-->
  <!--           <div class="bounce1"></div>-->
  <!--           <div class="bounce2"></div>-->
  <!--           <div class="bounce3"></div>-->
  <!--       </div>-->
  <!--   </div>-->
  <!-- end of preloader -->


  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Leno</a> -->

    <!-- Image Logo -->
    <!--<a class="navbar-brand logo-image" href="#">Matrash</a>-->

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#features">FEATURES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#contact">CONTACT</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-solid-reg page-scroll" data-container="body" data-toggle="popover" data-placement="bottom" title="popover on bottom" data-content="Sed posuere">LOGIN</button>
        </li>
      </ul>
    </div>
  </nav> <!-- end of navbar -->
  <!-- end of navigation -->


  <!-- Header -->
  <header id="header" class="header">
    <div class="header-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <!--<h1 style="font-color: black;">MATRASH</h1>-->
              <img class="img-fluid" src="images/logo.png" width="200px" style="padding-bottom: 8px;" alt="alternative">
              <h2><span id="js-rotating">YOUR HOME TRASH SOLUTION, YOUR HOME TRASH SOLUTION</span></h2>
              <!--<span id="js-rotating">DESIGNERS, MARKETERS, DEVELOPERS</span>-->
              <p class="p-large">Manage your trash now using the application</p>
              <!--<a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-apple"></i>APP STORE</a>-->
              <a class="btn-solid-lg page-scroll" href="https://matrash.id/matrash.apk"><i class="fab fa-google-play"></i>Download Now</a>
            </div>
          </div> <!-- end of col -->
          <div class="col-lg-6">
            <div class="image-container">
              <img class="img-fluid" src="https://matrash.id/landingpage1/img/banner-img.png" alt="alternative">
            </div> <!-- end of image-container -->
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of header-content -->
  </header> <!-- end of header -->
  <!-- end of header -->


  <!-- Features -->
  <div id="features" class="tabs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>FEATURES</h2>
          <div class="p-heading p-large">Matrash was designed based on input from personal development coaches and popular trainers so it offers all</div>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
      <div class="row">

        <!-- Tabs Links -->
        <ul class="nav nav-tabs" id="lenoTabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-rocket"></i>ANGKUT CEPAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-book"></i>ANGKUT BERLANGGANAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-map-marker"></i>PETA TEMPAT SAMPAH</a>
          </li>

        </ul>
        <!-- end of tabs links -->


        <!-- Tabs Content-->
        <div class="tab-content" id="lenoTabsContent">

          <!-- Tab -->
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
            <div class="container">
              <div class="row">

                <!-- Image Pane -->
                <div class="col-md-4">
                  <img class="img-fluid" src="images/angkutcepat.png" alt="alternative">
                </div>
                <!-- end of image pane -->

                <!-- Text And Icon Cards Area -->
                <div class="col-md-8">
                  <div class="text-area">
                    <h3>Angkut Cepat</h3>
                    <p>Sit down, and we will pick up your trash directly at your home immediately.</p>
                  </div> <!-- end of text-area -->
                  <form action="">
                    <div class="form-group ">
                      <input type="text" class="form-control-input" id="cname" name="name" required>
                      <label class="label-control" for="cname">Nama</label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control-textarea" id="caddress" name="address" required></textarea>
                      <label class="label-control" for="caddress">Alamat </label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group ">
                      <input type="text" class="form-control-input" id="cnotelp" name="notelp" required>
                      <label class="label-control" for="cnotelp">No. Telepon</label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control-textarea" id="cdescription" name="description" required></textarea>
                      <label class="label-control" for="cdescription">Deskripsikan kebutuhan anda</label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="help-block with-errors"></div>
                    <div class="form-group">
                      <button type="submit" class="form-control-submit-button" name="submit">ANGKUT SEKARANG</button>
                    </div>
                    <div class="form-message">
                      <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                  </form><!-- end of form -->
                </div> <!-- end of col-md-8 -->
                <!-- end of text and icon cards area -->

              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div> <!-- end of tab-pane -->
          <!-- end of tab -->

          <!-- Tab -->
          <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
            <div class="container">
              <div class="row">

                <!-- Image Pane -->
                <div class="col-md-4">
                  <img class="img-fluid" src="images/angkutberlangganan.png" alt="alternative">
                </div>
                <!-- end of image pane -->

                <!-- Text And Icon Cards Area -->
                <div class="col-md-8">
                  <div class="text-area">
                    <h3>Angkut Berlangganan</h3>
                    <p>House will always clean, using Angkut Berlangganan (pick up subscription) your trash will be picked up routine every once or twice a week.</p>
                  </div> <!-- end of text-area -->
                  <form action="">
                    <div class="form-group ">
                      <input type="text" class="form-control-input" id="cname" name="name" required>
                      <label class="label-control" for="cname">Nama</label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control-textarea" id="caddress" name="address" required></textarea>
                      <label class="label-control" for="caddress">Alamat </label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group ">
                      <input type="text" class="form-control-input" id="cnotelp" name="notelp" required>
                      <label class="label-control" for="cnotelp">No. Telepon</label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control-textarea" id="cdescription" name="description" required></textarea>
                      <label class="label-control" for="cdescription">Deskripsikan kebutuhan anda</label>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <select id="cpackage" class="form-control-select">
                        <option selected>Pilih Paket Berlangganan...</option>
                        <option>1x / Minggu = Rp. 25.000</option>
                        <option>2x / Minggu = Rp. 35.000</option>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="help-block with-errors"></div>
                    <div class="form-group">
                      <button type="submit" class="form-control-submit-button" name="submit">ANGKUT SEKARANG</button>
                    </div>
                    <div class="form-message">
                      <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                  </form>

                </div> <!-- end of col-md-8 -->
                <!-- end of text and icon cards area -->

              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div><!-- end of tab-pane -->
          <!-- end of tab -->

          <!-- Tab -->
          <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
            <div class="container">
              <div class="row">

                <!-- Image Pane -->
                <div class="col-md-4">
                  <img class="img-fluid" src="images/peta.png" alt="alternative">
                </div>
                <!-- end of image pane -->

                <!-- Text And Icon Cards Area -->
                <div class="col-md-8">
                  <div class="text-area">
                    <h3>Peta Tempat Sampah</h3>
                    <p>Matrash can give you information about the closest trash bin near your location.
                    </p>
                  </div> <!-- end of text-area -->
                  <div id="googleMap" style="width:100%;height:380px;"></div>

                </div> <!-- end of col-md-8 -->
                <!-- end of text and icon cards area -->

              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div><!-- end of tab-pane -->
          <!-- end of tab -->

          <!-- Tab -->
          <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
            <div class="container">
              <div class="row">

                <!-- Image Pane -->
                <div class="col-md-4">
                  <img class="img-fluid" src="images/daurulang.png" alt="alternative">
                </div>
                <!-- end of image pane -->

                <!-- Text And Icon Cards Area -->
                <div class="col-md-8">
                  <div class="text-area">
                    <h3>Barang Daur Ulang</h3>
                    <p>Learn how to manage waste easily in your hand, with the Tips and Tricks feature in the Matrash application.
                    </p>
                  </div> <!-- end of text-area -->
                </div> <!-- end of col-md-8 -->
                <!-- end of text and icon cards area -->

              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div><!-- end of tab-pane -->
          <!-- end of tab -->

          <!-- Tab -->
          <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5">
            <div class="container">
              <div class="row">

                <!-- Image Pane -->
                <div class="col-md-4">
                  <img class="img-fluid" src="images/tukar.png" alt="alternative">
                </div>
                <!-- end of image pane -->

                <!-- Text And Icon Cards Area -->
                <div class="col-md-8">
                  <div class="text-area">
                    <h3>JUAL/TUKAR BARANG BEKAS </h3>
                    <p>Turn your trash in to cash or exchange it for interesting recycled goods.
                    </p>

                  </div> <!-- end of text-area -->
                </div> <!-- end of col-md-8 -->
                <!-- end of text and icon cards area -->

              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div><!-- end of tab-pane -->
          <!-- end of tab -->

        </div> <!-- end of tab-content -->
        <!-- end of tabs content -->

      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of tabs -->
  <!-- end of features -->



  <!-- Statistics -->
  <div class="counter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <!-- Counter -->
          <div id="counter">
            <div class="cell">
              <div class="counter-value number-count" data-count="231">1</div>
              <p class="counter-info">Downloads</p>
            </div>
            <div class="cell">
              <div class="counter-value number-count" data-count="38">1</div>
              <p class="counter-info">Paid Users</p>
            </div>
            <div class="cell">
              <div class="counter-value number-count" data-count="18">1</div>
              <p class="counter-info">Good Reviews</p>
            </div>
            <div class="cell">
              <div class="counter-value number-count" data-count="5">1</div>
              <p class="counter-info">Pickers</p>
            </div>
          </div>
          <!-- end of counter -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of counter -->
  <!-- end of statistics -->


  <!-- Contact -->
  <div id="contact" class="form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>CONTACT</h2>
          <ul class="list-unstyled li-space-lg">
            <li class="address">Don't hesitate to give us a call or just use the contact form below</li>
          </ul>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-lg-6 offset-lg-3">

          <!-- Contact Form -->
          <form action="" method="POST">
            <div class="form-group">
              <input type="text" class="form-control-input" id="cname" name="name" required>
              <label class="label-control" for="cname">Name</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control-input" id="cemail" name="email" required>
              <label class="label-control" for="cemail">Email</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control-textarea" id="cmessage" name="message" required></textarea>
              <label class="label-control" for="cmessage">Your message</label>
              <div class="help-block with-errors"></div>
            </div>
            <div class="help-block with-errors"></div>
            <div class="form-group">
              <button type="submit" class="form-control-submit-button" name="submit">SUBMIT MESSAGE</button>
            </div>
            <div class="form-message">
              <div id="cmsgSubmit" class="h3 text-center hidden"></div>
            </div>
          </form>
          <!-- end of contact form -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of form -->
  <!-- end of contact -->

  <?php
  if (isset($_POST['submit'])) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $from = $_POST['email'];
    $to =   'matrash.official@gmail.com';
    $subject = "New Email to Matrash";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    echo "<script>alert('Message Send Success')</script>";
  }
  ?>



  <!-- Copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="p-small">Copyright &copy; 2019 All rights reserve </p>
        </div> <!-- end of col -->
      </div> <!-- enf of row -->
    </div> <!-- end of container -->
  </div> <!-- end of copyright -->
  <!-- end of copyright -->


  <!-- Scripts -->
  <script>
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
    });
  </script>
  <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
  <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
  <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
  <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
  <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
  <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>