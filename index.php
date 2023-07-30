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
            <?php
              include_once 'includes/dbconn.inc.php';
              $query = "select * from topsales";
              $result = mysqli_query($conn,$query);
              // $itemName = "i Phone x";
              // $price = 25000.00;
              while($record = mysqli_fetch_assoc($result)){
                // echo '<h1>'.$record['name'].'</h1>';
                echo '
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card">
                    <img src="assets\mobile-phones\\'.$record['name'].'.png" alt="asc">
                    <div class="card-body">
                      <form action="Item-Page.php" name="card-form" method="post">
                      <h5 class="card-title" >'.$record['name'].'</h5><input type="hidden" name="item-name" value="'.$record['name'].'"><input type="hidden" name="item-price" value="'.$record['price'].'">
                      <div class="card-bottom"><strong>'.$record['price'].'</strong><button type="submit" class="btn btn-primary" name="submit">Buy Now</button></div>
                    </div>
                    </form>
                  </div>
                </div>
                ';
              }
            ?>
        </div>
      </div>
    </div>
    <div class="container-fluid cat-wrapper">
      <div class="container title">
        <h3>Categories</h3>
      </div>

      <div class="container cat-card-wrapper">
        <div class="row">
            <?php
              include_once 'includes/dbconn.inc.php';
              $query = "select * from categories";
              $result = mysqli_query($conn,$query);
              while($record = mysqli_fetch_assoc($result)){
                echo '
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card">
                    <img src="assets\mobile-phones\\'.$record['name'].'.png" alt="asc">
                    <div class="card-body">
                      <form action="category.php" name="card-form" method="post">
                      <h5 class="card-title" >'.$record['name'].'</h5><input type="hidden" name="cat-name" value="'.$record['name'].'">
                      <div class="card-bottom"><button type="submit" class="btn btn-primary" name="submit">See more</button></div>
                    </div>
                    </form>
                  </div>
                </div>
                ';
              }
              $conn->close();
            ?>
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