<?php

    session_start();

    $cardNumber = $_POST['c-number'];
    $cvv = $_POST['cvv'];

    if(!isset($_POST['payBtn']) || !isset($_POST['payBtn'])){
        header("Location : ../purchase.php");
    }

    function paymentSuccessful($cn, $cv){
        return true;
    }

    if(isset($_POST['payBtn']) && paymentSuccessful($cardNumber,$cvv)){
        include_once 'dbConn.inc.php';
        $sql = "insert into transaction(userId) values(".$_SESSION['log_id'].")";

        if($conn->query($sql) == true){

            $sql = "SELECT tranId FROM transaction WHERE userId = ".$_SESSION['log_id']."
            ORDER BY tranId DESC
            LIMIT 1;";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $cartIdSql = "select cwId from cartwishlist where userId = ".$_SESSION['log_id'];
            $cartIdResult = $conn->query($cartIdSql);
            $cartIdRow = $cartIdResult->fetch_assoc();

            $itemsSql = "select itemId,cartQuantity from itemCartWishlist where cwId = ".$cartIdRow['cwId'];
            $itemsRwesult = $conn->query($itemsSql);
            if($itemsRwesult->num_rows >0){
                while($itemsRow = $itemsRwesult->fetch_assoc()){

                    $itemPriceSql = "select sellingPrice from item where itemId = ".$itemsRow['itemId'];
                    $itemPriceResult = $conn->query($itemPriceSql);
                    $itemPrice = $itemPriceResult->fetch_assoc();

                    $transactionItemSql = "insert into transactionitem values(".$row['tranId'].",".$itemsRow['itemId'].",".$itemsRow['cartQuantity'].",".$itemPrice['sellingPrice'].")";
                    $conn->query($transactionItemSql);
                }
                $deleteCartSql = "delete from itemcartwishlist where cwId=".$cartIdRow['cwId'];
                if(!($conn->query($deleteCartSql))){
                    echo 'Cart deletion unsuccessful';
                }
            }

            echo '<div><p>Order was placed successfully.</p><a href="../index.php">Go Back to the Home</a></div>';

        }
    }


?>