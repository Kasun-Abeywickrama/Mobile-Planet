<?php
	if(!isset($_POST['submit'])){
        header("Location: index.php?error=error");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat</title>

    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/headerAndFooter.css" rel="stylesheet" type="text/css">
    <link href="../css/category.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include_once 'header.php'; ?>

    <div class="content-wrapper">
    <div class="container-fluid cat-wrapper">
      <div class="container title">
        <h3><?php echo $_POST['cat-name']; ?></h3>
      </div>
      <div class="container cat-card-wrapper">
        <div class="row">
            <?php
              include_once 'includes/dbconn.inc.php';
              $query = "select * from topsales";
              $result = mysqli_query($conn,$query);

              while($record = mysqli_fetch_assoc($result)){
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
    </div>
    <?php include_once 'footer.php'; ?>
</body>
</html>