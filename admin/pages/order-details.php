<?php
    include_once '../../includes/dbConn.inc.php';
    if($_REQUEST['st']==1){
        $sqlUS = "update transaction set status = 1 where tranId = ".$_REQUEST["tran-id"];
        if($conn->query($sqlUS) == false){
            echo 'Error updating status '.$conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/order-details.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php include_once 'header.php'; ?>
    <div class="page-content">
        <br>
        <h5>TRANSACTION ID</h5>
        <p><?php echo $_REQUEST["tran-id"]; ?></p>
        <?php
            include_once '../../includes/dbConn.inc.php';
            $sqlSt = "select status from transaction where tranId = ".$_REQUEST["tran-id"];
            $resultSt = $conn->query($sqlSt);
            $rowst=$resultSt->fetch_assoc();
            if($rowst['status']==0){
                echo '
                        <center><a href="order-details.php?st=1&tran-id='.$_REQUEST["tran-id"].'" class="btn btn-danger">Dispatch</a></center><br>
                    ';
            }else{
                echo '
                        <center><button type="button" class="btn btn-success">Dispached</button></center><br>
                ';
            }
        ?>
        <center>
        <table>
            <tr>
                <th>Product</th>
                <th>Qty</th>
                <th>Unit price</th>
                <th>Total</th>
            </tr>
            <?php
                $sql = "select * from transactionitem where tranId = ".$_GET["tran-id"];
                $result = $conn->query($sql);
                $totalPrice=0;
                while($row = $result->fetch_assoc()){
                    $sql1 = "select itemName from item where itemId = ".$row['itemId'];
                    $result1 = $conn->query($sql1);
                    $row1 = $result1->fetch_assoc();
                    echo '
                            <tr>
                                <td>'.$row1['itemName'].'</td>
                                <td>'.$row['quantity'].'</td>
                                <td class="alignPrices">'.$row['sellingPrice'].'</td>
                                <td class="alignPrices">'.$row['quantity']*$row['sellingPrice'].'</td>
                            </tr>
                        ';
                    $totalPrice += $row['quantity']*$row['sellingPrice'];
                } 

                echo '
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="alignPrices">'.$totalPrice.'</td>
                    </tr>
                ';

            ?>
        </table></center>
    </div>
</body>
</html>