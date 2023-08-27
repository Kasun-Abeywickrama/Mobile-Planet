
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart-MobilePanet</title>
    <link rel="icon" href="assets/favicon-32x32.png" type="image/png">

    
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="css/headerAndFooter.css" rel="stylesheet" type="text/css">
    <link href="css/cart.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include_once 'header.php';?>
        <div class="content-wrapper">

                    <div class="container">
                <h1>Shopping Cart</h1>
                </div>

            <div class="container">
                <div class="cart">
                <!-- Cart items will be dynamically added here using JavaScript -->
                <form action="purchase.php" method="post">
                <div class="carttable">
                    
                    <table>
                        <thead>
                            <th>Item</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Edit</th>
                        </thead>
                        <tbody>
                        
                            <?php
                                include_once 'includes/dbConn.inc.php';
                                $cwIdSql = "select cwId from cartwishlist where userId =".$_SESSION['log_id'];
                                $cwIdSqlResult = mysqli_query($conn,$cwIdSql);
                                $cwId = mysqli_fetch_assoc($cwIdSqlResult);
                                $query = "select itemId,cartQuantity from itemcartwishlist where cwId = ".$cwId['cwId']." and cart = 1";
                                $queryResult =mysqli_query($conn,$query);
                                $totalAmount=0;
                                while($record = mysqli_fetch_assoc($queryResult)){
                                    $itemDetSql = "select itemName,sellingPrice from item where itemId =".$record['itemId'];
                                    $itemDetSqlResult = mysqli_query($conn,$itemDetSql);
                                    if($itemDet = mysqli_fetch_assoc($itemDetSqlResult)){
                                        echo '
                                        <input type="hidden" name="item-id" value="'.$record['itemId'].'">
                                        <input type="hidden" name="cw-id" value="'.$cwId['cwId'].'">
                                            <tr>
                                                <td>'.$itemDet["itemName"].'</td>
                                                <td>'.$itemDet["sellingPrice"].'</td>
                                                <td><input type="text" name="qty" value="'.$record["cartQuantity"].'"></td>
                                                <td>'.$itemDet["sellingPrice"]*$record["cartQuantity"].'</td>
                                                <td><input  type="submit" value="Update" formaction="cart-update.php"></td>
                                            </tr>
                                        
                                        ';
                                       $totalAmount += $itemDet["sellingPrice"]*$record["cartQuantity"];
                                    }
                                }
                                echo '
                                    <input type="hidden" name="total-amount" value="'.$totalAmount.'">
                                    <input type="hidden" name="discount" value="0">
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>'.$totalAmount.'</td>
                                        </tr>
                                    </tfoot>
                                ';
                            ?>
                        </tbody>
                        
                    </table>


                </div>
                <button type="submit" name="cont-Shopping" class="buttons">Check Out</button>
                <button type="submit" name="update" formaction="index.php" class="buttons">Continue Shopping</button>
                            </form>
                </div>


             
            </div>
        </div>
    <?php include_once 'footer.php';?>
        <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>