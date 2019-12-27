<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

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
  </script>

  <title>Silahkan login</title>
</head>

<body style="background: #EFFBF7">
  <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light ">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item ">
            <a class="nav-link" href="#">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center">
            <h2>Silahkan login</h2>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="email" class="form-control form-control-user" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user" placeholder="Kata Sandi">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
        </div>
      </div>
    </div>
  </div>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" data-interval="10000" style="background-image: url('images/image1.png'); background-size: cover; background-attachment: fixed; ">
          <div class="carousel-caption d-block">
            <!-- 
            <h3 class="display-4">First Slide</h3>
            <p class="lead">This is a description for the first slide.</p>
            -->
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" data-interval="10000" style="background-image: url('images/image2.png'); background-size: cover; background-attachment: fixed;">
          <div class="carousel-caption d-block">
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" data-interval="10000" style="background-image: url('images/image3.png'); background-size: cover; background-attachment: fixed;">
          <div class="carousel-caption d-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <!--
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-sm-6 d-none d-lg-block bg-login-image">

              </div>
              <div class="col-sm-6 p-5">
                <div class="text-center">
                  <h2>Silahkan login</h2>
                </div>
                <form action="" method="post">
                  <div class="form-group">
                    <input type="text" name="email" class="form-control form-control-user" placeholder="Alamat Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Kata Sandi">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="">Lupa Kata Sandi?</a>
                </div>
                <div class="text-center">
                  <p class="small mt-3 font-weight-normal"> Belum Punya Akun?
                    <a href="registrasi.php">Buat Akun</a>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
  <div class="container ">

  </div>

  <div class="container p-5 mt-5 text-white" style="background: #2D851F">
    <div class="row p-5">
      <div class="col-lg-12">
        <h2>FEATURES</h2>
        <p>
          Matrash was designed based on input from personal development coaches and popular trainers so it offers all
        </p>
      </div>
    </div>
    <ul class="nav nav-tab " id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Angkut Cepat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Angkut Berlangganan</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <!-- Angkut Cepat-->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm p-3">
              <br />
              <h3>Angkut Cepat</h3>
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder=" Alamat Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control " name="address" placeholder="Deskripsikan kebutuhan anda"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" name="phone_number" class="form-control" placeholder="Nomor Handphone">
                </div>
                <div class="form-group">
                  <textarea class="form-control " name="description" placeholder="Deskripsikan kebutuhan anda"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-user ">Angkut Sekarang</button>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <!-- Angkut Berlangganan-->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm p-5">
              <br />
              <h3>Angkut Berlangganan</h3>
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder=" Alamat Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control " name="address" placeholder="Deskripsikan kebutuhan anda"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" name="phone_number" class="form-control" placeholder="Nomor Handphone">
                </div>
                <div class="form-group">
                  <textarea class="form-control " name="description" placeholder="Deskripsikan kebutuhan anda"></textarea>
                </div>
                <div class="form-group">
                  <select id="inputState" class="form-control">
                    <option selected>Pilih Paket Berlangganan...</option>
                    <option>1x / Minggu = Rp. 25.000</option>
                    <option>2x / Minggu = Rp. 35.000</option>
                    
                  </select>
                </div>
                <button type="submit" class="btn btn-success btn-user ">Angkut Sekarang</button>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm p-5">
        <br />
        <h2>Angkut Cepat</h2>
        <form action="" method="post">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder=" Alamat Email">
          </div>
          <div class="form-group">
            <textarea class="form-control " name="address" placeholder="Deskripsikan kebutuhan anda"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="phone_number" class="form-control" placeholder="Nomor Handphone">
          </div>
          <div class="form-group">
            <textarea class="form-control " name="description" placeholder="Deskripsikan kebutuhan anda"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block">Angkut Sekarang</button>
        </form>
        <hr>
      </div>
    </div>
  </div>
  -->

  <!-- maps -->
  <div class="container p-5">
    <div id="googleMap" style="width:100%;height:380px;"></div>
    <hr>
  </div>

  <!-- footer -->
  <div class="container p-5">
    <div class="row ">
      <div class="col-lg-12 ">
        <p class="p-small center"> Matrash | Copyright © 2019 All rights reserve</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>