
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/headerAndFooter.css" rel="stylesheet" type="text/css">
    <link href="../css/cart.css" rel="stylesheet" type="text/css">
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
                <div class="empty-cart">
                    
                    <table>
                        <thead>
                            <th>Item</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th>Total</th>
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
                                            <tr>
                                                <td>'.$itemDet["itemName"].'</td>
                                                <td>'.$itemDet["sellingPrice"].'</td>
                                                <td>'.$record["cartQuantity"].'</td>
                                                <td>'.$itemDet["sellingPrice"]*$record["cartQuantity"].'</td>
                                            </tr>
                                        ';
                                       $totalAmount += $itemDet["sellingPrice"]*$record["cartQuantity"];
                                    }
                                }
                                echo '
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
                </div>

                <div class="cart-total">Total: Rs.0.00</div>

                <div class="cart-buttons">
                <button>Continue Shopping</button>
                <button>Checkout</button>
                </div>
            </div>
        </div>
    <?php include_once 'footer.php';?>
</body>
</html>