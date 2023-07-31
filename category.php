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
            <?php
        include_once 'includes/dbConn.inc.php';
        $query = "SELECT * FROM brand WHERE brandId IN (SELECT DISTINCT brandId FROM item WHERE categoryId=".$_POST['cat-id'].")";
              $result = mysqli_query($conn,$query);
        if($result){
              while($record = mysqli_fetch_assoc($result)){
            echo '
            <div class="container title">
               <h3>'.$record["brandName"].'</h3>
            </div>
            ';
            echo '
              <div class="container cat-card-wrapper">
              <div class="row">
            ';
            $query = "select * from item where categoryId = ".$_POST['cat-id']." and brandId = ".$record['brandId']."";
            $result1 = mysqli_query($conn,$query);
            // while($record1 = mysqli_fetch_assoc($result)){
            //   echo $record1['sellingPrice'];
            // }
            while($record1 = mysqli_fetch_assoc($result1)){
              $itemName = $record1["itemName"];
              $itemPrice = $record1["sellingPrice"];
                echo '
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card">
                    <img src="assets\mobile-phones\\'.$itemName.'.png" alt="asc">
                    <div class="card-body">
                      <form action="Item-Page.php" name="card-form" method="post">
                      <h5 class="card-title" >'.$itemName.'</h5><input type="hidden" name="item-name" value="'.$itemName.'"><input type="hidden" name="item-price" value="'.$itemPrice.'">
                      <div class="card-bottom"><strong>'.$itemPrice.'</strong><button type="submit" class="btn btn-primary" name="submit">Buy Now</button></div>
                    </div>
                    </form>
                  </div>
                </div>
                ';
              }
              echo '
        </div>
      </div>
            ';
            }
          }else{
          echo 'Does not exist any brand';
        }
        
      ?>
    </div>
    </div>
    <?php include_once 'footer.php'; ?>
</body>
</html>