<?php 
  session_start();
?>

<html>
    <body>
        <?php
            include 'includes/dbConn.inc.php';

            //Check if the user has been logged in
                if(!isset($_SESSION['log_id'])){
                    header('Location: index.php?error=error');
                }
                //


            //get the cart id
                include_once 'includes/dbConn.inc.php';
                $sql = "select cwId from cartwishlist where userId = ".$_SESSION['log_id'];
                $result = mysqli_query($conn,$sql);
                $record = mysqli_fetch_assoc($result);

                $query = "select cartQuantity from itemcartwishlist where cwId = ".$record['cwId']." and itemId = ".$_POST['item-id']."";
                $queryResult = mysqli_query($conn,$query);
                if($queryResultRecord = mysqli_fetch_assoc($queryResult)){
                        $updateQtySql = "update itemcartwishlist set cartQuantity = ".$_POST['qty']+$queryResultRecord['cartQuantity']." where cwId = ".$record['cwId']." and itemId = ".$_POST['item-id']."";
                        mysqli_query($conn,$updateQtySql);
                        echo '<script>alert("Item Quantity Updated");</script>';
                        echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com')</script>";
                }else{
                    $addToCart = "INSERT INTO itemcartwishlist(itemId,cwId,cart,cartQuantity) VALUES(".$_POST['item-id'].",".$record['cwId'].",1,".$_POST['qty'].")";
                    if($conn->query($addToCart) == TRUE)
                    {
                        echo '<script>alert("Item has been added to the cart");</script>';
                        echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com')</script>";
                    }

                }
               
        ?>
    </body>
</html>

