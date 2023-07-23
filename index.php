<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home-MobilePlanet</title>

  <!-- Bootstrap and Header Footer CSS -->
  <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  <link href="css/headerAndFooter.css" rel="stylesheet" type="text/css">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- CSS for home site  -->
  <link href="css/index.css" rel="stylesheet" type="text/css">

</head>

<body>

 <?php include_once 'header.php';?>

  <div class="container-fluid content-wrapper">

    <div class="container-fluid banner-wrapper">
      <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active"> <img class="d-block mx-auto" src="assets/BannerImages/banner1.png"
              alt="First slide"> </div>
          <div class="carousel-item"> <img class="d-block mx-auto" src="assets/BannerImages/banner2.png"
              alt="Second slide"> </div>
          <div class="carousel-item"> <img class="d-block mx-auto" src="assets/BannerImages/banner3.png"
              alt="Third slide"> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span
            class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span
            class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      </div>
    </div>

    <div class="container-fluid cat-wrapper">
      <div class="container title">
        <h3>Top Sales&nbsp;</h3>
      </div>
      <div class="container cat-card-wrapper">
        <div class="row">
          <div class="col-md-3">
            <div class="card col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">I phone 14 pro&nbsp;</h5>
                <a href="#" class="btn btn-primary">More Info&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
          <div class="col-md-3">
            <div class="card col-lg-12 col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png"
                alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Galaxy S20 Ultra&nbsp;</h5>
                <a href="#" class="btn btn-primary">More info&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
          <div class="col-md-3">
            <div class="card col-lg-12 col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png"
                alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Redmi&nbsp;</h5>
                <a href="#" class="btn btn-primary">More info&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
          <div class="col-md-3">
            <div class="card col-lg-12 col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png"
                alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Poco&nbsp;</h5>
                <a href="#" class="btn btn-primary">More info&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid cat-wrapper">
      <div class="container title">
        <h3>Top Sales&nbsp;</h3>
      </div>
      <div class="container cat-card-wrapper">
        <div class="row">
          <div class="col-md-3">
            <div class="card col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Mobile Phones&nbsp;</h5>
                <a href="#" class="btn btn-primary">Add to cart&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
          <div class="col-md-3">
            <div class="card col-lg-12 col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png"
                alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Tablets&nbsp;</h5>
                <a href="#" class="btn btn-primary">Add to cart&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
          <div class="col-md-3">
            <div class="card col-lg-12 col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png"
                alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Smart watches&nbsp;</h5>
                <a href="#" class="btn btn-primary">Add to cart&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
          <div class="col-md-3">
            <div class="card col-lg-12 col-md-12"> <img class="card-img-top" src="assets/sampleImages/card-img.png"
                alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Accesories&nbsp;</h5>
                <a href="#" class="btn btn-primary">Add to cart&nbsp;</a>
              </div>
            </div>
            &nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once 'footer.php';?>

  <?php 
    if(isset($_GET['logout'])){
      echo '<script> alert("Successfully loged out ") </script>';
    }
  ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap-4.4.1.js"></script>
</body>

</html>